<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://use.fontawesome.com/51569c99da.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/audioncard.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Document</title>
    
    <style type="text/css">

     .shadowrise{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin: 0px 12px;
      }
      .shadowrise2{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }

      /* for the flex box on page */
      .scale {
          transform: scaleY(1.05);
          padding-top: 5px; 
      }

      /* Styles for wrapping the search box */

    .main {
        width: 50%;
        margin: 50px auto;
    }

  
    /* navbar color here */
      .bg-dark{
        background-color: #903e7c !important;
      }
      /* ends */
       .custom{
         width: 100px !important;
       }
       .custom:hover{
         outline: none !important;
        text-decoration: none;
       }
       .custom:focus{
        outline: none !important;
       }
    
  </style>
</head>
<body>
 

  <nav class="navbar navbar-dark bg-dark navbar-expand-sm sticky-top sticky-offset">
    <a class="navbar-brand" href="#">
      <img src="images/log.png" width="30" height="30" alt="logo" class="bg-white">
      GoMusiq
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-list-2">
      <ul class="navbar-nav">
       
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactUs.php">Contact Us</a>
        </li>
        
      </ul>

      <span class="navbar-text ml-auto">
        <ul class="navbar-nav">
              <li class="nav-item">
               <a href="#" class="btn btn-sm animated-button thar-four nav-link">Join Us</a>
              </li>
              <li class="nav-item ml-1">
                <a href="#" class="btn btn-sm animated-button thar-four nav-link">GoMusiq TV</a>
              </li>
              
        </ul>  
      </span>
    </div>
  </nav>


<!-- side navbar start from here -->
<div class="wrapper d-flex align-items-stretch">
  <nav id="sidebar">
    <div class="custom-menu sticky-top  ">
      <button type="button" id="sidebarCollapse" class="btn btn-primary">
      </button>
    </div>
    <div class="img bg-wrap text-center py-4" style="background-image: url(images/bgs_1.jpg);">
      <div class="user-logo">
        <div class="img" style="background-image: url(images/logos.jpg);"></div>
        <h3>Welcome Here</h3>
      </div>
    </div>
    <ul class="list-unstyled components mb-5">
      <li class="active">
        <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
      </li>
      <li>
          <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Download</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-gift mr-3"></span> Gift Code</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
      </li>
      <li>
        <div class="container mt-3">
          <div class="row justify-content-center ">

            <div class="col-lg-10 col-md-5 col-sm-6 pt-2 mb-3 shadowrise" >
              <img src="images/ads.png" class='w-100 h-100'/>
            </div>

            <div class="col-lg-10 col-md-5 col-sm-6 pt-2 mb-3 shadowrise">
              <img src="images/ads.png" class='w-100 h-100'/>
            </div>

            <div class="col-lg-10 col-md-5 col-sm-6 pt-2 mb-3 shadowrise" >
              <img src="images/ads.png" class='w-100 h-100'/>
            </div>
            
              
          </div>
        </div>
      </li>
    </ul>

  </nav>
  <!-- Page Content  -->
  <div id="content " class="p-md-2 container shadowrise2" >
    <!-- carousel starts here -->
    <div id='border2 ' class=' shadowrise'>
    <div id="carousel borders" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/logo2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/logo3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/logo.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    <!-- carousel ends -->
    <!-- search start -->
    <div class="row justify-content-center mt-2" >
                        <div class="col-10 col-md-8 col-lg-8 col-sm-10 ">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center box">
                                    <div class="col-auto">
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Movie or Song">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-light" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>  

    
                    <div class="d-flex flex-wrap justify-content-center m-2 shadowrise" id='display'>

                    </div>
   

    <!-- this ends the main page -->
  </div>
  </div>

 

  
  <div class="container ">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xx-12">
       <span class='p-3'>Created by <code>Benson Mayowa <?php ?> </code></span>
        </div>
      </div>
    </div>
 
       <!-- Back to top button -->
       <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
    
<!-- <span>made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>='ajax.js'></span> -->
 <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="ajax.js"></script>

  <script type="text/javascript">
    
  </script>
   
</body>
</html>  