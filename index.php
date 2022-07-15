<?php

    isset($_POST['signin']) ? print('sign in') : (isset($_POST['signup']) ? print('sign up') : null);
   
?>

<!DOCTYPE html>
<html lang="en">

    <head>
            
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Booking System</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="./assets/css/stylee.css">
    </head>

    <body>
        <nav class="navbar navbar-dark navbar-expand-md top bg-dark" id="navigation" style="padding: 0px;padding-right: 5px;">
            <div class="container-fluid">
                <div>    
                    <a class="navbar-brand" href="#">Batho Pele Hostpital</a>
                </div>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background-color: #ffffff;margin-right: 17px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="color: rgba(255,255,255,0.5);background-color: #ffffff;"></span></button>
                <div class="collapse navbar-collapse text-justify" id="navcol-1" style="padding: 0px;padding-right: 0px;padding-left: 6px;">
                    <!-- <ul class="nav navbar-nav mx-auto" id="nav-links">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: rgb(255,255,255);">Home</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: #ffffff;">Academic Support</a>
                            <div class="dropdown-menu" role="menu">
                                <h6 class="dropdown-header" role="presentation">Structures</h6><a class="dropdown-item" role="presentation" href="#">Mentors</a><a class="dropdown-item" role="presentation" href="#">Tutors</a><a class="dropdown-item" role="presentation" href="#">Lectures</a><a class="dropdown-item"
                                    role="presentation" href="#">SDS</a><a class="dropdown-item" role="presentation" href="#">Clinic</a></div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: rgb(255,255,255);">About</a></li>
                    </ul> -->
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" ><button class="btn btn-outline-light" data-toggle="modal" data-target="#signup" type="button">Sign In</button></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" ><button class="btn btn-outline-secondary" data-toggle="modal" data-target="#signin" type="button">Sign Up</button></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="modal fade" role="dialog" tabindex="-1" id="signup">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign In</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="email" required="" placeholder="Email Address">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div><input class="form-control" type="password" required="" placeholder="Password">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group"><button class="btn btn-outline-primary btn-lg " style="width: 100%;" name="signin" type="submit">Sign In</button></div>
                        </form>
                        <hr style="background-color: #bababa;">
                        <p class="text-center">Or&nbsp;<a class="text-decoration-none" href="#">Forgot password</a></p>
                        <p class="text-center">Don't have an account? &nbsp;<a class="text-decoration-none" data-dismiss="modal" data-toggle="modal" data-target="#signin" href="#">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="signin">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign Up Now</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <form class="mt-4" method="POST" >
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" id="user-name" required="" placeholder="Full Name">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" required="" placeholder="Surname">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="far fa-envelope"></i></span></div><input class="form-control" type="email" required="" placeholder="Email Address">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div><input class="form-control" type="password" required="" placeholder="Password">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div><input class="form-control" type="password" required="" placeholder="Confirm Password">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" required="" checked=""><label class="form-check-label" for="formCheck-1">I agree all the terms and conditions.</label></div>
                            </div>
                            <div class="form-group"><button class="btn btn-outline-primary btn-lg " style="width: 100%;" name="signup" type="submit">Sign Up</button></div>
                        </form>
                        <hr style="background-color: #bababa;">
                        <p class="text-center">Already have an Account?&nbsp;<a class="text-decoration-none" data-dismiss="modal" data-toggle="modal" data-target="#signup" href="#">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
        <div class="container-fluid bg-img">

            <div class="container" style="padding: 10% 0;">
                <h1 class="bounce animated">Batho Pele Hospital</h1>
                <p class="rubberBand animated">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Suscipit minima pariatur nostrum aut corrupti nisi qui soluta, <br>
                    repellat deserunt. Quidem. 
                </p>

                <!-- <input type="button" class="btn btn-success btn-appointment" value="Make Appoitment"> -->

                <div class="btn btn-primary" role="button">Learn More</div>
                
            </div>
            
        </div>

        <div class="container-fluid bg-secondary" style="padding-top:15px;" >
        <div class="container">
            <div class="row p-3">
                <div class="col-6">
                    <div class="contactUs">
                        <h4>Contact Us</h4>
                        <div class="row b">
                            <div class="col-6">
                                <div>
                                    <span>Email:</span>
                                    <span>example@example.com</span>
                                </div>
                                <div>
                                    <span>Tel:</span>
                                    <span>012 345 6789</span>
                                </div>
                                <div>
                                    <span>Website:</span>
                                    <span>www.example.com</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <span>Facebook:</span>
                                    <span>example appoint</span>
                                </div>
                                <div>
                                    <span>Twitter:</span>
                                    <span>@example_</span>
                                </div>
                                <div>
                                    <span>Intagram:</span>
                                    <span>@_example</span>
                                </div>
                                <div>
                                    <span>Whatsapp:</span>
                                    <span>012 654 9879</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="aboutUs">
                        <h4>About Us</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                            Culpa ea provident qui necessitatibus at explicabo eos, <br>
                            perspiciatis officia placeat amet praesentium mollitia <br>
                            earum dolorum accusamus obcaecati id animi nisi officiis <br>
                            quis ipsum magni. Officia cupiditate odio quia distinctio <br>
                            sunt tenetur porro, unde debitis maxime necessitatibus ad <br>
                            quibusdam quaerat, saepe repudiandae.
                        </p>
                    </div>
                </div>
            </div>
            </div>     
        </div>

        
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>