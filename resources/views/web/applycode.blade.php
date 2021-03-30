<?php

// $conn = new mysqli('localhost', 'root', '', 'demo');
    $error = array('name'=>'', 'email' => '', 'password'=>'', 'matricule'=>'', 'image'=>'', 'err' => '', 'check'=>'' );
    

    if(isset($_POST['submit'])){
        session_start();
        $name= strtoupper($_POST['name']);
        $_SESSION['name']= $name;

        $registration= strtoupper($_POST['registration']);
        $_SESSION['registration']= $registration;


        $faculty= strtoupper($_POST['faculty']);
        $_SESSION['faculty']= $faculty;

        $department= strtoupper($_POST['department']);
        $_SESSION['department']= $department;




        $level= strtoupper($_POST['level']);
        $_SESSION['level']= $level;


        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email = $_POST['email'];
            $_SESSION['email']= $email;
        }else{
                
            $error['email']= 'email must be valid';
        }

        $transnum= strtoupper($_POST['transnum']);
        $_SESSION['transnum']= $transnum;

        $amount= strtoupper($_POST['amount']);
        $_SESSION['amount']= $amount;

        if (array_filter($error)){
            header("location: payment.php?status=success");
        }
        


            
            
        //     $query = "SELECT email, matricule, image FROM transtable WHERE matricule = '$matricule' and email = '$email' ";

        //     $result = mysqli_query($conn, $query) or die(' echo "<div class="alert alert-success" text-center role="alert">Login failed</div>";');
        
        //     $row = mysqli_fetch_assoc($result);
            
            
        // if (($row['matricule'] == $matricule || $row['email'] == $email || $row['image'] == $image) && array_filter($error)){
        //         $error['check'] = ' information already exist ';
        //         header("location: sign-up.php?status=failed");
        // }else{
        //         header("location: dashboard.php?status=success");
        //         $sql = " INSERT INTO transtable(name, email, password, matricule, image, lname) VALUES( '$name', '$email', '$hash2', '$matricule','$upload', $lname ) ";

        //         $create   = $_GET['create-time'];
        //         $_SESSION['create']= $create;

        //         move_uploaded_file($_FILES['image']['name'], $upload);
            
        //         if (file_exists($upload)) {
        //             echo "Sorry, file already exists.";
        //         }
        //     }
            
        
        
        
    }

    // if(!$conn){
    //     echo 'connection error'. mysqli_connect_error();
    // }

    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);
    }
    if(mysqli_query($conn, $sql)){

        // header("location: dashboard.php?status=success");
        
       
    }else{
        // header("location: sign-up.php?status=failed");
        
    }
    $conn->close();
    



?>