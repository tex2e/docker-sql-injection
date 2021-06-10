<h2>SQLi with PostgreSQL</h2>

<p>
  SELECT * FROM users WHERE id = ?
</p>

<?php
  try {
    $records = [];
    if (isset($_POST['id'])) {
      $id = $_POST['id'];

      $pdo = new PDO(
        'pgsql:host=pgsql;dbname=sample',
        'postgres',
        'devpass'
      );
      $prepare = $pdo->prepare('SELECT * FROM users WHERE id = ' . $id . ';');
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
  <input type="id" name="id">
  <input type="submit" value="送信">
</form>
