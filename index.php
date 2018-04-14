

<?php
    require_once('connection.php');
    $conn = dbObj::getConnstring();
    $sql = "SELECT * FROM client_master";
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }
    include("header.php"); 
?>


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="jumbotron-heading">Client Details</h1>

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
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                echo "<tr><td>".$row['client_name']."</td>
                <td>".$row['client_number']."</td>
                <td>".$row['pepper_finance_team_members']."</td>
                <td>".$row['role']."</td>
                <td> 
                    <form action='delete.php' method='POST' style='display: inline-block;'>
                        <input type='hidden' name='id' value='".$row['id']."'>
                        <button type='submit' class='btn btn-danger btn-sm'>
                            <i class='fas fa-trash'></i>
                        </button>
                    </form> 
                    <a href='edit.php?id=".$row['id']."' class='btn btn-info btn-sm'><i class='fas fa-pencil-alt'></i></a>

                </td> </tr>";
            }  
             ?>
       
    </tbody>
    <tfoot>
        <tr>
            <th>Client Name</th>
            <th>Client Number</th>
            <th>Pepper Finance Team</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>



<footer class="pt-4 my-md-5 pt-md-5 border-top">
  <div class="row">
    <div class="col-12 col-md">
      <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
      <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
  </div>
  <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Cool stuff</a></li>
        <li><a class="text-muted" href="#">Random feature</a></li>
        <li><a class="text-muted" href="#">Team feature</a></li>
        <li><a class="text-muted" href="#">Stuff for developers</a></li>
        <li><a class="text-muted" href="#">Another one</a></li>
        <li><a class="text-muted" href="#">Last time</a></li>
    </ul>
</div>
<div class="col-6 col-md">
  <h5>Resources</h5>
  <ul class="list-unstyled text-small">
    <li><a class="text-muted" href="#">Resource</a></li>
    <li><a class="text-muted" href="#">Resource name</a></li>
    <li><a class="text-muted" href="#">Another resource</a></li>
    <li><a class="text-muted" href="#">Final resource</a></li>
</ul>
</div>
<div class="col-6 col-md">
  <h5>About</h5>
  <ul class="list-unstyled text-small">
    <li><a class="text-muted" href="#">Team</a></li>
    <li><a class="text-muted" href="#">Locations</a></li>
    <li><a class="text-muted" href="#">Privacy</a></li>
    <li><a class="text-muted" href="#">Terms</a></li>
</ul>
</div>
</div>
</footer>
</div>


    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../xcrud_app/dist/jquery-1.11.1.min.js"></script>
      <script src="../xcrud_app/dist/bootstrap4.min.js"></script>
      <script src="../xcrud_app/dist/jquery.bootgrid.min.js"></script>

      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


      <script type="text/javascript">

        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>
    <script>
        Holder.addTheme('thumb', {
          bg: '#55595c',
          fg: '#eceeef',
          text: 'Thumbnail'
      });

        
  </script>
</body>
</html>
