<?php
ini_set('display_errors', 'Off');
require_once('connection.php');
$conn = dbObj::getConnstring();
$sql = "SELECT * FROM client_master";
$stmt = sqlsrv_query($conn, $sql);
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}
include("header.php");
?>  
<style>
    .centerize {
        position:absolute;
        transition: .5s ease;
        top: 10%;
        left: 23%;
    }
    .toolbar {
    float:left;
}


</style><!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>


<!--    <body>
        <div class="container">
            <div class="centerize">
                <a href="new.php" class="btn btn-success glyphicon glyphicon-plus ">Add</a>
            </div>
        </div>
    </body>-->
</html>

</div>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="jumbotron-heading">Commercial Finance</h1>

</div>

<div class="container">


    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Client Number</th>
                <th>Pepper Finance Team</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                echo "<tr><td>" . $row['client_name'] . "</td>
                <td>" . $row['client_number'] . "</td>
                <td>" . $row['pepper_finance_team_members'] . "</td>
                <td>" . $row['role'] . "</td>
                <td> 
                    <form action='delete.php' method='POST' style='display: inline-block;'>
                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                        <button type='submit' class='btn btn-danger btn-sm'>
                            <i class='fas fa-trash'></i>
                        </button>
                    </form> 
                    <a href='edit.php?id=" . $row['id'] . "' class='btn btn-info btn-sm'><i class='fas fa-pencil-alt'></i></a>

                </td> </tr>";
            }
            ?>

        </tbody>

    </table>



</div>




<script src="assets/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<!--<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>-->
<script src="assets/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap4.min.js"></script>
<script src="assets/jquery.bootgrid.min.js"></script>
<script src="assets/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/dataTables.bootstrap4.min.js" type="text/javascript"></script>




<script type="text/javascript">

 $('#example').DataTable({
//      "dom": '<"top"i>rt<"bottom"flp><"clear">',
  "lengthChange": false,
     dom: 'l<"toolbar">frtip',
   initComplete: function(){
      $("div.toolbar")
         .html(' <a href="new.php" class="btn btn-success glyphicon glyphicon-plus ">Add</a>');           
   }
  
});   
 
//    $("div.toolbar").html(' <a href="new.php" class="btn btn-success glyphicon glyphicon-plus ">Add</a>');

    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });


</script>
</body>
</html>
