
<?php

    // configuration
    require("../includes/config.php"); 
    
    //	
    $positions =[];
    
    $rows = query ("SELECT time, transaction, shares, symbol, price FROM history WHERE id=?", $_SESSION["id"]);
    
    
    
	foreach ($rows as $row)
	{
		
		$row["price"] = number_format ($row["price"],2,'.',' ');	
		$positions [] =	["transaction" => $row["transaction"], "time" => $row["time"], "symbol" => $row["symbol"], "shares" => $row["shares"], "price" => $row["price"]]; 
	} 	
		
	
	
     // render hystory form   
     render("history_form.php", ["positions" => $positions, "title" => "History"]);

?>

