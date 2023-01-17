<?php
include('connection.php');


$sql = "SELECT * FROM gd_table" ;
$result = mysqli_query($conn, $sql);
$iplate = 1;
$icup = 1;
$itissue = 1;


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if ($iplate == $row["plate"] && $icup == $row["cup"] && $itissue == $row["tissue"]) {

            echo "plate: " . $row["plate"] . " - Cup: " . $row["cup"] . "tissue: " . $row["tissue"] . "<br>";
            echo '  <img src="' . $row["picture"] . '">';
            
        }

    }
} else {
    echo "No Data Found";
}

mysqli_close($conn);
?>
<div>
    <img src="image1.jpg" style="position: absolute; top: 50px; left: 50px; z-index:1;">
    <img src="image2.jpg" style="position: absolute; top: 10px; left: 10px; z-index:2;">
</div>

