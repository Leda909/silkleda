<?php
//error_reporting(0);
$has_error = false;


if(isset($_POST['register'])) {
    
    if(empty($_POST['firstname'])) {
                $error_firstName = "<div class='validation_arrow_box validation'>Please enter first name</div>";
                $has_error = true;
                
                } else {
                    $firstName = filterUserInput($_POST['firstname']);
                }
                
    if(empty($_POST['lastname'])) {
                $error_lastName = "<div class='validation_arrow_box validation'>Please enter last name</div>";
                $has_error = true;
               
                } else  {
                    $lastName = filterUserInput($_POST['lastname']);
                }

    if(empty($_POST['email'])) {
                $error_email = "<div class='validation_arrow_box validation'>Please enter email</div>";
                $has_error = true;
                }
                
                else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $error_email = "<div class='validation_arrow_box validation'>Please enter valid email.</div>";
                $has_error = true;
                
                    } else {
                        $email = filterUserInput($_POST['email']);
                    }
        
    if(empty($_POST['password'])) {
            $error_password= "<div class='validation_arrow_box validation'>Please enter password</div>";
            $has_error = true;
            
            } else  {
                $password = filterUserInput($_POST['password']);
            }
    
    # If no error was found we call insert_into_db function.... and you know what it does!
	if(!$has_error){
        insert_into_db();
    }
    
} # End of POST



# Our custom function to insert the new record into database;
function insert_into_db()
		{
            /* The global keyword is used to access a global variable from within a function. 
			  To do this, use the global keyword before can use these global variables inside the function */
            global $conn, $firstName, $lastName, $password, $email, $error_email;
			
            # We build a SQL Select query;
            $sql=  "SELECT * FROM users where email='$email'";
            
            # mysqli_query()  function performs a query against the database
			$result = mysqli_query($conn, $sql);
    
            # Here we need to check if user already exists for the given  email / password combination. 
			if(mysqli_num_rows($result) > 0){  
               $error_email = "<div class='error_arrow_box error'>Sorry This email already exists!</div>";
            
            } else { # If no such user already exists then we insert new user data to users table.
				
                
                # We build a SQL Insert query;
				$sql=  "INSERT INTO users (firstname, lastname, password,email)
				values ('$firstName','$lastName',sha1('$password'), '$email')";
                
                # mysqli_query()  function performs a query against the database
				$result = mysqli_query($conn, $sql);
                
                    # Finally we use header() function to redirect user to member_area 
				    header("Location: login.php?msg=success");
			
            //	} # End of Inner if
		
        } # End of else
  
   } # End of insert_into_db function 

?>

