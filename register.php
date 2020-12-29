<?php    
    include_once "header.php";
    include_once "registration_process.php";
?>

<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing"> <!--row -->


<!-- Start of Contact form block -->
<div class="col-md-6 offset-md-3" style="margin-top:80px; margin-bottom:90px;">
    <span class="anchor" id="formContact"></span>
    <div class="card-header p-0" style="background-color:white;">
            <div class="bg-info text-white text-center py-2" style="background-color:#987fa6;">
                <h3><i class=""></i> Register here</h3>
            </div>
        <div class="card-body"> 
            <form class="form" action="" method="post" role="form" autocomplete="off"> <!-- Start of Form -->
                <div class="form-group"> <!-- First Name -->
                    <label for="fname" class="mb-0">First Name</label>
                        <?php if(isset($error_firstName)){?>  
                            <div class="alert alert-danger" role="alert">
                                <strong> <?=$error_firstName ?> </strong>
                            </div>
                        <?php } ?>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user text-white"></i></div>
                        </div>
                        <input type="text" class="form-control" value="<?php if(isset($firstName))echo $firstName; ?>" name="firstname" id="fname" placeholder="John">
                    </div>
                </div> <!-- End First Name -->

                <div class="form-group"> <!-- Last Name -->
                    <label for="lname" class="mb-0 ">Last Name</label>
                        <?php if(isset($error_lastName)){?>  
                            <div class="alert alert-danger" role="alert">
                                <strong> <?php echo $error_lastName ?> </strong>   
                            </div>
                        <?php } ?>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user text-white"></i></div>
                        </div>
                        <input type="text" class="form-control" value="<?php if(isset($lastName)) echo $lastName; ?>" name="lastname"  id="lname"  placeholder="Doe"> 
                    </div>
                </div> <!-- End Last Name -->
                            
                <div class="form-group">   <!-- Email -->
                    <label for="email" class="mb-0">Email</label> 
                        <?php if(isset($error_email)){?> 
                            <div class="alert alert-danger" role="alert">
                                <strong><?=$error_email; ?> </strong>   
                            </div>
                        <?php } ?>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope text-white"></i></div>
                        </div>
                        <input type="text" name="email" id="email" class="form-control" value="<?php if(isset($email)) echo $email; ?>" aria-describedby="emailHelp" placeholder="john.doe@gmail.com" > 
                    </div>
                </div> <!-- End Email -->

                <div class="form-group">   <!-- Password -->
                    <label for="password" class="mb-0">Password</label> 
                        <?php if(isset($error_password)){?> 
                            <div class="alert alert-danger" role="alert">
                                <strong><?=$error_password; ?> </strong>   
                            </div>
                        <?php } ?>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt text-white"></i></div>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="******">
                    </div>
                </div> <!-- End Password -->
            
                <br>
                <button  class="btn btn-success btn-info rounded-0 py-2" style="width:45%; margin-left:2%; margin-right:2%;" type="submit" value="Register" name="register" id="submit" >Register 
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>
                <a href="login.php"  class="btn btn-success btn-info rounded-0 py-2" style="width:45%; margin-left:2%; margin-right:2%;">Log in</a>
        

            </form> <!-- End of form -->
        </div> <!-- End of card body -->
    </div> <!-- End of card header -->
</div> <!-- End of card -->


</div><!-- End of page container -->
</hr class="featurette-divider">


<?php
	include_once "footer.php";
?>