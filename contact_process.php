<?php
//include_once "config.php";

$has_error= false;

    if(isset($_POST['submit'])) {
           
            if(empty($_POST['name'])){
                $error_name = "Please enter full name!";
                $has_error= true;
            } else {
                $name= filterUserInput($_POST['name']);
            }

            if(empty($_POST['email'])){
                $error_email = "Please enter email";
                $has_error= true;
            } elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $error_email = "Please enter valid email!";
                $has_error= true;
            } else {
                $email= filterUserInput($_POST['email']);
            }

            if(empty($_POST['reason'])){
                $error_reason = "Please select a reason!";
                $has_error= true;
            } else {
                $reason = filterUserInput($_POST['reason']);  
            }


            if(empty($_POST['message'])){
                $error_message = "Please write your message!";
                $has_error= true;
            } else {
                $message = filterUserInput($_POST['message'], "message");
              
            }


//--------------

if(!$has_error){
    
    # Admin's email address, please change this to your site admin's email.
    $to = 'ko9zad@gmail.com';
    $subject = "Message from silk shop user - $reason ";
   
   
       # Here added a div with some inline style.
       $email_message = "<div style='width: 80%;
       margin:100px auto;
       padding:100px;
       background-color:lightblue;   
       padding: 20px;
       font-weight:bold;
       border: 10px solid maroon;
       border-radius: 5px;
       -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
       -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
       box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);'>";
        //  $email_message .= stripslashes($message)."\r\n";
    
  
    # Create email headers
    # To send HTML mail, the Content-type header must be set     
    /* The header or any additional headers 
    should be separated with a CRLF (a carriage return \r plus a line feed (\r\n)) */

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    # More headers
    // $headers .= 'From: '. $email . "\r\n" ;
    //  $headers .= "Cc: admin@opeldo.com" . "\r\n";
    //  $headers .= "Reply-To: admin@opeldo.com". " \r\n" ;
        

    if(isset($_POST['send_copy'])){
    $headers .= "From: ko9zad@gmail.com" . "\r\n" .
    "CC: $email";
    } else{
    $headers .= "From: ko9zad@gmail.com" . "\r\n" ;
    }


     # Add a logo if you want (make sure the logo is hosted in a live domain (not in localhost)
      $email_message .= "<center><img src='https://www.opeldo.com/public/images/tech_logo2.png' alt='logo' style='border-radius: 5px; width:150px;height:80px;'/></center><br>";
   
     # Now add our form data and close the div at the end. 
    
     $email_message .="Name : $name <br> <br>"
                    . "Email : $email <br> <br>"
                    . "Subject : $subject <br><br>"
                    . "Message : $message<br> ";  
    $email_message .= "Regards $name"."\r\n </div>";
    # Sending email

    if( mail($to, $subject, $email_message, $headers) ){
         # If email success then insert into database
        
        $sql ="INSERT INTO contact(name, email, reason, message) 
         VALUES('$name','$email','$reason','$message')";
         mysqli_query($conn, $sql);
         if(mysqli_affected_rows($conn)<1){
                 $confirm_msg =  "<div class='alert alert-danger' role='alert'> Problem inserting data to database! </div>";
         } else{
            $confirm_msg = "<div class='alert alert-success' role='alert'>Hi ".ucfirst($name).", we have received your message, we will reply you shortly! </div>";
         }   
       
    } else {
        $confirm_msg =  "<div class='alert alert-danger' role='alert'> Problem sending email </div>";
    }

   }

            

}



    
?>
