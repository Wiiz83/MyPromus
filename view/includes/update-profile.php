

                <?php include '../view/includes/header.php';  ?>
                <?php include '../view/includes/menu.php';  ?>

<script type="text/javascript">
			function validateInput ()
			{
				var valid  = new Boolean(true);

				if (document.getElementById("cname").value == "")
				{
					valid = false;
					document.getElementById("cname").style.backgroundColor = "#ff0000";
				}
				else
				{
					document.getElementById("cname").style.backgroundColor = "#99ff99";
				}

				return valid;
			}

</script>
  
    <div class="grid">
        
        <!-- Pic and info of the event -->
 
        <div class="row-main">
        	  <form  id="pizza-form" onSubmit="return validateInput();" name="theform" method="post" action="../controller/update-profile.php" enctype="multipart/form-data">
            <aside class="col-20">
                <img class="profile-pic" src="<?php echo $user->getImage();?>">
            </aside><!--

            --><section class="col-80 event-info">
                <h6> My Informations </h6>
                <div class="user-info">
                <!-- <span> <?php echo ucfirst($user->getUsername());?> </span> -->
                   <ul id="profil-info" >
                                    <li>Username: <?php echo $user->getUsername();?></li>
                                    <li>Password: <input name="newPassword" id="cname" type="password" value='Password' required /></li>
                                    <li>Email: <input name="newEmail" id="cname" type="email" value='<?php echo $user->getEmail();?>' required /></li>
                                    <li>City: <input name="newCity" id="cname" type="text" value='<?php echo $user->getCity();?>' required /></li>
                                    <li>Country: <input name="newCountry" id="cname" type="text" value='<?php echo $user->getCountry();?>' required /></li>
                                    <li>Image: <input type="file" name="userfile"></li>
                                </ul>
                                <br>
                        	<input class="submit" type="submit" name="submit" value="Update" />
     					</form>

                    </div>

            </section>

        </div>
        
        <!-- Playlist and list of people -->

  
        <div class="row-main">
            <section class="col-50">
                <h6> My Past Events </h6>
                <ul class="playlist">
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                    <li><a href="#"> Name - Artist </a></li>
                </ul>

            </section>
            <section class="col-50 my-friends">
                <h6> My Friends </h6>

            </section>

        </div>

    </div>

</body>

</html>