<meta charset="utf-8">
<?php @require_once('config.php');?>
<?php include('header.php');?>
<div class="clear"></div>
<?php
    @require_once('config.php');
    $id = $_GET['id'];
    @mysql_set_charset(utf8);
    $sql = mysql_query('SELECT * FROM ken_tintuc WHERE id = "'.$id.'"');
    $rows= mysql_num_rows($sql);
    if($rows > 0 && $arr = mysql_fetch_array($sql)){
        echo '
            <div class="con-new1">
                <a href="post.php?id=' . $arr['id'] . '">' . $arr['tieude'] . '</a>
                <h6 class="info"> 
                    <span class="post-date">' . $arr['noidung'] . '</span> 
                </h6>
            </div>
            ';
    }
    else{
        echo 'Không có dữ liệu';
    }
?>


            
	
<div class="clear"></div>
<?php include('footer.php');?>