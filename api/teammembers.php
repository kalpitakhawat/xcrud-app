<?php

header('Content-Type: Application/json');

// if the 'term' variable is not sent with the request, exit

function utf_clean($item) {
    if (is_string($item)) {
        return(utf8_encode($item));
    } else {
        return $item;
    }
}

//$_REQUEST['term'] = '';
if (!isset($_REQUEST['term']))
    exit;

function trimZero($a1) {
    return ltrim($a1, "0");
}

$serverName = "phsrv125db";
$connectionInfo = array("Database" => "FirmData", "UID" => "portaluser", "PWD" => "P0rtal#us3rr");
$conn = sqlsrv_connect($serverName, $connectionInfo);
// query the database table for zip codes that match 'term'

$sqlQuery1 = "SELECT  * FROM FirmDirectory
    Where LastName LIKE '" . $_REQUEST['term'] . "%' or FirstName LIKE '" . $_REQUEST['term'] . "%' 
ORDER BY lastname  ";
//    $sqlQuery1 = "SELECT  Distinct   vwClients.ClientName, vwMatters.MatterClientMatter
//FROM         vwClients INNER JOIN
//                      vwMatters ON vwClients.ClientID = vwMatters.MatterClientNumPadded
//WHERE     (vwClients.ClientName LIKE '" . $_REQUEST['term'] . "%') AND (vwMatters.mstatus = 'OP')
//ORDER BY vwClients.ClientName";
$rs = sqlsrv_query($conn, $sqlQuery1);
$data = array();
$result = array();
if ($rs) {
    while ($row = sqlsrv_fetch_array($rs, SQLSRV_FETCH_ASSOC)) {
        $result = array_map('utf_clean', $row);
        if ($row == null) {
            //  $result[] = "";
        } else {
            $data[] = array(
                'id' => $result['FirstName'] . " " . $result['LastName'],
                'label' => $result['FirstName'] . " " . $result['LastName']
            );
        }
    }
}

//JSON data
echo json_encode($data);
flush();
?>
