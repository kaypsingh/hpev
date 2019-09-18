<?php
require_once('Query.Inc.php');
$Obj = new Query($DBName);
include('pagecodes/index.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>HPE - Vegas</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="style.css?v=<?php echo time();?>" rel="stylesheet" type="text/css">
	
	<!------ Animate Css ----->
	<link href="css/animate_new.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
 -->
	<!-- Font Awesome -->
		<script src="js/moment.js"></script>
		<script src="js/livestamp.js"></script>
	<script src="https://use.fontawesome.com/07aa5cbf86.js"></script>
	
	<!-- Owl Carousel-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" rel="stylesheet">
	
  <script  src="js/index.js"></script>
<style>
.owl-theme .owl-dots, .owl-theme .owl-nav{
display:none !important;
}
#refreshWall:hover{
opacity:1;

}
#refreshWall{
opacity:0;

}


</style>

</head>
<body>

    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center score_board">
                <div class="active_board">
                    <div class="activeusers_button section col-md-4 offset-md-4">
                        <div class="green_theme_titlebox"><img src="images/active_users_box.png"></div>
                    </div>
                    <div class="activeusers_frame">
						
							<?php   //print_r($MostActiveUsersArray);
								$users = 0;
								foreach ($MostActiveUsersArray as $User) {
									
									
								
									
								if($users < 5){
									
									//print_r($User['username']);
										$userName =$User['username'];
										
								if( $User['networkId']== 1 ) {
									$User['picture'] = "https://avatars.io/twitter/".$userName."/large";
									
								}else if($User['networkId']== 2 || $User['networkId']== 18) {
									$User['picture'] = "https://avatars.io/instagram/".$userName."/large";
									
								}else if($User['networkId']== 3) {
									$User['picture'] = "https://avatars.io/facebook/".$userName."/large";
									
								}
										
										
										
									$occur=0;
									if($User['feedId'] == 0){
										$occur = substr_count($User['picture'],"uploaded/");
										if($occur > 0){
											$picture = $User['picture'];
											$User['picture'] = $picture;
										}
									}			
									$username1 = strlen($User['username']) > 16 ? substr($User['username'],0,16)."..." : $User['username'];
									$name1 = strlen($User['name']) > 20 ? substr($User['name'],0,20)."..." : $User['name'];
				
								?>
								
								<div class="col-1-5 green_theme_box">
									<img src="images/score-final-box.png" style="width: 100%;">
									<span class="main_picture"> <img src="<?php echo $User['picture']; ?>" ></span>
									<span class="main_name"><?php echo $name1; ?></span>
									<span class="author_name">@<?php echo $username1; ?></span>
									<span class="post_number"><?php echo $User['UsersTotalPosts']; ?></span><span class="post_text">POSTS</span>
								</div>	
								<?php 
								$users++;
								}
								} ?>
                   </div>
                </div>
            </div>
        </div>
    </main><!-- /.container -->
	
    <div class="container-fluid crowd_class">
            <!--<video width="100%" autoplay loop>
                <source src="images/taggbox_car_crowd.mp4" type="video/mp4">
            </video>-->
			<!--<div class="logoss">
				<img src="images/hpe-logostand.png" style="width: 100%;">
			</div>-->
			
			
			<video  class="endlinemeet" style="display:none;"  width="100%"  preload="auto" autoplay="true"  loop="true">
							<source src="images/taggbox_car_crowd.mp4" type="video/mp4">
			</video>
					
			<!----------------- Crowd --------------------------->
			 <div id ="owl-carouselId" class="owl-carousel1"  >
				<div class="item">	 
					<video width="100%" class="video_play"  preload="auto" autoplay="true" loop="true">
							<source src="images/taggbox_car_crowd.mp4" type="video/mp4">
					</video>
				</div>	
				<div class="item">	 
					
					<video width="100%" class="video_play"  preload="auto" autoplay="true"  loop="true">
							<source src="images/taggbox_car_crowd.mp4" type="video/mp4">
					</video>
					
				</div>	
				<div class="item">	 
					<video width="100%" class="video_play"  preload="auto" autoplay="true" loop="true">
							<source src="images/taggbox_car_crowd.mp4" type="video/mp4">
					</video>
				</div>	
				<div class="item">	 
					<video width="100%" class="video_play"  preload="auto" autoplay="true" loop="true">
							<source src="images/taggbox_car_crowd.mp4" type="video/mp4">
					</video>
				</div>
				
				
				
			</div>  
			<!----------------- Crowd --------------------------->
			
			<!-------------- Banner ----------------------------->
	<img  class="endlinemeet" style="display:none;"  src="images/logoscroller.png" class="img-responsive" alt="Hpe Vegas"> </h4>
	<div class="owl-carousel2 owl-theme logoss" >
        <div class="item">
            <h4><img src="images/logoscroller.png" class="img-responsive" alt="Hpe Vegas"> </h4>
        </div>
		<div class="item">
            <h4><img src="images/logoscroller.png" class="img-responsive" alt="Hpe Vegas"> </h4>
        </div>
		  <div class="item">
            <h4><img src="images/logoscroller.png" class="img-responsive" alt="Hpe Vegas"> </h4>
        </div>
		<div class="item">
            <h4><img src="images/logoscroller.png" class="img-responsive" alt="Hpe Vegas"> </h4>
        </div>
    
    </div>
			<!-------------- Banner ----------------------------->
			
			
			<?php   $totalPost = 100;
			
				//$currentPosts = $countPosts[0]['totalPosts'];   // 40      30        70  
				$currentPosts = count($countPosts);
				
				
				//print_r($countPosts);
				
				
				//print_r("here");
				
				
			if($currentPosts>$totalPost) {
				
				$totalSteps = 10 ; 
				$currentPosts = 100; 
				$remainingPosts = 0;
				$popupright  =  60;
				$carRight  =   60;
			
			}else {
				
				
			
				 $remainingPosts = $totalPost - $currentPosts;
				$popupright  =  16  + ($currentPosts * 0.6)  ; 
				$carRight  =    ($currentPosts * 0.6) ;
				
				if($currentPosts>70) {
					$popupright = 58;
					$popuprightTail = (($currentPosts - 70 )*1.25)+19;
				}  
				
			
		
			} 
			
	
			//print_r($currentPosts ); die;
			
			//print_r("here" );
			
		?>
		
			<div class="post_popup fade" data-popupright = "<?php  echo $popupright; ?>"  style = "right:<?php  echo $popupright."px"; ?>" >
				<div class="post_popup_content">
					<div class="fixed_text_box">
						<span class="fixed_text_block_first_block">Re-charge the VENTURI Formula E car to reach the finish line</span><br><span class="fixed_text_block_first_block">with your social posts on </span>
							<span class="sociali-icons">
								<img src="images/facebook.png">
								<img src="images/linkedin.png">
								<img src="images/twitter.png">
								<img src="images/instagram.png">
							</span>
					</div>
					<div class="main_post_content">
						<div style="width: 45%;float: left;" class="mediaFileDiv">
							</div>
						<div class="post_main_image" style="width: 45%;float: left; background-repeat: no-repeat; background-size: cover;">
							<img src="" style="width: 100%;">
						</div>
						<div class="post_author_image">
							<img src="images/dummy_author.jpg" class="rounded-circle authorPicDiv" width="48px;">
						</div>
						<div class="post_author_details">
							<span class="authNameDiv">Author Name</span><br>
							<span class="author_username authUsernameDiv">@author_user_Name</span><i class="fa fa-circle" aria-hidden="true" style="font-size: 8px;padding-left: 7px;padding-right: 7px;"></i><span class="author_time timePostDiv">2 Days Ago</span>
							<div class="social_icon"><i class="fa fa-twitter" aria-hidden="true" style="font-size: 22px; float: left;color:#38A1F3;margin-top: -15px;"></i></div>
						</div>
						<div class="postcontent">
							#Hpe Discover es el entalso perfecto para que las orgaizaciae conozoecan e implusen nuevean formas de  gestion de la informacion"
						</div>
					</div>
				</div>
				
			
				<!-- <div class="post_popup_tail" data-popuptailTop ="100" data-popuptail = "100"  style = "
				<?php // if($currentPosts>90 && $currentPosts<95 ) { ?> top:320px; <?php //} ?>
				right: <?php //echo $popuprightTail."%";   ?>" ></div> -->
				
				
				<div class="post_popup_tail" ></div>
				
			</div>
    </div>
	
	
	
	<div class="container-fluid road_container">
			<div class="road">
				<div class="owl-carousel3 owl-theme logoss">
					<div class="item">
						<h4><img src="images/road_without_finishline.jpg" class="img-responsive" alt="Hpe Vegas"> </h4>
					</div>
					<div class="item">
						<h4><img src="images/road_without_finishline.jpg" class="img-responsive" alt="Hpe Vegas"></h4>
					</div>
					<div class="item">
						<h4><img src="images/road_without_finishline.jpg" class="img-responsive" alt="Hpe Vegas"></h4>
					</div>
					<div class="item">
						<h4><img src="images/road_without_finishline.jpg" class="img-responsive" alt="Hpe Vegas"></h4>
					</div>
				</div>
			</div>
		
		<div class="road_line" style=" <?php  if($currentPosts >=100) {    }else { echo "display:none;";    }    ?>  "></div>
		<div class="car"  data-carright = "<?php  echo $carRight; ?>"  style = "right:<?php  echo $carRight ."%"; ?>" >
		
		
		

			
			<img class="endlinemeet" style="display:none;"   src="images/normalspeedcar_img.png"> 
			<img class="withoutloop" src="images/normalspeedcar.gif"> <!-- slow -->
				<img class="withInloop"  style="display:none;" src="images/highspeedcar.gif"> 
				
		</div>
		
    </div>
	<div class="container-fuid progress_container" style="bottom:30px;">
		<div id="myProgress">
			<div id="myBar"  data-totalPost =  <?php echo $currentPosts; ?>  data-width = <?php echo $currentPosts; ?> style="width: <?php echo $currentPosts; ?>%;"></div>
		</div>

			<div class="post_remaning col-md-4 offset-md-4" style="bottom:30px;"  data-remainingpost = <?php echo $remainingPosts;  ?>   ><?php echo $remainingPosts;  ?> Posts Remaining to the Finish Line</div>

	</div>
	 <div class="fixed_marque_text">#HPEPartnerSummit</div>
	 <marquee style="    color: white;
    position: absolute;
    z-index: 9;
    bottom: 0;
    font-size: 18px;
    word-spacing: 2px;
    font-weight: 500;
    text-transform: normal;" >Share your experiences from HPE Discover and Global Partner Summit on your social media using the hashtag #HPEPartnerSummit. Re-charge the VENTURI Formula E Car to reach the finish line with your social posts on <i class="fa fa-facebook fa_social" aria-hidden="true"></i> <i class="fa fa-linkedin fa_social" aria-hidden="true"></i> <i class="fa fa-twitter fa_social" aria-hidden="true"></i> <i class="fa fa-instagram fa_social" aria-hidden="true"></i>  <span class="marquee_color"> The most active users will appear on the leaderboard for a chance to win cool prizes!</span></marquee>
	<button id="refreshWall"><i style ="color:white;" class="fa fa-refresh"></i></button> 
	<div  style="display: table-column;"  class="wallSec"> <button id="clearthumb"><i style ="color:white;" class="fa fa-refresh"></i></button> 
			 <?php include('sliderCode.php'); ?>
	</div>
	
	<div class="container-fluid">
		<canvas data-canvasright="" style="display:none;" id="canvas"></canvas>
	</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
