<?php
require_once('../database/Database.php');
$db = new Database(); 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}


if(isset($_POST['bookBy'])){
	// echo 'yes';
	$bookBy = $_POST['bookBy'];
	$cont = $_POST['cont'];
	$fN = $_POST['fN'];
	$age = $_POST['age'];
	$bage = $_POST['bage'];
	$gender = $_POST['gender'];
	$birth = $_POST['birth'];
	$email = $_POST['email'];
	
	$address = $_POST['address'];
	$pcont = $_POST['pcont'];
	$pmail = $_POST['pmail'];
	
	

	$origin = $_SESSION['origin'];
	$dest = $_SESSION['destination'];
	$deptDate = $_SESSION['departure_date'];
	$acc = $_SESSION['accomodation'];

	$tracker = $_SESSION['tracker'];

	$sql = "INSERT INTO booked (book_by, book_contact, book_name, book_age, b_age, book_gender, birth_date, email_ad, book_address, p_cont, p_email,
			 book_departure, dest_id, acc_id, origin_id, book_tracker)
			 VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);
	";

$result = $db->insertRow($sql, [$bookBy, $cont, $fN, $age, $bage, $gender, $birth, $email, $address, $pcont, $pmail, $deptDate, $dest, $acc, $origin, $tracker]);

$return['valid'] = true;
$return['url'] = "payment.php";

echo json_encode($return);

}//if isset

					// bookBy : bookBy,
					// 	email : email,
					// 	address : address,
					// 	fN : fN,
					// 	age : age 

$db->Disconnect();
 ?>

