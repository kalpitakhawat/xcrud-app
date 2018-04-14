<?php

	require_once('connection.php');
	$conn = dbObj::getConnstring();


	$client_data = [];
	$agent_data = [];
	$borrower_data = [];
	$lookup_data = [];
	$client_us_data = [];
	$client_foreign_data = [];
	$opposing_us_data = [];
	$opposing_foreign_data = [];
	$sql = "SELECT * FROM client_master where id = " . $_POST['id'];
	$stmt = sqlsrv_query( $conn, $sql );
	if( $stmt === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	     $client_data = $row;
	} 


	$sql = "SELECT * FROM agent_master where client_id = " . $_POST['id'];
	$stmt = sqlsrv_query( $conn, $sql );
	if( $stmt === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	     array_push($agent_data,$row);
	} 



	$sql = "SELECT * FROM borrower_master where client_id = " . $_POST['id'];
	$stmt = sqlsrv_query( $conn, $sql );
	if( $stmt === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	     array_push($borrower_data,$row);
	} 



	$sql = "SELECT * FROM lookup_master where client_id = " . $_POST['id'];
	$stmt = sqlsrv_query( $conn, $sql );
	if( $stmt === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	     array_push($lookup_data,$row);
	} 




	$sql = "SELECT * FROM client_us_master where client_id = " . $_POST['id'];
	$stmt = sqlsrv_query( $conn, $sql );
	if( $stmt === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	     array_push($client_us_data,$row);
	} 
	// echo '<pre>';
	// print_r($client_data);

	$sql = "SELECT * FROM client_foreign_master where client_id = " . $_POST['id'];
	$stmt = sqlsrv_query( $conn, $sql );
	if( $stmt === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	     array_push($client_foreign_data,$row);
	} 
	// echo '<pre>';
	// print_r($client_data);


	$sql = "SELECT * FROM opposing_us_master where client_id = " . $_POST['id'];
	$stmt = sqlsrv_query( $conn, $sql );
	if( $stmt === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	     array_push($opposing_us_data,$row);
	} 


		$sql = "SELECT * FROM opposing_foreign_master where client_id = " . $_POST['id'];
	$stmt = sqlsrv_query( $conn, $sql );
	if( $stmt === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	     array_push($opposing_foreign_data,$row);
	} 

	$client_data['agent_data'] = $agent_data;
	$client_data['borrower_data'] = $borrower_data;
	$client_data['lookup_data'] = $lookup_data;
	$client_data['client_us_data'] =$client_us_data;
	$client_data['client_foreign_data'] = $client_foreign_data;
	$client_data['opposing_us_data'] = $opposing_us_data;
	$client_data['opposing_foreign_data'] = $opposing_foreign_data;
	
	echo json_encode($client_data);
 ?>