-->

<script type='text/javascript' src='https://app.taggbox.com/socket.io/socket.io.js'></script>



<!------- Smoke Script --------->
<script>


(function () {
    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    window.requestAnimationFrame = requestAnimationFrame;
})();

var canvas = document.getElementById("canvas"),
    ctx = canvas.getContext("2d");

canvas.height = document.body.offsetHeight;
canvas.width = 700;

var parts = [],
    minSpawnTime = 90,
    lastTime = new Date().getTime(),
    maxLifeTime = Math.min(5000, (canvas.height/(1.5*60)*1000)),
    emitterX = canvas.width / 2,
    emitterY = canvas.height - 200,
    smokeImage = new Image();

function spawn() {
    if (new Date().getTime() > lastTime + minSpawnTime) {
        lastTime = new Date().getTime();
        parts.push(new smoke(emitterX, emitterY));
    }
}

function render() {
    var len = parts.length;
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    while (len--) {
        if (parts[len].y < 0 || parts[len].lifeTime > maxLifeTime) {
            parts.splice(len, 1);
        } else {
            parts[len].update();

            ctx.save();
            var offsetX = -parts[len].size/2,
                offsetY = -parts[len].size/2;
         
            ctx.translate(parts[len].x-offsetX, parts[len].y-offsetY);
            ctx.rotate(parts[len].angle / 180 * Math.PI);
            ctx.globalAlpha  = parts[len].alpha;
            ctx.drawImage(smokeImage, offsetX,offsetY, parts[len].size, parts[len].size);
            ctx.restore();
        }
    }
    spawn();
    requestAnimationFrame(render);
}

