<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription page</title>
    <link rel="icon" href="flix.png" type="image/x-icon"/>
    <style>
       *{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
}

.background{
    background-image: url("spider.jpeg");
    height: 100vh;
    width: 100vw;
    background-size: contain;
    background-repeat: repeat;
    /* animation: bounce 0.8s ease infinite; */
}

.navbar{
    height: 80px;
    color: rgb(194, 7, 7);
    background-color: black;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.navbar h1{
    text-align: center;
    margin-bottom: 25px;
}

@keyframes bounce{
    0%,100%{
        transform: translateY(0);
    }
    50%{
        transform: translateY(-50px);
    }
}

.outer-box{
    margin-top: 20px;
    height: 550px;
    width: 100vw;
    align-items: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    display: flex;
    justify-content: center;
    justify-content: space-around;
}

.inner-box1{
    height: 500px;
    width: 25%;
    border-radius: 10px;
    background-color: black;
    justify-content: center;
    align-items: center;
    color: rgb(18, 50, 146);
    animation: bounce 0.8s ease 2;
}

.inner-box1 p{
    font-size: 1.2rem;
    text-align: center;
    margin-top: 30px;
    color: rgb(194, 7, 7);
}

.line{
    height: 3px;
    width: 50%;
    background-color: rgb(194, 7, 7);
    transform: translateX(50%);
    margin-top: 15px;
}

.inner-box1 h1{
    text-align: center;
    margin-top: 15px;
    color: rgb(194, 7, 7);
}

.inner-box1 ul{
    margin-top: 50px;
    list-style: none;
    font-family: 'Courier New', Courier, monospace;
    line-height: 2rem;
    margin-left: 5px;
}

.inner-box1 .btn{
    height: 35px;
    display: flex;
    justify-content: center;
    margin-top: 100px;
    padding: 5px;
    text-align: center;
    align-items: center;
}

.btn button{
    border-radius: 10px;
    height: 25px;
    width: 150px;
    font-size: 0.7rem;
    font-weight: bold;
    color: black;
    background-color: rgb(194, 7, 7);
    border-style: none;
}

.inner-box1:hover{
    opacity: 0.7;
    background-color: whitesmoke;
}

.inner-box2{
    height: 500px;
    width: 25%;
    border-radius: 10px;
    background-color: black;
    justify-content: center;
    align-items: center;
    color: rgb(18, 50, 146);
    animation: bounce 0.8s ease 2;
}

.inner-box2 p{
    font-size: 1.2rem;
    text-align: center;
    margin-top: 30px;
    color: rgb(194, 7, 7);
}

.inner-box2 h1{
    text-align: center;
    margin-top: 15px;
    color: rgb(194, 7, 7);
}

.inner-box2 ul{
    margin-top: 40px;
    list-style: none;
    font-family: 'Courier New', Courier, monospace;
    line-height: 2rem;
    margin-left: 10px;
}

.inner-box2 .btn{
    height: 35px;
    display: flex;
    justify-content: center;
    margin-top: 48px;
    padding: 5px;
    text-align: center;
    align-items: center;
}

.inner-box2:hover{
    opacity: 0.7;
    background-color: whitesmoke;
}

.inner-box3{
    height: 500px;
    width: 25%;
    border-radius: 10px;
    background-color: black;
    justify-content: center;
    align-items: center;
    color: rgb(18, 50, 146);
    animation: bounce 0.8s ease 2;
}

.inner-box3 p{
    font-size: 1.2rem;
    text-align: center;
    margin-top: 30px;
    color: rgb(194, 7, 7);
}

.inner-box3 h1{
    text-align: center;
    margin-top: 15px;
    color: rgb(194, 7, 7);
}

.inner-box3 ul{
    margin-top: 35px;
    list-style: none;
    font-family: 'Courier New', Courier, monospace;
    line-height: 2rem;
    margin-left: 10px;
}

.inner-box3 .btn{
    height: 35px;
    display: flex;
    justify-content: center;
    margin-top: 25px;
    padding: 5px;
    text-align: center;
    align-items: center;
}

.inner-box3:hover{
    opacity: 0.7;
    background-color: whitesmoke;
}

    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <h1>Choose your subscription plan</h1>
        </div>
    </header>
    <form method="post" action="project4.php">
        <div class="background"></div>
        <div class="outer-box">
            <div class="inner-box1">
                <p>Free trial</p>
                <div class="line"></div>
                <h1>FREE</h1>
                <ul>
                    <li>✓ Upto 2 hours</li>
                    <li>✓ No support</li>
                    <li>✓ Number of devices - 2</li>
                    <li>✓ Quality - good</li>
                    <li>✓ Resolution - HD(720px)</li>
                </ul>
                <div class="btn">
                    <button type="submit" name="plan" value="trial">START TRIAL</button>
                </div>
            </div>
            <div class="inner-box2">
                <p>Basic</p>
                <div class="line"></div>
                <h1>₹ 199 / Month</h1>
                <ul>
                    <li>✓ Upto 10 hours</li>
                    <li>✓ Email support</li>
                    <li>✓ Number of devices - 4</li>
                    <li>✓ Watch on your mobile <br>
                        &nbsp; phone and tablet</li>
                    <li>✓ Quality - better</li>
                    <li>✓ Resolution - FHD(1080px)</li>
                </ul>
                <div class="btn">
                    <button type="submit" name="plan" value="basic">START TRIAL</button>
                </div>
            </div>
            <div class="inner-box3">
                <p>Premium</p>
                <div class="line"></div>
                <h1>₹ 999 / Month</h1>
                <ul>
                    <li>✓ Upto 10 hours</li>
                    <li>✓ Full support</li>
                    <li>✓ Number of devices - Unlimited</li>
                    <li>✓ Watch on your mobile <br>
                        &nbsp; phone and tablet</li>
                    <li>✓ Watch on your laptop and TV</li>
                    <li>✓ Quality - best</li>
                    <li>✓ Resolution - UHD(4K or 2160px)</li>
                </ul>
                <div class="btn">
                    <button type="submit" name="plan" value="premium">START TRIAL</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
