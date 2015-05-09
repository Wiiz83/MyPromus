

                <?php include '../view/includes/header.php'; ?>
                <?php include '../view/includes/menu.php'; ?>
                <script src="../view/assets/js/main.js"></script> 



                <div class="grid">
                    

                    <section class="row">  
                        <div class="panel">
                            <h3> Event information </h3>
                            <form action="../controller/create-event.php" method="POST" class="create-event-form" enctype="multipart/form-data">
                                <fieldset class="info-group">
                                    
                                    <section class="col-1-2">
                                        <label>
                                            Name
                                            <input type="text" name="name" required>

                                        </label>
                                    </section><!--
                                    --><section class="col-1-2">

                                        <label>
                                            Place
                                            <input type="text" name="place" required>
                                    
                                        </label>
                                    </section><!--
                                    
                                    --><section class="col-1-2">
                                        <label>
                                            Date
                                            <input type="date" name="date" placeholder="YYYY-MM-DD" maxlength="10" required>
                                        </label>
                                    </section><!--

                                    --><section class="col-1-2">

                                        <label>
                                            Time
                                            <input type="time" name="time" placeholder="HH:MM" maxlength="5" required><br>

                                        </label>
                                    </section>

                                    

                                    <label>
                                        Picture
                                        <input type="file" name="userfile">
                                    </label>    

                                    <label>
                                        Description

                                        <textarea name="description">Tell us something about your event.</textarea>


                                    </label>


                                        <label>
                                            Friends

                                            <select id="friends-list" name="friends">
                                                
                                                <?php foreach($friends as $friend): ?>
                                                <option><?php echo $friend->getUsername();?></option>
                                                <?php endforeach ?>
                                            </select>

                                            <button class="btn btn-small" >Invite</button> 
                                            <button class="btn btn-small" >Clear</button>
                                            <p id="already-added"> </p>
                                            <br>
                                        
                                        </label>

                                    <label>
                                        Invited

                                        <textarea id="invited" name="invited" enabled></textarea>

                                    </label>

                                </fieldset> 

                                <input class="btn btn-create" type="submit" name="submit" value="Create">

                            </form>

                        </div>

                       

                    </section>

                </div>

        </body>

</html>
