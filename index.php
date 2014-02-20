<?php

// ini_set("display_errors", "1");

$db = new SQLite3("conf.db") or die("Database connection error");
$result = $db->query("SELECT * FROM gdb");
$gdbs = array();
while($gdb = $result->fetchArray())
{
  array_push($gdbs, $gdb);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>List all GDBs :: xGDBvm Configuration Prototype</title>
  </head>
  <body>
    <h1>All GDBs</h1>

    <ul>
    <?php foreach($gdbs as $gdb): ?>
      <li>GDB <?php echo $gdb['id'] ?>: <?php echo $gdb['name'] ?> (version <?php echo $gdb['version'] ?>)</li>
    <?php endforeach; ?>
    </ul>

  </body>
</html>
