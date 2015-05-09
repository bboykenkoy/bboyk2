<footer>
	<div class="center" >
    <div class="binhluan" style="margin-top:15px; margin-right: 30px;">
        <h3 class="title" ><a href="#" style=" color:#FFF;">BÀI VIẾT MỚI</a></h3>
        <ul>
            <div class="clear"></div>
            <?php
                  @require_once('config.php');
                  @mysql_set_charset(utf8);
                  $sql = @mysql_query('SELECT * FROM ken_tintuc ORDER BY id DESC LIMIT 5');
                  $rows= mysql_num_rows($sql);
                  if($rows > 0){
                      while($arr = mysql_fetch_array($sql)){
                           echo '<li>
                             <img src="'. $arr['img'] .'" alt="tình yêu">
                             <div class="con-cmt">
                                <a href="post.php?id=' . $arr['id'] . '"> '. $arr['tieude'] .'</a>
                              </div>
                             </li>';}
           }
           else{
            echo 'Không có dữ liệu';
            }
            ?>
        </ul>
        </div>
        <div class="xemnhieu" style="margin-top:15px;">
        <h3 class="title" ><a href="#" style=" color:#FFF;">LIÊN KẾT</a></h3>
        <ul> 
        	<li>
        	<a href="http://fb.com/bboykenkoy"> Facebook: Nguyễn Chí Thành</a>
        	</li>                 	
            <li>
        	<a href="http://youtube.com/users/bboykenkoy"> Youtube: Nguyễn Chí Thành</a>
        	</li>
        	<li>
        	<a href="http://twitter.com/bboykenkoy"> Twitter: Nguyễn Chí Thành</a>
        	</li>                 	
            <li>
          <a href="http://fb.com/bboykenkoy"> Facebook: Nguyễn Chí Thành</a>
          </li>                   
            <li>
          <a href="http://youtube.com/users/bboykenkoy"> Youtube: Nguyễn Chí Thành</a>
          </li>
          <li>
          <a href="http://twitter.com/bboykenkoy"> Twitter: Nguyễn Chí Thành</a>
          </li> 
        </ul>	
        </div>
        <div class="lienket" style="margin-top:15px; float: right; width: 350px; ">
        <h3 class="title" ><a href="#" style=" color:#FFF;">LIÊN KẾT</a></h3>
        <a href="http://fb.com/bboykenkoy"><img  style=" margin-top:15px;" src="images/fb.jpg"></a>
        <a href="http://twitter.com/bboykenkoy"><img style=" margin-top:15px;" src="images/wt.jpg"></a>
        </div>
    </div>
    <div class="clear"></div>
</footer>
<div class="copyright"> <span></span></div>
</body>
</html>
