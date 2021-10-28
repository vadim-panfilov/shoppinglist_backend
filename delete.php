<?php
require_once 'inc/headers.php';
require_once 'inc/functions.php';

$id = filter_var((int)$_GET['id'], FILTER_VALIDATE_INT);

try {
  $db = openDB();

  $query = $db->prepare('delete from item where id = :id');
  $query->bindValue(':id', $id, PDO::PARAM_STR);
  $query->execute();

  // header('HTTP/1.1 20O OK');
  print json_encode(TRUE);

} catch (PDOException $pdoex) {
  returnError($pdoex);
}