<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$zabbix_url = 'http://172.16.0.31/zabbix/api_jsonrpc.php';
$username = 'Admin';
$password = 'zabbix';

// 1. Autenticação na API do Zabbix
$auth_data = [
    'jsonrpc' => '2.0',
    'method' => 'user.login',
    'params' => [
        'user' => $username,
        'password' => $password
    ],
    'id' => 1,
    'auth' => null
];

$options = [
    'http' => [
        'header'  => "Content-Type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($auth_data),
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents($zabbix_url, false, $context);

// Verificação da conexão
if ($result === false) {
    echo json_encode(['error' => 'Failed to connect to the Zabbix server.']);
    exit();
}

$response = json_decode($result, true);

// Verificação se a autenticação foi bem-sucedida
if (isset($response['result'])) {
    $auth_token = $response['result'];

    // 2. Obtendo os alertas ativos com nome do host
    $alert_data = [
        'jsonrpc' => '2.0',
        'method' => 'trigger.get',
        'params' => [
            'output' => ['triggerid', 'description', 'priority', 'lastchange'],
            'selectHosts' => ['host'],  // Adicionando o nome do host
            'filter' => ['value' => 1],
            'sortfield' => 'lastchange',
            'sortorder' => 'DESC'
        ],
        'id' => 2,
        'auth' => $auth_token
    ];

    $options['http']['content'] = json_encode($alert_data);
    $context = stream_context_create($options);
    $result = file_get_contents($zabbix_url, false, $context);

    // Verificação da conexão na segunda chamada
    if ($result === false) {
        echo json_encode(['error' => 'Failed to connect to the Zabbix server while fetching alerts.']);
        exit();
    }

    $response = json_decode($result, true);

    // Verificação de erros na resposta do trigger.get
    if (isset($response['error'])) {
        echo json_encode(['error' => 'Error from Zabbix API: ' . $response['error']['data']]);
        exit();
    }

    // 3. Preparando os dados para o frontend
    $alerts = [];
    if (isset($response['result'])) {
        foreach ($response['result'] as $alert) {
            $host_name = $alert['hosts'][0]['host'];  // Obtendo o nome do primeiro host

            $alerts[] = [
                'time' => date('Y-m-d H:i:s', $alert['lastchange']),
                'message' => $alert['description'],
                'host' => $host_name  // Incluindo o nome do host
            ];
        }
    }

    echo json_encode($alerts);

} else {
    echo json_encode(['error' => 'Authentication failed. Response: ' . json_encode($response)]);
}
?>
