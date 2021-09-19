

<html>
<head>
        <meta charset="UTF-8">
        <title></title>
        <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    <style> @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');
	    </style>
</head>
<body>
<?php                       
    include('header.html');                              
?>
    <form method="post" action="show.php">
 <div class="container-fluid">
        <div class="row">
		<div class="col-sm-3"  style="height: 50px;"></div>
		
		<div class="col-sm-6" style="background-color: #dbf4ff; border-radius:10px; border-style: solid;border-width:1px; border-color: #4f92ff; "><p>
			<h3 style="text-align: center; font-weight: bold; padding-top: 0px;"><i> Show Laptop Details </i></h3><p><hr>
			<form class="form-horizontal" method="post">
				<div class="form-group">
				<div class="col-sm-4" style="text-align: ; font-size: 20px">
					<label>Enter Product Id<font style="color: red;">*</font></label>
				</div>
				<div class="col-sm-8" style="text-align: left;">
					<input type="text" name="pid" class="form-control" placeholder="Product Id" required />
				</div>
				</div>

				<div class="form-group">
				<div class="col-sm-12" style="text-align: center; font-size: 20px; margin-top: 10px;  margin-bottom: 10px;">
					<input type="submit" name="show" class="btn btn-success" value="SHOW DETAILS" />
				</div>
				<p>
				</div>
			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
	
</div>

<?php
include('footermy.html');
?>
</form>
</body>
</html>
