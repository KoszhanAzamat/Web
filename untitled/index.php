<?php
function printPr($result){
while(($row=$result->fetch_assoc())!=false) {
    echo '<div class="card">
                <a href="#" class="title">'.$row["mark"].'</a>
                <img src="http://via.placeholder.com/150x150"/>
                <div class="description">
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
$result=$mysqli->query("SELECT * from products");
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
            <a href="#" class='active'>Home</a><a href="#">Contacts</a><a href="#">About us</a><a href="#">Comitee</a><a href="signin.php">Cabinet</a>
        </nav>
        <div class="logo_part">
            <div class="search">
                <form name="test" action="search.php" method="post">
                <input type="text" name="search"/>
                <input type="submit" value="Search"/>
                </form>
            </div>
        </div>
    </header>

    <section class="main_section">
        <div class="cards">
            <?php printPr($result);?>
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

