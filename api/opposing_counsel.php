<?php


// if the 'term' variable is not sent with the request, exit
if (!isset($_REQUEST['term']))
    exit;



$serverName = "phsrv65";
$connectionInfo = array("Database" => "contactease", "UID" => "portaluser", "PWD" => "P0rtal#us3rr");
$conn = sqlsrv_connect($serverName, $connectionInfo);
// query the database table for zip codes that match 'term'

$sqlQuery1 = "SELECT (Company+ ', ' +lastname+', '+firstname) as com
FROM         
         [contactease].[dbo].[main] 
WHERE     ((Company+ ', ' +lastname+', '+firstname) LIKE '" . $_REQUEST['term'] . "%')
ORDER BY (Company+ ', ' +lastname+', '+firstname)";
$rs = sqlsrv_query($conn, $sqlQuery1);
$data = array();
if ($rs) {
    while ($row = sqlsrv_fetch_array($rs, SQLSRV_FETCH_ASSOC)) {
        $data[] = array(

            'label' => $row['com']
        );
    }
}
//JSON data
echo json_encode($data);
//flush();

//// if the 'term' variable is not sent with the request, exit
//if (!isset($_REQUEST['term']))
//    exit;
//
//function trimZero($a1) {
//    return ltrim($a1, "0");
//}
//
//$serverName = "phsrv65";
//$connectionInfo = array("Database" => "contactease", "UID" => "portaluser", "PWD" => "P0rtal#us3rr");
//$conn = sqlsrv_connect($serverName, $connectionInfo);
//// query the database table for zip codes that match 'term'
//
//    $sqlQuery1 = "
//SELECT  distinct company
//FROM    [contactease].[dbo].[main]  
//		 where company is not null and company not like ''      
//order by company";
//    $rs = sqlsrv_query($conn, $sqlQuery1);
//    $data = array();
//    if ($rs) {
//        while ($row = sqlsrv_fetch_array($rs, SQLSRV_FETCH_ASSOC)) {
//            $data[] = array(
//                 'id' => $row['company'] ,
//                'label' => $row['company'] 
////                'id' => $row['ClientName'] . ": " . $row['MatterClientMatter'],
////                'label' => $row['ClientName'] . ": " . $row['MatterClientMatter']
//            );
//        }
//    }
//
////JSON data
//echo json_encode($data);
//flush();
?>
