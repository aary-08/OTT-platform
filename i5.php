<?php
    $con = mysqli_connect('localhost', 'root', '', 'flix') or die("Connection failed: " . mysqli_connect_error());

    $sql_thriller="SELECT Distinct s.SName,s.Img_Name, s.Links FROM series s, genre g WHERE s.SName = g.SName and g.Thriller LIKE 'yes' ";
    $r1= mysqli_query($con,$sql_thriller);

    $sql_crime="SELECT  Distinct s.SName,s.Img_Name, s.Links FROM series s, genre g WHERE s.SName = g.SName and g.Crime LIKE 'yes' ";
    $r2= mysqli_query($con,$sql_crime);

    $sql_romance="SELECT Distinct s.SName,s.Img_Name, s.Links FROM series s, genre g WHERE s.SName = g.SName and g.Romance LIKE 'yes' ";
    $r3= mysqli_query($con,$sql_romance);

    $sql_horror="SELECT Distinct s.SName,s.Img_Name, s.Links FROM series s, genre g WHERE s.SName = g.SName and g.Horror LIKE 'yes' ";
    $r4= mysqli_query($con,$sql_horror);

    $sql_recommendation="SELECT Distinct s.SName,s.Img_Name, s.Links FROM series s, genre g WHERE s.SName = g.SName and g.Recommendations LIKE 'yes' ";
    $r5= mysqli_query($con,$sql_recommendation);

    $sql_trending="SELECT Distinct s.SName,s.Img_Name, s.Links FROM series s, genre g WHERE s.SName = g.SName and g.Trending LIKE 'yes' ";
    $r6= mysqli_query($con,$sql_trending);

    $sql_Continue_watching="SELECT Distinct s.SName,s.Img_Name, s.Links FROM series s, genre g WHERE s.SName = g.SName and g.Continue_watching LIKE 'yes' ";
    $r7= mysqli_query($con,$sql_Continue_watching);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tv-Shows</title>
    <link rel="icon" href="flix.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="tvshow.css"> -->
    <style>
    .navbar{
        height: 60px;
        background-color: transparent;
        color: rgb(194, 7, 7);
        position: sticky;
        top: 0;
        height: auto;
        min-height: 70px;
        z-index: 1;
        display: flex;
        align-items: center;
    }

    .logo h1{
        z-index: 2;
        display: inline-block;
        font-size: 1.8em;
        margin-right: 5px;
        text-decoration: none;
        vertical-align: middle;
    }

    .show{
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 20px;
        width: 80px;
    }

    .show button{
        background-color: rgb(184, 7, 7);
        color: rgb(213, 204, 204);
        border-radius: 10px;
        font-size: 0.6rem;
    }
  
    .tvshow{
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 20px;
        width: 80px;
    }

    .tvshow button{
        background-color: rgb(184, 7, 7);
        color: rgb(213, 204, 204);
        border-radius: 10px;
        font-size: 0.6rem;
    }

    .nav-search{
        display: flex;
        justify-content: space-evenly;
        margin-right: 30px;
        width: 500px;
        height: 25px;
        border-radius: 4px;
        margin-left: auto;
    }

    .search-input{
        background-color: rgb(213, 204, 204);
        width: 100%;
        font-size: 1rem;
        border-radius: 5px;
        border: none;
    }

::placeholder{
    color: rgb(145, 10, 10);
}

.search-icon{
    width: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: red;
    font-size: 1.2rem;
}

.hero-section1{
    display: flex;
    align-items: flex-end;
    background-image: url("tv.png");
    background-size: cover;
    background-repeat: no-repeat;
    height: 550px; 
    width: 100%;
}

button{
    color: black;
    width: 150px;
    padding: 7px;
    font-size: 1rem;
    font-weight: 800;
    margin: 10px 0;
    border: none;
    outline: none;
    cursor: pointer;
    background-color: rgb(213, 204, 204);
    margin-left: 10px;
}
  
button:hover{
    opacity: 0.5;
}

/* continue watching */
.continue-watching{
    height: 35px;
}

.continue-watching p{
    letter-spacing: .2rem;
    font-size: larger;
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(213, 204, 204);
    padding: 10px;
}

.cw-movies{
    height: 150px;
    padding: 10px;
    display: flex;
}

