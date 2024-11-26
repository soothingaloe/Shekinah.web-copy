<?php
session_start();

$isLoggedIn = isset($_SESSION['user']);
$username = $isLoggedIn ? $_SESSION["full_name"] : null;


$registrationSuccess = isset($_SESSION["registration_success"]) ? $_SESSION["registration_success"] : null;
if ($registrationSuccess) {
    unset($_SESSION["registration_success"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shekinah | About Us</title>

    <?php
    require_once __DIR__ . '/../Assets/Html_head.php';
    require_once __DIR__ . '/../Assets/Gsap_cdn.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../CSS/aboutpage.css" />

</head>

<body>
    <?php
    include '../Assets/Loading_page.php';
    showLoader();
    ?>

    <navbar-element data-is-logged-in="<?= $isLoggedIn ? 'true' : 'false' ?>"
        data-username="<?= htmlspecialchars($username) ?>">
    </navbar-element>

    <main id="container">
        <div class="main">
            <section class="dissolve">
                <video loop="true" autoplay="autoplay" muted>
                    <source src="/../Images/shekinahVid.mp4" type="video/mp4">
                    <source src="/../Images/shekinahVid.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </section>
            <div class="contents-body">
                <p class="company-name stagger" style="--delay: 1s;"><img src="/../Images/shekinahLogo.svg"
                        alt="SHEKINAH"></p>
                <h1 class="contents-title stagger" style="--delay: 1.5s;">ABOUT US</h1>
                <span class="contents-p stagger" style="--delay: 2s;">A good place for making unforgettable,
                    joyful
                    moments.</span>
                <button class="button parallax-btn stagger" style="--delay: 2.5s;">BOOK NOW</button>
            </div>
            <!-- <img class="ukiyo" src="/../Images/bg4.jpg" alt=""> -->
        </div>


        <div class="about-sec">
            <center>
                <h1 class="abt-title">ABOUT US</h1>
            </center>
            <img class="ukiyo" src="/../Images/abt.jpg" alt="SHEKINAH">
            <div class="about-cont">

                <span class="f-heading">
                    <h1>
                        Ideal destination for your intimate gathering of any occassion.
                    </h1>
                    <br>
                    <p>
                        A private place where you can relax, chill, enjoy serenity, celebrate life milestones, celebrate
                        any occasion, bond with family, friends or company. Come book with us now to experience
                        serenity, relaxation, and joy of the moment.
                        <br>
                        <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia facilis modi architecto explicabo
                        doloremque magni cumque, consequatur quae adipisci aspernatur tempora perferendis, nulla id
                        voluptatibus aliquid voluptates porro eaque sed.

                    </p>
                </span>

            </div>
        </div>

        <section class="main-box">

            <div class="par4">
                <h1 class="main-title">Our Location</h1>
                <p class="main-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum eveniet nulla atque
                    et
                    minima ipsam doloremque, explicabo voluptates soluta unde, maxime nostrum dignissimos itaque quasi
                    sint
                    quo
                    laboriosam nemo provident quisquam impedit asperiores officiis perspiciatis deserunt excepturi!
                    Culpa,
                    porro
                    facilis aspernatur cupiditate, nam dolore ipsa tenetur repudiandae commodi aperiam error reiciendis
                    sed
                    illo
                    asperiores? Commodi neque architecto qui saepe sequi.</p>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.2022048624594!2d121.04269661170288!3d14.813905371757011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397af21a45740f7%3A0x9e74e2a793a415bf!2sShekinah%20Events%20Place!5e0!3m2!1sen!2sph!4v1730966315918!5m2!1sen!2sph"
                width="700" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <section class="abt-mission">
            <img class="ukiyo" src="/../Images/bg7.jpg" alt="SHEKINAH">
            <div class="abt-div">
                <h1>Our Mission</h1>
                <p>
                    Our mission at Shekinah is to provide a memorable, seamless, and personalized experience for every
                    client.
                    We
                    take pride in transforming your vision into a reality, creating moments that you and your guests
                    will
                    cherish
                    for years to come.
                </p>
                <hr>
                <h1> Our Values</h1>
                <span class="abt-p">
                    <p>
                        <i>Excellence:</i>
                    </p>
                    <p>We strive for the highest standards in event planning and execution.</p>
                    <p><i>Creativity:</i></p>
                    <p>We encourage creativity and customization to make each event one of a kind.</p>
                    <p><i>Satisfaction:</i></p>
                    <p>Our clients’ happiness is our top priority, and we work hard to exceed their
                        expectations.</p>
                    <p><i>Community:</i></p>
                    <p>Shekinah is proud to be a part of the local community, contributing to celebrations and
                        memories
                        for families, friends, and organizations.</p>
                </span>
                <hr>

                <h1>Contact Us</h1>
                <p>
                    If you’re ready to bring your event vision to life, reach out to us today! Whether you’re planning a
                    wedding, a corporate event, or a special celebration, Shekinah has everything you need to make it
                    unforgettable.</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="site-footer">
            <div class="stack">
                <p class="logo-name">Shekinah Event Place Rental</p>
                <p class="location">
                    49 San Ignacio St, Poblacion, <br />San Jose del Monte City, Bulacan
                </p>
            </div>
            <div class="site-link-group">
                <ul class="site-links">
                    <li><a class="link" href="">About Us</a></li>
                    <li><a class="link" href="">Inquire</a></li>
                    <li><a class="link" href="">FAQ's</a></li>
                </ul>
                <ul class="social-links">
                    <li>
                        <a class="socials" href=""><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li>
                        <a class="socials" href=""><i class="fa-brands fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bottom-footer">
            <p class="text-link">
                <a href="">Contact</a>
                |
                <a href="">Imprint</a>
                |
                <a href="">Data Privacy</a>
            </p>
            <p class="company-name stagger" style="--delay: 1s">Shekinah</p>
        </div>
        <a href='#top' class="goUp"><i class="fa-solid fa-arrow-up"></i></a>
    </footer>
    <?php
    require_once __DIR__ . '/../Assets/Html_footer.php';
    ?>
</body>

</html>