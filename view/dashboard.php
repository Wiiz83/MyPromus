<?php include '../view/includes/header.php'; ?>
<?php include '../view/includes/menu.php'; ?>
<script type="text/javascript" src="../view/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../view/assets/js/main.js"></script>
<link href="../view/assets/stylesheets/owl.carousel.css" rel="stylesheet">
<link href="../view/assets/stylesheets/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="../view/assets/stylesheets/lightslider.css"/>
<script src="../view/assets/js/lightslider.js"></script>
<?php
            if(isset($events)):
            foreach($events as $event):
            echo "<style type='text/css'>
 .pgwSlideshow::after {background: url(".$event->getImage().") no-repeat !important; }
</style>
"; endforeach; 

elseif(isset($events as $event)==1): echo "
  <style type='text/css'>
  #friend-bloc { height: 170px !important; }
</style>
  ";
  
else: echo "
<style type='text/css'>
 .pgwSlideshow::after {background: url('../view/assets/images/slider-default.png') no-repeat !important; margin-left: 0px !important;} 
                .pgwSlideshow .ps-list{display: none !important;}
                #friend-bloc { height: 270px; }
</style>
"; endif; ?>
<style>

</style>
<script type="text/javascript">
  $(document).ready(function() {
    $("#lightSlider").lightSlider(); 
  });
  $(window).load(function(){
 $('#image-gallery li').find('img').each(function(){
  var imgClass = (this.width/this.height > 1) ? 'wide' : 'tall';
  $(this).addClass(imgClass);
 })
})
</script>
<div class="grid">
  <section class="row">
  <div id="event-bloc">
    <h6>Your Events Summary</h6>
    <div class="item">
      <div class="clearfix" style="max-width: 100%;">
        <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
          <?php if(isset($events)): ?>
          <?php foreach($events as $event): ?>
          <li data-thumb="<?php echo $event->getImage(); ?>">
           <!-- <iframe class="content-left" src="https://embed.spotify.com/?uri=spotify%3Auser%3Aqlmhuge%3Aplaylist%3A6Df19VKaShrdWrAnHinwVO&theme=white" width="300" height="380" frameborder="0" allowtransparency="true">
          </iframe> --> 
          <ul id="event-infos">
            <li id="event-name">
            <p>
<?php echo $event->
              getName(); ?>
            </p>
            </li>
            <li id="event-owner">
            <p>
<?php echo 'By ' ,$event->
              getAdminName(); ?>
            </p>
            </li>
            <li id="event-date">
            <p>
<?php echo 'The ',$event->
              getDate(),' at ',$event->getTime(); ?>
            </p>
            </li>
            <li id="event-place">
            <p>
<?php echo 'In ',$event->
              getPlace(); ?>
            </p>
            </li>
            <li id="event-button"><input class="btn" type="submit" onclick="window.location.href='../controller/event.php?eventId=<?php echo $event->getIdEvent(); ?>'" value="Check Out" name="submit"></li>
          </ul>
          </li>
          <?php endforeach ?>
          <?php else: ?>
                  
                  <p><font color="black">You don't have any incoming event for the moment.</font></p>


          <?php endif ?>
        </ul>
      </div>
    </div>
  </div>
  <div id="friend-bloc">
    <h6>Your Friends Activity</h6>
    <div id="friends-column">
      <ul>
        <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
        <p>
           Lucas Uzan go to Yolo Party
        </p>
        </li>
        <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
        <p>
           Lucas Uzan go to Yolo Party
        </p>
        </li>
        <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
        <p>
           Lucas Uzan go to Yolo Party
        </p>
        </li>
        </li>
        <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
        <p>
           Lucas Uzan go to Yolo Party
        </p>
        </li>
      </ul>
    </div>
  </div>
  <div id="tendance-bloc">
    <h6>The Popular Events</h6>
    <div id="incoming">
      <div class="item tendance">

        <img src="../view/assets/images/event-example.png" alt="">
        <div class="textbox">
        <a href=""><p class="text">Ultra Korea</p></a>
        <a href=""><p class="text">By Audric Manaud</p></a>
        <p class="text">17/07/2015</p>
        <p class="text">Cork</p>
        </div>
         


  </div>
</div>
</body>
</html>
<!-- 
<script type="text/javascript">
$(document).ready(function() {
    $('.pgwSlideshow').pgwSlideshow();
});
</script>
<div class="grid">
    <section class="row">
    <div id="event-bloc">
        <h6>Your Events Summary</h6>
        <ul id="event-info">
            <li id="title">
               <?php if(isset($events)): ?>
                        <?php foreach($events as $event): ?>
                <a href="../controller/event.php?eventId=<?php echo $event->getIdEvent(); ?>">
                <p><?php echo $event->getName(); ?></p>
                </a>
                </li>
            <li id="playlist">
                <iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Aqlmhuge%3Aplaylist%3A6Df19VKaShrdWrAnHinwVO&theme=white" width="300" height="380" frameborder="0" allowtransparency="true">
            </iframe>
            </li>
        </ul>
        <ul class="pgwSlideshow" >
                <li><img src="<?php echo $event->getImage(); ?>" alt="<?php echo $event->getPlace(); ?>"  data-description="<?php echo $event->getDate(),' at ',$event->getTime(); ?>"></li>
                <?php endforeach ?>
                <?php else: ?>
                       <a href="../controller/create-event.php">
                      <p>LET'S CREATE MY FIRST EVENT</p>
                     </a>
                    </li>
                </ul>
                <ul class="pgwSlideshow" >
                <li><img src="../view/assets/images/event-example.png"></li>
                <div class="ps-list" style="display:none !important;">
                <?php endif ?>    
        </ul>
    </div>
    <div id="friend-bloc">
        <h6>Your Friends Activity</h6>
        <div id="friends-column">
            <ul>
                <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
                <p>
                    Lucas Uzan go to Yolo Party
                </p>
                </li>
                <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
                <p>
                    Lucas Uzan go to Yolo Party
                </p>
                </li>
                <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
                <p>
                    Lucas Uzan go to Yolo Party
                </p>
                </li>
                </li>
                <li><a href="../controller/profile.php"><img src="../view/assets/images/event-example.png"/></a>
                <p>
                    Lucas Uzan go to Yolo Party
                </p>
                </li>
            </ul>
        </div>
    </div>
    <div id="tendance-bloc">
        <h6>The Popular Events</h6>
            <div id="incoming">
                                         <div class="item tendance">
                                        <a href=""><img class="event-pic" src="../view/assets/images/event-example.png" alt="Event picture"></a>
                                        <br/> <br/>
                                         <span class="event-name"> YOLO PARTY </span>
                                                 <span><i>24 People Coming<i></span>
                                                <p><b>Owner: </b>LUCAS</p>
                                                <p><b>Date:</b> 17/07/1949</p>
                                                <p><b>Place:</b> Cork </p>
                                      </div>
                                    </div>
                                    <div class="customNavigation">
                                                <span class="prev prev-inco"></span>
                                                 <span class="next next-inco"></span>
                                    </div>
    </div>
</div>
</body>
</html> -->