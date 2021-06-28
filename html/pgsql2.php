<h2>SQLi in PostgreSQL</h2>

<span>検索クエリ：</span>
<p>
  SELECT * FROM users WHERE (name LIKE '%?%');
</p>

<?php
  try {
    $records = [];
    if (isset($_POST['name'])) {
      $name = $_POST['name'];

      $pdo = new PDO(
        'pgsql:host=pgsql;dbname=sample',
        'postgres',
        'devpass'
      );
      $prepare = $pdo->prepare("SELECT * FROM users WHERE (name LIKE '%" . $name . "%');");
      $prepare->execute();
      $records = $prepare->fetchAll(PDO::FETCH_ASSOC);

      foreach ($records as $record) {
        echo "name = " . $record['name'].PHP_EOL . "<br>";
      }
    }
  } catch (PDOException $e) {
    echo "Error: ";
    echo $e->getMessage();
  }
?>

<form method="post">
  <input type="name" name="name" value="Alice">
  <input type="submit" value="送信">
</form>
