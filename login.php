<?php
	include_once "header.php";
	include_once "login_process.php";
?>

<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">

<?php
	if(isset($_GET['msg']) && !empty($_GET['msg'])){
			if($_GET['msg'] == "success"){
				echo "<br><br><div class='registered success_arrow_box success'>You have successfully registered with us!</div>";
			} 
		}
?>



<!-- Start of Contact form block -->
<div class="col-md-6 offset-md-3" style="margin-top:60px; margin-bottom:220px;">
    <span class="anchor" id="formContact"></span>
    <div class="card-header p-0" style="background-color:white;">
            <div class="bg-info text-white text-center py-2" style="background-color:#987fa6;">
                <h3><i class=""></i> Login here</h3>
            </div>
        <div class="card-body"> 
            <form class="form" action="" method="post" role="form" autocomplete="off"> <!-- Start of Form -->
                                            
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
                <a href="register.php" class="btn btn-success btn-info rounded-0 py-2" style="width:45%; margin-left:2%; margin-right:2%;">Register 
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </a>
                <button type="submit" value="Login" name="login" id="submit" class="btn btn-success btn-info rounded-0 py-2" style="width:45%; margin-left:2%; margin-right:2%;">Log in</button>
                
        
            </form> <!-- End of form -->
        </div> <!-- End of card body -->
    </div> <!-- End of card header -->
</div> <!-- End of card -->


</div><!-- End of page container -->
</hr class="featurette-divider">


<?php
	include_once "footer.php";
?>