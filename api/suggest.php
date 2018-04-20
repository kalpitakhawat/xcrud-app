<?php

// if the 'term' variable is not sent with the request, exit
if (!isset($_REQUEST['term']))
    exit;

function trimZero($a1) {
    return ltrim($a1, "0");
}

$serverName = "phsrv125db";
$connectionInfo = array("Database" => "FirmData", "UID" => "portaluser", "PWD" => "P0rtal#us3rr");
$conn = sqlsrv_connect($serverName, $connectionInfo);
// query the database table for zip codes that match 'term'
if (is_numeric($_REQUEST['term'])) {
    $_REQUEST['term'] = ltrim($_REQUEST['term'], "0");
    $cm = array_map('trimZero', explode(".", $_REQUEST['term']));

    if (strpos($_REQUEST['term'], '.') !== FALSE) //found period
        $sqlQuery1 = "SELECT  distinct top 200 vwMatters.ClientMatterNumber,vwMatters.MatterClientNumber,vwMatters.MatterNumber FROM vwClients INNER JOIN vwMatters ON vwClients.ClientID = vwMatters.MatterClientNumPadded where ClientMatterNumber Like '" . $cm[0] . "." . $cm[1] . "' ";
    else
        $sqlQuery1 = "SELECT  distinct top 200 vwMatters.MatterClientNumber, vwClients.ClientName FROM vwClients INNER JOIN vwMatters ON vwClients.ClientID = vwMatters.MatterClientNumPadded where MatterClientNumber Like '" . $_REQUEST['term'] . "%' order by MatterClientNumber asc";


    $rs = sqlsrv_query($conn, $sqlQuery1);
    $data = array();
    if ($rs) {
        while ($row = sqlsrv_fetch_array($rs, SQLSRV_FETCH_ASSOC)) {
            if (strpos($_REQUEST['term'], '.') !== FALSE) { //found period
                $data[] = array(
                    'id' => $row['MatterClientNumber'] . "." . $row['MatterNumber'],
                    'label' => $row['MatterClientNumber'] . "." . $row['MatterNumber']
                );
            } else {
                $data[] = array(
                    'id' => $row['ClientName'] . ": " . $row['MatterClientNumber'],
                    'label' => $row['ClientName'] . ": " . $row['MatterClientNumber']
                );
            }
        }
    }
} else {
    $sqlQuery1 = "SELECT  Distinct   vwClients.ClientName, vwMatters.MatterClientMatter
FROM         vwClients INNER JOIN
                      vwMatters ON vwClients.ClientID = vwMatters.MatterClientNumPadded
WHERE     (vwClients.ClientName LIKE '" . $_REQUEST['term'] . "%') AND (vwMatters.mstatus = 'OP')
ORDER BY vwClients.ClientName";
    $rs = sqlsrv_query($conn, $sqlQuery1);
    $data = array();
    if ($rs) {
        while ($row = sqlsrv_fetch_array($rs, SQLSRV_FETCH_ASSOC)) {
            $data[] = array(
                'id' => $row['ClientName'] . ": " . $row['MatterClientMatter'],
                'label' => $row['ClientName'] . ": " . $row['MatterClientMatter']
            );
        }
    }
}
//JSON data
echo json_encode($data);
flush();
?>
