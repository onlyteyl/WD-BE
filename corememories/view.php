<?php
include("connect.php");
include("classes.php");

$islandID = $_GET['islandOfPersonalityID'];
$articleInformation = "";

if (isset($islandID)) {
    $islandQuery = "SELECT * FROM `islandsofpersonality` LEFT JOIN islandcontents ON islandsofpersonality.islandOfPersonalityID = islandcontents.islandOfPersonalityID WHERE islandsofpersonality.islandOfPersonalityID = '$islandID'";
    }


?>
<!DOCTYPE html>
<html lang="en">

<?php include("sharedfiles/head.php") ?>

<body>
    <!-- Navbar -->
    <?php include("sharedfiles/nav.php") ?>

    <div class="container-fluid">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>