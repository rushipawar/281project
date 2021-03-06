<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test Manager </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Test Manager</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/profimg.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>Dr.Jerry Gao</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.php">Dashboard</a></li>
                                    <!-- <li><a href="index2.php">Dashboard2</a></li>
                                     <li><a href="index3.php">Dashboard3</a></li>-->
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Projects <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <!-- <li><a href="form.php">General Form</a></li>
                                     <li><a href="form_advanced.php">Advanced Components</a></li>
                                     <li><a href="form_validation.php">Form Validation</a></li>-->
                                    <li><a href="form_wizards.php">Create Project</a></li>
                                    <li><a href="form_upload.php">Upload Project Documents</a></li>
                                    <!--<li><a href="form_buttons.php">Form Buttons</a></li>-->
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> Test Suites <span class="fa fa-chevron-down"></span></a>
                                <!--<ul class="nav child_menu">
                                    <li><a href="general_elements.php">General Elements</a></li>
                                    <li><a href="media_gallery.php">Media Gallery</a></li>
                                    <li><a href="typography.php">Typography</a></li>
                                    <li><a href="icons.php">Icons</a></li>
                                    <li><a href="glyphicons.php">Glyphicons</a></li>
                                    <li><a href="widgets.php">Widgets</a></li>
                                    <li><a href="invoice.php">Invoice</a></li>
                                    <li><a href="inbox.php">Inbox</a></li>
                                    <li><a href="calendar.php">Calendar</a></li>
                                </ul>-->
                            </li>
                            <li><a><i class="fa fa-table"></i> Test Automation <span class="fa fa-chevron-down"></span></a>
                                <!--<ul class="nav child_menu">
                                    <li><a href="tables.php">Tables</a></li>
                                    <li><a href="tables_dynamic.php">Table Dynamic</a></li>
                                </ul>-->
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> Bug Reports <span class="fa fa-chevron-down"></span></a>
                                <!--<ul class="nav child_menu">
                                    <li><a href="chartjs.php">Chart JS</a></li>
                                    <li><a href="chartjs2.php">Chart JS2</a></li>
                                    <li><a href="morisjs.php">Moris JS</a></li>
                                    <li><a href="echarts.php">ECharts</a></li>
                                    <li><a href="other_charts.php">Other Charts</a></li>
                                </ul>-->
                            </li>
                            <li><a><i class="fa fa-clone"></i>Projects Summary <span class="fa fa-chevron-down"></span></a>
                                <!--<ul class="nav child_menu">
                                    <li><a href="fixed_sidebar.php">Fixed Sidebar</a></li>
                                    <li><a href="fixed_footer.php">Fixed Footer</a></li>
                                </ul>-->
                            </li>
                        </ul>
                    </div>
                    <!--<div class="menu_section">
                        <h3>Live On</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="e_commerce.php">E-commerce</a></li>
                                    <li><a href="projects.php">Projects</a></li>
                                    <li><a href="project_detail.php">Project Detail</a></li>
                                    <li><a href="contacts.php">Contacts</a></li>
                                    <li><a href="profile.php">Profile</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="page_403.php">403 Error</a></li>
                                    <li><a href="page_404.php">404 Error</a></li>
                                    <li><a href="page_500.php">500 Error</a></li>
                                    <li><a href="plain_page.php">Plain Page</a></li>
                                    <li><a href="login.php">Login Page</a></li>
                                    <li><a href="pricing_tables.php">Pricing Tables</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#level1_1">Level One</a>
                                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li class="sub_menu"><a href="level2.php">Level Two</a>
                                            </li>
                                            <li><a href="#level2_1">Level Two</a>
                                            </li>
                                            <li><a href="#level2_2">Level Two</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#level1_2">Level One</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                        </ul>
                    </div>-->

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/profimg.jpg" alt="">Dr. Jerry Gao
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Welcome to Bug Reports </h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                    </div>
                </div>



                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Registration Form </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form class="form-horizontal form-label-left">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bug Name</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Default Input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bug ID </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control"  placeholder="Default Bug ID">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Build Number</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control"  placeholder="">
                                        </div>
                                    </div>
                              <!--      <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Severity <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <textarea class="form-control" rows="3" placeholder='rows="3"'></textarea>
                                        </div>
                                    </div>  -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Reported By</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" value="Nethra">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Assigned To</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Priority</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control">
                                                <option>Choose priority</option>
                                                <option>P1-High</option>
                                                <option>P2-Medium</option>
                                                <option>P3-Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Severity</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control">
                                                <option>Choose Severity</option>
                                                <option>Critical</option>
                                                <option>Major</option>
                                                <option>Moderate</option>
                                                <option>Minor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Environment</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="select2_single form-control" tabindex="-1">
                                                <option></option>
                                                <option value="AK">Windows</option>
                                                <option value="HI">Mac</option>

                                            </select>
                                        </div>
                                    </div>
                                <!--    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grouped</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="select2_group form-control">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>  -->
                               <!--     <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Multiple</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="select2_multiple form-control" multiple="multiple">
                                                <option>Choose option</option>
                                                <option>Option one</option>
                                                <option>Option two</option>
                                                <option>Option three</option>
                                                <option>Option four</option>
                                                <option>Option five</option>
                                                <option>Option six</option>
                                            </select>
                                        </div>
                                    </div>  -->

                                    <div class="control-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
                                            <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                        </div>
                                    </div>
                           <!--         <div class="form-group">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                                            <br>
                                            <small class="text-navy">Normal Bootstrap elements</small>
                                        </label>

                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Option one. select more than one options
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""> Option two. select more than one options
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                                            <br>
                                            <small class="text-navy">Normal Bootstrap elements</small>
                                        </label>

                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="flat" checked="checked"> Checked
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="flat"> Unchecked
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="flat" disabled="disabled"> Disabled
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="flat" disabled="disabled" checked="checked"> Disabled & checked
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" checked name="iCheck"> Checked
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="iCheck"> Unchecked
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="iCheck" disabled="disabled"> Disabled
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="iCheck3" disabled="disabled" checked> Disabled & Checked
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" checked /> Checked
                                                </label>
                                            </div>
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" /> Unchecked
                                                </label>
                                            </div>
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" disabled="disabled" /> Disabled
                                                </label>
                                            </div>
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" /> Disabled Checked
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->


                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                            <button type="button" class="btn btn-primary">Cancel</button>
                                            <button type="reset" class="btn btn-primary">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                            </div>
                        </div>


                    </div>



                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>If Upload works put that code also here<small>Sessions</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="alerts"></div>
                            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                <div class="btn-group">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a data-edit="fontSize 5">
                                                <p style="font-size:17px">Huge</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-edit="fontSize 3">
                                                <p style="font-size:14px">Normal</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-edit="fontSize 1">
                                                <p style="font-size:11px">Small</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                    <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                    <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                    <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                </div>

                                <div class="btn-group">
                                    <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                    <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                    <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                    <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                </div>

                                <div class="btn-group">
                                    <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                    <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                    <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                    <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                </div>

                                <div class="btn-group">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                    <div class="dropdown-menu input-append">
                                        <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                        <button class="btn" type="button">Add</button>
                                    </div>
                                    <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                </div>

                                <div class="btn-group">
                                    <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                </div>

                                <div class="btn-group">
                                    <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                    <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                </div>
                            </div>

                            <div id="editor-one" class="editor-wrapper"></div>

                           <textarea name="descr" id="descr" style="display:none;"></textarea>

                            <br />

                            <div class="ln_solid"></div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Bug Report Comments</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>




        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Crowd Sourced Testing-MTaaS: Test Manager Module by <a href="https://colorlib.com">Project Group 8</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="../vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="../vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="../vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="../vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>
