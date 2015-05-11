

                <?php include '../view/includes/header.php'; ?>
                <?php include '../view/includes/menu.php'; ?>
                <script src="../view/assets/js/deleteFriend.js"></script> 

<script type="text/javascript">
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
                                            <li class="active"><a href="#tab1">All Friends</a></li>
                                            <li><a href="#tab2">Same City</a></li>
                                            <li><a href="#tab3">Same Country</a></li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="tab1" class="tab active">
                                                

                                                <?php if(isset($friends)):?>
                                                    <?php foreach($friends as $user): ?>

                                                    <div class="friend-box">
                                                    <a href="../controller/profile.php?userId=<?php echo $user->getIdUser();?>">
                                                    <img class="profile-icon" alt="Profile picture" src="<?php echo $user->getImage();?>">
                                                    </a>

                                                    <p><?php echo ucfirst($user->getUsername());?></p>
                                                    <p><?php echo ucfirst($user->getCity());?></p>
                                                    <p><?php echo ucfirst($user->getCountry());?></p>
                                                    
                                                    <button class="btn"  value="<?php echo $user->getIdUser();?>" onclick="deleteFriend(this.value)" type="submit">Remove</button>
                                                    
                                                    </div>

                                                    <?php endforeach ?>

                                                    <?php else:?>

                        
                                                    <p>You don't have any friends for the moment.</p>



                                                <?php endif ?>

                                            </div>

                                            <div id="tab2" class="tab">


                                                <?php if(isset($cityFriends)):?>
                                                    <?php foreach($cityFriends as $user): ?>

                                                    <div class="friend-box">
                                                    <a href="../controller/profile.php?userId=<?php echo $user->getIdUser();?>">
                                                    <img class="profile-icon" alt="Profile picture" src="<?php echo $user->getImage();?>">
                                                    </a>

                                                    <p><?php echo ucfirst($user->getUsername());?></p>
                                                    
                                                    <p><?php echo ucfirst($user->getCity());?></p>
                                                    <p><?php echo ucfirst($user->getCountry());?></p>
                                                    
                                                    <button class="btn"  value="<?php echo $user->getIdUser();?>" onclick="deleteFriend(this.value)" type="submit">Remove</button>
                                                    
                                                    </div>

                                                    <?php endforeach ?>
                                                     <?php else:?>

                        
                                                    <p>You don't have any friends living in the same city.</p>


                                                <?php endif ?>                                               


                                            </div>

                                            <div id="tab3" class="tab">

                                                <?php if(isset($countryFriends)):?>
                                                    <?php foreach($countryFriends as $user): ?>

                                                    <div class="friend-box">
                                                    <a href="../controller/profile.php?userId=<?php echo $user->getIdUser();?>">
                                                    <img class="profile-icon" alt="Profile picture" src="<?php echo $user->getImage();?>">
                                                    </a>

                                                    <p><?php echo ucfirst($user->getUsername());?></p>
                                                    <p><?php echo ucfirst($user->getCity());?></p>
                                                    <p><?php echo ucfirst($user->getCountry());?></p>
                                                    
                                                    <button class="btn"  value="<?php echo $user->getIdUser();?>" onclick="deleteFriend(this.value)" type="submit" >Remove</button>
                                                    
                                                    </div>

                                                    <?php endforeach ?>
                                                     <?php else:?>

                        
                                                    <p>You don't have any friends living in the same country.</p>


                                                <?php endif ?>

                                            </div>
                                        </div>
                                    </div>


                          
                        </section>

                </div>

                
                </div>



                </body>

                </html>
