<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Parking Zones</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('config.php');
	?>
</head>
<body>
	<section id="container">
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<p class="phead">Parking Lots Status</p>
	<div class="strt">
	<p>CITY HALL STREET</p>
	<table class="gridtable">
<?php $street = 1; ?>

<tr>
<td><?php
$res = mysqli_query($con,"SELECT floor_num, lot_num, parking_status from parking_lot_table");?>
            <table border="10" style="width:500px" cellspacing="8" cellpadding="10" font face="Arial, Helvetica, sans-serif"  >
			<?php
            while ($row = mysqli_fetch_assoc($res)) {
				$id = $row['lot_num'];?>
                <tr>
				<td><?php
				echo  $row['floor_num'] ;?> </td>
				<?php
				$sql= "SELECT * FROM parking_lot_table WHERE bus_id='$street' and lot_num='$id' and parking_status='yes'";
         	    $result=mysqli_query($con,$sql);
				 $count=mysqli_num_rows($result);
				if($count==1){	?>

				<td> <?php   echo   $row['lot_num']  ;?>    </td>
				<td>  <?php	echo  "Booked"  ;?>     </td>
				<?php
				}?>
				<?php
					 else{      ?>

					<td><?php   echo   $row['lot_num']   ; ?> </td>

					<td>  <?php   echo('<input type="submit" name="rowButton'.$id.'" value="Book"/> ');?> </td>
					<?php
					}?>
				<?php
            }?>
            </table>;


</td>
</tr>




<table style="width:324px;" border="3" cellspacing="1" cellpadding="1">
<tr>

<td style="background-color:#A4A4A4;">
<b><font face="Arial, Helvetica, sans-serif">Tarefa</font></b>
</td>
<td style="background-color:#A4A4A4;">
<b><font face="Arial, Helvetica, sans-serif">Prazo</font></b>
</td>
<td style="background-color:#A4A4A4;">
<b><font face="Arial, Helvetica, sans-serif">Status</font></b>
</td>
</tr>

<?php
$i=0;
while ($i < $num)
 {
$f1=mysql_result($result,$i,"idTarefa");
$f2=mysql_result($result,$i,"PrazoExecucao");
$f3=mysql_result($result,$i,"status");

?>
<tr style="background-color:#A4A4A4;">
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<!--<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>-->

<?php
  $status_colors = array(1 => '#0000FF', 2 => '#00FF00', 3 => '#FFFF00', 4 => '#FF0000');
?>
<td style="background-color: <?php echo $status_colors[$f3]; ?>;">
</tr> 


<?php
$i++;
}
?>
</table>


<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 007' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 016' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>






<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Options</h4>
                                    </div>
                                    <div class="modal-body">
                                    <button type="button" class="btn btn-info" >Pre-book</button>
                                    <button type="button" class="btn btn-info" >Valet-Parking</button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>