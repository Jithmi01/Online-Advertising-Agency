<?php
require_once 'dbh.inc.php';
?>

<?php
// Retrieve(READ in CRUD)data from database

$new_first_name= $_POST['first_name'];
$new_last_name= $_POST['last_name'];
$new_email = $_POST['email'];
$new_phone_no = $_POST['phone_no'];
$new_bio = $_POST['bio'];

// Update data(UPDATE in CRUD)

$sql="UPDATE profile SET first_name='$new_first_name',last_name='$new_last_name',email='$new_email',phone_no='$new_phone_no',bio='$new_bio'";

//validation
if ($connection->query($sql)) {
echo "updated successfully";
header('Location:../profile.php');
} else {
echo "Error " . $connection->error;
}


$sql = "SELECT first_name,last_name,email,phone_no,bio FROM profile";

$result = $connection->query($sql);

if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<tr>
 <td>".$row["first_name"]."</td>
 <td>".$row["last_name"]."</td>
 <td>".$row["email"]."</td>
 <td>".$row["phone_no"]."</td>
 <td>".$row["bio"]."</td>
 </tr>";
//return it's a validated one
}  
} else {
echo "User account cannot found"; // Display  this message if not matched
}

echo "</table>"; // End the table

$connection->close();//close the database connection
?>
