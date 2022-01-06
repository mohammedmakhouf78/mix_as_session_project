<?php 
session_start(); 

if(!isset($_SESSION['email']))
{
  header('location: ./login.php');
}

?>
<?php include './layouts/header.php' ?>

<h1>this is home</h1>

<?php include './layouts/footer.php' ?>