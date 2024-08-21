function desconectar() {
  window.location.href = "index.html"; // Redireciona para a página de login
}



function abrirCadastroModal() {
  const modalcadastro = document.getElementById('modalcadastro');
  limparResultados();
  modalcadastro.style.display = 'block'; 
}


const menucadastro = document.getElementById('menucadastro');
menucadastro.addEventListener('click', abrirCadastroModal);


function fecharCadastroModal() {
const modalcadastro = document.getElementById('modalcadastro');
modalcadastro.style.display = 'none';
} 


const closeBtn = document.getElementById('close');
const closeBtn1 = document.getElementById('close1');
const closeBtn2 = document.getElementById('close2');
const closeBtn3 = document.getElementById('close3');
const closeBtn4 = document.getElementById('close4');
closeBtn.addEventListener('click', fecharCadastroModal);
closeBtn1.addEventListener('click', fecharHost);
closeBtn2.addEventListener('click', fecharhostindividual);
closeBtn3.addEventListener('click', fecharnotificacao); 
closeBtn4.addEventListener('click', fecharusuario);



function abrirHost() {
  const modalhost = document.getElementById('modalhost');
  limparResultados();
  modalhost.style.display = 'block'; 
}


const menuhost = document.getElementById('menuhost');
menuhost.addEventListener('click', abrirHost);


function fecharHost() {
const modalhost = document.getElementById('modalhost');
modalhost.style.display = 'none';
} 





function abrirmodalhostindividual() {
  const modalhostindividual = document.getElementById('modalhostindividual');
  limparResultados();
  modalhostindividual.style.display = 'block'; 
}


const menuhostindividual = document.getElementById('menuhostindividual');
menuhostindividual.addEventListener('click', abrirmodalhostindividual);



function fecharhostindividual() {
const modalhostindividual = document.getElementById('modalhostindividual');
modalhostindividual.style.display = 'none';
}





function abrirnotificacao() {
  const modalnotificacao = document.getElementById('modalnotificacao');
  modalnotificacao.style.display = 'block'; 
}


const notificacao = document.getElementById('notificacao');
notificacao.addEventListener('click', abrirnotificacao);


function fecharnotificacao() {
const modalnotificacao = document.getElementById('modalnotificacao');
modalnotificacao.style.display = 'none';
} 



function abrirusuario() {
  const modalusuario = document.getElementById('modalusuario');
  modalusuario.style.display = 'block'; 
}


const usuario = document.getElementById('usuario');
usuario.addEventListener('click', abrirusuario);


function fecharusuario() {
const modalusuario = document.getElementById('modalusuario');
modalusuario.style.display = 'none';// Oculta o modal
} 






document.getElementById('btn-enter').onclick = function() {
var selectedOption = document.querySelector('input[name="cadastro"]:checked');

if (selectedOption) {
  var modalId = 'modal' + selectedOption.value;
  var modal = document.getElementById(modalId);
  var mainModal = document.getElementById('modalcadastro');
  
  if (modal) {
    mainModal.style.display = 'none';
    modal.style.display = 'block';
    
    var closeBtns = modal.getElementsByClassName('close');
    for (var i = 0; i < closeBtns.length; i++) {
      closeBtns[i].onclick = function() {
        modal.style.display = 'none';
        mainModal.style.display = 'block';
      };
    }
  }
}
};

window.onclick = function(event) {
var modals = document.getElementsByClassName('modal');
for (var i = 0; i < modals.length; i++) {
  if (event.target == modals[i]) {
    modals[i].style.display = 'none';
    document.getElementById('modalcadastro').style.display = 'block';
  }
}
};

document.getElementById('close').onclick = function() {
document.getElementById('modalcadastro').style.display = 'none';
};



