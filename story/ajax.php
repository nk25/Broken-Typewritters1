<?php
require('db.php');
if (isset($_POST['action']) && $_POST['action'] == 'allote_user') {
	# code...
	$name =$_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$query = "SELECT * FROM `register` WHERE email='$email'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if ($rows) {
		# code...
	$res="User Already exist";
echo json_encode($res);
	}
	else{
		$query = "INSERT into `register` (name, email, password)
		VALUES ('$name','$email', '$pass')";
$result = mysqli_query($con,$query);
if ($result) {
	# code...
$res="Registeration is Successful";
echo json_encode($res);
}
	}
}
if (isset($_POST['action']) && $_POST['action'] == 'check_login') {
	# code...
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
session_start();
	
$message="";
	$result = mysqli_query($con,"SELECT * FROM register WHERE email='" . $email . "' and password = '". $pass."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["user_id"] = $row['id'];
	$res="Login is Successful.Redirecting...";
echo json_encode($res);
	} else {
	$res = "Invalid Username or Password!";
echo json_encode($res);
	}
	}

if (isset($_FILES['file'])) {
	# code...

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'uploads/'; // upload directory
 
if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['file'])
{
$img = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
 
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
 
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
 
if(move_uploaded_file($tmp,$path)) 
{
// echo "<img src='$path' />";
$name = $_POST['name'];
$email = $_POST['email'];
$summary = $_POST['summary'];
$title = $_POST['title'];
$category = $_POST['cat'];

 
 
//insert form data in the database
	$query = "INSERT into `upload_stories` (story_cat_id, name, email, story_title,summary,upload_path)
		VALUES ('$category', '$name','$email','$title', '$summary','$path')";
$result = mysqli_query($con,$query);
 if ($result) {
 	# code...
 	$res="Story Uploaded Successfully";
echo json_encode($res);

 }
 else{
 	$res="Some error occured.";
echo json_encode($res);
 }
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}
}
?>