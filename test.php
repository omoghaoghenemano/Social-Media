<?php 

$id = $_GET['idd'];
//echo $id;
include_once('config.php');
$result = mysqli_query ($conn , "select * from city where country_id = $id");

if(!$result){
	echo 'query failed';
}
else { ?>
city : <select name="_city">
<?php while ($row=mysqli_fetch_assoc($result)) {?>
<option value="<?php echo $row['city_id'];?>"> <?php echo $row['city_name'];?> </option>
<?php } ?>
</select>


<?php }
?>