function smoke(x, y, index) {
    this.x = x;
    this.y = y;

    this.size = 2;
    this.startSize = 0;
    this.endSize = 30;

    this.angle = Math.random() * 100;

    this.startLife = new Date().getTime();
    this.lifeTime = 0;

    this.velY = -2;
    this.velX = 1;
}

smoke.prototype.update = function () {
    this.lifeTime = new Date().getTime() - this.startLife;
    this.angle += .5;
    
    var lifePerc = ((this.lifeTime / maxLifeTime) * 200);

    this.size = this.startSize + ((this.endSize - this.startSize) * lifePerc * .1);

    this.alpha = 1 - (lifePerc * .01);
    this.alpha = Math.max(this.alpha,0);
    
    this.x += this.velX;
    this.y += this.velY;
}

smokeImage.src = "http://somethinghitme.com/projects/particle%20test/images/smoke.png";
smokeImage.onload = function () {
    render();
}

/*
(function () {
    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    window.requestAnimationFrame = requestAnimationFrame;
})();

var canvas = document.getElementById("canvas"),
    ctx = canvas.getContext("2d");

canvas.height = document.body.offsetHeight;
canvas.width = 500;

var parts = [],
    minSpawnTime = 90,
    lastTime = new Date().getTime(),
    maxLifeTime = Math.min(5000, (canvas.height/(1.5*60)*1000)),
    emitterX = canvas.width / 95,
    emitterY = canvas.height - 200,
    smokeImage = new Image();

function spawn() {
    if (new Date().getTime() > lastTime + minSpawnTime) {
        lastTime = new Date().getTime();
        parts.push(new smoke(emitterX, emitterY));
    }
}

function render() {
    var len = parts.length;
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    while (len--) {
        if (parts[len].y < 0 || parts[len].lifeTime > maxLifeTime) {
            parts.splice(len, 1);
        } else {
            parts[len].update();

            ctx.save();
            var offsetX = -parts[len].size/2,
                offsetY = -parts[len].size/2;
         
            ctx.translate(parts[len].x-offsetX, parts[len].y-offsetY);
            ctx.rotate(parts[len].angle / 180 * Math.PI);
            ctx.globalAlpha  = parts[len].alpha;
            ctx.drawImage(smokeImage, offsetX,offsetY, parts[len].size, parts[len].size);
            ctx.restore();
        }
    }
    spawn();
    requestAnimationFrame(render);
}

function smoke(x, y, index) {
    this.x = x;
    this.y = y;

    this.size = 8;
    this.startSize = 8;
    this.endSize = 50;

    this.angle = Math.random() * 100;

    this.startLife = new Date().getTime();
    this.lifeTime = 0;

    this.velY = -2;
    this.velX = 1;
}

smoke.prototype.update = function () {
    this.lifeTime = new Date().getTime() - this.startLife;
    this.angle += .5;
    
    var lifePerc = ((this.lifeTime / maxLifeTime) * 200);

    this.size = this.startSize + ((this.endSize - this.startSize) * lifePerc * .1);

    this.alpha = 1 - (lifePerc * .01);
    this.alpha = Math.max(this.alpha,0);
    
    this.x += this.velX;
    this.y += this.velY;
}

smokeImage.src = "http://somethinghitme.com/projects/particle%20test/images/smoke.png";
smokeImage.onload = function () {
    render();
}
*/

