<?php
    $host = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "emma";
    $tablename="emma";

    // $pusername=$_POST['username'];
    // $ppassword=$_POST['password'];

    //create connection
    $conn = new mysqli ($host,$username,$dbpassword,$dbname);

    if ($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }
    else {
    
        // $sql ="INSERT INTO $tablename(username,password)VALUES(`$username`,`$password`)";
        $pusername =$_POST['username'];
        $ppassword =$_POST['password'];
        $stmt=$conn->prepare("insert into $tablename(username,password)values(?,?)");
        $stmt->bind_param("ss",$pusername,$ppassword);
        $stmt->execute();
        echo "new record is inserted successfully";
        //header(location:successfull.php);
         
    //     else{
    //         echo "error:" . $sql . "<br>" . $conn->error;
    //    }
    $stmt->close(); 
    $conn->close();
   }
   



?>