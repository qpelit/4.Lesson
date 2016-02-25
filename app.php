<?php
$everything_was_okay = true;
	//check if there is variable in the URL
		//**********************
	//TO validation
	//**********************
		if(isset($_GET["to"])){
		
	if(empty($_GET["to"])){
        $everything_was_okay = false;
		echo "Please enter TO"."<br>";
		}
		else {
			echo "TO: =".$_GET["to"]."<br>";
		}
	}
	else{
		$everything_was_okay = false;
	}
	//**********************
	//From validation
	//**********************
	if(isset($_GET["from"])){
		
	if(empty($_GET["from"])){
          $everything_was_okay = false;
		echo "Please enter From"."<br>";
		}
		else {
			echo "from: =".$_GET["from"]."<br>";
		}
	}
	else{
			$everything_was_okay = false;
	}
	//**********************
	//message validation
	//**********************	
	if(isset($_GET["message"])){
		
	if(empty($_GET["message"])){
          $everything_was_okay = false;
		echo "Please enter a message"."<br>";
		}
		else {
			echo "Message: =".$_GET["message"]."<br>";
		}
	}
	else{
			$everything_was_okay = false;
	}

// Getting the message from adddress
//if there is ?name=.. then $_GET["message"]


//************************
//********Save to DB*******
//************************
/*


*/
if($everything_was_okay ==true)
    echo "Saving to database..."
?>
<h2> First application </h2>

<form method="get">
<label for ="from">From	</label> 
<input type="text" name ="from"><br><br>

<label for ="to">TO	</label> 
<input type="text" name ="to"><br><br>

	<label for ="message">Message *</label>
	<input type="text" name ="message"><br><br>
	
	<input type="submit" value ="Save to DB">



<form>
