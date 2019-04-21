<?php
include("src/DwUpload.php");
use DwThai\DwUpload;
if(!empty($_FILES['image'])){
	$str = DwUpload::DwUpload($_FILES['image'],'img/',true);
	echo $str;
}
?>
<form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" value=""/>
        <input type="submit" name="btn" value="Upload Now !"/>
</form>