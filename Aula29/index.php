<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      require_once 'caneta.php';
      $c1 = new Caneta;
      $c1->tampada = true;
      $c1->destampar();
      $c1->rabiscar();
      $c1->tampar();
      $c1->rabiscar();
    ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>