$(document).ready(function() {
  // Inicializar o Select2 na lista suspensa
  $('#categorias').select2();

  // Requisição AJAX para buscar categorias do arquivo PHP
  $.ajax({
      url: 'lista.php',
      dataType: 'json',
      success: function(data) {
          // Iterar sobre os dados retornados e adicionar opções à lista suspensa
          $.each(data, function(index, item) {
              $('#categorias').append('<option value="' + item.link + '" data-link1="' + item.link1 + '" data-link2="' + item.link2 + '" data-link3="' + item.link3 + '" data-link4="' + item.link4 + '" data-link5="' + item.link5 + '" data-link6="' + item.link6 + '" data-link7="' + item.link7 + '" data-link8="' + item.link8 +'"  >' + item.Tipo + " " + item.IP + '</option>');
          });

          // Atualizar o Select2 para refletir as novas opções adicionadas dinamicamente
          $('#categorias').trigger('change');
      },
      error: function(jqXHR, textStatus, errorThrown) {
          console.error('Erro ao carregar categorias: ' + textStatus, errorThrown);
      }
  });

  // Adicionar função para exibir os iframes
  $('#categorias').on('change', function() {
      var selectedOption = $(this).find('option:selected');
      var link = selectedOption.val();
      var link1 = selectedOption.data('link1');
      var link2 = selectedOption.data('link2');
      var link3 = selectedOption.data('link3');
      var link4 = selectedOption.data('link4');
      var link5 = selectedOption.data('link5');
      var link6 = selectedOption.data('link6');
      var link7 = selectedOption.data('link7');
      var link8 = selectedOption.data('link8');

      $('#iframe-display').attr('src', link ? link : '');
      $('#iframe-display1').attr('src', link1 ? link1 : '');
      $('#iframe-display2').attr('src', link2 ? link2 : '');
      $('#iframe-display3').attr('src', link3 ? link3 : '');
      $('#iframe-display4').attr('src', link4 ? link4 : '');
      $('#iframe-display5').attr('src', link5 ? link5 : '');
      $('#iframe-display6').attr('src', link6 ? link6 : '');
      $('#iframe-display7').attr('src', link7 ? link7 : '');
      $('#iframe-display8').attr('src', link8 ? link8 : '');
  });

});

// Script para monitoramento de alertas Zabbix

var modal = document.getElementById("modalnotificacao");
var btn = document.getElementById("notificacao");
var span = document.getElementsByClassName("close")[0];
var notificationBubble = document.getElementById("notificationBubble");

// Quando o usuário clicar no botão, abre o modal
btn.onclick = function() {
    modal.style.display = "block";
    notificationBubble.style.display = "none"; // Esconde a bolinha ao abrir o modal
}

// Quando o usuário clicar no "x", fecha o modal
span.onclick = function() {
    modal.style.display = "none";
}



let lastAlertTime = null;

function fetchAlerts() {
    fetch('fetch_alerts.php')
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                const latestAlert = data[0]; // Pega o alerta mais recente (o primeiro da lista)

                // Verifica se o alerta é mais recente que o último alerta exibido
                if (!lastAlertTime || new Date(latestAlert.time) > new Date(lastAlertTime)) {
                    lastAlertTime = latestAlert.time; // Atualiza o último alerta exibido

                    const alertsDiv = document.getElementById('alerts');
                    alertsDiv.innerHTML = '';

                    data.forEach(alert => {
                        const alertDiv = document.createElement('div');
                        alertDiv.className = 'alert';

                        // SVG de alerta
                        const alertIcon = `
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#f44336" viewBox="0 0 24 24" width="24px" height="24px">
                                <path d="M0 0h24v24H0z" fill="none"/>
                                <path d="M1 21h22L12 2 1 21zM12 16h-1v-4h2v4h-1zm0 2h-1v-2h2v2h-1z"/>
                            </svg>
                        `;

                        // Personalizando a mensagem com o SVG e o nome do host
                        const customMessage = `
                            ${alertIcon} 
                            <strong>${alert.time}</strong> - ${alert.host}: ${alert.message}
                        `;

                        alertDiv.innerHTML = customMessage;
                        alertsDiv.appendChild(alertDiv);
                    });

                    // Exibe a bolinha de notificação quando um novo alerta é detectado
                    notificationBubble.style.display = "inline";
                }
            }
        })
        .catch(error => {
            console.error('Erro ao buscar alertas:', error);
        });
}

setInterval(fetchAlerts, 5000);  // Verifica a cada 5 segundos se há novos alertas
fetchAlerts();  // Carrega os alertas ao carregar a página

function buscar(event) {
  event.preventDefault(); // Previne o envio do formulário padrão
  const query = document.getElementById('query').value;

  fetch('buscador.php?query=' + encodeURIComponent(query))
      .then(response => {
          if (!response.ok) {
              throw new Error('Network response was not ok ' + response.statusText);
          }
          return response.json();
      })
      .then(data => {
          const resultadosDiv = document.getElementById('resultados');
          resultadosDiv.innerHTML = '';

          if (data.resultados.length > 0) {
              data.resultados.forEach(equipamento => {
                  const equipamentoDiv = document.createElement('div');
                  equipamentoDiv.innerHTML = `                 
                      <h3>Cliente CPF: ${equipamento.Cliente_CPF}</h3>
                      <h3>Funcionário Matrícula: ${equipamento.Funcionario_Matricula}</h3>
                      <p>IP: ${equipamento.IP}</p>
                      <p>Mac: ${equipamento.Mac}</p>
                      <p>Tipo: ${equipamento.Tipo}</p>
                      <p>Descrição: ${equipamento.Descrição}</p>
                      <hr>
                  `;
                  resultadosDiv.appendChild(equipamentoDiv);
              });
          } else {
              resultadosDiv.innerHTML = `<p>Nenhum resultado encontrado para "${data.query}"</p>`;
          }
      })
      .catch(error => {
          const resultadosDiv = document.getElementById('resultados');
          resultadosDiv.innerHTML = `<p>Erro na busca: ${error.message}</p>`;
      });
}

