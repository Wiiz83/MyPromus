<?php include '../view/includes/header.php'; ?>
<?php include '../view/includes/menu.php'; ?>
<script src='../view/assets/js/pgwslideshow.js'></script>
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
            <a href="">
            <p>
                YOLO PARTY
            </p>
            </a>
            </li>
            <li id="playlist">
            <iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Aqlmhuge%3Aplaylist%3A6Df19VKaShrdWrAnHinwVO&theme=white" width="300" height="380" frameborder="0" allowtransparency="true">
            </iframe>
            </li>
        </ul>
        <ul class="pgwSlideshow">
            <li>
            <img src="../view/assets/images/event-example.png" alt="San Francisco, USA" data-description="17/07/1994">
            </li>
            <li><img src="../view/assets/images/event-example.png" alt="Rio de Janeiro, Brazil"></li>
            <li><img src="../view/assets/images/event-example.png" alt="" data-large-src="london.jpg"></li>
            <li><img src="../view/assets/images/event-example.png" alt=""></li>
            <li><img src="../view/assets/images/event-example.png" alt=""></li>
            <li><img src="../view/assets/images/event-example.png" alt=""></li>
            <li><img src="../view/assets/images/event-example.png" alt=""></li>
            <li><img src="../view/assets/images/event-example.png" alt=""></li>
            <li><img src="../view/assets/images/event-example.png" alt=""></li>
            <li><img src="../view/assets/images/event-example.png" alt=""></li>
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
            </ul>
        </div>
    </div>
</div>
</body>
</html>