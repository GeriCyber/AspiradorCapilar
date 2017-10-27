<?php 

  echo 
    '<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
      <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
      <script>
      window.addEventListener("load", function(){
      window.cookieconsent.initialise({
        "palette": {
          "popup": {
            "background": "#1d8a8a"
          },
          "button": {
            "background": "#62ffaa"
          }
        },
        "theme": "classic",
        "content": {
          "message": "Esta web utiliza cookies para obtener datos estadísticos de la navegación de sus usuarios. Si sigues navegando consideramos que aceptas su uso. ",
          "dismiss": "OK",
          "link": "Leer Más",
          "href": "aviso-legal.php"
        }
      })});
      </script>';

 ?>