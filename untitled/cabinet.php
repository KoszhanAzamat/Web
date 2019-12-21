<?php
function printPr($result){
    $email_address=$_POST['email_address'];
    $password=$_POST['password'];
    while(($row=$result->fetch_assoc())!=false) {
        if($row['email_address']==$email_address&&$row['password']==$password){
            echo '<div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate="">
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
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
        </div>
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Type</label>
            <select class="custom-select d-block w-100" id="country" required="">
              <option value="">Choose...</option>
              <option>Phones</option>
              <option>Accessories</option>
              <option>Gadgets</option>
            </select>
          </div>
          
          
        </div>
        
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>';
        }
    }
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
    <link href="form-validation.css" rel="stylesheet">
</head>
<body>
<?php printPr($results)?>
</body>
</html>
