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
      <link rel="stylesheet" href="../assets/vendor/mapbox/mapbox-gl.css">  
    </head>
    <body>
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
                
                   <a class="dropdown-item mb-2" href="user-profile-edit.php">
                   <a class="dropdown-item mb-2" href="user-profile-edit.php">
                       <i class="las la-user-edit font-size-20 mr-1"></i>
                      <span>Edit Profile</span>
                  </a>
                
                
                  <hr class="my-2">
                  <a class="dropdown-item" href="auth-sign-in.php">
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
                              <a href="index.php" class="svg-icon">
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
                                  <a href="project-board.php" class="svg-icon">
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
                          <a href="page-reminder.html" class="svg-icon">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                              </i>
                              <span>Reminder</span>
                          </a>
                      </li>
                      <li class="" data-extra-toggle="right-sidebar">
                          <a href="javascript:void(0);" class="svg-icon">
                              <i>
                                  <svg width="20" class="svg-icon" id="iq-main-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                  </svg>                            
                              </i>
                              <span>Tags</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="page-bin.html" class="svg-icon">
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
              </div>
              <div class="p-3"></div>
          </div>
      </div> 

</body>
</html>









