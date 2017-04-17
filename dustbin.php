<?php 
 include 'includes/header.php';
?>
<?php
if (isset($_GET["id"]))
{
	$connection = mysqli_connect('localhost','root','','sgms') or die("mysql connection problem");
	$dynamicList="";
	$id=$_GET["id"];
	$sql=mysqli_query($connection,"SELECT * FROM dustbin where id='$id';") or die("query failed");
	$pc = mysqli_num_rows($sql);
	$row=$sql->fetch_assoc();
	$level=$row["level"];
	$addr=$row["address"];
	$contact=$row["contact"];
	

}
else
{
	header("Location:index.php");
}


?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="col-sm-6 col-md-6 col-sm-offset-2 col-md-offset-1 ">
	             <div  class="asd img-responsive" style="position:relative;">
				 	 <img class="ebin" src="dustbin_empty.png" style="border-radius:0%;	max-width: 100%; width:285; height:413;	max-height: 100%;    position:absolute;    z-index: 0;" alt="Generic placeholder thumbnail">
				 	 <img class="fbin" src="db_filled.png" style="border-radius:0%;	max-width: 100%;	max-height: 100%; width:285; height:413;	margin-top: 0;		clip-path: polygon(0  <?php echo $l1.'%'; ?> , 100% <?php echo $l1.'%'; ?>, 100% 100%, 0% 100%);    z-index:0;"  alt="Generic placeholder thumbnail">
				 </div></div>
<div class="col-sm-  col-md-5 ">
<iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/259619/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>

</div>
</div>
<?php 
 include 'includes/footer.php';
?>

















































