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

      $sum =count($events);
             if(isset($events)):
            foreach($events as $event):
            echo "<style type='text/css'>
     .pgwSlideshow::after {background: url(".$event->getImage().") no-repeat !important; }
    </style>
    "; endforeach; 

    else: echo "
    <style type='text/css'>
     .pgwSlideshow::after {background: url('../view/assets/images/slider-default.png') no-repeat !important; margin-left: 0px !important;} 
                    .pgwSlideshow .ps-list{display: none !important;}
                    #friend-bloc { height: 270px; }
    </style>
    "; endif; 


?>
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
            <img class="content-left" src="<?php echo $event->getImage(); ?>">
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
    <div class="item tendance">

        <img src="../view/assets/images/event-example.png" alt="">
        <div class="textbox">
        <a href=""><p class="text">Ultra Korea</p></a>
        <a href=""><p class="text">By Audric Manaud</p></a>
        <p class="text">17/07/2015</p>
        <p class="text">Cork</p>
        </div>
         
  </div>
    <div class="item tendance">

        <img src="../view/assets/images/event-example.png" alt="">
        <div class="textbox">
        <a href=""><p class="text">Ultra Korea</p></a>
        <a href=""><p class="text">By Audric Manaud</p></a>
        <p class="text">17/07/2015</p>
        <p class="text">Cork</p>
        </div>
         
  </div>
    <div class="item tendance">

        <img src="../view/assets/images/event-example.png" alt="">
        <div class="textbox">
        <a href=""><p class="text">Ultra Korea</p></a>
        <a href=""><p class="text">By Audric Manaud</p></a>
        <p class="text">17/07/2015</p>
        <p class="text">Cork</p>
        </div>
         
  </div>
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
</div>
</body>
</html>
