<?php
function printPr($result){
    $email_address=$_POST['email_address'];
    $password=$_POST['password'];
    $count=0;
    while(($row=$result->fetch_assoc())!=false) {
        if($row['email_address']==$email_address&&$row['password']==$password){
            echo '<header>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>
<form name="test" action="cabinet1.php" method="post">
<div class="col-md-8 order-md-1">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Mark</label>
            <input type="text" class="form-control" name="mark" placeholder="Mark" value="" required="">
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Model</label>
            <input type="text" class="form-control" name="model" placeholder="Model" value="" required="">
            
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
        </div>
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Memory</label>
            <select class="custom-select d-block w-100" name="memory" id="country" required="">
              <option value="">Choose...</option>
              <option>16</option>
              <option>32</option>
              <option>64</option>
              <option>128</option>
            </select>
          </div>
          <label for="email">Price <span class="text-muted">(Optional)</span></label>
          <input  class="form-control" name="price" id="email" placeholder="Price">
          
          
        </div>
        
        <button type="submit">Continue to checkout</button>
      </form>
    </div>
    </form>';
            break;
        }
    }
    echo 'Your email or password is noy correct'.'<form name="test" action="signin.php"> <input type="submit" value="Signin again"></form>';
}
$email_address=$_POST['email_address'];
$password=$_POST['password'];
$mysqli=new mysqli("localhost","root","","project");
$mysqli->query("SET NAME 'utf8'");
$results= $mysqli->query("SELECT * from users");
$result=$mysqli->query("SELECT * from products");
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
        nav a{
            display: inline-block;
            text-decoration:none;
            background-color:lightgrey;
            width:25%;
            color: black;
            text-align:center;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .container {
            max-width: 960px;
        }

        .lh-condensed { line-height: 1.25; }

    </style>
    <!-- Custom styles for this template -->
</head>
<body>
<?php printPr($results)?>
</body>
</html>
