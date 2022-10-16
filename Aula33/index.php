<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      require_once "Lutador.php";

      $lutadores = array();
      $lutadores[0] = new Lutador("Gustavo Evil", "Canadá", 19, 1.72, 79.8, 12, 9, 7);
      $lutadores[0]->apresentar();
      $lutadores[0]->status();
    ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>