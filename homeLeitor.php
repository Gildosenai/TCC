
<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit();
}

$usuario = $_SESSION['usuario'];

if ($usuario['PermissaoID'] != 3) { // Se não for leitor
  echo '<div class="menu-item" id="menucadastro">CADASTRO</div>';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styleleitor.css" />
    <title>HostHub</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  </head>
  <body>
         <div class="resultado" id="resultados"></div>
    <header>
      <img class="logo" src="logo.png" alt="..." class="img1" />
      <div class="ret1"><h1>HOSTHUB</h1></div>
     
        
          <form class="ret3" onsubmit="buscar(event);">
          <input type="text" id="query" placeholder="O que você deseja monitorar?" required>
          <button class="lupa" type="submit"><svg class="lulu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="#fff">
              <path d="M10 2a8 8 0 105.29 14.71l5 5a1 1 0 001.42-1.42l-5-5A8 8 0 0010 2zm0 2a6 6 0 110 12A6 6 0 0110 4z"/>
              </svg></button>
          </form>
     
       
          
          <div id="notificacao"class="notificacao">
        <span id="notificationBubble" class="notification-bubble"></span>
          <svg class="noti"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            width="100px"
            height="50px"
            zoomAndPan="magnify"
            viewBox="0 0 810 809.999993"
            preserveAspectRatio="xMidYMid meet"
            version="1.0"
          >
            <defs>
              <clipPath id="e6cb8ed969">
                <path
                  d="M 35.960938 73 L 781.460938 73 L 781.460938 643 L 35.960938 643 Z M 35.960938 73 "
                  clip-rule="nonzero"
                />
              </clipPath>
            </defs>
            <g clip-path="url(#e6cb8ed969)">
              <path
                fill="#ffffff"
                d="M 582.8125 462.355469 C 581.988281 461.53125 581.988281 459.882812 581.988281 458.234375 L 581.988281 300.695312 C 581.988281 210.789062 513.527344 137.382812 425.273438 128.308594 L 425.273438 90.367188 C 425.273438 81.292969 417.851562 73.871094 408.777344 73.871094 C 399.703125 73.871094 392.28125 81.292969 392.28125 90.367188 L 392.28125 128.308594 C 304.851562 136.558594 235.566406 210.789062 235.566406 300.695312 L 235.566406 459.058594 C 235.566406 460.707031 234.742188 461.53125 233.917969 462.355469 L 192.675781 503.597656 C 185.253906 511.019531 181.953125 520.09375 181.953125 530.816406 L 181.953125 543.1875 C 181.953125 563.808594 199.273438 581.128906 219.894531 581.128906 L 335.367188 581.128906 C 341.140625 615.773438 371.660156 642.992188 408.777344 642.992188 C 445.894531 642.992188 476.410156 616.597656 482.183594 581.128906 L 597.660156 581.128906 C 618.277344 581.128906 635.601562 563.808594 635.601562 543.1875 L 635.601562 530.816406 C 635.601562 520.917969 631.476562 511.019531 624.878906 503.597656 Z M 408.777344 610 C 390.632812 610 374.960938 597.625 370.011719 581.128906 L 448.367188 581.128906 C 442.59375 597.625 426.921875 610 408.777344 610 Z M 602.609375 543.1875 C 602.609375 545.664062 600.132812 548.136719 597.660156 548.136719 L 219.894531 548.136719 C 217.421875 548.136719 214.945312 545.664062 214.945312 543.1875 L 214.945312 530.816406 C 214.945312 529.167969 215.769531 528.34375 216.597656 527.515625 L 257.835938 486.277344 C 265.261719 478.851562 268.558594 469.78125 268.558594 459.058594 L 268.558594 300.695312 C 268.558594 223.988281 331.246094 160.476562 408.777344 160.476562 C 486.308594 160.476562 548.996094 223.160156 548.996094 300.695312 L 548.996094 459.058594 C 548.996094 468.957031 553.117188 478.851562 559.71875 486.277344 L 600.957031 527.515625 C 601.78125 528.34375 602.609375 529.992188 602.609375 530.816406 Z M 182.777344 445.035156 C 179.480469 448.335938 175.355469 449.984375 171.230469 449.984375 C 167.109375 449.984375 162.984375 448.335938 159.683594 445.035156 C 133.289062 418.640625 118.445312 383.175781 118.445312 346.058594 C 118.445312 308.941406 133.289062 273.476562 159.683594 247.082031 C 166.28125 240.484375 176.179688 240.484375 182.777344 247.082031 C 189.378906 253.679688 189.378906 263.578125 182.777344 270.175781 C 162.160156 290.796875 151.4375 317.191406 151.4375 346.058594 C 151.4375 374.925781 162.984375 401.320312 182.777344 421.941406 C 189.378906 428.539062 189.378906 438.4375 182.777344 445.035156 Z M 124.21875 480.503906 C 130.816406 487.101562 130.816406 497 124.21875 503.597656 C 120.917969 506.898438 116.792969 508.546875 112.671875 508.546875 C 108.546875 508.546875 104.421875 506.898438 101.121094 503.597656 C 59.058594 461.53125 35.960938 405.445312 35.960938 346.058594 C 35.960938 286.671875 59.058594 230.585938 101.121094 188.519531 C 107.722656 181.921875 117.617188 181.921875 124.21875 188.519531 C 130.816406 195.117188 130.816406 205.015625 124.21875 211.613281 C 88.75 247.082031 68.953125 294.921875 68.953125 346.058594 C 68.953125 397.195312 88.75 444.210938 124.21875 480.503906 Z M 657.871094 445.035156 C 654.570312 448.335938 650.445312 449.984375 646.324219 449.984375 C 642.199219 449.984375 638.074219 448.335938 634.773438 445.035156 C 628.175781 438.4375 628.175781 428.539062 634.773438 421.941406 C 676.839844 379.875 676.839844 312.242188 634.773438 270.175781 C 628.175781 263.578125 628.175781 253.679688 634.773438 247.082031 C 641.375 240.484375 651.269531 240.484375 657.871094 247.082031 C 712.308594 301.519531 712.308594 390.597656 657.871094 445.035156 Z M 781.589844 346.058594 C 781.589844 405.445312 758.496094 461.53125 716.429688 503.597656 C 713.132812 506.898438 709.007812 508.546875 704.882812 508.546875 C 700.761719 508.546875 696.636719 506.898438 693.335938 503.597656 C 686.738281 497 686.738281 487.101562 693.335938 480.503906 C 728.804688 445.035156 748.597656 397.195312 748.597656 346.058594 C 748.597656 294.921875 728.804688 247.90625 693.335938 211.613281 C 686.738281 205.015625 686.738281 195.117188 693.335938 188.519531 C 699.933594 181.921875 709.832031 181.921875 716.429688 188.519531 C 758.496094 230.585938 781.589844 286.671875 781.589844 346.058594 Z M 781.589844 346.058594 "
                fill-opacity="1"
                fill-rule="nonzero"
              />
            </g>
          </svg>
        </div>
      

      
        <div class="usuario" id="usuario">
          <svg class="usu"
          
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          
          zoomAndPan="magnify"
          viewBox="0 0 810 809.999993"
      width="100px"
            height="50px"
          preserveAspectRatio="xMidYMid meet"
          version="1.0"
        >
          <defs>
            <clipPath id="386b7d3035">
              <path
                d="M 67.710938 67.710938 L 741.960938 67.710938 L 741.960938 741.960938 L 67.710938 741.960938 Z M 67.710938 67.710938 "
                clip-rule="nonzero"
              />
            </clipPath>
          </defs>
          <g clip-path="url(#386b7d3035)">
            <path
              fill="#ffffff"
              d="M 643.492188 166.5 C 579.78125 102.796875 495.085938 67.710938 404.996094 67.710938 C 314.902344 67.710938 230.207031 102.796875 166.5 166.5 C 102.796875 230.207031 67.710938 314.902344 67.710938 404.996094 C 67.710938 495.085938 102.796875 579.78125 166.5 643.492188 C 230.207031 707.191406 314.902344 742.277344 404.996094 742.277344 C 495.085938 742.277344 579.78125 707.191406 643.492188 643.492188 C 707.199219 579.789062 742.277344 495.085938 742.277344 404.996094 C 742.277344 314.902344 707.191406 230.207031 643.492188 166.5 Z M 606.75 627.484375 L 606.75 620.871094 C 606.75 562.269531 559.238281 514.765625 500.632812 514.765625 L 316.710938 514.765625 C 258.105469 514.765625 210.59375 562.277344 210.59375 620.871094 L 210.59375 633.929688 C 145.738281 578.765625 104.503906 496.609375 104.503906 404.996094 C 104.503906 239.300781 239.300781 104.503906 404.996094 104.503906 C 570.6875 104.503906 705.484375 239.300781 705.484375 404.996094 C 705.484375 493.105469 667.359375 572.480469 606.75 627.484375 Z M 606.75 627.484375 "
              fill-opacity="1"
              fill-rule="nonzero"
            />
          </g>
          <path
            fill="#ffffff"
            d="M 527.023438 363.90625 C 527.023438 365.910156 526.976562 367.917969 526.878906 369.921875 C 526.777344 371.925781 526.632812 373.929688 526.433594 375.925781 C 526.238281 377.921875 525.992188 379.914062 525.699219 381.902344 C 525.402344 383.886719 525.058594 385.863281 524.667969 387.832031 C 524.277344 389.800781 523.835938 391.757812 523.347656 393.707031 C 522.863281 395.652344 522.328125 397.585938 521.742188 399.507812 C 521.160156 401.429688 520.53125 403.332031 519.855469 405.222656 C 519.179688 407.113281 518.457031 408.984375 517.6875 410.839844 C 516.921875 412.695312 516.109375 414.527344 515.25 416.34375 C 514.390625 418.15625 513.488281 419.949219 512.542969 421.71875 C 511.597656 423.488281 510.609375 425.234375 509.574219 426.957031 C 508.542969 428.679688 507.46875 430.375 506.355469 432.042969 C 505.238281 433.710938 504.085938 435.351562 502.890625 436.964844 C 501.695312 438.578125 500.457031 440.160156 499.183594 441.710938 C 497.914062 443.261719 496.601562 444.78125 495.253906 446.269531 C 493.90625 447.757812 492.523438 449.210938 491.101562 450.628906 C 489.683594 452.046875 488.230469 453.429688 486.742188 454.78125 C 485.253906 456.128906 483.734375 457.4375 482.183594 458.710938 C 480.632812 459.984375 479.050781 461.21875 477.4375 462.414062 C 475.828125 463.609375 474.1875 464.765625 472.515625 465.882812 C 470.847656 466.996094 469.152344 468.070312 467.429688 469.101562 C 465.710938 470.132812 463.964844 471.121094 462.195312 472.070312 C 460.421875 473.015625 458.632812 473.917969 456.816406 474.777344 C 455.003906 475.632812 453.167969 476.445312 451.3125 477.214844 C 449.457031 477.984375 447.585938 478.707031 445.695312 479.382812 C 443.808594 480.058594 441.902344 480.6875 439.980469 481.269531 C 438.058594 481.851562 436.125 482.386719 434.179688 482.875 C 432.230469 483.363281 430.273438 483.804688 428.304688 484.195312 C 426.335938 484.585938 424.359375 484.929688 422.375 485.222656 C 420.390625 485.519531 418.398438 485.761719 416.398438 485.960938 C 414.402344 486.15625 412.402344 486.304688 410.398438 486.402344 C 408.390625 486.5 406.386719 486.550781 404.378906 486.550781 C 402.371094 486.550781 400.367188 486.5 398.359375 486.402344 C 396.355469 486.304688 394.355469 486.15625 392.355469 485.960938 C 390.359375 485.765625 388.367188 485.519531 386.382812 485.222656 C 384.398438 484.929688 382.421875 484.585938 380.453125 484.195312 C 378.484375 483.804688 376.523438 483.363281 374.578125 482.875 C 372.632812 482.386719 370.695312 481.851562 368.777344 481.269531 C 366.855469 480.6875 364.949219 480.058594 363.058594 479.382812 C 361.171875 478.707031 359.296875 477.984375 357.445312 477.214844 C 355.589844 476.445312 353.753906 475.632812 351.941406 474.777344 C 350.125 473.917969 348.332031 473.015625 346.5625 472.070312 C 344.792969 471.121094 343.046875 470.132812 341.324219 469.101562 C 339.605469 468.070312 337.910156 466.996094 336.238281 465.882812 C 334.570312 464.765625 332.929688 463.609375 331.320312 462.414062 C 329.707031 461.21875 328.125 459.984375 326.574219 458.710938 C 325.019531 457.4375 323.5 456.128906 322.015625 454.78125 C 320.527344 453.429688 319.074219 452.046875 317.65625 450.628906 C 316.234375 449.210938 314.851562 447.757812 313.503906 446.269531 C 312.15625 444.78125 310.84375 443.261719 309.570312 441.710938 C 308.296875 440.160156 307.0625 438.578125 305.867188 436.964844 C 304.671875 435.351562 303.515625 433.710938 302.402344 432.042969 C 301.285156 430.375 300.214844 428.679688 299.179688 426.957031 C 298.148438 425.234375 297.160156 423.488281 296.214844 421.71875 C 295.269531 419.949219 294.367188 418.15625 293.507812 416.34375 C 292.648438 414.527344 291.835938 412.695312 291.070312 410.839844 C 290.300781 408.984375 289.578125 407.113281 288.902344 405.222656 C 288.226562 403.332031 287.597656 401.429688 287.015625 399.507812 C 286.429688 397.585938 285.894531 395.652344 285.40625 393.707031 C 284.921875 391.757812 284.480469 389.800781 284.089844 387.832031 C 283.699219 385.863281 283.355469 383.886719 283.058594 381.902344 C 282.765625 379.914062 282.519531 377.921875 282.324219 375.925781 C 282.125 373.929688 281.980469 371.925781 281.878906 369.921875 C 281.78125 367.917969 281.734375 365.910156 281.734375 363.90625 C 281.734375 361.898438 281.78125 359.890625 281.878906 357.886719 C 281.980469 355.882812 282.125 353.882812 282.324219 351.882812 C 282.519531 349.886719 282.765625 347.894531 283.058594 345.910156 C 283.355469 343.921875 283.699219 341.945312 284.089844 339.976562 C 284.480469 338.007812 284.921875 336.050781 285.40625 334.105469 C 285.894531 332.15625 286.429688 330.222656 287.015625 328.300781 C 287.597656 326.382812 288.226562 324.476562 288.902344 322.585938 C 289.578125 320.695312 290.300781 318.824219 291.070312 316.96875 C 291.835938 315.117188 292.648438 313.28125 293.507812 311.464844 C 294.367188 309.652344 295.269531 307.859375 296.214844 306.089844 C 297.160156 304.320312 298.148438 302.574219 299.179688 300.851562 C 300.214844 299.128906 301.285156 297.433594 302.402344 295.765625 C 303.515625 294.097656 304.671875 292.457031 305.867188 290.84375 C 307.0625 289.230469 308.296875 287.652344 309.570312 286.097656 C 310.84375 284.546875 312.15625 283.027344 313.503906 281.539062 C 314.851562 280.054688 316.234375 278.601562 317.65625 277.179688 C 319.074219 275.761719 320.527344 274.378906 322.015625 273.03125 C 323.5 271.683594 325.019531 270.371094 326.574219 269.097656 C 328.125 267.824219 329.707031 266.589844 331.320312 265.394531 C 332.929688 264.199219 334.570312 263.042969 336.238281 261.929688 C 337.910156 260.8125 339.605469 259.738281 341.324219 258.707031 C 343.046875 257.675781 344.792969 256.6875 346.5625 255.742188 C 348.332031 254.792969 350.125 253.890625 351.941406 253.035156 C 353.753906 252.175781 355.589844 251.363281 357.445312 250.59375 C 359.296875 249.828125 361.171875 249.105469 363.058594 248.429688 C 364.949219 247.75 366.855469 247.121094 368.777344 246.539062 C 370.695312 245.957031 372.632812 245.421875 374.578125 244.933594 C 376.523438 244.445312 378.484375 244.007812 380.453125 243.617188 C 382.421875 243.222656 384.398438 242.878906 386.382812 242.585938 C 388.367188 242.292969 390.359375 242.046875 392.355469 241.847656 C 394.355469 241.652344 396.355469 241.503906 398.359375 241.40625 C 400.367188 241.308594 402.371094 241.257812 404.378906 241.257812 C 406.386719 241.257812 408.390625 241.308594 410.398438 241.40625 C 412.402344 241.503906 414.402344 241.652344 416.398438 241.847656 C 418.398438 242.046875 420.390625 242.292969 422.375 242.585938 C 424.359375 242.878906 426.335938 243.222656 428.304688 243.617188 C 430.273438 244.007812 432.230469 244.445312 434.179688 244.933594 C 436.125 245.421875 438.058594 245.957031 439.980469 246.539062 C 441.902344 247.121094 443.808594 247.75 445.695312 248.429688 C 447.585938 249.105469 449.457031 249.828125 451.3125 250.59375 C 453.167969 251.363281 455.003906 252.175781 456.816406 253.035156 C 458.632812 253.890625 460.421875 254.792969 462.195312 255.742188 C 463.964844 256.6875 465.710938 257.675781 467.429688 258.707031 C 469.152344 259.738281 470.847656 260.8125 472.515625 261.929688 C 474.1875 263.042969 475.828125 264.199219 477.4375 265.394531 C 479.050781 266.589844 480.632812 267.824219 482.183594 269.097656 C 483.734375 270.371094 485.253906 271.683594 486.742188 273.03125 C 488.230469 274.378906 489.683594 275.761719 491.101562 277.179688 C 492.523438 278.601562 493.90625 280.054688 495.253906 281.539062 C 496.601562 283.027344 497.914062 284.546875 499.183594 286.097656 C 500.457031 287.652344 501.695312 289.230469 502.890625 290.84375 C 504.085938 292.457031 505.238281 294.097656 506.355469 295.765625 C 507.46875 297.433594 508.542969 299.128906 509.574219 300.851562 C 510.609375 302.574219 511.597656 304.320312 512.542969 306.089844 C 513.488281 307.859375 514.390625 309.652344 515.25 311.464844 C 516.109375 313.28125 516.921875 315.117188 517.6875 316.96875 C 518.457031 318.824219 519.179688 320.695312 519.855469 322.585938 C 520.53125 324.476562 521.160156 326.382812 521.742188 328.300781 C 522.328125 330.222656 522.863281 332.15625 523.347656 334.105469 C 523.835938 336.050781 524.277344 338.007812 524.667969 339.976562 C 525.058594 341.945312 525.402344 343.921875 525.699219 345.910156 C 525.992188 347.894531 526.238281 349.886719 526.433594 351.882812 C 526.632812 353.882812 526.777344 355.882812 526.878906 357.886719 C 526.976562 359.890625 527.023438 361.898438 527.023438 363.90625 Z M 527.023438 363.90625 "
            fill-opacity="1"
            fill-rule="nonzero"
          />
        </svg>
        </div>

        <div id="sair" class="sair" onclick="desconectar()">
        <svg class="sai" xmlns="http://www.w3.org/2000/svg" width="100px" height="50px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power">
            <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
            <line x1="12" y1="2" x2="12" y2="12"></line>
        </svg>
    </div>
      
    </header>

    <div class="sidebar">
    <samp class="sobrepor-cadastro" ></samp>
      <div  class="menu-item" id="menucadastro">
        
      </div>

      <div class="menu-item" id="menuhost">
        <!--link do poup rede host-->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          width="100px"
          zoomAndPan="magnify"
          viewBox="0 0 810 809.999993"
          height="50px"
          preserveAspectRatio="xMidYMid meet"
          version="1.0"
        >
          <defs>
            <clipPath id="08b1f24ede">
              <path
                d="M 7.457031 9.046875 L 405 9.046875 L 405 291 L 7.457031 291 Z M 7.457031 9.046875 "
                clip-rule="nonzero"
              />
            </clipPath>
            <clipPath id="8ebf1537a7">
              <path
                d="M 404 439 L 802.457031 439 L 802.457031 722 L 404 722 Z M 404 439 "
                clip-rule="nonzero"
              />
            </clipPath>
            <clipPath id="631ed5ff58">
              <path
                d="M 537 754 L 670 754 L 670 804.046875 L 537 804.046875 Z M 537 754 "
                clip-rule="nonzero"
              />
            </clipPath>
            <clipPath id="1d15f1f580">
              <path
                d="M 578 688 L 629 688 L 629 804.046875 L 578 804.046875 Z M 578 688 "
                clip-rule="nonzero"
              />
            </clipPath>
          </defs>
          <g clip-path="url(#08b1f24ede)">
            <path
              fill="#ffffff"
              d="M 346.972656 290.59375 L 65.421875 290.59375 C 33.457031 290.59375 7.457031 264.59375 7.457031 232.628906 L 7.457031 67.011719 C 7.457031 35.046875 33.457031 9.046875 65.421875 9.046875 L 346.972656 9.046875 C 378.9375 9.046875 404.9375 35.046875 404.9375 67.011719 L 404.9375 232.628906 C 404.9375 264.59375 378.9375 290.59375 346.972656 290.59375 Z M 65.421875 58.730469 C 60.851562 58.730469 57.140625 62.441406 57.140625 67.011719 L 57.140625 232.628906 C 57.140625 237.199219 60.851562 240.910156 65.421875 240.910156 L 346.972656 240.910156 C 351.542969 240.910156 355.253906 237.199219 355.253906 232.628906 L 355.253906 67.011719 C 355.253906 62.441406 351.542969 58.730469 346.972656 58.730469 Z M 65.421875 58.730469 "
              fill-opacity="1"
              fill-rule="nonzero"
            />
          </g>
          <path
            fill="#ffffff"
            d="M 247.601562 373.402344 L 164.792969 373.402344 C 151.082031 373.402344 139.949219 362.273438 139.949219 348.5625 C 139.949219 334.847656 151.082031 323.71875 164.792969 323.71875 L 247.601562 323.71875 C 261.316406 323.71875 272.445312 334.847656 272.445312 348.5625 C 272.445312 362.273438 261.316406 373.402344 247.601562 373.402344 Z M 247.601562 373.402344 "
            fill-opacity="1"
            fill-rule="nonzero"
          />
          <path
            fill="#ffffff"
            d="M 206.199219 373.402344 C 192.484375 373.402344 181.355469 362.273438 181.355469 348.5625 L 181.355469 282.3125 C 181.355469 268.601562 192.484375 257.472656 206.199219 257.472656 C 219.910156 257.472656 231.039062 268.601562 231.039062 282.3125 L 231.039062 348.5625 C 231.039062 362.273438 219.910156 373.402344 206.199219 373.402344 Z M 206.199219 373.402344 "
            fill-opacity="1"
            fill-rule="nonzero"
          />
          <g clip-path="url(#8ebf1537a7)">
            <path
              fill="#ffffff"
              d="M 744.457031 721.203125 L 462.90625 721.203125 C 430.941406 721.203125 404.9375 695.199219 404.9375 663.234375 L 404.9375 497.617188 C 404.9375 465.652344 430.941406 439.652344 462.90625 439.652344 L 744.457031 439.652344 C 776.417969 439.652344 802.421875 465.652344 802.421875 497.617188 L 802.421875 663.234375 C 802.421875 695.199219 776.417969 721.203125 744.457031 721.203125 Z M 462.90625 489.335938 C 458.335938 489.335938 454.625 493.046875 454.625 497.617188 L 454.625 663.234375 C 454.625 667.804688 458.335938 671.515625 462.90625 671.515625 L 744.457031 671.515625 C 749.027344 671.515625 752.734375 667.804688 752.734375 663.234375 L 752.734375 497.617188 C 752.734375 493.046875 749.027344 489.335938 744.457031 489.335938 Z M 462.90625 489.335938 "
              fill-opacity="1"
              fill-rule="nonzero"
            />
          </g>
          <g clip-path="url(#631ed5ff58)">
            <path
              fill="#ffffff"
              d="M 645.085938 804.011719 L 562.277344 804.011719 C 548.5625 804.011719 537.433594 792.878906 537.433594 779.167969 C 537.433594 765.453125 548.5625 754.324219 562.277344 754.324219 L 645.085938 754.324219 C 658.796875 754.324219 669.925781 765.453125 669.925781 779.167969 C 669.925781 792.878906 658.796875 804.011719 645.085938 804.011719 Z M 645.085938 804.011719 "
              fill-opacity="1"
              fill-rule="nonzero"
            />
          </g>
          <g clip-path="url(#1d15f1f580)">
            <path
              fill="#ffffff"
              d="M 603.679688 804.011719 C 589.96875 804.011719 578.835938 792.878906 578.835938 779.167969 L 578.835938 712.921875 C 578.835938 699.207031 589.96875 688.078125 603.679688 688.078125 C 617.394531 688.078125 628.523438 699.207031 628.523438 712.921875 L 628.523438 779.167969 C 628.523438 792.878906 617.394531 804.011719 603.679688 804.011719 Z M 603.679688 804.011719 "
              fill-opacity="1"
              fill-rule="nonzero"
            />
          </g>
          <path
            fill="#ffffff"
            d="M 529.152344 191.226562 L 496.027344 191.226562 C 482.28125 191.226562 471.1875 180.09375 471.1875 166.382812 C 471.1875 152.667969 482.28125 141.539062 496.027344 141.539062 L 529.152344 141.539062 C 542.867188 141.539062 553.996094 152.667969 553.996094 166.382812 C 553.996094 180.09375 542.867188 191.226562 529.152344 191.226562 Z M 529.152344 191.226562 "
            fill-opacity="1"
            fill-rule="nonzero"
          />
          <path
            fill="#ffffff"
            d="M 644.785156 251.609375 C 632.035156 251.609375 621.203125 241.871094 620.078125 228.917969 C 618.984375 216.433594 612.359375 205.234375 601.859375 198.179688 C 590.496094 190.5625 587.449219 175.125 595.101562 163.730469 C 602.71875 152.304688 618.222656 149.289062 629.582031 156.941406 C 652.605469 172.378906 667.179688 197.019531 669.597656 224.582031 C 670.789062 238.261719 660.6875 250.285156 647.003906 251.507812 C 646.277344 251.574219 645.515625 251.609375 644.785156 251.609375 Z M 644.785156 251.609375 "
            fill-opacity="1"
            fill-rule="nonzero"
          />
          <path
            fill="#ffffff"
            d="M 645.085938 373.402344 C 631.371094 373.402344 620.242188 362.273438 620.242188 348.5625 L 620.242188 315.4375 C 620.242188 301.726562 631.371094 290.59375 645.085938 290.59375 C 658.796875 290.59375 669.925781 301.726562 669.925781 315.4375 L 669.925781 348.5625 C 669.925781 362.273438 658.796875 373.402344 645.085938 373.402344 Z M 645.085938 373.402344 "
            fill-opacity="1"
            fill-rule="nonzero"
          />
          <path
            fill="#ffffff"
            d="M 313.847656 671.515625 L 280.726562 671.515625 C 267.011719 671.515625 255.882812 660.386719 255.882812 646.671875 C 255.882812 632.960938 267.011719 621.832031 280.726562 621.832031 L 313.847656 621.832031 C 327.5625 621.832031 338.691406 632.960938 338.691406 646.671875 C 338.691406 660.386719 327.59375 671.515625 313.847656 671.515625 Z M 313.847656 671.515625 "
            fill-opacity="1"
            fill-rule="nonzero"
          />
          <path
            fill="#ffffff"
            d="M 194.140625 660.320312 C 189.371094 660.320312 184.566406 658.960938 180.328125 656.113281 C 157.308594 640.679688 142.734375 616.035156 140.316406 588.476562 C 139.121094 574.796875 149.226562 562.738281 162.871094 561.546875 C 176.417969 560.15625 188.574219 570.457031 189.800781 584.136719 C 190.894531 596.625 197.519531 607.820312 208.019531 614.875 C 219.414062 622.527344 222.460938 637.960938 214.808594 649.355469 C 210.007812 656.445312 202.125 660.320312 194.140625 660.320312 Z M 194.140625 660.320312 "
            fill-opacity="1"
            fill-rule="nonzero"
          />
          <path
            fill="#ffffff"
            d="M 164.792969 522.460938 C 151.082031 522.460938 139.949219 511.332031 139.949219 497.617188 L 139.949219 464.492188 C 139.949219 450.78125 151.082031 439.652344 164.792969 439.652344 C 178.507812 439.652344 189.636719 450.78125 189.636719 464.492188 L 189.636719 497.617188 C 189.636719 511.332031 178.507812 522.460938 164.792969 522.460938 Z M 164.792969 522.460938 "
            fill-opacity="1"
            fill-rule="nonzero"
          />
        </svg>
        <span> REDE DE HOST</span>
      </div>

      <div class="menu-item" id="menuhostindividual">
        
          <!--link do poup host individual-->
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="#FFF"
            width="100px"
            height="50px"
          >
            <path d="M0 0h24v24H0z" fill="none" />
            <path
              d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7v2H8v2h8v-2h-2v-2h7c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"
            />
          </svg>
          <span>HOST INDIVIDUAL</span>
        
      </div>
    </div>

    <div id="modalcadastro" class="modalcadastro">
      <div class="modal-content-cadastro">
        <span id="close" class="close">&times;</span>
        <h2 class="titulocadastro">O QUE/QUEM VOCÊ DESEJA CADASTRAR?</h2>
        <hr>
        <div class="radio-group">
          <input type="radio" id="cliente" name="cadastro" value="cliente" class="kkk">
          <label for="cliente" class="op"><h2>CLIENTE </h2></label>
        </div>
        <div class="radio-group">
          <input type="radio" id="funcionario" name="cadastro" value="funcionario" >
          <label for="funcionario" class="op"><h2>FUNCIONÁRIO</h2></label>
        </div>
        <div class="radio-group">
          <input type="radio" id="equipamento" name="cadastro" value="equipamento" class="kkk">
          <label for="equipamento" class="op"><h2>EQUIPAMENTO</h2></label>
        </div>
        <div class="button-container">
          <button id="btn-enter" class="btn-enter"><h3>ENTER</h3></button>
        </div>
      </div>
    </div>
    

    <div id="modalcliente" class="modal">
      <div class="modal-content-cad-cliente">
        <span class="close">&times;</span>

        <h2>Cadastro de Cliente</h2>
        
        <form action="cadastroCliente.php" method="post">
          
            <input type="text" class="cliente-nome" id="Nome" name="Nome" placeholder="Nome Completo" required>
            
            <div class="form-group1">
              <input type="text" class="cliente-cpf" id="CPF" name="CPF" placeholder="CPF" required>
              <input type="tel" class="cliente-tel" id="Telefone" name="Telefone" placeholder="Telefone (   )  __-_" required>
            </div>
          
          
          
              <input type="email" class="cliente-email" id="Email" name="Email" placeholder="Email" required>
          
          <div class="form-group3">
              
              <input type="text" class="cliente-rua" id="Rua" name="Rua" placeholder="Rua/Avenida" required>
              <input type="text" class="cliente-num" id="Numero" name="Numero" placeholder="Nº" required>
              <input type="text" class="cliente-bairro" id="Bairro" name="Bairro" placeholder="Bairro" required>
          </div>

          <div class="form-group4">
              <input type="text" class="cliente-complemento" id="Complemento" name="Complemento" placeholder="Complemento">
              <input type="date" class="cliente-data" id="DataDeNascimento" name="DataDeNascimento" required>
              <input type="password" id="senha" name="senha" required><br><br>
            </div>
          <button type="submit">Cadastrar</button>
      </form>





      </div>
    </div>
    
    <div id="modalfuncionario" class="modal">
      <div class="modal-content-cad-funcionario">
        <span class="close">&times;</span>

        <h2 class="tit-func">Cadastro de Funcionário</h2>
        <form action="cadastroFuncionario.php" method="post">
          
            <input type="text" class="func-nome" id="Nome" name="Nome" placeholder="Nome Completo" required>
            
            <div class="form-group-func1">
              <input type="number" class="func-matricula" id="Matricula" name="Matricula" placeholder="Matricula do Funcionário" required>
              <input type="text" class="func-cargo" id="cargo" name="cargo" placeholder="Cargo/Setor" required>
            </div>
          

          
          <div class="form-group-func2">
            <input type="email" class="func-email" id="EmailCorporativo" name="EmailCorporativo" placeholder="Email Corporativo" required>
            <input type="date" class="func-data" id="DataDeNascimento" name="DataDeNascimento" required> 
          </div>

          <input type="text" class="func-permissoes" id="permissoes" name="permissoes" placeholder="Permissões deste Funcionário" >
          <input type="password" id="senha" name="senha" required><br><br>
          <button type="submit">CADASTRAR</button>
      </form>

      </div>
    </div>
     
  
    
    <div id="modalequipamento" class="modal">
      <div class="modal-content-cad-equipamento">
        <span class="close">&times;</span>
        <h2>Cadastro de Equipamento</h2>
     

        <form action="CadastroEquip.php" method="post">
          
            <input type="text" class="equip-tipo" id="Tipo" name="Tipo" placeholder="Tipo do Equipamento" required>
            
            <div class="form-group-equip1">
              <input type="text" class="equip-mac" id="Mac" name="Mac" placeholder="MAC" required>
              <input type="text" class="equip-ip" id="IP" name="IP"" placeholder="IP" required>
            </div>
          

          
          <div class="form-group-equip2" id="equip">

            <input type="radio" id="cliente" name="tipo_usuario" value="cliente" required>
            <input type="text" id="Cliente_CPF" name="Cliente_CPF" class="cpf-equip" placeholder="CPF do Cliente">
        
            <input type="radio" id="funcionario" name="tipo_usuario" value="funcionario" required>
            <input type="text" id="Funcionario_Matricula" name="Funcionario_Matricula" class="mat-func" placeholder="Matricula do Funcionário"><br>

          </div>

          
          <input type="text" class="equip-desc" id="Descrição" name="Descrição" placeholder="Descricação do Equipamento" required>
          <button type="submit" >CADASTRAR</button>
      </form>

      </div>
    </div>
    

    <div id="modalhost" class="modalhost">
      <div class="modal-content-redehost">
        <span id="close1" class="close">&times;</span>
        <h1 class="titulocadastro">HOST CADASTRADOS</h1>  

        <div class="pri">
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.100"></div>
  <iframe id="iframe-1"  width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.110"></div>
  <iframe id="iframe-2"  width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.120"></div>
  <iframe id="iframe-3" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.130"></div>
  <iframe id="iframe-4"  width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.140"></div>
  <iframe id="iframe-5" width=70% heigth=10% frameborder="0"></iframe>
</div>
</div>

<div class="seg">
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.150"></div>
  <iframe id="iframe-6" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.160"></div>
  <iframe id="iframe-7" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.14"></div>
  <iframe id="iframe-8" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.21"></div>
  <iframe id="iframe-9" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.35"></div>
  <iframe id="iframe-10" width=70% heigth=10% frameborder="0"></iframe>
</div>
</div>

<div class="ter">
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.41"></div>
  <iframe id="iframe-11" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.42"></div>
  <iframe id="iframe-12" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.43"></div>
  <iframe id="iframe-13" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.44"></div>
  <iframe id="iframe-14" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.45"></div>
  <iframe id="iframe-15" width=70% heigth=10% frameborder="0"></iframe>
</div>
</div>

<div class="qua">
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.46"></div>
  <iframe id="iframe-16" width=70% heigth=10% frameborder="0"></iframe>
</div>

<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.47"></div>
  <iframe id="iframe-17" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.48"></div>
  <iframe id="iframe-18" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.49"></div>
  <iframe id="iframe-19" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.50"></div>
  <iframe id="iframe-20" width=70% heigth=10% frameborder="0"></iframe>
</div>
</div>

<div class="quin">
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.51"></div>
  <iframe id="iframe-21" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.52"></div>
  <iframe id="iframe-22" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.53"></div>
  <iframe id="iframe-23" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.54"></div>
  <iframe id="iframe-24" width=70% heigth=10% frameborder="0"></iframe>
</div>

<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.53"></div>
  <iframe id="iframe-25" width=70% heigth=10% frameborder="0"></iframe>
</div>
</div>

<div class="sex">
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.56"></div>
  <iframe id="iframe-26" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.53"></div>
  <iframe id="iframe-27" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.58"></div>
  <iframe id="iframe-28" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.59"></div>
  <iframe id="iframe-29" width=70% heigth=10% frameborder="0"></iframe>
</div>
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.60"></div>
  <iframe id="iframe-30" width=70% heigth=10% frameborder="0"></iframe>
</div>
</div>

<div class="sab">
<div id="iframe-container" style="margin-top: 20px;">
  <div class="iframe-overlay" data-url="172.16.0.61"></div>
  <iframe id="iframe-31" width=70% heigth=10% frameborder="0"></iframe>
</div>
</div>


        
  
        
        
      </div>
    </div>

    <div id="modalhostindividual" class="modalhostindividual">
      <div class="modal-content-individual">
        <span id="close2" class="close">&times;</span>

        <h2 class="titulocadastro">HOST INDIVIDUAL</h2>
        
        <select id="categorias" style="width: 300px;">
            <option value="">Selecione um equipamento</option>
        </select>
    
        <!-- Elemento onde o iframe será exibido -->
        <div class="pri1">
        <div id="iframe-container" style="margin-top: 20px;">
          <iframe id="iframe-display" width="225%" height="200%" frameborder="0"></iframe>
        </div>
        <div id="iframe-container" style="margin-top: 20px;">
          <iframe id="iframe-display1" class="memoria" width="225%" height="200%" frameborder="0"></iframe>
        </div>
        </div>

        <div class="pri2">
        <div id="iframe-container" style="margin-top: 20px;">
          <iframe id="iframe-display2" width="225%" height="200%" frameborder="0"></iframe>
        </div>
        <div id="iframe-container" style="margin-top: 20px;">
          <iframe id="iframe-display3" class="eth" width="225%" height="200%" frameborder="0"></iframe>
        </div>
        </div>

        <div class="pri3">
        <div id="iframe-container" style="margin-top: 20px;">
          <iframe id="iframe-display4" width="225%" height="200%" frameborder="0"></iframe>
        </div>
        <div id="iframe-container" style="margin-top: 20px;">
          <iframe id="iframe-display5" class="eth1" width="225%" height="200%" frameborder="0"></iframe>
        </div>
        </div>

        <div class="pri4">
        <div id="iframe-container" style="margin-top: 20px;">
          <iframe id="iframe-display6" width="225%" height="200%" frameborder="0"></iframe>
        </div>
        <div id="iframe-container" style="margin-top: 20px;">
          <iframe id="iframe-display7" class="eth2" width="225%" height="200%" frameborder="0"></iframe>
        </div>
        </div>
        <div class="pri6">
        <div id="iframe-container" style="margin-top: 20px;">
          <iframe id="iframe-display8" width="225%" height="200%" frameborder="0"></iframe>
        </div>
        </div>
        <!-- Incluir jQuery (necessário para o Select2) e Select2 JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
      </div>
    </div>


    <div id="modalnotificacao" class="modalnotificacao">
    
      <div class="modal-content-notificacao">
      
        <span id="close3" class="close-seta">&larr;</span>

        <h2 class="titulocadastro">NOTIFICAÇÃO</h2>
        <div id="alerts">Carregando alertas...</div> 
      </div>
    </div>



    <div id="modalusuario" class="modalusuario">
      <div class="modal-content-usuario">
        <span id="close4" class="close-seta">&larr;</span>
        
        <h2 class="titulocadastro">USUÁRIO</h2>
    <div class="container123">
      <h2>Bem-vindo, <?php echo htmlspecialchars($usuario['Nome']); ?>!</h2>
      <p><strong>Matrícula:</strong> <?php echo htmlspecialchars($usuario['Matricula']); ?></p>
      <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($usuario['DataDeNascimento']); ?></p>
      <p><strong>Email Corporativo:</strong> <?php echo htmlspecialchars($usuario['EmailCorporativo']); ?></p>
      <p><strong>Permissão:</strong> <?php echo "Leitor" ?></p>

      </div>

      </div>
    </div>
      
    <footer></footer>
    <script src="script.js"></script>
  </body>
</html>