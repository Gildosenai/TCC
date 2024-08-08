


const closeBtn4 = document.getElementById('close4');
closeBtn4.addEventListener('click', fecharusuario);


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








