<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<style>
    footer {
    width: 100%;
    height: 155px;
    width: 100%;
    height: 155px;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
    left: 0px;
    top: 0px;
    background-attachment: fixed;
}

footer img {
    width: 100%;
    height: 155px;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
    left: 0px;
    top: 0px;
    background-attachment: fixed;
}
</style>

<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <nav class="navbar">
        <img src="logo.png" class="logo">
        <button class="button1"><a href="logout.php">Log Out</a></button>
    </nav>

    <section class="home" id="home">
        <div class="content">
            <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
            <h1>To Cosmo <span>Build.</span></h1>
            <h3>Building Extraterrestrial PCs to provide an out of this world gaming experience. Taking Your<br> gameplay to another level.</h3>
            <button class="button2"><a href="shop.html">Get Started.</a></button>
        </div>
        <div class="bumi">
            <img src="bumi.png">
        </div>
        <a href="#about">
            <button class="scroll-down"></button>
        </a>
        </div>
    </section>


    <section class="about" id="about">
        <nav class="navbar">
            <img src="logo.png" class="logo">
            <button class="button1"><a href="login.html">Log Out</a></button>
        </nav>

        <div class="body1">
            <h2> Why Us?</h2>
            <h4> As our services are provided by gamers themselves, we understand how <br>important the performance of a PC is to you. This is why our services is <br>also provided with maximum effort in order to ensure your upmost <br>satisfactory.</h4>
            <div class="body2">
                <div class="container">
                    <div class="card">
                        <div class="face face1">
                            <div class="content1">
                                <img src="clock.png">
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content1">
                                <p>Make duration and cost efficient acceleration.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="face face1">
                            <div class="content1">
                                <img src="price.png">
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content1">
                                <p>Has the lowest price compared to other products with the same specifications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="face face1">
                            <div class="content1">
                                <img src="social.png">
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content1">
                                <p>Provide a guarantee that the product ordered by the customer has complied with the established quality requirements</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tombol">
                <div class="border"></div>
            </div>
        </div>
        <div class="tengah">
            <div class="vertical">
                <h5>F<br>O<br>U<br>N<br>D<br>E<br>R</h5>
                <div class="border1"></div>
                <img src="pro.png">
                <div class="box">
                    <div class="boxclick">
                        <div class="ktk ktk1">
                            <div class="konten">
                                <img src="akun.png">
                                <h5>Profile</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="icon twitter">
                <div class="tooltip">
                    Twitter
                </div>
                <span><i class="fab fa-twitter"></i></span>
            </div>
            <div class="icon instagram">
                <div class="tooltip">
                    Instagram
                </div>
                <span><i class="fab fa-instagram"></i></span>
            </div>
            <div class="icon youtube">
                <div class="tooltip">
                    YouTube
                </div>
                <span><i class="fab fa-youtube"></i></span>
            </div>
        </div>

        <div class="border2">
            <div class="border"></div>
        </div>

        <div class="gamer">
            <div class="text">
                <p>"Asthounishingly fast, and probably <br>one of the most aesthetically <br>pleasing gaming PC i've seen so <br>far.."</p>
                <div class="profil">
                    <img src="valkryae.png">
                    <div class="job">
                        <p>Valkryae</p>
                        <h6>content Creator</h6>
                    </div>
                </div>
            </div>
            <div class="text">
                <p>"Lightning speed start up, <br>seriously life changing stuff <br>they're making. Would highly<br> recommend tbh...."</p>
                <div class="profil">
                    <img src="aceu.png">
                    <div class="job">
                        <p>Aceu</p>
                        <h6>content Creator</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="border3">
            <div class="border"></div>
        </div>

        <div class="command">
            <p>Join Them, and Defy your Expectations.</p>
            <button class="button4"><a href="shop.html">Start</a></button>
            <div class="bumibawah">
                <img src="bumi.png">
            </div>
        </div>
    </section>
</body>
    <footer>
    <div class="foot">
        <div class="foot1">
            <div class="abs">
                <p1>ABOUT US</p1>
                <p>Cosmic Builds are a PC building company that specializes <br>on making high-end PC for maximum performance</p>
            </div>
            <div class="cont">
                <p1>CONTACT US</p1>
                <p>+ (62) 813 1919 0093 <br> + (021) 334 44567</p>
            </div>
            <div class="logok">
                <img src="logo.png">
            </div>
        </div>
    </div>
    <div class="cp">
        <div class="copy">
            <p>@ 2022 COPYRIGHT: COSMOBUILDS.COM</p>
        </div>
    </div>
    </footer>
</html>