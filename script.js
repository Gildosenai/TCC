// Função para abrir o modal de cadastro
function abrirCadastroModal() {
    const modalcadastro = document.getElementById('modalcadastro');
    modalcadastro.style.display = 'block'; // Exibe o modal
}

// Evento de clique no botão de login para abrir o modal
const menucadastro = document.getElementById('menucadastro');
menucadastro.addEventListener('click', abrirCadastroModal);

//Função para fechar o modal de cadastro ao clicar no 'X'
function fecharCadastroModal() {
  const modalcadastro = document.getElementById('modalcadastro');
  modalcadastro.style.display = 'none';// Oculta o modal
  console.log("dnadasl")
} 

// Evento de clique no botão de fechar ('X') para fechar o modal
const closeBtn = document.getElementsByClassName('close')[0];
const closeBtn1 = document.getElementsByClassName('close')[1];
const closeBtn2 = document.getElementsByClassName('close')[2];
const closeBtn3 = document.getElementsByClassName('close')[3];
const closeBtn4 = document.getElementsByClassName('close')[4];
closeBtn.addEventListener('click', fecharCadastroModal);
closeBtn1.addEventListener('click', fecharHost);
closeBtn2.addEventListener('click', fecharhostindividual);
closeBtn3.addEventListener('click', fecharnotificacao); 
closeBtn4.addEventListener('click', fecharusuario);


// Função para abrir o modal de host
function abrirHost() {
    const modalhost = document.getElementById('modalhost');
    modalhost.style.display = 'block'; // Exibe o modal
}

// Evento de clique no botão de login para abrir o modal
const menuhost = document.getElementById('menuhost');
menuhost.addEventListener('click', abrirHost);

//Função para fechar o modal de cadastro ao clicar no 'X'
function fecharHost() {
  const modalhost = document.getElementById('modalhost');
  modalhost.style.display = 'none';// Oculta o modal
  console.log("dnadasl")
} 




// Função para abrir o modal de cadastro
function abrirmodalhostindividual() {
    const modalhostindividual = document.getElementById('modalhostindividual');
    modalhostindividual.style.display = 'block'; // Exibe o modal
}

// Evento de clique no botão de login para abrir o modal
const menuhostindividual = document.getElementById('menuhostindividual');
menuhostindividual.addEventListener('click', abrirmodalhostindividual);

//Função para fechar o modal de cadastro ao clicar no 'X'
function fecharhostindividual() {
  const modalhostindividual = document.getElementById('modalhostindividual');
  modalhostindividual.style.display = 'none';// Oculta o modal
  console.log("dnadasl")
}




// Função para abrir o modal de cadastro
function abrirnotificacao() {
    const modalnotificacao = document.getElementById('modalnotificacao');
    modalnotificacao.style.display = 'block'; // Exibe o modal
}

// Evento de clique no botão de login para abrir o modal
const notificacao = document.getElementById('notificacao');
notificacao.addEventListener('click', abrirnotificacao);

//Função para fechar o modal de cadastro ao clicar no 'X'
function fecharnotificacao() {
  const modalnotificacao = document.getElementById('modalnotificacao');
  modalnotificacao.style.display = 'none';// Oculta o modal
} 


// Função para abrir o modal de cadastro
function abrirusuario() {
    const modalusuario = document.getElementById('modalusuario');
    modalusuario.style.display = 'block'; // Exibe o modal
}

// Evento de clique no botão de login para abrir o modal
const usuario = document.getElementById('usuario');
usuario.addEventListener('click', abrirusuario);

//Função para fechar o modal de cadastro ao clicar no 'X'
function fecharusuario() {
  const modalusuario = document.getElementById('modalusuario');
  modalusuario.style.display = 'none';// Oculta o modal
} 