function limparResultados() {
  document.getElementById('query').value = ''; // Limpa o campo de busca
  document.getElementById('resultados').innerHTML = ''; // Limpa os resultados
}


$(document).ready(function() {
  // Requisição AJAX para buscar categorias do arquivo PHP
  $.ajax({
    url: 'host.php',
    dataType: 'json',
    success: function(data) {
      
      $('#iframe-1').attr('src', data[0].link1 || '');
      $('#iframe-2').attr('src', data[0].link2 || '');
      $('#iframe-3').attr('src', data[0].link3 || '');
      $('#iframe-4').attr('src', data[0].link4 || '');
      $('#iframe-5').attr('src', data[0].link5 || '');
      $('#iframe-6').attr('src', data[0].link6 || '');
      $('#iframe-7').attr('src', data[0].link7 || '');
      $('#iframe-8').attr('src', data[0].link8 || '');
      $('#iframe-9').attr('src', data[0].link9 || '');
      $('#iframe-10').attr('src', data[0].link10 || '');
      $('#iframe-11').attr('src', data[0].link11 || '');
      $('#iframe-12').attr('src', data[0].link12 || '');
      $('#iframe-13').attr('src', data[0].link13 || '');
      $('#iframe-14').attr('src', data[0].link14 || '');
      $('#iframe-15').attr('src', data[0].link15 || '');
      $('#iframe-16').attr('src', data[0].link16 || '');
      $('#iframe-17').attr('src', data[0].link17 || '');
      $('#iframe-18').attr('src', data[0].link18 || '');
      $('#iframe-19').attr('src', data[0].link19 || '');
      $('#iframe-20').attr('src', data[0].link20 || '');
      $('#iframe-21').attr('src', data[0].link21 || '');
      $('#iframe-22').attr('src', data[0].link22 || '');
      $('#iframe-23').attr('src', data[0].link23 || '');
      $('#iframe-24').attr('src', data[0].link24 || '');
      $('#iframe-25').attr('src', data[0].link25 || '');
      $('#iframe-26').attr('src', data[0].link26 || '');
      $('#iframe-27').attr('src', data[0].link27 || '');
      $('#iframe-28').attr('src', data[0].link28 || '');
      $('#iframe-29').attr('src', data[0].link29 || '');
      $('#iframe-30').attr('src', data[0].link30 || '');
      $('#iframe-31').attr('src', data[0].link31 || '');      
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.error('Erro ao carregar categorias: ' + textStatus, errorThrown);
    }
  });

  // Adicionar eventos de clique para redirecionar a diferentes URLs
  $('.iframe-overlay').on('click', function() {
    var url = $(this).data('url');
    console.log('URL:', url);
    
    // Executar funções antes de redirecionar
    fecharHost();
    abrirmodalhostindividual();
    buscarEquipamentos(url);
    
    function buscarEquipamentos(ip) {
      // Requisição AJAX para buscar equipamentos com base no IP
      $.ajax({
          url: 'lista1.php',
          method: 'GET',
          data: { ip: ip },
          dataType: 'json',
          success: function(data) {
            console.log('Dados retornados:', data);
              if (data.length > 0) {
                  $('#iframe-display').attr('src', data[0].link || '');
                  $('#iframe-display1').attr('src', data[0].link1 || '');
      $('#iframe-display2').attr('src', data[0].link2 || '');
      $('#iframe-display3').attr('src', data[0].link3 || '');
      $('#iframe-display4').attr('src', data[0].link4 || '');
      $('#iframe-display5').attr('src', data[0].link5 || '');
      $('#iframe-display6').attr('src', data[0].link6 || '');
      $('#iframe-display7').attr('src', data[0].link7 || '');
      $('#iframe-display8').attr('src', data[0].link8 || '');
                  // Atualize outros iframes conforme necessário
              } else {
                  console.error('Nenhum equipamento encontrado para o IP: ' + ip);
              }
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.error('Erro ao buscar equipamentos: ' + textStatus, errorThrown);
          }
      });
  }
    




    
    
});
});

