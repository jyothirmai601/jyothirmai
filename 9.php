<?php
$name=$_POST['name'];
$pin=$_POST['pin'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];

$conn=new mysqli('localhost','root','','demo');
if($conn->connect_error){
    die('connection failed' .$conn->connect_error);
}
else
{
     $stmt=$conn->prepare("insert into form1(name,pin,mobile,email)values(?,?,?,?)");
$stmt->bind_param("siis",$name,$pin,$mobile,$email);
$stmt->execute();
echo "success";
$stmt->close();
$conn->close();
}
?>
