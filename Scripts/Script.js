/*********************FAQ************************/
const faqs = document.querySelectorAll('.faq');
faqs.forEach(faq => {
  faq.addEventListener('click', () => {
    faq.classList.toggle('active');

  });
});


/*************************************************/


/*********************VALIDAÇÃO*******************/

function validarLogin() {
  // Obtém os valores dos campos de entrada
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  // Verifica se os campos estão preenchidos
  if (email === "" || password === "") {
      alert("Por favor, preencha todos os campos.");
  } else {
      // Redireciona para outra página
      window.location.href = "adm/teste/cadas.html";
  }
}


function validarCad() {
  // Obtém os valores dos campos de entrada
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var name = document.getElementById("name").value;

  // Verifica se os campos estão preenchidos
  if (email === "" || password === "" || name === "") {
      alert("Por favor, preencha todos os campos.");
  } else {
      // Redireciona para outra página
      alert("Cadastrado com sucesso!");
      window.location.href = "adm/teste/cadas.html";
  }
}
/*************************************************/