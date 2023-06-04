<?php
    session_start();

 $conn = new mysqli('localhost', 'root', '', 'home');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
 
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM form WHERE email = '$email'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();


      
    $conn->close();
}
?>  

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sticky Note </title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="icons8-note-48.png" />
      
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="http://localhost:8080/web/css/style.css">
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/css/all.min.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
        
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
              <link rel="stylesheet" href="../assets/vendor/@icon/dripicons/dripicons.css">
      
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/core/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/daygrid/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/timegrid/main.css' />
      <link rel='stylesheet' href='../assets/vendor/fullcalendar/list/main.css' />
      <link rel="stylesheet" href="../assets/vendor/mapbox/mapbox-gl.css">  </head>
  <body class="noteplus-layout  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <div class="right-sidebar-mini right-sidebar">
      <div class="right-sidebar-panel p-0">
          <div class="right-sidebar-toggle bg-primary mt-3" data-extra-toggle="right-sidebar-dissmiss">
                <i class="ri-arrow-left-line side-left-icon"></i>
                <i class="ri-close-fill side-right-icon"></i>
            </div>
          <div class="card shadow-none tag-details mb-0">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title mb-0">Tag List</h4>
                </div>
                <div>
                    <a href="#" data-toggle="modal" data-target="#create-note"><i class="ri-add-line font-size-20"></i></a>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="list-inline p-3 m-0 pb-0">
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-success">A</div>
                            <h5>Afternoon</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton1"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton1" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-danger">B</div>
                            <h5>Book</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton2"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton2" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-purple">C</div>
                            <h5>Cupcake</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton3"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton3" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-info">D</div>
                            <h5>Dinner</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton4"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton4" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-warning">E</div>
                            <h5>Evening Snacks</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton5"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton5" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-success">F</div>
                            <h5>Fast Track</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton6"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton6" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-danger">G</div>
                            <h5>Good Morning</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton7"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton7" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-info">H</div>
                            <h5>Health</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton8"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton8" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-warning">I</div>
                            <h5>Ice Cream</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton9"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton9" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-success">J</div>
                            <h5>Juice</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton10"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton10" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-danger">K</div>
                            <h5>Kangaroo</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton11"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton11" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-purple">L</div>
                            <h5>Leaves</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton12"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton12" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-3 px-2">
                    <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-info">M</div>
                            <h5>Machine</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton13"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton13" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="px-2">
                    <div class="item d-flex align-items-center justify-content-between">
                        <div class="media align-items-center">
                            <div class="icon icon-btn icon-btn-warning">N</div>
                            <h5>Nail Polish</h5>
                        </div>
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton14"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton14" style="">
                                <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
          </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="create-note" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-4">Create New Tag</h4>
                        <div class="content create-workform">
                            <input type="text" class="form-control" placeholder="Enter Tag Name">
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-outline-primary mr-4" data-dismiss="modal">Create</div>
                                    <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Modal -->
    <div class="modal fade" id="tag-rename" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-4">Rename Your Tag</h4>
                        <div class="content create-workform">
                            <input type="text" class="form-control" placeholder="Enter Tag Name">
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                    <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        <!-- loader END -->
    <!-- Wrapper Start -->

    <div class="wrapper">
        <div class="iq-top-navbar">
           <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                   <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                       <i class="ri-menu-line wrapper-menu"></i>
                       <a href="../backend/index.html" class="header-logo">
                               <img src="icons8-note-48.png" class="img-fluid rounded-normal light-logo" alt="logo">
                           
                       </a>
                   </div>
                   <div class="d-flex align-items-center">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                       <i class="ri-menu-3-line"></i>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <ul class="navbar-nav ml-auto navbar-list align-items-center">
                           <li class="nav-item nav-icon search-content">
                               <a href="#" class="search-toggle rounded" id="h1-dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="ri-search-line"></i>
                               </a>
                               <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownSearch">
                                   <form action="#" class="searchbox p-2">
                                       <div class="form-group mb-0 position-relative">
                                       <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                       <a href="#" class="search-link"><i class="las la-search"></i></a> 
                                       </div>
                                   </form>
                               </div>
                           </li>                
                           <li class="nav-item nav-icon dropdown mail-content">
                               <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="">
                                   <svg width="20" class="svg-icon" id="main-n-010" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                   </svg>
                               </i>
                               <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                               <span class="bg-primary"></span>
                               </a>
                               <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownMenuButton2">
                                   <div class="card shadow-none m-0">
                                       <div class="card-body p-0 ">
                                           <div class="px-3 pt-0 pb-0">
                                               <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center cust-card py-3 border-bottom">
                                                       <div class="">
                                                           <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                                       </div>
                                                       <div class="media-body ml-3">
                                                           <div class="d-flex align-items-center justify-content-between">
                                                               <h5 class="mb-0">Emma Watson</h5>
                                                               <small class="text-dark"><b>12 : 47 pm</b></small>
                                                           </div>
                                                           <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                       </div>
                                                   </div>
                                               </a>
                                               <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center cust-card py-3 border-bottom">
                                                       <div class="">
                                                           <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                                       </div>
                                                       <div class="media-body ml-3">
                                                           <div class="d-flex align-items-center justify-content-between">
                                                               <h5 class="mb-0">Ashlynn Franci</h5>
                                                               <small class="text-dark"><b>11 : 30 pm</b></small>
                                                           </div>
                                                           <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                       </div>
                                                   </div>
                                               </a>
                                               <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center cust-card py-3">
                                                       <div class="">
                                                           <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                                       </div>
                                                       <div class="media-body ml-3">
                                                           <div class="d-flex align-items-center justify-content-between">
                                                               <h5 class="mb-0">Kianna Carder</h5>
                                                               <small class="text-dark"><b>11 : 21 pm</b></small>
                                                           </div>
                                                           <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                       </div>
                                                   </div>
                                               </a>
                                           </div>
                                           <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                               View All
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </li>
                           <li class="nav-item nav-icon dropdown mail-content"> 
                               <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton004" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                               <i class="">
                                   <svg width="20" class="svg-icon" id="main-n-020" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                   </svg>
                               </i>
                               <span class="badge badge-primary count-mail rounded-circle">2</span>
                               <span class="bg-primary "></span>
                               </a>
                               <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownMenuButton004">
                                   <div class="card shadow-none m-0">
                                       <div class="card-body p-0 ">
                                           <div class="px-3 pt-0 pb-0">
                                               <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center cust-card py-3 border-bottom">
                                                       <div class="">
                                                           <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                                       </div>
                                                       <div class="media-body ml-3">
                                                           <div class="d-flex align-items-center justify-content-between">
                                                               <h5 class="mb-0">Emma Watson</h5>
                                                               <small class="text-dark"><b>12 : 47 pm</b></small>
                                                           </div>
                                                           <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                       </div>
                                                   </div>
                                               </a>
                                               <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center cust-card py-3 border-bottom">
                                                       <div class="">
                                                           <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                                       </div>
                                                       <div class="media-body ml-3">
                                                           <div class="d-flex align-items-center justify-content-between">
                                                               <h5 class="mb-0">Ashlynn Franci</h5>
                                                               <small class="text-dark"><b>11 : 30 pm</b></small>
                                                           </div>
                                                           <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                       </div>
                                                   </div>
                                               </a>
                                               <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center cust-card py-3">
                                                       <div class="">
                                                           <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                                       </div>
                                                       <div class="media-body ml-3">
                                                           <div class="d-flex align-items-center justify-content-between">
                                                               <h5 class="mb-0">Kianna Carder</h5>
                                                               <small class="text-dark"><b>11 : 21 pm</b></small>
                                                           </div>
                                                           <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                       </div>
                                                   </div>
                                               </a>
                                           </div>
                                           <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                               View All
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </li>  
                           <li class="caption-content">
                              <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between" id="h-dropdownMenuButton001" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <img src="../assets/images/user/1.jpg" class="img-fluid rounded avatar-50" alt="user">
                               </a>
                               <div class="dropdown-menu dropdown-menu-right w-100 border-0 py-2" aria-labelledby="h-dropdownMenuButton001">
                               
                                   <a class="dropdown-item mb-2" href="../app/user-profile-edit.html">
                                       <i class="las la-user-edit font-size-20 mr-1"></i>
                                       <span>     Profile</span>
                                   </a>
                                   
                                   <hr class="my-1">
                                   <a class="dropdown-item" href="../backend/index.html">
                                       <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                                       <span>Logout</span>
                                   </a>
                               </div>
                           </li>
                           </ul>                     
                       </div> 
                   </div>
               </nav>
           </div>
       </div>      
       <div class="iq-sidebar  sidebar-default ">
           <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
               <a href="..//index.html" class="header-logo">
                   <img src="icons8-note-48.png" class="img-fluid rounded-normal light-logo" alt="logo"> <h4 class="logo-title ml-3">Sticky Note</h4>
               </a>
               <div class="iq-menu-bt-sidebar">
                   <i class="las la-times wrapper-menu"></i>
               </div>
           </div>    
           <div class="sidebar-caption dropdown">
               <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <img src="../assets/images/user/1.jpg" class="img-fluid rounded avatar-50 mr-3" alt="user">
                   <div class="caption">
                       <h6 class="mb-0 line-height"><?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?></h6>
                   </div>
                   <i class="las la-angle-down"></i>
               </a>
               <div class="dropdown-menu w-100 border-0 my-2" aria-labelledby="dropdownMenuButton">
                 
                   <a class="dropdown-item mb-2" href="user-profile-edit.html">
                       <i class="las la-user-edit font-size-20 mr-1"></i>
                       <span>Edit Profile</span>
                   </a>
                 
                 
                   <hr class="my-2">
                   <a class="dropdown-item" href="auth-sign-in.html">
                       <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                       <span>Logout</span>
                   </a>
               </div>
           </div>
           <div class="data-scrollbar" data-scroll="1">
               <div class="iq-search-bar device-search mb-3">
                   <form action="#" class="searchbox">
                   <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                   <input type="text" class="text search-input" placeholder="Search">
                   </form>
               </div>
               <div class="sidebar-btn dropdown mb-3">
                   <a href="#"  id="dropdownMenuButton01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary pr-5 position-relative iq-user-toggle d-flex align-items-center justify-content-between" style="height: 40px;"><span  class="btn-title btn-create"><i class="ri-add-line mr-3"></i>Create New</span><span class="note-add-btn" style="height: 40px;"><i class="las la-angle-down"></i></span></a>
                   <div class="dropdown-menu w-100 border-0 py-3" aria-labelledby="dropdownMenuButton01">
                       <a    class="dropdown-item mb-2" href="#">
                           <span id="myBtn"><i  class="ri-sticky-note-line mr-3"></i>Board</span>
                       </a>
                       
                    
                   </div>
               </div>
               
               <nav class="iq-sidebar-menu">
                   <ul id="iq-sidebar-toggle" class="iq-menu">
                       <li class="active">
                                 <a href="../index.html" class="svg-icon">
                                    <i>
                                       <svg class="svg-icon" id="iq-main-1" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                       </svg>
                                   </i>
                                   <span>Your Notes</span>
                               </a>
                           <ul id="index" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           </ul>
                       </li>
                       <li class="">
                           <a href="#notebooks" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                               <i>
                                   <svg width="20" class="svg-icon" id="iq-main-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z" />
                                   </svg>
                               </i>
                               <span>Notebooks</span>
                               <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                               <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                           </a>
                           <ul id="notebooks" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                               <li class="">
                                   <a href="project-board.html" class="svg-icon">
                                       <i>
                                           <svg width="20" class="svg-icon" id="iq-main-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                           </svg>
                                       </i>
                                       <span>Your Boards</span>
                                   </a>
                               </li>
                          
                           </ul>
                       </li>
                   
                       
                       <li class="">
                           <a href="../backend/page-bin.html" class="svg-icon">
                               <i>
                                   <svg width="20" class="svg-icon" id="iq-main-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                   </svg>
                               </i>
                               <span>Bin</span>
                           </a>
                       </li>
 
                       
 
  
                           </ul>
                       </li>
                   </ul>
               </nav>
 
              
               
               <div id="sidebar-bottom" class="position-relative sidebar-bottom">
                   <div class="card rounded shadow-none">
                          
                       </div>
                   </div>
               </div>              <div class="p-3"></div>
          </div>
      </div>      <div class="content-page">
     <div class="container-fluid">        
        <div class="desktop-header">
            <div class="card card-block topnav-left">
                <div class="card-body write-card">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4>Your Delete Items</h4>
                        <a href="#" class="btn btn-outline-primary add-btn shadow-none" data-toggle="modal" data-target="#delete-btn">Empty Bin</a>
                    </div>
                </div>
            </div>
            <div class="card topnav-right">
                
                <div class="card-body card-content-right">
                    <ul class="list-inline m-0 p-0 d-flex align-items-center justify-content-around">
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="">
                                <svg width="20" class="svg-icon" id="main-n-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </i>
                            <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                            <span class="bg-primary"></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="p-3">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pb-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Emma Watson</h5>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Ashlynn Franci</h5>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pt-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Kianna Carder</h5>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown pl-3"> 
                            <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="dropdownMenuButton002" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            <i class="">
                                <svg width="20" class="svg-icon" id="main-n-02" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </i>
                            <span class="badge badge-primary count-mail rounded-circle">2</span>
                            <span class="bg-primary "></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton002">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="p-3">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pb-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Emma Watson</h5>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Ashlynn Franci</h5>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pt-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Kianna Carder</h5>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>  
                    </ul>
                </div>            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">                
                <div class="card card-block card-stretch">
                    <div class="card-body custom-notes-space">
                        <div class="row">
                                
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
    <!-- View Modal  -->
    <!-- Modal View -->
        <div class="modal fade" id="new-note1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Weekly Planner</h3>
                                <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                            </div>
                            <div class="content create-workform">
                                <p class="mb-4">Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p> 
                                <h4 class="mb-3">Shared</h4>
                                <ul class="list-inline p-0 m-0">
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Anne Effit</h5>
                                                    <h6 class="mb-0">04 Hours Ago</h6>
                                                </div>
                                                <p class="mb-0">anneeffit@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Poall Molve</h5>
                                                    <h6 class="mb-0">04 Hours Ago</h6>
                                                </div>
                                                <p class="mb-0">poallmolve@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Mack Devid</h5>
                                                    <h6 class="mb-0">05 Jan 2021</h6>
                                                </div>
                                                <p class="mb-0">mackdevid@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <div class="modal fade" id="new-note2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Birthday Celebration</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform">
                                <p>You can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p> 
                                <ul class="pl-3 mb-0">
                                    <li class="note-list">Cakes and Balloons.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="modal fade" id="new-note3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Essay Outline</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform">
                                <ul class="pl-3 mb-0">
                                    <li class="note-list mb-2">Content should be of topic</li>
                                    <li class="note-list mb-2">300 Words only</li>
                                    <li class="note-list mb-2">Make presentation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="new-note4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Lecture Notes</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform">
                                <div class="checkbox mb-2">
                                    <input type="checkbox" class="checkbox-input mr-3" id="checkbox13">
                                    <label for="checkbox13" class="note-checkbox mb-0">Chapter 1 notes</label>
                                </div>
                                <div class="checkbox mb-2">
                                    <input type="checkbox" class="checkbox-input mr-3" id="checkbox14">
                                    <label for="checkbox14" class="note-checkbox mb-0">Chapter 2 Assignment</label>
                                </div>
                                <div class="checkbox mb-2">
                                    <input type="checkbox" class="checkbox-input mr-3" id="checkbox15">
                                    <label for="checkbox15" class="note-checkbox mb-0">Chapter 3 practical File</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="new-note5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Image Notes</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform mb-4">
                                <ul class="row mb-0 p-0 list-inline flex-wrap align-items-center">
                                    <li class="col-md-4 mb-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/01.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                    <li class="col-md-4 mb-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/02.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                    <li class="col-md-4 mb-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/03.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                    <li class="col-md-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/04.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                    <li class="col-md-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/05.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                    <li class="col-md-4">
                                        <a href="#">
                                            <img src="../assets/images/gallery/grid/06.jpg" class="img-fluid rounded avatar-150" alt="">  
                                        </a> 
                                    </li>
                                </ul>
                            </div>
                            <h4 class="mb-3">Shared</h4>
                            <ul class="list-inline p-0 m-0">
                                <li>
                                    <div class="media align-items-center cust-card mb-3">
                                        <div class="">
                                            <img class="avatar-50 rounded-small" src="../assets/images/user/04.jpg" alt="01">
                                        </div>
                                        <div class="media-body ml-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="mb-0">Anne Effit</h5>
                                                <h6 class="mb-0">02 Min Ago</h6>
                                            </div>
                                            <p class="mb-0">anneeffit@gmail.com</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="new-note6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Benefits of NotePlus</h3>
                                <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                            </div>
                            <div class="content create-workform">
                                <p>Take organized notes and share later as meeting minutes or check-list with this simple accessible Noteplus.</p> 
                                <h4 class="mb-3">Shared</h4>
                                <ul class="list-inline p-0 m-0">
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/04.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Anne Effit</h5>
                                                    <h6 class="mb-0">02 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">anneeffit@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/05.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Poall Molve</h5>
                                                    <h6 class="mb-0">15 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">poallmolve@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="modal fade" id="new-note7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Quick Summary</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform">
                                <p>Need to write a summary note of the subject you just finished? NotePlus lets you do in on-the-go!</p> 
                                <p class="text-underline ellipsis-text short">Https://Dribble.com/Shots/6387620</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="modal fade" id="new-note8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">Address & Email</h3>
                                <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                            </div>
                            <div class="content create-workform">
                                <p>Quickly note down the address and email address on NotePlus so that you can access it from anywhere.</p> 
                                <h4 class="mb-3">Shared</h4>
                                <ul class="list-inline p-0 m-0">
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/06.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Anne Effit</h5>
                                                    <h6 class="mb-0">02 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">anneeffit@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/07.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Poall Molve</h5>
                                                    <h6 class="mb-0">05 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">poallmolve@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/08.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">John Teach</h5>
                                                    <h6 class="mb-0">16 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">johnteach@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media align-items-center cust-card mb-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/09.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Rick Ness</h5>
                                                    <h6 class="mb-0">18 Min Ago</h6>
                                                </div>
                                                <p class="mb-0">rickness@gmail.com</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="modal fade" id="new-note9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <div class="media align-items-top justify-content-between">                            
                                <h3 class="mb-3">NotePlus for Entrepreneurs</h3>
                                <div class="media align-items-center">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                    <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                                </div>
                            </div>
                            <div class="content create-workform">
                                <p>With NotePlus, you can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    <!-- Modal -->
    <div class="modal fade" id="delete-btn" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-center">
                        <h4 class="mb-3">Delete</h4>
                        <div class="content create-workform">
                            <p class="mb-2">Are yo sure you want to delete this ?</p>
                            <div class="row">  
                                <div class="col-lg-12 mt-4">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                        <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Continue</div>
                                    </div>
                                </div>                                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="text-secondary mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">NotePlus</a>.
                </div>
            </div>
        </div>
    </footer>
  

    <script src="jquery-3.6.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
    <script src="index.js" ></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    
    <script src="index1.js" ></script>
    <script src="js/backend-bundle.min.js"></script>
    
    <!-- Flextree Javascript-->
    <script src="js/flex-tree.min.js"></script>
    <script src="js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="js/table-treeview.js"></script>
    
    <!-- Masonary Gallery Javascript -->
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    
    <!-- Mapbox Javascript -->
    <script src="js/mapbox-gl.js"></script>
    <script src="js/mapbox.js"></script>
        
    <!-- Fullcalender Javascript -->
    <script src='core/main.js'></script>
    <script src='daygrid/main.js'></script>
    <script src='timegrid/main.js'></script>
    <script src='list/main.js'></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="js/sweetalert.js"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="js/vector-map-custom.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="js/chart-custom.js"></script>
    
    <!-- slider JavaScript -->
    <script src="js/slider.js"></script>
    
    <!-- app JavaScript -->
    <script src="js/app.js"></script>
    <script src="{{asset('/js/backend-bundle.min.js')}}"></script>
 
    <!-- Flextree Javascript-->
    <script src="{{asset('/js/flex-tree.min.js')}}"></script>
    <script src="{{asset('/js/tree.js')}}"></script>
     
    <!-- Table Treeview JavaScript -->
    <script src="{{asset('/js/table-treeview.js')}}"></script>
     
    <!-- Masonary Gallery Javascript -->
    <script src="{{asset('/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('/js/imagesloaded.pkgd.min.js')}}"></script>
     
    <!-- SweetAlert JavaScript -->
    <script src="{{asset('/js/sweetalert.js')}}"></script>
     
    <!-- Vectoe Map JavaScript -->
    <script src="{{asset('/js/vector-map-custom.js')}}"></script>
     
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('/js/customizer.js')}}"></script>
     
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('/js/chart-custom.js')}}"></script>
     
    <!-- slider JavaScript -->
    <script src="{{asset('/js/slider.js')}}"></script>
     
    <!-- quill Javascript -->
    <script src="{{asset('/js/quill.js')}}"></script>
     
    <!-- app JavaScript -->
    <script src="{{asset('/js/app.js')}}"></script>

  </body>
</html>