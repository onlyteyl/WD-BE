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

<!-- head -->
    <?php include("sharedfiles/head.php") ?>

<body>

    <!-- Navbar -->
    <?php include("sharedfiles/nav.php") ?>

    <!-- Page content -->
    <div class="w3-content" style="max-width:2000px;">
        <?php ?>
        <!-- Automatic Slideshow Images -->
        <?php while ($post = mysqli_fetch_assoc($islandinfoResult)) { ?>
            <div class="mySlides w3-display-container w3-center">
                <img src="bannerImg/<?php echo $post["image"] ?>" style="width:100%">
                <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small banner-text-bg">
                    <h3><?php echo $post["name"] ?></h3>
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

            <?php include("sharedfiles/footer.php") ?>
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