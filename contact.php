<?php
  include_once "header.php";
  include_once "contact_process.php";
?>

<?php 
    if(isset($confirm_msg)) {
       echo $confirm_msg;
        unset($name);
        unset($email);
        unset($message);
       }
?>


<!-- Page Content -->
<div class="bodybox container" style="margin-top: 35px; margin-bottom:25px; height: auto;">
    <div class="row">
        <div class="col-md-5">
            <div class="card" style="background-color:#f8deea; border:none;">
                <img class="slideimg d-block" style="border-radius:50%; border:5px dashed #987fa6; padding:10px; width:35%;" src="images/portreme.jpg">
                <div style="background-color:white; margin-top:15px; margin-left:10%; margin-right:10%; margin-bottom:25px;">
                    <p class="card-header text-white text-uppercase" style="background-color:#987fa6; font-weight:bold; padding-left:10%;">Follow me:
                        <a class="btn-success btn-lg" style="margin:0 0 0 5%;" href="">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="btn-success btn-lg" style="margin:0 0 0 5%;" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </p>

                    <div class="contact_box" style="padding:30px;">    
                        <p style="padding-bottom:10px;">London & Budapest</p>
                        <div class="con_msg">
                            <p >Please, feel free to contact with me,</p>
                            <p >if you have any inqueries regarding to order or my works.</p>
                        </div>
                    </div>
                </div>
             

            </div>
        </div>

       <!-- Start of Contact form block -->
        <div class="col-md-7" style="color:#47295a;">
            <span class="anchor" id="formContact"></span>
            <div class="card-header p-0"  style="background-color:white;">
                    <div class="text-white text-center py-2" style="background-color:#987fa6;">
                        <h3><i class="fa fa-envelope"></i> Contact Me</h3>
                    </div>
                <div class="card-body"> 
                    <form class="form" action="" method="post" role="form" autocomplete="off"> <!-- Start of Form -->
                        <div class="form-group"> <!-- Name -->
                            <label for="name" class="mb-0" >Name</label>  
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-white"></i></div>
                                </div>
                                <input type="text" name="name" id="name" class="form-control" value="<?php if(isset($name))echo $name;?>" placeholder="John Doe">
                            </div>
                            <?php if(isset($error_name)){?>
                                <div class="alert alert-danger" role="alert">
                                    <strong><?=$error_name; ?></strong>
                                </div>
                            <?php } ?>
                        </div> <!-- End Name -->
                                    
                        <div class="form-group">   <!-- Email -->
                            <label for="email" class="mb-0">Email</label> 
                                
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-white"></i></div>
                                </div>
                                <input type="text" name="email" id="email" class="form-control" value="<?php if(isset($email))echo $email;?>" aria-describedby="emailHelp" placeholder="john.doe@gmail.com" >
                            </div>
                            <?php if(isset($error_email)){?>
                                <div class="alert alert-danger" role="alert">
                                    <strong><?=$error_email; ?> </strong> 
                                </div>
                            <?php } ?>
                        </div> <!-- End Email -->
                    
                        <div class="form-group">   <!-- Reason selector -->  
                            <label for="reason" class="mb-0">Reason</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-tag prefix text-white"></i></div>
                                </div>
                                <select class="form-control" id="reason" name="reason" >
                                    <option value="" disabled selected> Select</option>
                                    <option value="About Site"> About Site </option>
                                    <option value="About Painting"> About Painting</option>
                                    <option value="Ordering">Ordering</option>
                                    <option value="Other"> Other </option>
                                </select>
                            </div>
                            <?php if(isset($error_reason)){?>
                                <div class="alert alert-danger" role="alert">
                                    <strong><?=$error_reason; ?> </strong>
                                </div>
                            <?php } ?>
                        </div> <!-- End Reason -->

                        <div class="form-group"> <!-- Message -->
                            <label for="message" class="mb-0">Message</label>       
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment text-white"></i></div>
                                </div>
                                <textarea rows="6" name="message" id="message" class="form-control" placeholder="Write your message here.."><?php if(isset($message))echo "$message"?></textarea>
                            </div>
                            <?php if(isset($error_message) && !empty($error_message)){?>
                                <div class="alert alert-danger" role="alert">
                                    <strong> <?=$error_message; ?></strong>
                                </div>
                            <?php } ?> 
                        </div> <!-- End Message -->
                                    
                        <div class="form-check small">
                            <label for="send_copy" class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="Yes" id="send_copy" name="send_copy"> <span> <b>Send me a copy</b> </span>
                            </label>
                        </div>
                        
                        <br>
                            <button  type="submit" id="submit" name="submit" class="btn-success btn-block rounded-0 py-2">Send Message 
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            </button>
                
                    </form> <!-- End of form -->
                </div> <!-- End of card body -->
            </div> <!-- End of card header -->
        </div> <!-- End of card -->

        
    </div>
</div>
<!-- /.container -->


<?php
  include_once "footer.php";
?>