/* window.onresize = resizeMe;
window.onload = resizeMe;
function resizeMe() {
   canvas.height = document.body.offsetHeight;
} */
</script>
<!------- Smoke Script --------->



<script type="text/javascript">




$(document).ready(function() {

	setTimeout(function(){
			var window_width =  $(window).width();
			var car_width =  $(".car").width();
			var car_move_width  = window_width - car_width;
			var step_car_moveperpost = car_move_width/100;
			var current_posts = "<?php  echo $currentPosts;  ?>";
			console.log(current_posts+" current_posts");
			if(current_posts>99) {
			}
			var step_car_move = step_car_moveperpost*current_posts;
			console.log(step_car_move + " step_car_move ");
			$("body .car").data('carright', step_car_move);
			$("body .car").css('right', step_car_move + "px");
			//console.log((79*car_width)/100 + " step_car_moveminus ");
			var getcanvasright = parseInt($('canvas').css('right'), 10);
			//console.log(getcanvasright+" getcanvasright");
			getcanvasright =  step_car_move + getcanvasright;  
			console.log(getcanvasright+" getcanvasright");
			$("body canvas").data('canvasright', getcanvasright);
			$("body canvas").css('right', getcanvasright + "px");
			var popupRightMargin = (car_width * 30)/100;
			popupRightMargin = step_car_move + popupRightMargin ;
			var popup_width = $(".post_popup").width();
			console.log((popupRightMargin+popup_width) +" -- "+(window_width));
			if((popupRightMargin+popup_width) > (window_width)) { 
				
				console.log("heewuyeuweweh");
			
				var popup_move_width  = window_width - popup_width;
				var gettailPopup = parseInt($('.post_popup_tail').css('right'), 10);
				var postCount = 32;
				var current_posts1 = current_posts;
				//if(current_posts>94) {
				//	current_posts1 = 90;
				//}
				var postCountTail = 100 - current_posts1;
				var postTobemultiply = postCount - postCountTail ;
				//console.log(gettailPopup+" gettailPopup");
				$("body .post_popup").data("popupright", popup_move_width);
				$("body .post_popup").css('right', popup_move_width + "px");
                gettailPopup = gettailPopup + (step_car_moveperpost*postTobemultiply);
				//if(postCount>postCountTail) {
					$("body .post_popup_tail").data("popuptail", gettailPopup);
					$("body .post_popup_tail").css('right', gettailPopup + "px");
				//}
			}else {
				$("body .post_popup").data("popupright", popupRightMargin);
				$("body .post_popup").css('right', popupRightMargin + "px");
			}
			
		
	}, 3000);
	
    var socket = io.connect('https://app.taggbox.com');
    var wallUrl = "<?php echo $wallId;?>";
    socket.on(wallUrl, function(data) {
        //console.log("heree");
        var latestdataurl = "<?php echo $SiteUrl;?>ajax/ajax.php?synced=" + data;
        $.ajax({
            url: latestdataurl,
            cache: false,
            dataType: "json",
            timeout: (1000 * 60 * 7),
            success: function(response) {
                if (response.postprependData) {
                    $(response.postprependData).insertAfter("#clearthumb");
                }

                if (response.activeuserHtml) {
                    $(".activeusers_frame").html(response.activeuserHtml);
                    var hjh = $(".activeusers_frame").html();
                    //$(".green_theme_box").addClass('tracking-in-contract-bck-top animated');
                }

            }
        });
    });
    var i2 = 0;
    var animateMonser = 0;
    var addThumb = 1;
    var thumbCount = 1;
    setInterval(function() {
        var thumbFile = 'https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png';
        var total = $('.wallSec .postItem').length;
        if (i2 >= total) {
            i2 = 0;
            //animateMonser = 1;
        }
        if ($('.wallSec .newpost').hasClass('newpostCheck')) {
            i2 = 0;
        }
        var dataDiv = $('.wallSec .postItem:eq(' + i2 + ')');
        if (dataDiv.hasClass('newpost') && total<=101) {

            var getProgressWidth = $("#myBar").data('width');
            getProgressWidth = getProgressWidth + 1;
            $("#myBar").data('width', getProgressWidth);
            $("#myBar").css('width', getProgressWidth + "%");
     
            var remainingpost = $(".post_remaning").data('remainingpost');
            remainingpost = remainingpost - 1;
            if (remainingpost >= 0) {
				var postsText = "Posts";
				 if (remainingpost ==1) {
					 postsText = "Post";
				 }
                $(".post_remaning").html(remainingpost +" "+postsText+"  Remaining to the Finish Line")
                $("body .post_remaning").data("remainingpost", remainingpost);
            }
            var currentPosts1 = $('.wallSec .postItem').length;
            var currentPosts = $('.wallSec .postItem').not('.newpost').length;
			
			console.log(currentPosts+" currentPostschecckjk");
			
			
           // if (currentPosts >= 100) {
               // $(".road_line").show();
           // }
            if (currentPosts <= 100) {
				var window_width =  $(window).width();
				var car_width =  $(".car").width();
				var car_move_width  = window_width - car_width;
				var step_car_moveperpost = car_move_width/100;
				var step_car_move = step_car_moveperpost*currentPosts;
				var getCarRight = $("body .car").data('carright');
				var popup_width = $(".post_popup").width();
				var getpostPopup12  = $(".post_popup").data('popupright');
				var popupRightMargin = getpostPopup12;
				getCarRight = getCarRight + step_car_moveperpost;
				$("body .car").data('carright', getCarRight);
                $("body .car").css('right', getCarRight + "px");
                $("body .myBar").css('width', getCarRight + "%");
				getpostPopup12 = getpostPopup12 + step_car_moveperpost;
				var getcanvasright = parseInt($('canvas').css('right'), 10);
				getcanvasright = getcanvasright + step_car_moveperpost;
				$("canvas").data("canvasright", getcanvasright);
						$("canvas").css('right', getcanvasright + "px");
				//console.log(getcanvasright+" getcanvasright");
				var gettailPopup = parseInt($('.post_popup_tail').css('right'), 10);
				//console.log(gettailPopup+" gettailPopup");
				if((popupRightMargin+popup_width) > (window_width)) { 
					//console.log(currentPosts+" currentPosts");
					//if(currentPosts<95) {
						var popup_move_width  = window_width - popup_width;
						//console.log(gettailPopup+" gettailPopup");
						gettailPopup = gettailPopup + step_car_moveperpost;
						//console.log(getpostPopup12 + " getpostPopup12");
						//console.log(gettailPopup+" gettailPopup1");
						$("body .post_popup_tail").data("popuptail", gettailPopup);
						$("body .post_popup_tail").css('right', gettailPopup + "px");
					//}
				}else {
					$("body .post_popup").data("popupright", getpostPopup12);
					$("body .post_popup").css('right', getpostPopup12 + "px");
				}

            }


            var $owl = $('.owl-carousel1');
            var $owl2 = $('.owl-carousel2');
            var $owl3 = $('.owl-carousel3');
			
			 if (currentPosts >= 99) {

			 }else {
			
				var count = 0;
				//$owl.trigger('next.owl.carousel', [5000]);
				$owl.trigger('next.owl.carousel', [5000]);
						$owl2.trigger('next.owl.carousel', [5000]);
						$owl3.trigger('next.owl.carousel', [5000]);
				 var interval = setInterval(function() {
						//console.log('count : '+count);
						$owl.trigger('next.owl.carousel', [5000]);
						$owl2.trigger('next.owl.carousel', [5000]);
						$owl3.trigger('next.owl.carousel', [5000]);
						if(count == 6)
						{
							clearInterval(interval);
						}
						count++;
					}, 700);

			 }
			// console.log(currentPosts);
			// console.log("Imhereerrere");
			 $("body #canvas").show();
			  setTimeout(function() {
						$("body #canvas").hide();
					}, 9500);
			 if (currentPosts >= 99) {
					$(".road_line").show();
					$(".endlinemeet").show();
					$(".withInloop,.withoutloop,.owl-carousel1,.owl-carousel2").hide();
				 
			 }else {
					$(".withoutloop").hide();
					$(".withInloop").show();
					   setTimeout(function() {
						$(".withInloop").hide();
						$(".withoutloop").show();
					}, 9500);
					
			 }
            $('.wallSec .postItem').removeClass('newpostCheck');
        }
        $('.wallSec .postItem').removeClass('active');
        var modalDiv = $('.post_popup');
        //var modalDiv = $('.modalDiv .taggModalContent');
        $('.post_popup').removeClass('modal-only-text modal-only-image modal-text-image');
        modalDiv.find('.postFileDiv').css('background-image', 'none').empty();
        modalDiv.find('.contentDiv').empty();

        if (total <= 0) {
            addThumb = 0;
        }

        var dataType = dataDiv.attr('data-type');
        var postId = dataDiv.attr('data-post-id');
        var network = dataDiv.find('.postNetwork').attr('data-network');
        var networkIcon = dataDiv.find('.postNetwork').attr('data-networkIcon');
        var authorName = dataDiv.find('.authorDetails').attr('data-name');
        var authorUsername = dataDiv.find('.authorDetails').attr('data-username');
        var timePost = dataDiv.find('.authorDetails span').text();
        var picture = dataDiv.find('p.authorPicture').text();
        var content = dataDiv.find('p.content').text();

		modalDiv.find('.post_main_image').empty();
        if (dataType == 1) {
            $('.post_popup').addClass('modal-only-text');
            modalDiv.find('.post_main_image').css('background-image', 'none');
            thumbFile = picture;
        }
        if (dataType == 2 || dataType == 3) {
            $('.post_popup').addClass('modal-only-image');
        }
        if (dataType == 4 || dataType == 5) {
            $('.post_popup').addClass('modal-text-image');
        }
        if (dataType != 1) {
            var postFile = dataDiv.find('.postFile').text();
			var postFileThumb = dataDiv.find('.postFileThumb').text();
            modalDiv.find('.post_main_image').css('background-image', 'url(' + postFileThumb + ')');
            if (dataType == 2 || dataType == 4) {
                modalDiv.find('.post_main_image').html('<img src="' + postFile + '" alt="" class="img-responsive">');
            }
            thumbFile = postFile;
        }
		//console.log(dataType);
        if (dataType == 3 || dataType == 5) {
            var mediaFile = dataDiv.find('.mediaFile').html();
			modalDiv.find('.post_main_image img').hide();
            modalDiv.find('.post_main_image').html(mediaFile);
            modalDiv.find("video").each(function(){
			modalDiv.find("video").removeAttr("height");
            this.play();
            });
        }
        dataDiv.addClass('popshow active').removeClass('newpost');

        if (postFile == null || postFile == 'undefined') {
            modalDiv.find('.post_main_image img').hide();
        } else {
            setTimeout(function() {
                modalDiv.find('.post_main_image img').addClass('text-focus-in animated').show();;
            }, 100);

        }

        setTimeout(function() {
            modalDiv.find('.post_main_image img').removeClass('text-focus-in animated');
        }, 6000);


        modalDiv.find('img.authorPicDiv').attr('src', picture);
        modalDiv.find('.contentDiv,.postcontent').text(content);

        modalDiv.find('.social_icon').attr('data-network', network);
        modalDiv.find('.social_icon').html('<i class="fa ' + networkIcon + '" style="font-size: 22px; float: left;color:#38A1F3;margin-top: -15px;" ></i>');
        modalDiv.find('.authNameDiv').text(authorName);
        modalDiv.find('.authUsernameDiv').text('@' + authorUsername);
        modalDiv.find('.timePostDiv').text(timePost);
        if ($('.wallSec .postItem').hasClass('newpostCheck')) {
            $('.wallSec .postItem').removeClass('newpostCheck');
        }
        if (total > 0) {
            modalDiv.removeClass('fade').addClass('in animated zoomInDown');
        }
        var thumbFile = dataDiv.find('p.thumbImg').text();
			setTimeout(function() {
			 modalDiv.removeClass('in animated zoomInDown').addClass('fade');
				modalDiv.find('.mediaFileDiv').empty();
				thumbCount++;
				//$(".green_theme_box").addClass('tracking-in-contract-bck-top animated');
			}, 10000);

        i2++;

    }, 20000);
});
$('#refreshWall').click(function() {
    var refreshWallUrl = "<?php echo $SiteUrl;?>ajax/ajax.php?refreshWall=<?php echo $wallId;?>";
    //console.log(refreshWallUrl);
    $.ajax({
        url: refreshWallUrl,
        method:'GET',
        cache: false,
       // dataType: "json",
        success: function(response) {
            /*setTimeout(function(){// wait for 5 secs(2)
				location.reload(); // then reload the page.(3)
			}, 5000); */
			//console.log('test');
            window.location.reload();
        }
    });
    return false;
});
</script> 


