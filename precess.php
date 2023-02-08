<?php
$servername = "localhost";
$username = "Agape";
$password = "asah5832";
$dbname = "agape";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["fname"];
  $email = $_POST["email"];

  $sql = "INSERT INTO users (name, email)
  VALUES ('$name', '$email')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>