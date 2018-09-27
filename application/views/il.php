
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Swift - University Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link href="../dist/backend/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="../dist/backend/css/main.css" rel="stylesheet">
<!-- Custom Css -->

<link href="../dist/backend/css/themes/all-themes.css" rel="stylesheet" />
</head>
<body class="theme-blue">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-blush">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader --> 

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars --> 

<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html">Swift University</a> </div>
        <ul class="nav navbar-nav navbar-right">
            <!-- Notifications -->
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i> <span class="label-count">7</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu">
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-green"><i class="zmdi zmdi-account-add"></i></div>
                                <div class="menu-info">
                                    <h4>12 new members joined</h4>
                                    <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-cyan"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <div class="menu-info">
                                    <h4>4 sales made</h4>
                                    <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-orange"><i class="zmdi zmdi-edit"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> changed name</h4>
                                    <p> <i class="material-icons">access_time</i> 2 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue-grey"><i class="zmdi zmdi-comment-alt-text"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> commented your post</h4>
                                    <p> <i class="material-icons">access_time</i> 4 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-green"><i class="zmdi zmdi-refresh-alt"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> updated status</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-purple"><i class="zmdi zmdi-settings"></i></div>
                                <div class="menu-info">
                                    <h4>Settings updated</h4>
                                    <p> <i class="material-icons">access_time</i> Yesterday </p>
                                </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>
            <!-- #END# Notifications --> 
            <!-- Tasks -->
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i><span class="label-count">9</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks">
                            <li> <a href="javascript:void(0);">
                                <h4> Task 1 <small>32%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%"> </div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4>Task 2 <small>45%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%"> </div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4>Task 3 <small>54%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%"> </div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Task 4 <small>65%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%"> </div>
                                </div>
                                </a> </li>                          
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Tasks</a> </li>
                </ul>
            </li>
            <!-- #END# Tasks -->
        </ul>
    </div>
</nav>
<!-- #Top Bar -->

<!--Side menu and right menu -->
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="assets/images/random-avatar7.jpg" alt=""> </div>
            <div class="admin-action-info"> <span>Welcome</span>
                <h3>Prof. John Smith</h3>
                <ul>
                    <li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a data-placement="bottom" title="Go to Profile" href="profile.html"><i class="zmdi zmdi-account"></i></a></li>                    
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a data-placement="bottom" title="Full Screen" href="sign-in.html" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li><a href="index.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li><a href="events.html"><i class="zmdi zmdi-calendar-check"></i><span>Event Management</span> </a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account"></i><span>Professors</span> </a>
                    <ul class="ml-menu">
                        <li><a href="professors.html">All Professors</a></li>
                        <li><a href="add-professors.html">Add professors</a></li>                       
                        <li><a href="profile.html">professors Profile</a></li>
                    </ul>
                </li>                
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Students</span> </a>
                    <ul class="ml-menu">
                        <li><a href="students.html">All Students</a></li>
                        <li><a href="add-students.html">Add Students</a></li>                       
                        <li><a href="students-profile.html">Students Profile</a></li>
                        <li><a href="students-invoice.html">Students Invoice</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-graduation-cap"></i><span>Courses</span> </a>
                    <ul class="ml-menu">
                        <li><a href="courses.html">All Courses</a></li>
                        <li><a href="add-courses.html">Add Courses</a></li>                       
                        <li><a href="courses-info.html">Courses Info</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-book"></i><span>Library</span> </a>
                    <ul class="ml-menu">
                        <li><a href="library.html">All Library</a></li>
                        <li><a href="add-library.html">Add Library</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city-alt"></i><span>Departments</span> </a>
                    <ul class="ml-menu">
                        <li><a href="departments.html">All Departments</a></li>
                        <li><a href="add-departments.html">Add Departments</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-mood"></i><span>Staffs</span> </a>
                    <ul class="ml-menu">
                        <li><a href="staffs.html">All Staffs</a></li>
                        <li><a href="add-staffs.html">Add Staffs</a></li>                       
                        <li><a href="staffs-info.html">Staffs Profile</a></li>
                    </ul>
                </li>
                <li><a href="centres.html"><i class="zmdi zmdi-pin"></i><span>University Centres</span></a></li>
                <li><a href="reports.html"><i class="zmdi zmdi-file-text"></i><span>Reports</span></a></li>
                <li><a href="widgets.html"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a></li>
                <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
                    <ul class="ml-menu">
                        <li><a href="sign-in.html">Sign In</a> </li>
                        <li><a href="sign-up.html">Sign Up</a> </li>
                        <li><a href="forgot-password.html">Forgot Password</a> </li>
                        <li><a href="404.html">Page 404</a> </li>
                        <li><a href="500.html">Page 500</a> </li>
                        <li><a href="page-offline.html">Page Offline</a> </li>
                        <li><a href="locked.html">Locked Screen</a> </li>
                        <li class="active"><a href="blank.html">Blank Page</a> </li>
                        <li><a href="contact.html">Contact Us</a> </li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blogger</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="blog.html">Blog List</a></li>
                        <li> <a href="blog-details.html">Blog Single</a></li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="basic-form-elements.html">Basic Form Elements</a> </li>
                        <li> <a href="advanced-form-elements.html">Advanced Form Elements</a> </li>
                        <li> <a href="form-examples.html">Form Examples</a> </li>
                        <li> <a href="form-validation.html">Form Validation</a> </li>
                        <li> <a href="form-wizard.html">Form Wizard</a> </li>
                        <li> <a href="editors.html">Editors</a> </li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                    <ul class="ml-menu">
                        <li><a href="typography.html">Typography</a> </li>
                        <li><a href="helper-classes.html">Helper Classes</a></li>
                        <li><a href="alerts.html">Alerts</a> </li>
                        <li><a href="animations.html">Animations</a> </li>
                        <li><a href="badges.html">Badges</a> </li>
                        <li><a href="breadcrumbs.html">Breadcrumbs</a> </li>
                        <li><a href="buttons.html">Buttons</a> </li>
                        <li><a href="collapse.html">Collapse</a> </li>
                        <li><a href="colors.html">Colors</a> </li>
                        <li><a href="dialogs.html">Dialogs</a> </li>
                        <li><a href="icons.html">Icons</a> </li>
                        <li><a href="labels.html">Labels</a> </li>
                        <li><a href="list-group.html">List Group</a> </li>
                        <li><a href="media-object.html">Media Object</a> </li>
                        <li><a href="modals.html">Modals</a> </li>
                        <li><a href="notifications.html">Notifications</a> </li>
                        <li><a href="pagination.html">Pagination</a> </li>
                        <li><a href="preloaders.html">Preloaders</a> </li>
                        <li><a href="progressbars.html">Progress Bars</a> </li>
                        <li><a href="range-sliders.html">Range Sliders</a> </li>
                        <li><a href="sortable-nestable.html">Sortable & Nestable</a> </li>
                        <li><a href="tabs.html">Tabs</a> </li>
                        <li><a href="waves.html">Waves</a> </li>
                    </ul>
                </li>
                <li class="header">LABELS</li>
                <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span></a></li>
                <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span></a></li>
                <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span></a></li>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar --> 
</section>
<!--Side menu and right menu -->

<!-- main content -->
<section class="content" style="min-height: 1000px">
    <div class="container-fluid">
        <div class="block-header">
            <h2>BLANK PAGE</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="../dist/backend/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="../dist/backend/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="../dist/backend/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search --> 

<script src="../dist/backend/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>
</html>