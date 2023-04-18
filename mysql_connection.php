<?php
$conn = mysqli_connect('localhost', 'root', 'ienh', 'login');
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';

$sql = 'SELECT login, senha FROM login';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "\n" . "usuario: " . $row["login"]. " - Senha: " . $row["senha"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>