<script>
	$(document).ready(function () {
	var autoplay = true;
	var currentPosts = "<?php  echo $currentPosts; ?>";
    if (currentPosts > 99) {
	   autoplay = false;  
    }
	var wallUrl = "<?php echo $wallId;?>";
	var owl1_1 = $('.owl-carousel1');
		owl1_1.owlCarousel({
			items: 1,
			slideBy:1,
			rtl: true,
			loop: true,
			 merge:true,
			margin:0,
			video:true,
			autoplay: autoplay,
			slideTransition: 'linear',
			autoplayTimeout: 0,
			autoplaySpeed: 15000,
			  autoplayHoverPause: true,
			//smartSpeed: 500,
			//singleItem: true,
			 afterAction: function(current) {
				 console.log("video");
				current.find('video').get(0).play();
			}
     });		
    var owl1_2 = $('.owl-carousel2');
    owl1_2.owlCarousel({
        items: 1,
		slideBy:1,
        rtl: true,
        loop: true,
        margin: 0,
		//slideBy:16,
        autoplay: autoplay,
        slideTransition: 'linear',
        autoplayTimeout: 0,
        autoplaySpeed: 15000,
        autoplayHoverPause: true

    });
    var owl1_3 = $('.owl-carousel3');
    owl1_3.owlCarousel({
        items: 1,
		slideBy:1,
        rtl: true,
        loop: true,
        margin: 0,
        autoplay: autoplay,
        slideTransition: 'linear',
        autoplayTimeout: 0,
        autoplaySpeed: 15000,
        autoplayHoverPause: true

    });
	
});
	</script>

</body>
</html>