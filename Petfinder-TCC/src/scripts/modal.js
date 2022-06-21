/*
 Criação do Script que faz a animação de mostrar o POP-UP em tela.
*/

function startModal(modalID) {
  const modal = document.getElementById(modalID);
  modal.classList.add('open');
  modal.addEventListener('click', (e) => {
    if (e.target.id == modalID) {
      modal.classList.remove('open');
    }
    console.log('Test');
  })
};

const login = document.querySelector('.login');
login.addEventListener('click', () => {
  startModal('modal-login');

  console.log('11')
})