.cw-movies .box-img{
    height: 150px;
    width: 200px;
    background-size: cover;
    background-repeat: no-repeat;
}



.box-img:hover{
    width: 350px;
}

/* trending */
.trending{
    height: 35px;
}

.trending p{
    letter-spacing: .2rem;
    font-size: larger;
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(213, 204, 204);
    padding: 10px;
}

.t-movies{
    height: 150px;
    padding: 10px;
    display: flex;
    overflow-x: hidden;
}

.t-movies .box-img{
    height: 150px;
    width: 200px;
    background-size: cover;
    background-repeat: no-repeat;
    transition: margin-left 0.5s;
}



.box-img:hover{
    width: 350px;
}

/* recommendation */
.recommendations{
    height: 35px;
}

.recommendations p{
    letter-spacing: .2rem;
    font-size: larger;
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(213, 204, 204);
    padding: 10px;
}

.rec-movies{
    height: 150px;
    padding: 10px;
    display: flex;
}

.rec-movies .box-img{
    height: 150px;
    width: 200px;
    background-size: cover;
    background-repeat: no-repeat;
}



.box-img:hover{
    width: 350px;
}

/* romance */
.romance{
    height: 35px;
}

.romance p{
    letter-spacing: .2rem;
    font-size: larger;
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(213, 204, 204);
    padding: 10px;
}
.box{
            height: 150px;
            width: 200px;
            background-size: cover;
            background-repeat: no-repeat;
        }

.rom{
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}

.rom-movies{
    width: 50%;
    height: 700px;
    padding: 10px;
    margin-top: 10px;  
}

.slideshow-container {
    position: relative;
    max-width: 800px;
    margin: auto;  
}

.slides {
    display: flex;
}

.slides button{
    border: none;
    background: none;
    padding: 0;
    cursor: pointer;
}

.slides .mySlides{
    display: none;
    width: 100%;
    height: 700px;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 10px;
    width: 50px;
    background-color: #333;
    color: white;
    border: none;
    cursor: pointer;
}

.prev {
    left: 0;
}

.next {
    right: 0;
}

