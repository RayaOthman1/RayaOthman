<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'Password');
if (!empty($username)){
if (!empty($password)){
// Create connection
$conn = new mysqli ("localhost","root", "0594415829", "loginform");
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO login (username, Password)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>

<button onclick="document.location='index.html'"> Lets Start Shoping </button>
<style>
    body{
        background: radial-gradient(#fff,#ffd9d9);
    }
button {
  background-color: #563434;
  color: white; 
  padding: 14px 20px;
  margin-left:40px;
  margin-top: 20%;
  text-align: center;
  border: none;
  cursor: pointer;
  width: 20%;
  border-radius: 50%;
}
button:hover {
  opacity: 0.8;
}

</style>