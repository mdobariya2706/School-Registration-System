<?php

    header("Content-Type: application/json");
    
    include(dirname(__FILE__)."/../connection.php");
     
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $userName = $request->userName;
        $password = $request->password;
        $email = $request->email;
/*
        $data_arr = array(
            'userName' => $request->userName,
            'password' => $request->password,
            'email' => $request->email
        );
        */
        $result = 'insert into login (userName,password,email) values ("'.$userName.'","'.$password.'","'.$email.'")';


        if($conn->query($result) === TRUE){
            echo "Succ";
        }else{
            echo "Err";
        }

        //echo json_encode($data);

        //flush();
    }

?>
<script> console.log($res);</script>