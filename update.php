<?php 
ini_set('display_errors', 'Off');
	try {
		require_once('connection.php');
	// $dbo = new dbObj();
	$conn = dbObj::getConnstring();
	// print_r($conn);
	// echo "<pre>";
	// print_r($_POST);
	// die();
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
	$sql = "INSERT INTO client_master (client_matter, client_name,  client_number, pepper_finance_team_members,  closing_date,  description,  role, lender_side,  is_sponser,  sponser_name,  is_cross_border_deal,  country,  industry,  type_of_deal, collateral,  distribution,  agent_name, borrower_name,  is_public_company, lookup, lookup_firm_name, client_us, client_us_state,  client_us_firm_name, client_foreign, client_foreign_country,  client_foreign_firm_name, opposing_us, opposing_us_state, opposing_us_firm_name, opposing_foreign, opposing_foreign_country,  opposing_foreign_firm_name) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$param_array = [];
	array_push($param_array,(isset($_POST['client_matter']) && $_POST['client_matter']!='' ?$_POST['client_matter']:''));
	array_push($param_array,(isset($_POST['clientname']) && $_POST['clientname']!='' ?$_POST['clientname']:''));
	array_push($param_array,(isset($_POST['client_number']) && $_POST['client_number']!=''?$_POST['client_number']:''));
	array_push($param_array,(isset($_POST['pepper_finance']) && $_POST['pepper_finance']!=''?$_POST['pepper_finance']:''));
	array_push($param_array,(isset($_POST['closing_date']) && $_POST['closing_date']!='' ?$_POST['closing_date']:''));
	array_push($param_array,(isset($_POST['description']) && $_POST['description']!='' ?$_POST['description']:''));
	array_push($param_array,(isset($_POST['role'])&& $_POST['role']!=''?$_POST['role']:''));
	array_push($param_array,(isset($_POST['lender_side'])&& $_POST['lender_side']!=''?$_POST['lender_side']:''));
	array_push($param_array,(isset($_POST['sponser']) && $_POST['sponser']!=''?$_POST['sponser']:''));
	array_push($param_array,(isset($_POST['sponser_name']) && $_POST['sponser_name']!=''?$_POST['sponser_name']:''));
	array_push($param_array,(isset($_POST['cross_border_deal'])?$_POST['cross_border_deal']:''));
	array_push($param_array,(isset($_POST['deal_country'])?join(',',$_POST['deal_country']):''));
	array_push($param_array,(isset($_POST['deal_industry'])?$_POST['deal_industry']:''));
	array_push($param_array,(isset($_POST['type_of_deal'])?join(',',$_POST['type_of_deal']):''));
	array_push($param_array,(isset($_POST['collateral'])?join(',',$_POST['collateral']):''));
	array_push($param_array,(isset($_POST['distribution'])?$_POST['distribution']:''));
	array_push($param_array,(isset($_POST['name_agent'])?$_POST['name_agent']:''));
	array_push($param_array,(isset($_POST['borrower_name'])?$_POST['borrower_name']:''));
	array_push($param_array,(isset($_POST['borrower_is_public_company'])?$_POST['borrower_is_public_company']:''));
	array_push($param_array,(isset($_POST['lookup'])?$_POST['lookup']:''));
	array_push($param_array,(isset($_POST['lookup_firm_name'])?$_POST['lookup_firm_name']:''));
	array_push($param_array,(isset($_POST['client_us'])?$_POST['client_us']:''));
	array_push($param_array,(isset($_POST['client_us_state'])?$_POST['client_us_state']:''));
	array_push($param_array,(isset($_POST['client_us_firm_name'])?$_POST['client_us_firm_name']:''));
	array_push($param_array,(isset($_POST['client_foriegn'])?$_POST['client_foriegn']:''));
	array_push($param_array,(isset($_POST['client_foriegn_country'])?$_POST['client_foriegn_country']:''));
	array_push($param_array,(isset($_POST['client_foriegn_firm_name'])?$_POST['client_foriegn_firm_name']:''));
	array_push($param_array,(isset($_POST['opposing_us'])?$_POST['opposing_us']:''));
	array_push($param_array,(isset($_POST['opposing_us_state'])?$_POST['opposing_us_state']:''));
	array_push($param_array,(isset($_POST['opposing_us_firm_name'])?$_POST['opposing_us_firm_name']:''));
	array_push($param_array,(isset($_POST['opposing_foriegn'])?$_POST['opposing_foriegn']:''));
	array_push($param_array,(isset($_POST['opposing_foriegn_country'])?$_POST['opposing_foriegn_country']:''));
	array_push($param_array,(isset($_POST['opposing_foriegn_firm_name'])?$_POST['opposing_foriegn_firm_name']:''));

	//echo '<pre>';
	//print_r($param_array);
	//die();
	/* special Transact-SQL addition to the SQL insert statement. It will return the last insert ID */

    $sql .= "; SELECT SCOPE_IDENTITY() AS id"; 

	$stmt = sqlsrv_query($conn, $sql, $param_array);
	$client_id =  dbObj::lastInsertId($stmt);
	if( $stmt === false ) {
     
	}
	// sqlsrv_free_stmt( $stmt);
	// $conn2 = dbObj::getConnstring();
	// $agent_sql .= "; SELECT SCOPE_IDENTITY() AS id"; 
	// $agent_stmt = sqlsrv_query($conn, $sql);
	
	if(isset($_POST['aggent_data'])){
		foreach ($_POST['aggent_data'] as $data) {
			$temp = [];
			$agent_sql = "INSERT INTO agent_master (client_id , name, title, email, phone, address) VALUES (?,?,?,?,?,?)";

			array_push($temp, $client_id);
			array_push($temp, $data['name']);
			array_push($temp, $data['title']);
			array_push($temp, $data['email']);
			array_push($temp, $data['phone']);
			array_push($temp, $data['address']);
			// echo '<pre>';
			// print_r($temp);
			$agent_stmt = sqlsrv_query($conn, $agent_sql, $temp);

			if( $agent_stmt === false ) {
		     throw new Exception("Error In Operation");
			}
			
		}
	}
	if(isset($_POST['borrower_data'])){
		foreach ($_POST['borrower_data'] as $data) {
			$temp = [];
			$borrower_sql = "INSERT INTO borrower_master (client_id , name, title, email, phone, address) VALUES (?,?,?,?,?,?)";

			array_push($temp, $client_id);
			array_push($temp, $data['name']);
			array_push($temp, $data['title']);
			array_push($temp, $data['email']);
			array_push($temp, $data['phone']);
			array_push($temp, $data['address']);
			// echo '<pre>';
			// print_r($temp);
			$borrower_stmt = sqlsrv_query($conn, $borrower_sql, $temp);

			if( $borrower_stmt === false ) {
		     throw new Exception("Error In Operation");
			}
			
		}
	}
	if(isset($_POST['lookup_data'])){
		foreach ($_POST['lookup_data'] as $data) {
			$temp = [];
			$lookup_sql = "INSERT INTO lookup_master (client_id , name, email, phone) VALUES (?,?,?,?)";

			array_push($temp, $client_id);
			array_push($temp, $data['name']);
			// array_push($temp, $data['title']);
			array_push($temp, $data['email']);
			array_push($temp, $data['phone']);
			// array_push($temp, $data['address']);
			// echo '<pre>';
			// print_r($temp);
			$lookup_stmt = sqlsrv_query($conn, $lookup_sql, $temp);

			if( $lookup_stmt === false ) {
		     throw new Exception("Error In Operation");
			}
			
		}
	}
	if(isset($_POST['client_us_data'])){
		foreach ($_POST['client_us_data'] as $data) {
			$temp = [];
			$client_sql = "INSERT INTO client_us_master (client_id , name, email, phone) VALUES (?,?,?,?)";

			array_push($temp, $client_id);
			array_push($temp, $data['name']);
			// array_push($temp, $data['title']);
			array_push($temp, $data['email']);
			array_push($temp, $data['phone']);
			// array_push($temp, $data['address']);
			// echo '<pre>';
			// print_r($temp);
			$clientu_stmt = sqlsrv_query($conn, $client_sql, $temp);

			if( $clientu_stmt === false ) {
		     throw new Exception("Error In Operation");
			}
			
		}
	}

	if(isset($_POST['client_foriegn_data'])){
		foreach ($_POST['client_foriegn_data'] as $data) {
			$temp = [];
			$clientf_sql = "INSERT INTO client_foreign_master (client_id , name, email, phone) VALUES (?,?,?,?)";

			array_push($temp, $client_id);
			array_push($temp, $data['name']);
			// array_push($temp, $data['title']);
			array_push($temp, $data['email']);
			array_push($temp, $data['phone']);
			// array_push($temp, $data['address']);
			// echo '<pre>';
			// print_r($temp);
			$clientf_stmt = sqlsrv_query($conn, $clientf_sql, $temp);

			if( $clientf_stmt === false ) {
		     throw new Exception("Error In Operation");
			}
			
		}
	}


	if(isset($_POST['opposing_us_data'])){
		foreach ($_POST['opposing_us_data'] as $data) {
			$temp = [];
			$clientf_sql = "INSERT INTO opposing_us_master (client_id , name, email, phone) VALUES (?,?,?,?)";

			array_push($temp, $client_id);
			array_push($temp, $data['name']);
			// array_push($temp, $data['title']);
			array_push($temp, $data['email']);
			array_push($temp, $data['phone']);
			// array_push($temp, $data['address']);
			// echo '<pre>';
			// print_r($temp);
			$clientf_stmt = sqlsrv_query($conn, $clientf_sql, $temp);

			if( $clientf_stmt === false ) {
		     throw new Exception("Error In Operation");
			}
			
		}
	}

		if(isset($_POST['opposing_foriegn_data'])){
		foreach ($_POST['opposing_foriegn_data'] as $data) {
			$temp = [];
			$clientf_sql = "INSERT INTO opposing_foreign_master (client_id , name, email, phone) VALUES (?,?,?,?)";

			array_push($temp, $client_id);
			array_push($temp, $data['name']);
			// array_push($temp, $data['title']);
			array_push($temp, $data['email']);
			array_push($temp, $data['phone']);
			// array_push($temp, $data['address']);
			// echo '<pre>';
			// print_r($temp);
			$clientf_stmt = sqlsrv_query($conn, $clientf_sql, $temp);

			if( $clientf_stmt === false ) {
		     throw new Exception("Error In Operation");
			}
		}
			
	}

	$response = ['status'=>200 , 'message'=>'success'];
	echo json_encode($response);

	} catch (Exception $e) {
		die($e);
		$response = ['status'=>500 , 'message'=>'error'];
		echo json_encode($response);		
	}
 ?>