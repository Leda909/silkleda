<?php
$conn = mysqli_connect("localhost","root","","silk_shop");

// Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

//mysqli_select_db($con,"shop");

# For default timezone setup
date_default_timezone_set('UTC');

session_start();


# -----------------------START OF FILTERING FUNCTIONS----------------------------#
#----------------------------------------------------#

function filterUserInput($data) {

  // trim() function will remove whitespace from the beginning and end of string.
  $data = trim($data);

  // Strip HTML and PHP tags from a string
  $data = strip_tags($data);

  /* The stripslashes() function removes backslashes added by the addslashes() function.
      Tip: This function can be used to clean up data retrieved from a database or from an HTML form.*/
  $data = stripslashes($data);

  // htmlspecialchars() function converts special characters to HTML entities. Say '&' (ampersand) becomes '&amp;'
  $data = htmlspecialchars($data);
  return $data;

} # End of filter_user_input function
?>