<meta charset="utf-8">
<?php @require_once('config.php');?>
<title>Giới thiệu</title>
<?php include('header.php');?>
<div class="clear"></div>
	<div class="text-head">
		<div class="dongphuc"></div>
	</div>
<div class="content">
	<div class="left">
		<div class="maydongphuc">
	<?php 
		@mysql_set_charset('utf8');
		$sql = @mysql_query('SELECT * FROM ken_dongphuc');
		$rows = @mysql_num_rows($sql);
		if($rows > 0){
			while(!isset($_GET['iddp']) && $row = mysql_fetch_array($sql)){
				echo '<img src="'. $row['img'] . '" height="300px" width="300px">';
			}
			while($_GET['iddp']=='aothun' && $row = mysql_fetch_array($sql)){
				if($row['loaidongphuc'] == 'Đồng phục áo thun'){
					echo '<img src="'. $row['img'] . '" height="300px" width="300px">';
				}
			}
			while($_GET['iddp']=='aoni' && $row = mysql_fetch_array($sql)){
				if($row['loaidongphuc'] == 'Đồng phục áo nỉ'){
					echo '<img src="'. $row['img'] . '" height="300px" width="300px">';
				}
			}
			while($_GET['iddp']=='aokhoac' && $row = mysql_fetch_array($sql)){
				if($row['loaidongphuc'] == 'Đồng phục áo khoác'){
					echo '<img src="'. $row['img'] . '" height="300px" width="300px">';
				}
			}
			while($_GET['iddp']=='hocsinh' && $row = mysql_fetch_array($sql)){
				if($row['loaidongphuc'] == 'Đồng phục học sinh'){
					echo '<img src="'. $row['img'] . '" height="300px" width="300px">';
				}
			}
			while($_GET['iddp']=='khac' && $row = mysql_fetch_array($sql)){
				if($row['loaidongphuc'] == 'Đồng phục khác'){
					echo '<img src="'. $row['img'] . '" height="300px" width="300px">';
				}
			}
		}
		else{
			echo 'Không có dữ liệu';
		}
	?>
	</div>
	</div>
	
</div>
<div class="clear"></div>
<?php include('footer.php');?>