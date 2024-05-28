<?php
require_once 'include/dbh.inc.php';
?>

<?php

//Delete data(Delete in CRUD) data from database

$sql = "DELETE FROM profile WHERE $first_name=['first_name'] and $phone_no=['phone_no']; ;




if ($connection->query($sql) === TRUE) {
  echo "data deleted successfully";
} else {
  echo "Error deleting record" . $connection->error;
}

// Closing the database connection
$connection->close();

?>