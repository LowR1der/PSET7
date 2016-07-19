<?php

//configuration
require ("../includes/config.php");

//if user reached page via GET (as by clicing a link or via redirect)
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
	//else render form
	render ("register_form.php", ["title" => "Register"]);
}
//else if user reached page via POST (as submiting a form via POST) 
else if ($_SERVER ["REQUEST_METHOD"]=="POST")
{
	//When user input incorrect data - show message about error
	if (empty($_POST ["username"])) {apologize("Please enter login!"); 	}
	
	else if (empty($_POST ["password"])) {apologize ("Please enter password!");}	
	
	else if ((($_POST ["password"]) != ($_POST ["confirmation"])) || (empty($_POST["confirmation"]))) {apologize ("Please confirm a password");}

	//Input new user to DB		
	$rows = query("INSERT INTO users (username, hash, cash) VALUES (?,?, 10000.0)" , $_POST["username"], crypt($_POST["password"]));

	if ($rows === false) {apologize ("Please choose another username");}
	
	else  
	{
		// remember that user's now logged in by storing user's ID in session
        	$rows = query ("SELECT LAST_INSERT_ID() AS id");
        	$id = $rows[0]["id"];
		$_SESSION["id"] = $id;

                
                // redirect to portfolio
                redirect("../index.php");
		
	}
	
}

?>