.rom-text{
    width: 50%;
    height: 700px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.rom-text h1{
    color: rgb(213, 204, 204);
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder ;
    line-height: 4;
    font-size: 3rem;
}

.rom_movies{
    height: 150px;
    padding: 10px;
    display: flex;
}

/* thriller and horror  */
.thriller{
    height: 35px;
}

.thriller p{
    letter-spacing: .2rem;
    font-size: larger;
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(213, 204, 204);
    padding: 10px;
}

.th-movies{
    height: 150px;
    padding: 10px;
    display: flex;
}

.th-movies .box-img{
    height: 150px;
    width: 200px;
    background-size: cover;
    background-repeat: no-repeat;
}



.box-img:hover{
    width: 350px;
}

/* crime */
.crime{
    height: 35px;
}

.crime p{
    letter-spacing: .2rem;
    font-size: larger;
    font-family: Arial, Helvetica, sans-serif;
    color: rgb(213, 204, 204);
    padding: 10px;
}

.poster{
    display: flex;
}

.crime-poster{
    height: 550px;
    width: 600px;
    background-image: url("tv-show-images/continue-watching/crime/crime5.jpeg");
    background-size: cover;
    background-repeat: no-repeat;
    margin-top: 15px;
}

.crime-poster:hover{
    opacity: 0.5;
}

.crime-poster2{
    justify-content: center;
    height: 550px;
    width: 800px;
    margin-top: 15px;
}

.c1{
    height: 250px;
    width: auto;
    display: flex;
}

.c1 .box-img{
    height: 250px;
    width: 300px;
    background-size: cover;
    background-repeat: no-repeat;
}

.c1 .box-img-1 {
    background-image: url("images/crime/c3.jpeg");
    margin-left: 65px;
}

.c1 .box-img-2 {
    background-image: url("images/thriller/th-2.jpg");
    margin-left: 65px;
}

.c2{
    height: 250px;
    width: auto;
    display: flex;
    margin-top: 45px;
}

.c2 .box-img{
    height: 250px;
    width: 300px;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
}

.c2 .box-img-3 {
    background-image: url("images/crime/c1.jpg");
    margin-left: 65px;
}

.c2 .box-img-4 {
    background-image: url("images/crime/c2.jpeg");
    margin-left: 65px;
}

.box-img:hover{
    width: 450px;
}
</style>
</head>
<body bgcolor="black">
    <header>
        <div class="navbar">
            <div class="logo">
                <h1>CineVerse</h1>
            </div>
            <div class="show">
                <button type="button" onclick="location.href='i3.php'">Home</button>
            </div>
            <div class="tvshow">
                <button type="button" onclick="location.href='i5.php'">Tv-Shows</button>
            </div>
            <div class="nav-search">
                <input placeholder="Search your favourite movies" class="search-input">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </header>
    
    <div class="main-image">
        <div class="hero-section1">
            <div class="button">
                <button type="button">
                    <i class="fa-solid fa-play"></i>
                    Watch Now</button>
            </div>
        </div>
    </div>
    <div class="rom">
    <div class="rom-movies">
        <div class="slideshow-container">
        <div class="slides">
            <img class="mySlides" src="tv-show-images/continue-watching/romance/tv-rom1.jpeg">
            <img class="mySlides" src="tv-show-images/continue-watching/romance/tv-rom2.jpg">
            <img class="mySlides" src="tv-show-images/continue-watching/romance/tv-rom3.jpeg">
            <img class="mySlides" src="tv-show-images/continue-watching/tv-cw.webp">
            <img class="mySlides" src="tv-show-images/continue-watching/tv-cw2.webp">
        </div>
        <button class="prev" onclick="plusSlides(-1)"><</button>
        <button class="next" onclick="plusSlides(1)">></button>
        </div>
    </div>
    <div class="rom-text">
        <h1>Indulge In <br>
            Captivating <br>
            Romantic Series!</h1>
    </div>
    </div>
    <form method="post" action="project5.php">
    <div class="continue-watching">
        <p>Continue Watching</p>
    </div>
    <div class="cw-movies">
    <?php
                while($row=mysqli_fetch_assoc($r7)){
                    $image_path=$row['Img_Name'];
            ?>
            <div ><button style="background-image: url('<?php echo $image_path ?>');" class="box" type="submit" name="movie" value="<?php echo $row['SName']; ?>"></button></div>

            <?php
                }
            ?>
    </div>
    <div class="trending">
        <p>Trending</p>
    </div>
    <div class="t-movies">
    <?php
                while($row=mysqli_fetch_assoc($r6)){
                    $image_path=$row['Img_Name'];
            ?>
            <div ><button style="background-image: url('<?php echo $image_path ?>');" class="box" type="submit" name="movie" value="<?php echo $row['SName']; ?>"></button></div>

            <?php
                }
            ?>
    </div>

    <div class="recommendations">
        <p>Recommendations</p>
    </div>
    <div class="rec-movies">
    <?php
                while($row=mysqli_fetch_assoc($r5)){
                    $image_path=$row['Img_Name'];
            ?>
            <div ><button style="background-image: url('<?php echo $image_path ?>');" class="box" type="submit" name="movie" value="<?php echo $row['SName']; ?>"></button></div>

            <?php
                }
            ?>
    </div>

    <div class="romance">
        <p>Romantic Shows</p>
    </div>
    <div class="rom_movies">
    <?php
                while($row=mysqli_fetch_assoc($r3)){
                    $image_path=$row['Img_Name'];
            ?>
            <div ><button style="background-image: url('<?php echo $image_path ?>');" class="box" type="submit" name="movie" value="<?php echo $row['SName']; ?>"></button></div>

            <?php
                }
            ?>
    </div>

    <div class="thriller">
        <p>Thriller and Horror Shows</p>
    </div>
    <div class="th-movies">
    <?php
                while($row=mysqli_fetch_assoc($r1)){
                    $image_path=$row['Img_Name'];
            ?>
            <div ><button style="background-image: url('<?php echo $image_path ?>');" class="box" type="submit" name="movie" value="<?php echo $row['SName']; ?>"></button></div>

            <?php
                }
            ?>
    </div>

    <div class="crime">
        <p>Crime</p>
    </div>
    <div class="poster">
        <div class="crime-poster"></div>
        <div class="crime-poster2">
            <div class="c1">
                <div class="box-img box-img-1"></div>
                <div class="box-img box-img-2"></div>
            </div>
            <div class="c2">
                <div class="box-img box-img-3"></div>
                <div class="box-img box-img-4"></div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    </form>
</body>
</html>