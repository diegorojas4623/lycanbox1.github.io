 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "dblycan";

$a = $_POST['id'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM suscriptions WHERE id=$a";

if (mysqli_query($conn, $sql)) {
    echo "Registro eliminado";
} else {
    echo "Error eliminando registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
<div class="container">
  <a href="form_suscriptions.php" align class="btn btn-info" role="button">volver</a>
 </div>