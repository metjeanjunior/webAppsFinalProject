<!DOCTYPE html>
<html>
	<head>
		<title>Book Marketplace</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="js/marquee.js"></script>
		<script src="js/searchbar.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/global.css">
	</head>

	<body>
		<marquee id="quote"></marquee><br>

		<div class="header">
			<a id="login-ling" href="php/login.php">Login</a>
			<a id="add-link" href="php/addBook.php">Lend/Sell</a>
			<a id="showcustomer" href="php/showCustomer.php">View Transactions and Settings</a>
	 	</div>


	 	<div id="logo">BC's MarketPlace</div>

	 	<div class="container">
	 	    <div class="row">
	 	        <form method="get" action="php/searchResults.php">
	 	            <div class="col-sm-6 col-sm-offset-3">
	 	                <div id="imaginary_container"> 
	 	                    <div class="input-group stylish-input-group">
	 	                        <input type="text" class="form-control"  placeholder="Search" 
	 	                            name="search-bar" id="search-bar-1" onkeyup="search(this.value)">
	 	                        <span class="input-group-addon">
	 	                            <button type="submit" onclick="">
	 	                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	 	                            </button>  
	 	                        </span>
	 	                    </div>
	 	                </div>
	 	            </div>
	 	        </form>
	 	    </div>
	 	</div>

	 	<div class="container">
	 		<div class="list-group" id="result">
	 		</div>
	 	</div>
	 	
	 	<footer class="panel-footer footer">
	 	    <div class="container">
		 	    <p class="text-muted">Designed by the people of BC for the People of BC</p>
	 	    </div>
 	    </footer>
	</body>
</html>