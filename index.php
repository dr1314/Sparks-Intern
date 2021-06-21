<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
    
    
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
.intro{
	background: aqua;
}
.nav-link{
	margin-right: 15px;
	color: aqua;
	letter-spacing: 0.5px;
	transition: 0.5s;
}
.navbar-brand{
	color: aqua;
	letter-spacing: 0.5px;
}
h2{
	color: #3357e9;
	letter-spacing: 0.5px;
	font-family: raleway;
}
h1{
	color: #7e0303;
	font-weight: bold;
	transition: 0.5s;
}
h3{
	color: black;
}
body{
	background-color: aqua;
}
button{
	border:none;
	border-radius: 8px;
	padding: 10px;
	background:#7d60fc; 
	color:rgb(167, 248, 61);
	letter-spacing: 1.5px;
	font-size: 15px;
	transition: 0.5s;
}
button:hover,h1:hover{
	transform: scale(1.1);
}
button:hover{
	background-color:#4475fd;
}
footer{
	color:#1233ec;
	background-color:#46fd65;
	letter-spacing: 0.5px;
}
footer p{
	margin: 0;
	font-size: 15px;
}
@media only screen and (orientation:portrait){
	.intro{
		display:flex;
		flex-direction: column-reverse;
	}
	h1{
		font-size: 30px;
	}
	.act{
		padding-bottom: 100px;
	}
}
</style>

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>DR BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.jpg" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/man-300x300.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>DURAIRAJAN</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>