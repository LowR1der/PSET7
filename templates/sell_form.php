<link href="/css/bootstrap.min.css" rel="stylesheet"/>
<link href="/css/bootstrap-theme.min.css" rel="stylesheet"/> 
<link href="/css/styles.css" rel="stylesheet"/>





<form action="sell.php" method="post">
    <fieldset>
        <div class="form-group", id = "top">
           <select name = "Shares", size ="1">
		<option name = "Symbol" value = "empty">Symbol</option>
		<?php foreach ($rows as $row){ 
	       	print ("<option> {$row["symbol"]}</option>");}
		?> 	
	   </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" name = "Symbol"  >Sell</button>
        </div>
	<div id="bottom">
	    WARNING! You sell all the shares of selected companies!	
	</div>
	    
     </fieldset>
</form>

