<?php
//include("realestate_config.php");
include("../../common/topfile.php");
if(isset($_GET['image_name'])){
	
	$image_name=$_GET['image_name'];
	
     $image_fullpath="../uploads/background_images/".$image_name;
	 //echo $image_fullpath; exit;
	// $image_fullpath1="../../".$image_name;
	
	$image_db_name=$image_fullpath;
	$sql_insert1 = "select * from background_images  WHERE background_thumb ='".$image_name."' ";
	$inserted1  =  mysql_query($sql_insert1);
    $rows=mysql_fetch_assoc($inserted1);
	$del_qry="DELETE  FROM background_images WHERE background_thumb ='".$image_name."'";
	$res_dell=mysql_query($del_qry);

	 $image_fullpath2="../../uploads/background_images/".$rows['background_thumb']; 
	 $image_fullpath3="../../uploads/background_images/".$rows['background_image'];;
		unlink($image_fullpath2);
		unlink($image_fullpath3);
	   // unlink($image_fullpath3);
		echo "Image deleted";
	

	
}?>

             
