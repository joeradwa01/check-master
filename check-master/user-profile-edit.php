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
    include('sidenavbar.php');

}
?>  
 
 <!doctype html> 

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sticky Board </title>

<!-- Favicon -->
<link rel="shortcut icon" href="icons8-note-48.png" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://localhost:8080/web/css/style.css">
    
<link rel="stylesheet" href="css/style.css">     
<link rel="stylesheet" href="css/css/all.min.css">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">

<link rel="stylesheet" href="../assets/vendor/@icon/dripicons/dripicons.css">

<link rel='stylesheet' href='core/main.css' />
<link rel='stylesheet' href='daygrid/main.css' />
<link rel='stylesheet' href='timegrid/main.css' />
<link rel='stylesheet' href='list/main.css' />
<link rel="stylesheet" href="../assets/vendor/mapbox/mapbox-gl.css"> 


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>$(function() {
    // Listen for changes to the file input field
    $('.file-upload').on('change', function(e) {
    // Get the selected file
    var file = e.target.files[0];
    
    // Create a URL for the selected file
    var url = URL.createObjectURL(file);
    
    // Update the profile picture with the selected file
    $('.crm-profile-pic').attr('src', url);
    });
    });</script>
    
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
<script src="jquery.toolbar.js"></script>

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

<!-- app JavaScript -->
<script src="js/app.js"></script>
  
</head>



<body class=" ">
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
                                            <img class="avatar-50 rounded-small" src="1.jpg" alt="01">
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
                    <img src="1.jpg" class="img-fluid rounded avatar-50" alt="user">
                </a>
                <div class="dropdown-menu dropdown-menu-right w-100 border-0 py-2" aria-labelledby="h-dropdownMenuButton001">
                
                    <a class="dropdown-item mb-2" href="../app/user-profile-edit.html">
                        <i class="las la-user-edit font-size-20 mr-1"></i>
                        <span>Edit Profile</span>
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

     <div class="content-page">
<div class="container-fluid">
<div class="desktop-header">
<div class="card card-block topnav-left">
    <div class="card-body d-flex align-items-center">
        <div class="d-flex justify-content-between">
            <h4 class="text-capitalize">Profile Edit</h4>
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
    </div>    </div>
</div>        </div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="card">
    <div class="card-body p-0">
        <div class="iq-edit-list usr-edit">
        <ul class="iq-edit-profile d-flex nav nav-pills">
            <li class="col-md-6 p-0">
                <a class="nav-link active" data-toggle="pill" href="#personal-information">
                Personal Information
                </a>
            </li>
            <li class="col-md-6 p-0">
                <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                Change Password
                </a>
            </li>
            
        </ul>
        </div>
    </div>
</div>
</div>
<div class="col-lg-12">
<div class="iq-edit-list-data">
    <div class="tab-content">
        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Personal Information</h4>
                </div>
            </div>

            <div class="card-body">


                <form id="myForm" >

                    
                    <div class="form-group row align-items-center">
                    <div class="col-md-12">
                        <div class="profile-img-edit">
                            <div class="crm-profile-img-edit">
                                <img class="crm-profile-pic avatar-100" src=" "alt="profile-pic">
                                <div class="crm-p-image bg-primary">
                                <i class="las la-pen upload-button"></i>
                                
                                <input class="file-upload" type="file"  name="id" name="file" accept="image/*">
                            </div>
                            </div>                                          
                        </div>
                    </div>
                    </div>
                    

                    

                    <div class=" row align-items-center">
                    <div class="form-group col-sm-6">
                        <label for="fname">First Name:</label>
                        <input placeholder="First name" type="text" class="form-control" id="fname" name="firstName" value="<?php echo $row['firstName']; ?>">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="lname">Last Name:</label>
                        <input placeholder="Last name" type="text" class="form-control" id="lname" name="lastName" value="<?php echo $row['lastName']; ?>">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="uname">User Name:</label>
                        <input placeholder="@a12b3c" type="text" class="form-control" id="username" name="username" disabled value="<?php echo $row['username']; ?>">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="cname">Phone number:</label>
                        <input placeholder="+962" type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>">
                    </div>


                    <div class="form-group col-sm-6">
                        <label for="cname">Email:</label>
                        <input placeholder="@a12b3c" type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
                    </div>
 
                    <div class="form-group col-sm-6">
                        <label for="cname">occupation:</label>
                        <input type="text" class="form-control" id="occupation" name="occupation" value="<?php echo $row['occupation']; ?>">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="dob">Date Of Birth:</label>
                        <input type="text" placeholder="01-01-2023" class="form-control" id="dob" name="dob" value="<?php echo $row['dob']; ?>">
                     </div>

                    <div class="form-group col-sm-6">
                        <label>Country:</label>
                        <?php include('country_list.php'); ?>

                        <select class="form-control" id="country" name="country" value="<?php echo $row['country']; ?>">
                          
                          <?php foreach ($country_list as $code => $name): ?>
      <option value="<?php echo $code; ?>" <?php if ($country_list == $code) echo "sdasdasdasdasselected"; ?>><?php echo $name; ?></option>
    <?php endforeach; ?> 
                        </select>
                    </div>
                    
                    </div>
                    <button type="submit"   name="submit" class="btn btn-primary mr-2">Submit</button>  
                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                </form>
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Change Password</h4>
                </div>
            </div>
  
            <div class="card-body">
                <form id="forgotform">
                    <div class="form-group">
                        <label for="cpass">Current Password:</label>
                        <a href="auth-recoverpw.html" class="float-right">Forgot Password</a>
                        <input type="password" class="form-control" id="cpass" name="cpass" required>
                    </div>
                    <div class="form-group">
                        <label for="npass">New Password:</label>
                        <input type="password" class="form-control" id="npass" name="npass" required>
                    </div>
                    <div class="form-group">
                        <label for="vpass">Verify Password:</label>
                        <input type="password" class="form-control" id="vpass" name="vpass" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                </form>
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
    <span class="text-secondary mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">StickyBoard</a>.
</div>
</div>
</div>
</footer>
 
<script>
    $(document).ready(function() {
      $('#myForm').submit(function(e) {
        e.preventDefault(); // prevent the form from submitting normally
        $.ajax({
          url: 'update.php',
          type: 'post',
          data: $('#myForm').serialize(),
          success: function(response) {
            alert('Information updated successfully');
            // You can also update the page content here without reloading the page
          },
          error: function(xhr, status, error) {
            alert(xhr.responseText);
          }
        });
      });
    });
    </script>


<script>
    $(document).ready(function() {
      $('#forgotform').submit(function(e) {
        e.preventDefault(); // prevent the form from submitting normally
        $.ajax({
          url: 'change_password.php',
          type: 'post',
          data: $('#forgotform').serialize(),
          success: function(response) {
            alert('Password changed successfully');
            // You can also update the page content here without reloading the page
          },
          error: function(xhr, status, error) {
            alert(xhr.responseText);
          }
        });
      });
    });
    </script>
<!-- Flextree Javascript-->
 
</body>
</html>
 