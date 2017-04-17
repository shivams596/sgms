
<!DOCTYPE html>
<?php 
include 'config/db.php';
$connection = mysqli_connect('localhost','root','','sgms') or die("mysql connection problem");
$dynamicList="";
$sql=mysqli_query($connection,"SELECT max(id) id FROM dustbin;") or die("query failed");
$pc = mysqli_num_rows($sql);
$row=$sql->fetch_assoc();
$newId= intval($row['id'])+1;

?>
<?php 
echo "sbsbkc";
  if(isset($_POST["id"]))
  {
  print_r (" esta ncnckld");
  $connection = new mysqli('localhost','root','','sgms') or die("mysql connection problem");
      $id=$_POST["id"];
      $addr=$_POST["addr"];


      $contact=$_POST["contact"];



      $q="INSERT INTO dustbin(`id`,`level`,`address`,`contact`) values('$id','$level','$addr','$contact');";
      $res=$connection->query($q)  or die("mysql connection problem");
      if(!$res)
        echo "error";
      else
        {
          header("Location:addBin.php?success=1");
        }

        mysqli_close($connection);
    }
    else echo "string";
  ?>
<?php include 'includes/header.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Add Dustbin</h1>
          <?php
          if(isset($_GET["success"]))
          {
            if($_GET["success"]=="1")
              echo "<h4>DustBin Added Successfully!</h4>";
            else
              echo "<h4>Some Error Occured!</h4>";
          }



          ?>

  
          <div class="row placeholders">



            <form class="form-horizontal" action="addBin.php" method="post">

              <div class="form-group">
                <label class="control-label col-sm-2" for="id">DustBin ID:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="id" name="id" placeholder="Enter Dustbin Id" value="<?php echo $newId;   ?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="addr">Address:</label>
                <div class="col-sm-10"> 
                  <input type="text" class="form-control" id="addr" name= "addr" placeholder="Enter Adderss">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="contact">Contact Number:</label>
                <div class="col-sm-10"> 
                  <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number">
                </div>
              </div>
  

              <button type="submit" class="btn btn-default">Submit</button>
            </form>





          </div>
        
         
          
        </div>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
