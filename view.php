<?php
$mysqli = new mysqli("localhost", "root", "zyx@ZY19960323", "foodblog");

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM comments ORDER BY created_at DESC");
?>

<h1>All Comments</h1>
<ul>
<?php while ($row = $result->fetch_assoc()) : ?>
  <li><strong><?= htmlspecialchars($row['name']) ?>:</strong> <?= htmlspecialchars($row['message']) ?> <em>(<?= $row['created_at'] ?>)</em></li>
<?php endwhile; ?>
</ul>

<a href="index.html">Back to Home</a>

<?php
$mysqli->close();
?>
