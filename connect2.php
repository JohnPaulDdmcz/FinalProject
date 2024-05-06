<?php 
$conn = new mysqli("localhost", "root", "","abcresort");
if ($_SERVER['REQUEST_METHOD']=='POST') {
    

    $packages = $_POST['packages'];
    $amenitiesFeed = $_POST['amenitiesFeed'];
    $overallFeed = $_POST['overallFeed'];
    $rating = $_POST['rating'];
    
}

if($conn){
    $sql = "insert into `tb_feedback` (packages, amenitiesFeed, overallFeed, rating)
    VALUES ('$packages','$amenitiesFeed',' $overallFeed','$rating')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>
        window.location.href = 'thankyouf.html';</script>";
        

    }else{
        die(mysqli_error($conn));
    
}
}
else{
die(mysqli_error($conn));
}
?>