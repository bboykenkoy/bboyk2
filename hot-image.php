<?php
    @require_once('config.php');
    @mysql_set_charset(utf8);
    $sql = @mysql_query('SELECT * FROM ken_dongphuc');
    $rows= mysql_num_rows($sql);
    if($rows > 0 && $rows<20){
        while($arr = mysql_fetch_array($sql)){
        echo '<li class="box wow fadeInDown animated">
                                <a class="post-img">
                                    <img src="'. $arr['img'] . '">
                                   </a>
                                <span class="caption full-caption">
                                </span>
                                </li>';}
    }
    else{
        echo 'Không có dữ liệu';
    }
?>


            