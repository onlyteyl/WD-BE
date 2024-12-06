<?php
include("connect.php");
include("classes.php");

// island
// imbis array i can use id instead
$islandID = $_GET['id'];
$islandInfo;


$islandQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID ='$islandID'";
$islandResult = executeQuery($islandQuery);

while ($islandRow = mysqli_fetch_assoc($islandResult)) {
    $islandInfo = new island(
        $islandRow['islandOfPersonalityID'],
        $islandRow['name'],
        $islandRow['shortDescription'],
        $islandRow['longDescription'],
        $islandRow['color'],
        $islandRow['image']
    );
}


// content 
$contentArray = array();
$islandContentQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandID' ";
$islandContentResult = executeQuery($islandContentQuery);
$islandContentCount = mysqli_num_rows($islandContentResult);
while ($islandContentRow = mysqli_fetch_assoc($islandContentResult)) {
    $ic = new islandContent(
        $islandInfo->color,
        $islandContentRow['image'],
        $islandContentRow['islandOfPersonalityID'],
        $islandContentRow['content']
    );

array_push($contentArray, $ic);
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include("sharedfiles/head.php") ?>

<body>
    <!-- Navbar -->
    <?php include("sharedfiles/nav.php") ?>



    <!-- Automatic Slideshow Images -->
    <?php foreach ($contentArray as $card) { ?>
        <div class="mySlides w3-display-container w3-center">
            <img src="contentpic/<?php echo $card->image ?>" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small banner-text-bg">
            </div>
        </div>
    <?php } ?>


    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
        <h2 class="w3-wide"> <?php echo $islandInfo->name ?></h2>
        <p class="w3-opacity"><i>inside out inspired site</i></p>
        <p class="w3-justify"> <?php echo $islandInfo->longDesc ?>
        </p>
    </div>

    <div class="w3-black" id="tour">
        <div class="w3-container w3-content w3-padding-32" style="max-width:800px">
            <h2 class="w3-wide w3-center">ISLAND CORES</h2>
            <p class="w3-opacity w3-center"><i><?php echo $islandContentCount?> of my island cores</i></p><br>
        </div>

        <div class="container">

            <?php
            foreach ($contentArray as $card) {
                echo $card->buildCard();
            }
            ?>

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