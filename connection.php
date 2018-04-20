<?php
Class dbObj{
	 function getConnstring() {
		$serverName = "PHAPPDEV03"; //serverName\instanceName

		// Since UID and PWD are not specified in the $connectionInfo array,
		// The connection will be attempted using Windows Authentication.
		$connectionInfo = array( "Database"=>"Commercial_Finance","UID"=>"portaluser","PWD"=>"P0rtal#us3rr");
		$conn = sqlsrv_connect( $serverName, $connectionInfo);

		if( $conn ) {
		     // echo "Connection established.<br />";
		     return $conn;
		}else{
		     echo "Connection could not be established.<br />";
		     die( print_r( sqlsrv_errors(), true));
		}
	}
	function lastInsertId($queryID) {

        sqlsrv_next_result($queryID);

        sqlsrv_fetch($queryID);

        return sqlsrv_get_field($queryID, 0);

    } 
}

?>