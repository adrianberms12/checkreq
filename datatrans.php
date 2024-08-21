<?php
include_once('db.php');
//if (isset($_POST['submit'])) {
$check_id=$_POST['check_id'];
$post=$_POST['post'];
$part=$_POST['part'];
$Need=$_POST['Need'];
$created_by=$_POST['created_by'];
$completion=$_POST['completion'];

$payee=$_POST['payee'];
$Price=$_POST['Price'];
$quanty=$_POST['quanty'];
$amount=$_POST['Amount'];
$purpose=$_POST['purpose'];
$noted=$_POST['noted'];








$queryl ="INSERT INTO checkreq(`post`,`part`, `Need`, `created_by`,`completion`,`check_id`,
`payee`,`Price`, `quanty`, `Amount`,`purpose`,`noted`)
VALUES(NOW(),'$part','$Need','$created_by','$completion','$check_id','$payee','$Price','$quanty','$amount','$purpose',
'noted')";

if($conn->query($queryl)) {
    echo "<script>alert('Welcome!');window.location='detailsentry.php'</script>";
    }else{
    echo "<script>alert('invalid!')</script>";
    }


?>