<?php

	require_once('connection.php');
	// $dbo = new dbObj();
	$conn = dbObj::getConnstring();
	sqlsrv_begin_transaction( $conn );
	$sql1 = "DELETE FROM client_master where id= ".$_POST['id'];
	$sql2 = "DELETE FROM agent_master where client_id= ".$_POST['id'];
	$sql3 = "DELETE FROM borrower_master where client_id= ".$_POST['id'];
	$sql4 = "DELETE FROM lookup_master where client_id= ".$_POST['id'];
	$sql5 = "DELETE FROM client_us_master where client_id= ".$_POST['id'];
	$sql6 = "DELETE FROM client_foreign_master where client_id= ".$_POST['id'];
	$sql7 = "DELETE FROM opposing_us_master where client_id= ".$_POST['id'];
	$sql8 = "DELETE FROM opposing_foreign_master where client_id= ".$_POST['id'];
	$stmt = sqlsrv_query($conn, $sql1);
	$stmt = sqlsrv_query($conn, $sql2);
	$stmt = sqlsrv_query($conn, $sql3);
	$stmt = sqlsrv_query($conn, $sql4);
	$stmt = sqlsrv_query($conn, $sql5);
	$stmt = sqlsrv_query($conn, $sql6);
	$stmt = sqlsrv_query($conn, $sql7);
	$stmt = sqlsrv_query($conn, $sql8); 
	sqlsrv_commit( $conn );
	header("Location:index.php");
 ?>