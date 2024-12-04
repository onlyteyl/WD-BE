<?php
include('connect.php');
include('classes.php');

$cards = array();

$islandQuery = "SELECT * FROM islandsofpersonality";
$islandResult = executeQuery($islandQuery);

while ($islandRow = mysqli_fetch_assoc($islandResult)) {
    $c = new island(
        $islandRow['name'],
        $islandRow['shortDescription'],
        $islandRow['longDescription'],
        $islandRow['color'],
        $islandRow['image']

    );

    array_push($cards, $c);
}

$islandinfoQuery = "SELECT * FROM islandsofpersonality";
$islandinfoResult = executeQuery($islandinfoQuery);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>TeyL | CoreMemories</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- disney font -->
    <link href="https://fonts.cdnfonts.com/css/waltograph" rel="stylesheet">

    <!-- roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">



</head>
<style>
    .mySlides {
        display: none
    }

    body {
        font-family: 'Roboto', sans-serif;
        background: black;
        color: #ffffff;
    }

    /* navbar */
    .sadness-navbar {
        background: black;
        border: none;
    }

    .sadness-navbar .navbar-brand {
        font-family: 'Arial', sans-serif;
        color: #F0F8FF;
        font-size: 1.8rem;
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }

    .sadness-navbar .nav-link {
        color: #F0F8FF !important;
        font-size: 1rem;
        text-transform: uppercase;
        margin: 0 10px;
        transition: color 0.3s;
    }

    .sadness-navbar .nav-link:hover {
        color: #ADD8E6;
        text-shadow: 0 0 5px rgba(173, 216, 230, 0.8);
    }

    .sadness-navbar .navbar-toggler-icon {
        background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"%3E%3Cpath stroke="aliceblue" stroke-width="2" d="M4 7h22M4 15h22M4 23h22" /%3E%3C/svg%3E');
    }


    h2,
    h3 {
        color: #ADE8F4;
    }

    .w3-black {
        background: linear-gradient(to top, rgba(29, 53, 87, 1), rgba(29, 53, 87, 0));
    }

    /* banner */

    .banner-text-bg {
        background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
        width: 100%;
    }


    /* footer */
    .footer {
        background: radial-gradient(circle, #A3D8F4, #6EC6FF, #5A8FD8, #457B9D, #264653) !important;
    }

    /* card */

    .card-bg {

        border-radius: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: justify;

    }


    .card-bg:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }


    .btn {
        background: #1D3557;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background: #457B9D;
    }


    @media (max-width: 767px) {
        .card {
            margin-bottom: 20px;
        }
    }


    @media (min-width: 768px) and (max-width: 992px) {
        .card {
            margin-bottom: 15px;
        }
    }

    @media (min-width: 992px) {
        .row-cols-lg-4 {
            display: flex;
            justify-content: space-between;
        }
    }



    /* message me */
    .message-bg {
        background: linear-gradient(to bottom, rgba(29, 53, 87, 1), rgba(29, 53, 87, 0));
    }

    .w3-button {
        background: radial-gradient(circle, #A3D8F4, #6EC6FF, #5A8FD8);
        border-radius: 20px;
        color: black;
        font-weight: bold;
    }

    .w3-button:hover {
        color: white !important;
    }
</style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sadness-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="Logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#band">INFO</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tour">ISLAND</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Page content -->
    <div class="w3-content" style="max-width:2000px;">
<?php ?>
        <!-- Automatic Slideshow Images -->
        <?php while ($post = mysqli_fetch_assoc($islandinfoResult)) { ?>
        <div class="mySlides w3-display-container w3-center">
            <img src="bannerImg/<?php echo $post["image"] ?>" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small banner-text-bg">
                <h3><?php echo $post["name"]  ?></h3>
                <p><b><?php echo $post["shortDescription"] ?></b></p>
            </div>
        </div>
        <?php } ?>
        
        <!-- The Band Section -->
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
            <h2 class="w3-wide">CORE MEMORIES</h2>
            <p class="w3-opacity"><i>inside out inspired site</i></p>
            <p class="w3-justify">CoreMemories are the cherished highlights of my life, capturing moments filled with
                laughter, love, and growth. They represent my journey with the people who matter most whether it’s
                shared adventures with friends, heartwarming memories with my girlfriend, or the thrilling milestones of
                my esports journey. Each memory is a testament to the connections, challenges, and experiences that have
                shaped me today.</p>

        </div>

        <!-- The Tour Section -->
        <div class="w3-black" id="tour">
            <div class="w3-container w3-content w3-padding-32" style="max-width:800px">
                <h2 class="w3-wide w3-center">PERSONALITY ISLAND</h2>
                <p class="w3-opacity w3-center"><i>4 of my personality island</i></p><br>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">

                    <?php foreach ($cards as $card) { ?>
                        <div class="col-6">
                            <?php echo $card->buildCard() ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- The Contact Section -->
            <div class="container-fluid message-bg" id="contact">
                <h2 class="w3-wide w3-center">MESSAGE ME</h2>
                <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
                <form>
                    <div class="container">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button class="w3-button">SEND</button>
                    </div>
                </form>


            </div>
        </div>

        <!-- End Page Content -->
    </div>

    <!-- Image of location/map -->
    <img src="bannerImg/BottomB.jpg" class="w3-image w3-greyscale-min" style="width:100%">

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge footer">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
        </p>
    </footer>

    <script>
   // Automatic Slideshow - change image every 4 seconds
let myIndex = 0;
carousel();

function carousel() {
    const slides = document.getElementsByClassName("mySlides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; // Hide all slides
    }
    myIndex++;
    if (myIndex > slides.length) {
        myIndex = 1; // Reset index if it exceeds slide count
    }
    slides[myIndex - 1].style.display = "block"; // Show the current slide
    setTimeout(carousel, 4000); // Set the timer for the next change
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</body>

</html>