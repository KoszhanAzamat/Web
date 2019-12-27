<?php
function printMark($result){
    while(($row=$result->fetch_assoc())!=false){
        echo '<div class="card">
                <a href="#" class="title">'.$row["mark"].'</a>
          
                <div>
                    <label>'.$row["model"].'</label>
                </div>
                <div>
                    <label>'.$row["memory"].'</label>
                </div>
                <div class="price">
                    <label>'.$row["cell"].'</label>$
                </div>
            </div>';
    }
}
$mysqli=new mysqli("localhost","root","","project");
$mysqli->query("SET NAME 'utf8'");
$search=$_POST['search'];
$result=$mysqli->query("SELECT * FROM products where mark='$search' or model='$search' or memory ='$search'");
?>
<html>
<head>
    <style>
        .container{
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            width: 600px;
        }
        .logo_parts{
            display: flex;
        }

        nav a{
            display: inline-block;
            text-decoration:none;
            background-color:lightgrey;
            width:25%;
            color: black;
            text-align:center;
        }

        .title{
            background-color: blue;
            color:white;
            text-decoration:none;
        }
        .cards{
            text-align: center;

        }
        .card a, .card img, .card div {
            display: block;
        }
        .logo_part{
            display: flex;
            padding-bottom: 20px;
        }

        .price{
            text-align: center;
            font-weight: bold;
        }

        .card{

            border: 1px solid red;
            border-radius: 5px;
            margin: 20px;
            text-align: center;
        }

    </style>
</head>
<body>
<div class="container">
    <header>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>

    <section class="main_section">
        <div class="cards">
            <?php printMark($result);?>
        </div>
    </section>
    <footer>
        @copy; 2017 Wheels.kz. All cars
    </footer>
</div>
</html>
<?php
$mysqli->close();
?>
