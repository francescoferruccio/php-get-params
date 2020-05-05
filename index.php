<!--
GOAL: generare 2 file PHP per i due seguenti esercizi
- passare come argomenti in GET nome e cognome; e salutare l'interlocutore
- passare come argomento in GET una mail e stampare un div che contenga OK se contiene un punto e una chiocciola; KO altrimenti
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snacks</title>

    <?php
      $nome = $_GET["name"];
      $cognome = $_GET["surname"];
      $mail = $_GET["mail"];

      if (strstr($mail, ".") && strstr($mail, "@")) {
        $msg = "OK";
      } else {
        $msg = "KO";
      }
    ?>
  </head>

  <body>
    <h2>Benvenuto <?php echo $nome . " " . $cognome; ?></h2>

    <div>
      <h2><?php echo $msg; ?></h2>
    </div>
  </body>
</html>
