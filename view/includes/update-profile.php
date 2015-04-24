

	<?php


	if(isset($_GET['update']) == 'update'){
  			$order_id = $_GET['update'];
	}
	else{
	     	echo ' 
		<div id="logo_img"><img src="images/logo.png" alt="logo" id="logo"></div>
		<div class="summary"> 
		<h2 id="heading">Pizzas Update Form</h2>

		<form  id="pizza-form" onSubmit="return validateInput();" name="theform" method="post" action="vieworder.php">
		<h3>What Size of Pizza Would You Like? </h3> ';
	}


	$select_query = "SELECT order_id, student, firstname, lastname, email, address, phone, price, size, anchovies, pineapples, pepperoni, peppers, olives, onions, createddatetime, views 
	FROM orders WHERE order_id ='$order_id'"; 


	$db_select = mysqli_query($DBConnection, $select_query) or die (mysqli_error($DBConnection));


		if (isset($_GET['submit'])) {

			$student =  $_GET['student'];
			$firstname =  $_GET['customerFirstName'];
			$lastname =  $_GET['customerLastName'];
			$email =  $_GET['emailAddress'];
			$address =  $_GET['address'];
			$phone =  $_GET['phoneNo'];

			$size =  $_GET['pizzaSize'];
			$anchovies =  $_GET['addAnchovies'];
			$pineapples =  $_GET['addPineapple'];
			$pepperoni =  $_GET['addPepperoni'];
			$peppers =  $_GET['addPeppers'];
			$olives =  $_GET['addOlives'];
			$onions =  $_GET['addOnion'];

			$update_query = "UPDATE orders set
			student='$student', firstname ='$firstname', lastname='$lastname', email='$email', address='$address', phone='$phone', price='$price', 
			anchovies='$anchovies', pineapples='$pineapples', pepperoni='$pepperoni', peppers='$peppers', olives='$olives', onions='$onions' where order_id ='$order_id'";


		}








	while($row = mysqli_fetch_row($db_select)){
		$order_id = ($row[0]);
		$student = ($row[1]);
		$firstname = ($row[2]); 
		$lastname = ($row[3]);
		$email = ($row[4]);
		$address = ($row[5]); 
		$phone = ($row[6]);
		$price = ($row[7]);
		$size = ($row[8]); 
		$anchovies = ($row[9]);
		$pineapples = ($row[10]);
		$pepperoni = ($row[11]); 
		$peppers = ($row[12]);
		$olives = ($row[13]);
		$onions = ($row[14]); 
		$createddatetime = ($row[15]);
		$views = ($row[16]);


		echo ' 
		<div id="logo_img"><img src="images/logo.png" alt="logo" id="logo"></div>
		<div class="summary"> 
		<h2 id="heading">Pizzas Update Form</h2>

		<form  id="pizza-form" onSubmit="return validateInput();" name="theform" method="post" action="vieworder.php">
		<h3>What Size of Pizza Would You Like? </h3> ';


		if($size === 'large'){
			echo 'Small
			<input id="small" type="radio" name="pizzaSize" value="small" onChange="redraw()"/>
			Medium
			<input id="medium" type="radio" name="pizzaSize" value="medium" onChange="redraw()" />
			Large
			<input id="large" type="radio" name="pizzaSize" value="large" onChange="redraw()" checked/> ';
		}

		if($size === 'medium'){
			echo 'Small
			<input id="small" type="radio" name="pizzaSize" value="small" onChange="redraw()"/>
			Medium
			<input id="medium" type="radio" name="pizzaSize" value="medium" onChange="redraw()" checked/>
			Large
			<input id="large" type="radio" name="pizzaSize" value="large" onChange="redraw()" /> ';
		}

		if($size === 'small'){
			echo 'Small
			<input id="small" type="radio" name="pizzaSize" value="small" onChange="redraw()" checked/>
			Medium
			<input id="medium" type="radio" name="pizzaSize" value="medium" onChange="redraw()" />
			Large
			<input id="large" type="radio" name="pizzaSize" value="large" onChange="redraw()" /> ';
		}





		echo'<div id="pizzaImages">
		<p class="image" id="pizzatext" style="font-family:Arial; margin-top:-30px !important; margin-right: 50px !important;  font-weight: : 500; color: red;">Your Pizza Appearance</p>
		<img class="image" id="image1" src="images/base.png" width="250" height="250"/>
		<img class="image" id="image2" src="images/anchois.png" width="250" height="250"/>
		<img class="image" id="image3" src="images/pineapple.png" width="250" height="250"/>
		<img class="image" id="image4" src="images/pepperoni.png" width="250" height="250"/>
		<img class="image" id="image5" src="images/olives.png" width="250" height="250" />
		<img class="image" id="image6" src="images/onion.png" width="250" height="250" />
		<img class="image" id="image7" src="images/pepper.png" width="250" height="250"/>
		</div>
		<br>
		<h3>Add Extra Toppings</h3>';




		if($anchovies === 'y'){
			echo 'Anchovies
				<input id="anchovies" type="checkbox" name="addAnchovies" value="y" onChange="redraw()" checked/>';
		}
		else {
			echo 'Anchovies
				<input id="anchovies" type="checkbox" name="addAnchovies" value="n" onChange="redraw()" />';
		}


		if($pineapples === 'y'){
			echo 'Pineapple
				<input id="pineapple" type="checkbox" name="addPineapple" value="y" onChange="redraw()" checked/>';
		}
		else {
			echo 'Pineapple
				<input id="pineapple" type="checkbox" name="addPineapple" value="n" onChange="redraw()" />';
		}


		if($pepperoni === 'y'){
			echo 'Pepperoni
				<input id="pepperoni" type="checkbox" name="addPepperoni" value="y" onChange="redraw()" checked/>';
		}
		else {
			echo 'Pepperoni
				<input id="pepperoni" type="checkbox" name="addPepperoni" value="n" onChange="redraw()" />';
		}


		if($olives === 'y'){
			echo 'Olives
				<input id="olives" type="checkbox" name="addOlives" value="y" onChange="redraw()" checked/>';
		}
		else {
			echo 'Olives
				<input id="olives" type="checkbox" name="addOlives" value="n" onChange="redraw()" />';
		}

		if($onions === 'y'){
			echo 'Onion
				<input id="onion" type="checkbox" name="addOnion" value="y" onChange="redraw()" checked/>';
		}
		else {
			echo 'Onion
				<input id="onion" type="checkbox" name="addOnion" value="n" onChange="redraw()" />';
		}

		if($peppers === 'y'){
			echo 'Peppers
				<input id="peppers" type="checkbox" name="addPeppers" value="y" onChange="redraw()" checked/>';
		}
		else {
			echo 'Peppers
				<input id="peppers" type="checkbox" name="addPeppers" value="n" onChange="redraw()"/>';
		}


		echo '<h3>Total Price is: €<span id="pricetext">';echo $price; echo'</span></h3>';


		echo'<h3>Enter your  details</h3>';


		echo'First Name:';
		echo"<input name='customerFirstName' id='cname' type='text' value=". $firstname." required />";
		echo '<br/>
		<br/>';
		

		echo'Last Name:
				<input name="customerLastName" id="cname" type="text" value='. $lastname.' required />
				<br/>
				<br/>
				Address:
				<textarea name="address" id = "caddress" type="text"rows="5" cols="30" required>'.$address.'</textarea>
				<br/>
				<br/>
				Email Address:
				<input name="emailAddress" type="email" value='. $email.' required />
				<br/>
				<br/>

				<br/>
				Phone Number:
				<input name="phoneNo" id="phoneNumber" type="text" value='. $phone.' required/>
				<br/>
				<br/>
				Tick here if you are student:';



				if($student === 'y'){
				echo '<input type="checkbox" id="studentdiscount" name="student" onChange="redraw()"  checked />';
				}
				else {
					echo '<input type="checkbox" id="studentdiscount" name="student" onChange="redraw()"  checked/>';
				}


				echo'<input type="hidden" name="post" value="" />

				<br/><br/>
				<input class="submit" type="submit" name="submit" value="Update" />

				</form>
				<br/>	
				</div>';


	}

	mysqli_close($DBConnection);

	?>