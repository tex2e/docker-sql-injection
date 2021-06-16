<h2>SQLi with MySQL</h2>

<p>
  SELECT * FROM users WHERE (name LIKE '%?%');
</p>

<?php
  try {
    $records = [];
    if (isset($_POST['name'])) {
      $name = $_POST['name'];

      $pdo = new PDO(
        'mysql:host=mysql;dbname=sample',
        'devuser',
        'devpass'
      );
      $prepare = $pdo->prepare("SELECT * FROM users WHERE (name LIKE '%" . $name . "%');");
      $prepare->execute();
      $records = $prepare->fetchAll(PDO::FETCH_ASSOC);

      foreach ($records as $record) {
        echo "name = " . $record['name'].PHP_EOL;
      }
    }
  } catch (PDOException $e) {
    echo "Error: ";
    echo $e->getMessage();
  }
?>

<form method="post">
  <input type="name" name="name">
  <input type="submit" value="送信">
</form>
