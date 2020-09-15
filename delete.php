<?php>

require_once 'connect.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$stmt = $pdo->prepare('SELECT * FROM books WHERE id=:id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

// sql to delete a record
$sql = 'DELETE FROM books.php WHERE id=:$book.id';

// use exec() because no results are returned
$conn->exec($sql);
echo "Record deleted successfully";
} catch(PscDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
