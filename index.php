<?php
require_once 'inc/headers.php';
require_once 'inc/functions.php';

try {
  $db = openDB();

  $sth = $db->prepare("SELECT * FROM item");
  $sth->execute();
  $data = $sth->fetchAll(PDO::FETCH_ASSOC);

//   header('HTTP/1.1 20O OK');
  print json_encode($data);

} catch (PDOException $pdoex) {
  returnError($pdoex);
}