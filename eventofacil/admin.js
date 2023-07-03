// Seleciona todos os elementos de lista
var elementos = document.getElementsByTagName("a");
window.onload = function() {
  var elementos = document.querySelectorAll("li");
  for (var i = 0; i < elementos.length; i++) {
      elementos[i].addEventListener("click", function() {
          var id = this.getAttribute("id");
          switch (id) {
              case "eventos":
                  // Coloque aqui o código para buscar eventos
                  console.log("Buscando eventos...");
                  break;
              case "inscricoes":
                  console.log("Buscando inscrições...");
                  break;
              case "usuarios":
                  header('Location: home.php');
                  break;
              case "relatorios":
                  // Coloque aqui o código para buscar relatórios
                  console.log("Buscando relatórios...");
                  break;
              default:
                  console.log("Elemento desconhecido clicado!");
          }
      });
  }
};