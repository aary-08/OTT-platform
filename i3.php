
<?php
    $con = mysqli_connect('localhost', 'root', '', 'flix') or die("Connection failed: " . mysqli_connect_error());

    //use these queries in each division 
    $sql_thriller="SELECT  m.MName,m.Img_Name, m.Links FROM movies m, genre g WHERE m.MName = g.MName and g.Thriller LIKE 'yes' ";
    $r1= mysqli_query($con,$sql_thriller);

    $sql_crime="SELECT m.MName,m.Img_Name, m.Links FROM movies m, genre g WHERE m.MName = g.MName and g.Crime LIKE 'yes' ";
    $r2= mysqli_query($con,$sql_crime);

    $sql_romance="SELECT Distinct m.MName,m.Img_Name, m.Links FROM movies m, genre g WHERE m.MName = g.MName and g.Romance LIKE 'yes' ";
    $r3= mysqli_query($con,$sql_romance);

    $sql_horror="SELECT m.MName,m.Img_Name, m.Links FROM movies m, genre g WHERE m.MName = g.MName and g.Horror LIKE 'yes' ";
    $r4= mysqli_query($con,$sql_horror);

    $sql_recommendation="SELECT m.MName,m.Img_Name, m.Links FROM movies m, genre g WHERE m.MName = g.MName and g.Recommendations LIKE 'yes' ";
    $r5= mysqli_query($con,$sql_recommendation);

    $sql_trending="SELECT Distinct m.MName,m.Img_Name, m.Links FROM movies m, genre g WHERE m.MName = g.MName and g.Trending LIKE 'yes' ";
    $r6= mysqli_query($con,$sql_trending);

    $sql_Continue_watching="SELECT m.MName,m.Img_Name, m.Links FROM movies m, genre g WHERE m.MName = g.MName and g.Continue_watching LIKE 'yes' ";
    $r7= mysqli_query($con,$sql_Continue_watching);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainPage</title>
    <link rel="icon" href="flix.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="homepage.css"> -->
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
            /* padding-left: 20px;
            padding-top: 7px;
            z-index: 2;
            height: 41px; */
            z-index: 2;
            display: inline-block;
            font-size: 1.8em;
            margin-right: 5px;
            text-decoration: none;
            vertical-align: middle;
        }

        .navigation-menu{
            display: flex;
            height: 100%;
            text-align: center;
            align-items: center;
            margin-left: 20px; 
        }

        .navigation-menu .drop-down{
            background-color: black;
            color: rgb(213, 204, 204);
            border: none;
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
            font-weight: 800;
            padding: 7px;
            margin: 10px 0;
            border: none;
            outline: none;
            cursor: pointer;
            margin-left: 10px;
        }

        .nav-search{
            display: flex;
            justify-content: space-evenly;
            margin-right: 30px;
            /* background-color: red; */
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
            background-image: url("st.jpeg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 450px; 
            width: 700px;
        }

        .hero-section2{
            background-image: url("STR.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 450px;
            width: 700px;
            float: left;
        }

        .main-image{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }

        .main-image button{
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
        .box{
            height: 150px;
            width: 200px;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        button:hover{
            opacity: 0.5;
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
            /* height: 350px; */
            width: 350px;
            /* z-index: 4;
            opacity: initial; */
        }

        /* trending section */
        .trending{
            height: 35px;
            /* z-index: -1; */
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
        }

        .t-movies .box-img{
            height: 150px;
            width: 200px;
            background-size: cover;
            background-repeat: no-repeat;
        }

        


        .box-img:hover{
            width: 350px;
        }

        /* recommendations section */
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

        /* romance section */
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

        .rom-main{
            margin-top: 10px;
            margin-bottom: 5px;
            width: 100%;
            height: 700px;
            background-image: url("rom-mainn.jpeg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .rom-main:hover{
            opacity: 0.5;
        }

        .rom-movies{
            height: 150px;
            padding: 10px;
            display: flex;
        }

        .rom-movies .box-img{
            height: 150px;
            width: 200px;
            background-size: cover;
            background-repeat: no-repeat;
        }

        

        .box-img:hover{
            width: 350px;
        }

        /* thriller section */
        .thriller{
            height: 30vh;
            display:flex;
        }
        .thriller1{
            height:35px;
        }
        .thriller1 p{
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

        .box:hover{
            width: 350px;
        }

        /* crime section */
        .crime{
            height: 35px;
        }

        .crime p{
            letter-spacing: .2rem;
            font-size: larger;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(213, 204, 204);
            padding: 5px;
        }

        .poster{
            height: 150px;
            padding: 10px;
            display: flex;
        }

        .crime-poster{
            height: 350px;
            width: 600px;
            background-image: url("c4.webp");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .crime-poster:hover{
            opacity: 0.5;
        }

        .crime-poster2{
            display: flex;
            justify-content: center;
            height: 250px;
            width: 800px;

        }

        .crime-poster2 .box-img{
            height: 350px;
            width: 300px;
            background-size: cover;
            background-repeat: no-repeat;
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
                <h1>Flix</h1>
            </div>
            <div class="navigation-menu">
                <select class="drop-down"> <!--its better to use select and option if there's a form otherwise using list would be a better option-->
                    <option>Browse</option>
                    <option value="href='i5.php'">TV Shows</option>
                    <option>Movies</option>
                    <option>Horror</option>
                    <option>Thriller</option>
                </select>
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
    <form method="post" action="project3.php">


      <div class="main-image">
            <div class="hero-section1">
                <div class="button">
                    <button type="button">
                        <i class="fa-solid fa-play"></i>
                        Watch Now</button>
                </div>
            </div>
            <div class="hero-section2"></div>
        </div>

<!-- ----------------------------------------------------------------------------------------------------- -->

        <div class="continue-watching">
            <p>Continue Watching</p>
        </div>
        <div class="cw-movies">
        <?php
                while($row=mysqli_fetch_assoc($r7)){
                    $image_path=$row['Img_Name'];
            ?>
            <div ><button style="background-image: url('<?php echo $image_path ?>');" class="box" type="submit" name="movie" value="<?php echo $row['MName']; ?>"></button></div>

            <?php
                }
            ?>
        </div>

<!-- ----------------------------------------------------------------------------------------------------- -->

        <div class="trending">
            <p>Trending</p>
        </div>  
        <div class="t-movies">
        <?php
                while($row=mysqli_fetch_assoc($r6)){
                    $image_path=$row['Img_Name'];
            ?>
            <div><button style="background-image: url('<?php echo $image_path ?>');" class="box" type="submit" name="movie" value="<?php echo $row['MName']; ?>"></button></div>

            <?php
                }
            ?>
        </div>
        
<!-- ----------------------------------------------------------------------------------------------------- -->

        <div class="recommendations">
            <p>Recommendations</p>
        </div>
        <div class="rec-movies">
        <?php
                while($row=mysqli_fetch_assoc($r5)){
                    $image_path=$row['Img_Name'];
            ?>
            <div ><button style="background-image: url('<?php echo $image_path ?>');" class="box" type="submit" name="movie" value="<?php echo $row['MName']; ?>"></button></div>

            <?php
                }
            ?>
        </div>

<!-- ----------------------------------------------------------------------------------------------------- -->

        <div class="romance">
            <p>Beyond the veil of love</p>
        </div>
        <div class="rom-main"></div>
        <div class="rom-movies">
        <?php
                while($row=mysqli_fetch_assoc($r3)){
                    $image_path=$row['Img_Name'];
            ?>
            <div ><button style="background-image: url('<?php echo $image_path ?>');" class="box" type="submit" name="movie" value="<?php echo $row['MName']; ?>"></button></div>

            <?php
                }
            ?>
        </div>

<!-- ----------------------------------------------------------------------------------------------------- -->
        
        <div class="thriller1">
            <p>Thriller and Horror Movies</p>
        </div>
        <div class="thriller">
            <!-- can use display:flex in css fle to make all divs to come next to each other -->

            <!-- //thriller movies will be added dynamically -->
            <?php
                while($row=mysqli_fetch_assoc($r1)){
                    $image_path=$row['Img_Name'];
            ?>
            <div ><button style="background-image: url('<?php echo $image_path ?>');" class="box" type="submit" name="movie" value="<?php echo $row['MName']; ?>"></button></div>

            <?php
                }
            ?>
            <!-- //horror movies will be added dynamically -->
            
            
            </div>

<!-- ----------------------------------------------------------------------------------------------------- -->

        <div class="crime">
            <p>Crime</p>
        </div>
        <div class="poster">
        <?php
                while($row=mysqli_fetch_assoc($r2)){
                    $image_path=$row['Img_Name'];
            ?>
            <div ><button style="background-image: url('<?php echo $image_path ?>');" class="box" type="submit" name="movie" value="<?php echo $row['MName']; ?>"></button></div>

            <?php
                }
            ?>
            </div>
        </div>
    </form>
   
    
</body>
</html>