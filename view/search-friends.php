	
	<?php include '../view/includes/header.php'; ?>
	<?php include '../view/includes/menu.php'; ?>

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

						<img class="profile-icon" src="<?php echo $user->getImage(); ?>" alt="Profile picture">
						<p><?php echo $user->getUsername(); ?></p>
						<p><?php echo $user->getCity(); ?>, <?php echo $user->getCountry(); ?></p>
						<button type="submit" class="btn">Add</button>
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