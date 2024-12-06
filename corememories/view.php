<?php
include("connect.php");
include("classes.php");

// $islandID = $_GET['islandOfPersonalityID'];
// $articleInformation = "";

// if (isset($islandID)) {
//     $islandQuery = "SELECT * FROM `islandsofpersonality` LEFT JOIN islandcontents ON islandsofpersonality.islandOfPersonalityID = islandcontents.islandOfPersonalityID WHERE islandsofpersonality.islandOfPersonalityID = '$islandID'";
// }

$islandinfoQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '1' ";
$islandinfoResult = executeQuery($islandinfoQuery);
?>
<!DOCTYPE html>
<html lang="en">

<?php include("sharedfiles/head.php") ?>

<style>
    .content-title {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05) rotate(2deg);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .img-featured-container {
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .card:hover .img-featured-container img {
        transform: scale(1.1);
    }

    .card-body {
        transition: opacity 0.3s ease-in-out;
    }

    .card:hover .card-body {
        opacity: 0.9;
    }

    .card-text {
        text-align: justify;
    }

    .island-description{

    }
</style>


<body>
    <!-- Navbar -->
    <?php include("sharedfiles/nav.php") ?>



    <!-- Automatic Slideshow Images -->
    <?php while ($post = mysqli_fetch_assoc($islandinfoResult)) { ?>
        <div class="mySlides w3-display-container w3-center">
            <img src="contentpic/<?php echo $post["image"] ?>" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small banner-text-bg">
            </div>
        </div>
    <?php } ?>


     <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
            <h2 class="w3-wide">KULTO ISLAND</h2>
            <p class="w3-opacity"><i>inside out inspired site</i></p>
            <p class="w3-justify">There are no words grand enough to truly capture how much each one of you means to me, but I’ll give it my best shot. You are more than just a group of friends you guys are my second chosen family. Life has a way of throwing challenges and surprises at us, but knowing I have you all by my side makes everything feel a little lighter, a little brighter, and a lot more meaningful.

KULTO ISLAND isn’t just a name; it’s a sanctuary. It’s a space where I can be myself without judgment, where we celebrate each other’s quirks, and where every laughter-filled moment becomes a memory worth treasuring. I love how we’ve built something so unique bond that goes beyond words, rooted in shared experiences, mutual understanding, and unconditional support.
</p>

        </div>


        <div class="w3-black" id="tour">
            <div class="w3-container w3-content w3-padding-32" style="max-width:800px">
                <h2 class="w3-wide w3-center">ISLAND CORES</h2>
                <p class="w3-opacity w3-center"><i>4 of my personality island</i></p><br>
                </div>

    <div class="container">
        <div class="card my-5">
            <div class="row g-0" style="background:radial-gradient(circle, #A3D8F4, #6EC6FF, #5A8FD8);">
                <!-- Image on the left -->
                <div class="col-12 col-md-6">
                    <div class="img-featured-container">
                        <img src="contentpic/content1-1.png" alt="Featured Image" class="img-fluid">
                    </div>
                </div>

                <!-- Content on the right -->
                <div class="col-12 col-md-6">
                    <div class="card-body">
                        <p class="card-text">
                            The celebration of Jermami’s birthday at Southbox Karaoke marked a significant moment for
                            KULTO ISLAND, a night that perfectly embodied the spirit of our circle. It wasn’t just about
                            celebrating jermami’s special day, but about the bond we all share as a group. The karaoke
                            room was filled with laughter, music, and unforgettable moments, with everyone coming
                            together to make the night memorable. It was a true reflection of what KULTO ISLAND
                            is—supporting each other, creating lasting memories, and enjoying every second we spend
                            together. This birthday celebration wasn’t just a party; it was a moment that deepened our
                            connection, a reminder of how lucky we are to have such a close-knit and supportive circle.
                            jermami’s birthday will always be a part of our KULTO story, symbolizing the beginning of
                            many more celebrations and shared adventures to come.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-5">
            <div class="row g-0" style="background:radial-gradient(circle, #A3D8F4, #6EC6FF, #5A8FD8);">
                <!-- Image on the left -->
                <div class="col-12 col-md-6">
                    <div class="img-featured-container">
                        <img src="contentpic/content1-1.png" alt="Featured Image" class="img-fluid">
                    </div>
                </div>

                <!-- Content on the right -->
                <div class="col-12 col-md-6">
                    <div class="card-body">
                        <p class="card-text">
                            The celebration of Jermami’s birthday at Southbox Karaoke marked a significant moment for
                            KULTO ISLAND, a night that perfectly embodied the spirit of our circle. It wasn’t just about
                            celebrating jermami’s special day, but about the bond we all share as a group. The karaoke
                            room was filled with laughter, music, and unforgettable moments, with everyone coming
                            together to make the night memorable. It was a true reflection of what KULTO ISLAND
                            is—supporting each other, creating lasting memories, and enjoying every second we spend
                            together. This birthday celebration wasn’t just a party; it was a moment that deepened our
                            connection, a reminder of how lucky we are to have such a close-knit and supportive circle.
                            jermami’s birthday will always be a part of our KULTO story, symbolizing the beginning of
                            many more celebrations and shared adventures to come.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-5">
            <div class="row g-0" style="background:radial-gradient(circle, #A3D8F4, #6EC6FF, #5A8FD8);">
                <!-- Image on the left -->
                <div class="col-12 col-md-6">
                    <div class="img-featured-container">
                        <img src="contentpic/content1-1.png" alt="Featured Image" class="img-fluid">
                    </div>
                </div>

                <!-- Content on the right -->
                <div class="col-12 col-md-6">
                    <div class="card-body">
                        <p class="card-text">
                            The celebration of Jermami’s birthday at Southbox Karaoke marked a significant moment for
                            KULTO ISLAND, a night that perfectly embodied the spirit of our circle. It wasn’t just about
                            celebrating jermami’s special day, but about the bond we all share as a group. The karaoke
                            room was filled with laughter, music, and unforgettable moments, with everyone coming
                            together to make the night memorable. It was a true reflection of what KULTO ISLAND
                            is—supporting each other, creating lasting memories, and enjoying every second we spend
                            together. This birthday celebration wasn’t just a party; it was a moment that deepened our
                            connection, a reminder of how lucky we are to have such a close-knit and supportive circle.
                            jermami’s birthday will always be a part of our KULTO story, symbolizing the beginning of
                            many more celebrations and shared adventures to come.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

               


        <?php include("sharedfiles/footer.php") ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

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
</body>

</html>