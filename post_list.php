            <?php
    @require_once('config.php');
    @mysql_set_charset(utf8);
    $sql = mysql_query('SELECT * FROM ken_tintuc ORDER BY id DESC LIMIT 4');
    $rows= mysql_num_rows($sql);
    if($rows > 0){
        while($arr = mysql_fetch_array($sql)){
        echo '<li>
            <img src="' . $arr['img'] . '">
            <div class="con-new">
                <a href="post.php?id=' . $arr['id'] . '">' . $arr['tieude'] . '</a>
                <h6 class="info"> 
                    <span class="post-date">' . $arr['motangan'] . '</span> 
                </h6>
            </div>
            </li>';}
    }
    else{
        echo 'Không có dữ liệu';
    }
?>


            