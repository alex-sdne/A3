<!DOCTYPE html>

<!-- Alex Kalicharan -->
<!--    991440472    -->

<html>

    <head>
	<title>Assignment 3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/stylesheet2.css"/>
	<script src="script/jsScript.js"></script>
    </head>
    
    <body>
        
        <header>
	    
	    <h1 id="heading1">Alex Kalicharan | Assignment 3</h1>
	    
	</header>
	
	<nav>
	    <a href=../index.html target ="_self">Assignment 1</a>
	    
	    <a href=A3Content/index.html target ="_self">Assignment 2</a>
	    
	    <a href=A4Content/index.html target ="_self">Assignment 4</a>
	</nav>
	
	<main>
	    
	    <h1 id="title">Order Confirmation</h1>
	    
	    <table>
		<tr>
		    <td class="leftcol">
			<p>First Name:</p>
		    </td>
		    <td>
			<p>
			    <?php
				$fname = $_GET['fname'];
				echo $fname;
			    ?>
			</p>
		    </td>
		</tr>
		<tr>
		    <td class="leftcol">
			<p>Last Name:</p>
		    </td>
		    <td>
			<p>
			    <?php
				$lname = $_GET['lname'];
				echo $lname;
			    ?>
			</p>
		    </td>
		</tr>
		<tr>
		    <td class="leftcol">
			<p>Email Address:</p>
		    </td>
		    <td>
			<p>
			    <?php
				$email = $_GET['email'];
				echo $email;
			    ?>
			</p>
		    </td>
		</tr>
		<tr>
		    <td class="leftcol">
			<p>Selected Product(s):</p>
		    </td>
		    <td>
		        <?php
			    if (@$_GET['product'] == null) {
				echo "No product selected.";
			    }
			    else {
				$check = $_GET['product'];
				for($x = 0; $x < count($check); $x++) {
				    echo "<p>".$check[$x]."</p>";
				}
			    }
			?>
		    </td>
		</tr>
		<tr>
		    <td class="leftcol">
			<p>Payment Method:</p>
		    </td>
		    <td>
			<?php
			    $payment = $_GET['pmethod'];
			    for($y = 0; $y < count($payment); $y++)
				echo $payment[$y];
			?>
		    </td>
		</tr>
		<tr>
		    <td class="leftcol">
			<p>Shipping Method:</p>
		    </td>
		    <td>
			<?php
			    $ship = $_GET['shiplist'];
			    echo $ship;
			?>
		    </td>
		</tr>
	    </table>
	    
	    <h1 id="h2">Is the information above correct?</h1>
 
	    <button id="b2" onclick="history.back()">No, Go Back</button>
	
	    <button id="b1" onclick="window.location.href='./index.html';">Yes, submit</button>
	    
	    <footer>
		<p>Alex Kalicharan | Sheridan College 
		| 1430 Trafalgar Rd, Oakville, ON L6H 2L1</p>
	    </footer>
	    
	</main>
		
    </body>
    
</html>



			