<?php include("header.php");?>    
<section>
	<div class="center">
    	<div class="radio">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/nemo.jpg" data-thumb="images/nemo.jpg" alt="" />
                <img src="images/nemo1.jpg" data-thumb="images/nemo1.jpg" alt=""/>
                <img src="images/nemo2.jpg" data-thumb="images/nemo2.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/nemo3.jpg" data-thumb="images/nemo3.jpg" alt=""/>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
        $('#slider').nivoSlider();
        });
    </script>
        </div>
        <div class="fan-page" style="text-align: center; background: none; ">
         <h3 class="fan" >
          <a href="#"> FanPage</a>
         </h3>
		 <div class="fb-like-box" style=" margin-top: 5px;" data-href="https://www.facebook.com/hiphopninhbinh" data-width="375" data-height="395" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
        </div>
        <div class="clear"></div>
        <hr  width="100%" align="center" /> 
        <div class="clear"></div>
        <div >
        <a class="send" href="dongphuc.php?iddp=aothun"> <img class="wow fadeInLeft animated animated" style="float: left; margin: 0 11px 30px 30px;" src="images/category/1.png" height="200px" width="200px"> </a>
        <a class="send" href="dongphuc.php?iddp=aoni"> <img class="wow fadeInLeft animated animated" style="float: left; margin: 0 11px 30px 10px;" src="images/category/2.png" height="200px" width="200px"> </a>
        <a class="send" href="dongphuc.php?iddp=aokhoac"> <img class="wow fadeInLeft animated animated" style="float: left; margin: 0 11px 30px 10px;" src="images/category/3.png" height="200px" width="200px"> </a>
        <a class="send" href="dongphuc.php?iddp=hocsinh"> <img class="wow fadeInRight animated animated" style="float: left; margin: 0 11px 30px 10px;" src="images/category/4.png" height="200px" width="200px"> </a>
        <a class="send" href="dongphuc.php?iddp=khac"> <img class="wow fadeInRight animated animated" style="float: left; margin: 0 11px 30px 10px;" src="images/category/5.png" height="200px" width="200px"> </a>
        </div>
        <div class="clear"></div>
        <div class="cfs-new wow fadeInLeft animated animated">
        <h3 class="title"><a href="#"><i class="fa fa-tasks"></i> TIN TỨC MỚI</a></h3>
        <ul>
            <div class="clear"></div>
        	<?php include("post_list.php");?>
        </ul>
        </div>
        <div class="albums wow fadeInDown animated animated">
        <h3 class="title"><a href="#"><i class="fa fa-star-half-o"></i> ĐỒNG PHỤC ĐẸP</a></h3>
        <div><img src="images/nemo.jpg" alt="Hiphop is my life"></div>
        <h4><a href="#">ĐỒNG PHỤC NỔI BẬT</a></h4>
        <ul>
        	<li><a href="dongphuc.php"><img src="images/nemo1.jpg"></a>
				
			</li>
            <li><a href="dongphuc.php"><img src="images/nemo3.jpg"></a>
			
			</li>
        </ul>
        </div>
        <div class="news wow fadeInRight animated animated">
        <h3 class="title" style="margin-bottom: 10px;"><a href="#"><i class="fa fa-newspaper-o"></i> VIDEO</a></h3>
            <div class="fb-video" data-href="https://www.facebook.com/bboykenkoy/videos/807111169378828/?pnref=story" data-width="500">
            <div class="fb-xfbml-parse-ignore"><blockquote cite="/bboykenkoy/videos/807111169378828/"><a href="/bboykenkoy/videos/807111169378828/"></a>
            <p>B&amp;W</p>Posted by <a href="https://www.facebook.com/bboykenkoy">Nguyễn Chí Thành</a> on 17 Tháng 4 2015</blockquote></div></div>

            <div class="fb-video" style="margin-top: 20px;" data-href="https://www.facebook.com/bboykenkoy/videos/vb.100002398569411/667938269962786/?type=3&amp;theater" data-width="500">
            <div class="fb-xfbml-parse-ignore"><blockquote cite="/bboykenkoy/videos/667938269962786/"><a href="/bboykenkoy/videos/667938269962786/"></a>
            <p></p>Posted by <a href="https://www.facebook.com/bboykenkoy">Nguyễn Chí Thành</a> on 20 Tháng 7 2014</blockquote>
            </div></div>
        </div>
        <div class="clear"></div>
        <div class="vedep adv clear">
                    <div id="slider-featured" class="slider-featured">
                        <h3 class="title"><a href="#"><i class="fa fa-star-half-o"></i> MẪU ĐỒNG PHỤC IN</a></h3>
                        <a class="buttons next" href="">right</a>
                        <a class="buttons prev" href="">left</a>
                        <div class="viewport">
                            <ul class="overview">
                                <?php include("hot-image.php");?>
                            </ul>
                        </div>
                    </div>
                </div>
        <div class="about">
        <h3 class="title"><a href="#"><i class="fa fa-users"></i> VỀ CHÚNG TÔI</a></h3>
        <h2>Nguyễn Chí Thành</h2>
        <p>+ Bboy: Ken Kòy<br>
           + Mail: chithanh.ptit@gmail.com<br>
               or: admin@ninhbinhpro.com<br>
           + Phone: 01684.51.51.61 || 0937.265.196</p>
        </div>
    </div>
  <div class="clear"></div>
</section>
<div class="clear"></div>

<?php include("footer.php");?>


