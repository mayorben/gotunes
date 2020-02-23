<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    
    <style type="text/css">
      /*styles for the go up button*/
      #button {
      display: inline-block;
      background-color: #FF9800;
      width: 50px;
      height: 50px;
      text-align: center;
      border-radius: 4px;
      position: fixed;
      bottom: 30px;
      right: 30px;
      transition: background-color .3s, 
        opacity .5s, visibility .5s;
      opacity: 0;
      visibility: hidden;
      z-index: 1000;
    }
    #button::after {
      content: "\f077";
      font-family: FontAwesome;
      font-weight: normal;
      font-style: normal;
      font-size: 2em;
      line-height: 50px;
      color: #fff;
    }
    #button:hover {
      cursor: pointer;
      background-color: #333;
    }
    #button:active {
      background-color: #555;
    }
    #button.show {
      opacity: 1;
      visibility: visible;
    }




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
 
<!-- ends here -->
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
      
            <!-- Actual search box -->
           

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
<div class="wrapper d-flex align-items-stretch  fix-top">
  <nav id="sidebar">
    <div class="custom-menu">
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
    </ul>

  </nav>
  <!-- Page Content  -->
  <div id="content" class="p-4 p-md-5 pt-5">
     <!-- <input value=" get api data" type="button" id='btn' class=" btn btn-primary ml-5 mt-4"/> -->
        <div id='display'  style='width:400px !important' class="d-flex justify-content-center p-3 flex-wrap"></div>
    
   </div>
  </div>
 
       <!-- Back to top button -->
    <a id="button"></a>
        

     
  
  
      <!-- Actual search box with the icon on the right -->
     


<!-- <img src="" height="350px" width="350px" id="img"/> -->

<!-- <span>made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>='ajax.js'></span> -->
 <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="ajax.js"></script>

  <script type="text/javascript">
     var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});    
  </script>
   
</body>
</html>  