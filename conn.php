<?php   
    $food=$_post['food'];
    $quantity=$_post['quantity'];
    $price=$_post['price'];

    $conn = new mysqli('localhost','root','','fooddb'); 
    if($conn->connect_error){
        echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    } 
    else{
        $stmt = $conn->prepare("insert into foodtable(food,quantity,price) values(?,?,?)");
        $stmt->bind_param("sss",$food,$quantity,$price); 
        $stmt->execute(); 
        echo 'doneeeeee';
        $stmt->close();
        $conn->close();
    }
?>