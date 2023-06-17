<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sticky Board </title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="icons8-note-48.png" />
      <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="../assets/vendor/@icon/dripicons/dripicons.css">
      
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/core/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/daygrid/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/timegrid/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/list/main.css' />
      <link rel="stylesheet" href="../assets/vendor/mapbox/mapbox-gl.css">  
   
   <style>
.back-ground {
    position: relative; 
    height: 100vh;
    width: 100%;

    align-items: center;
    justify-content: center;
}

.back-ground::before {    
      content: "";
      background-image: url(pexels-lukas-317356.jpg);
      background-size: cover;
      position: absolute;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      opacity: 0.75;
}
.nav {
    background: #090f11;  
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 1rem;
    align-items: center;
    opacity: .8;
  }
  
  
  .nav--item {
    padding: 0.5rem 2rem;
    border-bottom: 1px solid #ccc;
  }
  
  .nav--item > a {
    color: #fff;
    padding:15px;
    text-decoration:none;
  }
  
  .nav--item> a:hover {
   background-color: #87d8f0;
  }
  
  .nav--icon {
    opacity: 0.8;
  }
  
  .nav--icon:hover {
    opacity: 1;
    color: #333;
  }
  
  @media screen and ( min-width: 768px) 
  {
    .nav--icon{
        display: none;
    }
  
    nav {
        display: flex;
        justify-content: center;
        text-decoration: none;
  
    }
    nav li {
        text-decoration: none;
      }
      nav li a {
        text-decoration: none;
      }
    .nav--list {
        width: auto;
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
  
  
    }
   
    .nav--item{
    justify-content: space-between; 
    margin: 10px 5px;
    list-style: none;
    border-bottom: 0;
        font-size: 1rem;
    
   }

  }
  .logo-name{
  position:absolute;
}

   </style>
   
   </head>
  <body>
   
   
   <div class="back-ground" >
   <nav class="nav collapsible ">
    <h3 style="color:white;padding-left:2em;">Sticky Board</h3>
            <a class="logo-name" href="#"><img src="icons8-note-48.png" ></a>
        
            <a href="#"> <img class="nav--icon" src="picture/icons8-bullet-list-40 (1).png" alt=""></a>
        
            <ul class="list nav--list collaspsible-content">
              <li class="nav--item"><a href="home_page.html">Home</a></li> 
              <li class="nav--item"><a href="auth-sign-up.html">Sign Up</a></li> 
                <li class="nav--item" ><a href="auth-sign-in.php">Login</a></li> 
                <li class="nav--item"><a href="contact us.html">Contact us</a></li> 
                <li class="nav--item"><a href="About.html">About us</a></li> 
        
            </ul>
        </nav>
    <!-- loader END -->
    
      <div class="wrapper">
       <section class="login-content"> 
         <div class="container h-100"> 
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card">   
                     <div class="logo-detail">            
                     <a href="home_page.html">      <div class="d-flex align-items-center"><img src="icons8-note-48.png" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">Sticky Board</h4></div></a>
                     </div>      
                     <h3 class="mb-2">Sign In</h3>
                     <p>Welcome back</p>  
                     <form action="login.php" method="post" >
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="email" placeholder=" " id="email" name="email">
                                 <label>Email</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" placeholder=" "id="password" name="password" >
                                 <label>Password</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="custom-control custom-checkbox mb-3 text-left">
                                 <input type="checkbox" class="custom-control-input" id="customCheck1" value="lsRememberMe"   >
                                 <label class="custom-control-label" for="customCheck1">Remember Me</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <a href="auth-recoverpw.html" class="text-primary float-right">Forgot Password?</a>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                        
                        <p class="mt-3 mb-0">
                           Create an Account <a href="auth-sign-up.html" class="text-primary"><b>Sign Up</b></a>
                        </p>
                     </form>
                  </div>
               </div>
            </div>
         </div>

      </section>
      </div>
   </div>
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    
    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- Masonary Gallery Javascript -->
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    
    <!-- Mapbox Javascript -->
    <script src="../assets/js/mapbox-gl.js"></script>
    <script src="../assets/js/mapbox.js"></script>
    
    <!-- Fullcalender Javascript -->
    <script src='../assets/vendor/fullcalendar/core/main.js'></script>
    <script src='../assets/vendor/fullcalendar/daygrid/main.js'></script>
    <script src='../assets/vendor/fullcalendar/timegrid/main.js'></script>
    <script src='../assets/vendor/fullcalendar/list/main.js'></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="../assets/js/vector-map-custom.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>
    
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
  </body>
</html>