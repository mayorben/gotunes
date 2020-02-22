<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    
    <style type="text/css">

      /* Styles for wrapping the search box */

.main {
    width: 50%;
    margin: 50px auto;
}

/* Bootstrap 4 text input with search icon */

.has-search .form-control {
  position: static;
    margin-top: 47px;
    padding-left: 2.375rem;
    
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
   
}

    /* Styles for wrapping the search box */

.main {
    width: 50%;
    margin: 50px auto;
  
}

/* Bootstrap 4 text input with search icon on the right */


/* end */
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
       .sticky-offset {
    top: 10px;
}
    </style>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark navbar-expand-sm sticky-top sticky-offset mb-3">
    <a class="navbar-brand" href="#">
      <img src="images/log.png" width="30" height="30" alt="logo" class="bg-white">
      GoMusiq
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-list-2">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
      </ul>
      <span class="navbar-text ml-auto">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Join</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">GoMusiq TV</a>
              </li>
        </ul>  
      </span>
    </div>
  </nav>

 

<!-- side navbar start from here -->
<div class="wrapper d-flex align-items-stretch">
  <nav id="sidebar">
    <div class="custom-menu">
      <button type="button" id="sidebarCollapse" class="btn btn-primary">
      </button>
    </div>
    <div class="img bg-wrap text-center py-4" style="background-image: url(images/bgs_1.jpg);">
      <div class="user-logo">
        <div class="img" style="background-image: url(images/logos.jpg);"></div>
        <h3>Benson Mayor</h3>
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
    </ul>

  </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">

        <div class="main fixed-top">
            <!-- Actual search box -->
            <div class="form-group has-search">
              <span class="fa fa-search form-control-feedback"></span>
              <input type="text" class="form-control" placeholder="Search">
            </div>            
          </div>

        <!-- <input value=" get api data" type="button" id='btn' class=" btn btn-primary ml-5 mt-4"/> -->
        <div id='display' style=" width: 100% " ></div>
    </div>
  </div>
  <div class="main">
  
  
  
      <!-- Actual search box with the icon on the right -->
     


<!-- <img src="" height="350px" width="350px" id="img"/> -->

<!-- <span>made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>='ajax.js'></span> -->
 <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="ajax.js"></script>
</body>
</html>  