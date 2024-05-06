<?php
$conn = new mysqli("localhost", "root", "","abcresort");

if ($_SERVER['REQUEST_METHOD']=='POST') {
    

    $packages = $_POST['packages'];
    $name = $_POST['name'];
    $phoneNo = $_POST['phoneNo'];
    $pax = $_POST['pax'];
    $arrival = $_POST['arrival'];
    $leaving = $_POST['leaving'];
}

    if($conn){
        $sql = "insert into `tb_booking` (packages, name, phoneNo, pax, arrival, leaving)
        VALUES ('$packages','$name',' $phoneNo','$pax','$arrival ','$leaving' )";
        $result = mysqli_query($conn, $sql);
        if($result){
            
           
            echo "<script>
            window.location.href = 'thankyou.html';</script>";
            
    
        }else{
            die(mysqli_error($conn));
        
    }
}
    else{
        die(mysqli_error($conn));
    }


?>

