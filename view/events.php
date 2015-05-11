


                <?php include '../view/includes/header.php'; ?>
                <?php include '../view/includes/menu.php'; ?>

<script type="text/javascript" src="../view/assets/js/owl.carousel.min.js"></script>

    <link href="../view/assets/stylesheets/owl.carousel.css" rel="stylesheet">
    <link href="../view/assets/stylesheets/owl.theme.css" rel="stylesheet">
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


            <script type="text/javascript">
            $(document).ready(function() {
             
              var owl1 = $("#incoming");
             
              owl1.owlCarousel({
                  items : 5, //10 items above 1000px browser width
                  itemsDesktop : [1000,5], //5 items between 1000px and 901px
                  itemsDesktopSmall : [900,3], // betweem 900px and 601px
                  itemsTablet: [600,2], //2 items between 600 and 0
                  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
              });
             
              // Custom Navigation Events
              $(".next-inco").click(function(){
                owl1.trigger('owl.next');
              })
              $(".prev-inco").click(function(){
                owl1.trigger('owl.prev');
              })



              var owl2 = $("#created");
             
              owl2.owlCarousel({
                  items : 5, //10 items above 1000px browser width
                  itemsDesktop : [1000,5], //5 items between 1000px and 901px
                  itemsDesktopSmall : [900,3], // betweem 900px and 601px
                  itemsTablet: [600,2], //2 items between 600 and 0
                  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
              });
             
              // Custom Navigation Events
              $(".next-created").click(function(){
                owl2.trigger('owl.next');
              })
              $(".prev-created").click(function(){
                owl2.trigger('owl.prev');
              })
             

             var owl3 = $("#past");
             
              owl3.owlCarousel({
                  items : 5, //10 items above 1000px browser width
                  itemsDesktop : [1000,5], //5 items between 1000px and 901px
                  itemsDesktopSmall : [900,3], // betweem 900px and 601px
                  itemsTablet: [600,2], //2 items between 600 and 0
                  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
              });
             
              // Custom Navigation Events
              $(".next-past").click(function(){
                owl3.trigger('owl.next');
              })
              $(".prev-past").click(function(){
                owl3.trigger('owl.prev');
              })
             
             
            });

 function bgenScroll() {
         if (window.pageYOffset!= null){
          st=window.pageYOffset+'';
         }
         if (document.body.scrollWidth!= null){
          if (document.body.scrollTop){
             st=document.body.scrollTop;
          }
          st=document.documentElement.scrollTop;
         }
          setTimeout('window.scroll(0,st)',10);
        }

        jQuery(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});

            </script>
      
           
            <div class="grid grid-friends">
                        <section class="row">

                               
                                     <div class="tabs">
                                        <ul class="tab-links">
                                            <li class="active"><a href="#tab1">Incoming</a></li>
                                            <li><a href="#tab2">Created</a></li>
                                            <li><a href="#tab3">Past</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="tab1" class="tab active">
                                                

                                                <section class="col-100">
                                                      <div id="incoming">
                                                        
                                                        <?php if(isset($events)): ?>

                                                        <?php foreach($events as $event): ?>
                                                        <div class="item">

                                                          <a href="../controller/event.php?eventId=<?php echo $event->getIdEvent(); ?>"><img class="event-pic" src="<?php echo $event->getImage(); ?>" alt="Event picture"></a>
                                                          <br/> <br/>
                                                           <span class="event-name"> <?php echo $event->getName(); ?> </span>
                                                          <p><b>Owner: </b> <?php echo ucfirst($event->getAdminName()); ?></p>
                                                          <p><b>Date:</b> <?php echo $event->getDate(); ?>  <?php echo $event->getTime(); ?></p>
                                                          <p><b>Place:</b> <?php echo $event->getPlace(); ?> </p>

                                                        </div>
                                                        
                                                        <?php endforeach ?>


                                                      </div>
                                                       
                                                      <div class="customNavigation">
                                                                  <span class="prev prev-inco"></span>
                                                                   <span class="next next-inco"></span>

                                                      </div>

                                                        <?php else: ?>

                                                       <p style="width: 350px;">You don't have any incoming event for the moment.</p>



                                                        <?php endif ?>

                                                      

                                              </section>
                                            </div>

                                            <div id="tab2" class="tab">


                                               <section class="col-100">
                                                       <div id="created">


                                                         <?php if(isset($myEvents)): ?>

                                                          <?php foreach($myEvents as $event): ?>
                                                          <div class="item">

                                                            <a href="../controller/event.php?eventId=<?php echo $event->getIdEvent(); ?>"><img class="event-pic" src="<?php echo $event->getImage(); ?>" alt="Event picture"></a>
                                                            <br/> <br/>
                                                             <span class="event-name"> <?php echo $event->getName(); ?> </span>
                                                            <p><b>Owner: </b><?php echo ucfirst($event->getAdminName()); ?></p>
                                                            <p><b>Date:</b> <?php echo $event->getDate(); ?>  <?php echo $event->getTime(); ?></p>
                                                            <p><b>Place:</b> <?php echo $event->getPlace(); ?> </p>

                                                          </div>

                                                          <?php endforeach ?>


                                                        </div>
                                                         
                                                        <div class="customNavigation">
                                                                    <span class="prev prev-inco"></span>
                                                                     <span class="next next-inco"></span>

                                                        </div>

                                                          <?php else: ?>

                                                         <p style="width: 350px;">You don't have any created event for the moment.</p>



                                                          <?php endif ?>


                                                </section>
                                            </div>

                                            <div id="tab3" class="tab">

                                             <section class="col-100">
                                  <div id="past">


                                       <?php if(isset($pastEvents)): ?>

                                      <?php foreach($pastEvents as $event): ?>
                                      <div class="item">

                                        <a href="../controller/event.php?eventId=<?php echo $event->getIdEvent(); ?>"><img class="event-pic" src="<?php echo $event->getImage(); ?>" alt="Event picture"></a>
                                        <br/> <br/>
                                         <span class="event-name"> <?php echo $event->getName(); ?> </span>
                                        <p><b>Owner: </b> <?php echo ucfirst($event->getAdminName()); ?></p>
                                        <p><b>Date:</b> <?php echo $event->getDate(); ?>  <?php echo $event->getTime(); ?></p>
                                        <p><b>Place:</b> <?php echo $event->getPlace(); ?> </p>

                                      </div>
                                      <?php endforeach ?>


                                    </div>
                                     
                                    <div class="customNavigation">
                                                <span class="prev prev-inco"></span>
                                                 <span class="next next-inco"></span>

                                    </div>

                                      <?php else: ?>

                                     <p style="width: 350px;">You don't have any past event for the moment.</p>



                                      <?php endif ?>


                            </section>

                                            </div>
                                        </div>
                                    </div>


                          
                        </section>

                </div>

                
                </div>



                </body>

                </html>

