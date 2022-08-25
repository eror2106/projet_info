
  <?php




  try {
    if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "developement") == 0) {
      $db = new PDO(
        'mysql:host=localhost;dbname=info;charset=utf8',
        'root',
        ''
      );
    }
    if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "production") == 0) {
      $db = new PDO(
        'mysql:host=localhost;dbname=rubiks;charset=utf8',
        'root',
        ''
      );
    }
  } catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
  }
