<style>
<?php
include 'future/gallery.css';
include 'future/gallery-old-ie.css';?>
</style><?php
$mysqli = mysqli_connect('localhost', 'root', '','future');

// Check connection
if (mysqli_connect_errno()) {
	echo "failed to connect".mysqli_connect_errno();
   }


 if (isset($_GET['id'])) {


  $id= $_GET['id'];
  echo $id;
  $name=$id;

    //$r = "SELECT `aid`, `adoc` FROM `agentdoc` WHERE `adoc`=$id";
    //$query1=	mysqli_query($mysqli,$r);
    //while ($row=mysqli_fetch_assoc($query1)) {
		
		//$name=$row[`adoc`];
		//echo "<br>".$name."<br>";
		
	//}
		
    echo $name."<br><br>";

    $fileExt = explode('.', $name);
	$fileActualExt = strtolower(end($fileExt));

	$allowed  = array('mp4','ogg','mp3');
	$allowed1  = array('png','jpg');
	$allowed2  = array('pdf');
	$allowed3  = array('ppt','pptx');

	if (in_array($fileActualExt, $allowed)) {




		echo "<video width='400' height ='200' controls><source src = 'resume/".$name."' type = 'video/mp4'><source src = 'resume/".$name."' type = 'video/ogg'></video>";

    }
     if (in_array($fileActualExt, $allowed1)) {


		echo "<img src ='resume/".$name."' width='400' height='400'>";


	}
	if (in_array($fileActualExt, $allowed2)) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Future_agents</title>
</head>
<body>
		<a  href="resume/<?php echo $name ?>">watch</a>
		<br>
		<a download="<?php echo $name ?>" href="resume/<?php echo $name ?><br>">download</a>

<?php		
	}
if (in_array($fileActualExt, $allowed3)) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Future_agents</title>
</head>
<body>
		
		<br>
		<a download="<br><?php echo $name ?>" href="resume/<?php echo $name ?>">download ppt</a>



<?php	}
}?>
