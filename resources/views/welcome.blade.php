<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animated Portfolio Website</title>
    @vite('resources/css/app.css')

    <!--boxicons link--->
    <link rel="stylesheet"
          href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--google fonts link--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<!--header section--->
<header>
    <a href="#" class="logo"><span>PAYMENT</span>PARTY</a>

    <ul class="navbar">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contacts</a></li>
    </ul>

    <div class="menu-btn">
        <span>INTRO</span>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
</header>

<!--home section--->
<section class="home">
    <div class="home-text">
        <span>Money now!</span>
        <h1>Payday loans from £50 to £5000</h1>
        <p class="main-btn">How much do you need?</p>
        <div class="main-btn">
            <input class="btn" type="number" id="myNumberInput">
            <a href="#" class="btn two">Get Your Quote</a>
        </div>
    </div>

    <div class="home-img">
        <img src="img/home.png">
    </div>
</section>

<div class="share">
    <p>Check out my:</p>

    <div class="social">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter' ></i></a>
        <a href="#"><i class='bx bxl-linkedin' ></i></a>
        <a href="#"><i class='bx bxl-skype' ></i></a>
    </div>
</div>


<script src="https://unpkg.com/scrollreveal"></script>

<!--Custom js file link--->
<script src="js/script.js"></script>

</body>
</html>
