<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>C$50 Finance: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>C$50 Finance</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                
		<a href="/"><img alt="C$50 Finance" src="/img/logo.gif"/></a>
          
	    
	   
	    <div id="middle">
		<?php if (!empty ($_SESSION["id"])): ?>
		<div id ="navigation">
	<ul class ="nav nav-pills">
		<li><a href = balance.php><span class="glyphicon glyphicon-plus"> Add money</span></a></li>
		<li><a href = quote.php><span class="glyphicon glyphicon-search"> Quote</span></a></li>
		<li><a href = buy.php><span class="glyphicon glyphicon-import"> Buy</span></a></li>
		<li><a href = sell.php><span class="glyphicon glyphicon-export"> Sell</span></a></li>
		<li><a href = history.php><span class="glyphicon glyphicon-hdd"> History</span></a></li>
		<li><a href = change_pass.php><span class="glyphicon glyphicon-lock"> Change password</span></a></li>
		<li><a href = logout.php><span class="glyphicon glyphicon-off"> LogOut</span></a></li> 
	</ul>
</div>
	<?php endif ?>

