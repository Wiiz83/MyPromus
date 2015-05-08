	
	<?php include '../view/includes/header.php'; ?>
	<?php include '../view/includes/menu.php'; ?>

	<script src='../view/assets/js/sendFriendRequest.js'></script>

	<div class="grid">
		<div class="panel">

			<form class="search-friend" method="post">
				<input type="text" name="search">
				<input type="submit" class="btn" value="Search">
			</form>

			<h6><?php echo "$titleSecondary";?></h6>

			<div class="row-main">
			
			<?php if(isset($users)):?>
			<?php foreach($users as $user): ?>

				<section class="col-25">
					<div class="friend-box">

						<a href="../controller/profile.php?userId=<?php echo $user->getIdUser();?>"><img class="profile-icon" src="<?php echo $user->getImage(); ?>" alt="Profile picture"></a>
						<p><?php echo $user->getUsername(); ?></p>
						<p><?php echo $user->getCity(); ?>, <?php echo $user->getCountry(); ?></p>

						<?php if(!$user->getIsFriend()): ?>
						<span id="<?php echo $user->getIdUser();?>">
						<button type="submit" class="btn" onClick="sendFriendRequest(this.value)" value="<?php echo $user->getIdUser();?>">Add</button>
						</span>
						<?php endif ?>

					</div>

				</section><!--

				-->
			<?php endforeach ?>
			<?php endif ?>
			<? if(!isset($users)){echo "User not found";} ?>
			

			</div>					

		</div>

	</div>
</body>
</html>