<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbhr";

  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "DELETE FROM employee WHERE emp_id=:emp_id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':emp_id' => $_GET['emp_id']));
    $_SESSION['success'] = 'Record deleted';
    header( 'Location: emp_List.php' ) ;

?>