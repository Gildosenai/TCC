function abrirCadastroModal() {
  const modalcadastro = document.getElementById('modalcadastro');
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