<?php
// Fetching Values From URL
$name = $_POST['nameInput'];
$email = $_POST['emailInput'];
$contact = $_POST['contactInput'];
$jobPosition = $_POST['jobPositionInput'];
$is_fresher = $_POST['fresh'];
$address = $_POST['addressInput'];
$cvLink = $_POST['cvLinkInput'];


$connection = mysql_connect("localhost", "qlrsabna_abconsortium", "Abconsortium"); // Establishing Connection with Server..
$db = mysql_select_db("qlrsabna_abconsortium", $connection); // Selecting Database
if (isset($_POST['name'])) {
$query = mysql_query("insert into job_applications (name, email) values ('$name', '$email')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed
?>