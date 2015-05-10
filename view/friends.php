

                <?php include '../view/includes/header.php'; ?>
                <?php include '../view/includes/menu.php'; ?>


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
                                                
                                                <section class="col-25">
                                                    <div class="friend-box">
                                                    <a href="../controller/profile.php?userId=32">
                                                    <img class="profile-icon" alt="Profile picture" src="../view/assets/userImages/default.jpg">
                                                    </a>
                                                    <p>ferran12</p>
                                                    <p>jhg, hgfjh</p>
                                                    <span id="32">
                                                    <button class="btn" value="32" onclick="sendFriendRequest(this.value)" type="submit">Remove</button>
                                                    </span>
                                                    </div>
                                                    </section>

                                            </div>

                                            <div id="tab2" class="tab">
                                                <p>Tab #2 content goes here!</p>
                                                <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
                                            </div>

                                            <div id="tab3" class="tab">
                                                <p>Tab #3 content goes here!</p>
                                                <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
                                            </div>

                                            <div id="tab4" class="tab">
                                                <p>Tab #4 content goes here!</p>
                                                <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
                                            </div>
                                        </div>
                                    </div>


                          
                        </section>

                </div>

                
                </div>



                </body>

                </html>
