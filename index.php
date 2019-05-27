<?php
include "config.php";

if(isset($msg))
{
echo $msg;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SALi Abdelhaq</title>
    <link rel="shortcut icon" href="img/sali8.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!-- ------------------------------------------------------------------------------------------- -->
    <!--------------------------------------- nav bar -------------------------------------------------->
    <!-- ------------------------------------------------------------------------------------------- -->
    <nav id="theme" class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <img id="LOGO" src="img/sali8.jpg" alt="avatar" srcset="">
        <a class="navbar-brand ml-2" href="#">Sali AbdelhaQ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#"> <?php echo $lang['entrer']; ?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#scrol1"><?php echo $lang['entrer2']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#scrol2"><?php echo $lang['entrer3']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#scrol3" tabindex="-1" aria-disabled="true">CONTACT</a>
                </li>
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        THEME
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" onclick="color()">DARK</a>
                        <a class="dropdown-item" onclick="color1()">NORMAL</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ------------------------------------------------------------------------------------------- -->
    <!-------------------------------------------------- home ------------------------------------------>
    <!-- ------------------------------------------------------------------------------------------- -->
    <div class="myyimg">
        <center><img id="myimg" onclick="left1()" src="img/sali8.jpg" ondblclick="left2()" alt="avatar" srcset="">
        </center>
    </div>
    <center>
        <h1 id="INFO1">I N F O R M A T I O N</h1>
    </center>
    <div class="script">
        <center>
            <p><?php echo $lang['entrer4']; ?> </p>
        </center>
    </div>
    <hr id="scrol1">
    <!-- ------------------------------------------------------------------------------------------- -->
    <!------------------------------------------works----------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------- -->
    <center>
        <h1 id="title1"><?php echo $lang['entrer5']; ?></h1>
    </center>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="card" style="width: 25rem;">
                    <img src="img/epoket.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">E-pocket</h5>
                        <a href="https://github.com/isqmail/E-Pocket" class="btn btn-info d-flex justify-content-center">Github</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 25rem;">
                    <img src="img/siteyoucode.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Site-Web-YouCode</h5>
                        <a href="https://github.com/isqmail/Site-Web-YouCode"
                            class="btn btn-info d-flex justify-content-center">Github</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 25rem;">
                    <img src="img/hackaton.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hackathon-Youcode </h5>
                        <a href="https://www.youtube.com/watch?v=eUi2zZVSJhA" class="btn btn-info d-flex justify-content-center">Youtube</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="width: 25rem;">
                    <img src="img/sas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">period sas -YouCode</h5>
                        <a href="https://youcode.ma/ar/programme/" class="btn btn-info d-flex justify-content-center">Youtube</a>
                    </div>
                </div>
            </div>
           
            </div>
        </div>
    </div>
    <hr id="scrol2" class="mt-5">
    <!-- ------------------------------------------------------------------------------------------- -->
    <!-- ----------------------------------------skils--------------------------------------------- -->
    <!-- ------------------------------------------------------------------------------------------- -->
    <center>
        <h1 id="title1"><?php echo $lang['entrer6']; ?></h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        HTML
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        CSS
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        javascript
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <BR><BR>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        adobe XD
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        BOOTSTRAP
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">55%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        Microsoft Office
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <BR><BR>
    <div class="container SKIL">
        <div class="row">
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        PHOTOSHOP
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        JQUERY
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-center">
                    <div class="card-header">
                        MySQL
                    </div>

                    <div class="card-footer text-muted">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100">55%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr id="scrol3">
    <!-- ------------------------------------------------------------------------------------------- -->
    <!------------------------------------------contact--------------------------------------------- -->
    <!--------------------------------------------------------------------------------------------- -->
    <center>
        <h1 id="title1">C O N T A C T</h1>
    </center>
    <div class="container conta">
        <div class='row' >
							
								<div class='col-md-8' >
									
									<div class='contact-form' >
									
										<form id='contact-form' data-toggle='validator' method='post' action='mail.php' >
										
											<div id='contact-form-result' ></div>
										
											<div class='row' >
												
												<div class='col-md-6' >
													<div class='form-group' >
														
														<input type='text' class='form-control' placeholder='Name' name='nom' required>
														<div class='help-block with-errors' ></div>
														
													</div>												
												</div>
												
												<div class='col-md-6' >
													<div class='form-group' >
														
														<input type='email' class='form-control' placeholder='Email' name='mail' required>
														<div class='help-block with-errors' ></div>
													
													</div>
												</div>
												
											</div>
											
											<div class='form-group' >
												
												<input type='text' class='form-control' placeholder='Subject' name='subject' required>
												<div class='help-block with-errors' ></div>
											
											</div>
											
											<div class='form-group' >
												
												<textarea class='form-control' placeholder='Message' name='message' rows='5' required></textarea>
												<div class='help-block with-errors' ></div>
												
											</div>
											
											<div class='form-group text-center' >
												<button type='submit' class='btn-custom btn-color' name="mailform" >
                                                <?php echo $lang['entrer7']; ?>
												</button>
											</div>
											
                                        </form>
                                       
									</div>
									
								
						      	</div>
								
							     	<div class='col-md-4' >
									
									 <div class='contact-info-icons' >
										
										<div class='contact-info' >
											
											<i class='ion-ios-location-outline' ></i>
											
											<p>
												N° 435 Q.El ghedir<br>
												Youssoufia, Maroc
											</p>
											
										</div>
										
										
										<div class='contact-info' >
											
											<i class='ion-ios-telephone-outline' ></i>
											
											<p>
												(+212)-614666196 <br>
												(+212)-657489266
											</p>
											
										</div>
										
										
										<div class='contact-info' >
											
											<i class='ion-android-globe' ></i>
											
											<p>
												<sbr>
												www.Youcode.ma</sbr>
											</p>
											
										</div>
										
										
										
										
									</div>
									
									
									
								</div>
								
								
							</div>
            
        </div>
        
    </div>
    <!----------------------------------------------------------------------------------------------->
    <!------------------------------------------fotter----------------------------------------------->
    <!----------------------------------------------------------------------------------------------->
    <div class="fotter">
        <p>copyright 2019</p>
        <a href="https://www.facebook.com/sali.abdelhaq.3"><i class="fab fa-facebook"></i></a>
        <a
            href="https://www.instagram.com/abdelhaqsali/"><i
                class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/walid-harzafi-90a894173/"><i class="fab fa-linkedin"></i></a>
        <a id="cv" href="http://">downlod cv</a>
        <div >
                  <ul>
                    <a href="index.php?lang=fr"><img width=3% height=3%  src="img/flag-fr.jpg"></a>
                    <a href="index.php?lang=en"><img width=3% height=3% src="img/flag-en.jpg"></a>
                  </ul>
                </div>
    </div>
    <!----------------------------------------------------------------------------------------------->
    <!------------------------------------------src js----------------------------------------------->
    <!----------------------------------------------------------------------------------------------->
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>