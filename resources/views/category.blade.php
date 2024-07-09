<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets\theme\images\favicon.ico">

    <title>Riday - Restaurant Bootstrap Admin Template Webapp</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets\theme\css\vendors_css.css">
	  
	<!-- Style-->  
	<link rel= "stylesheet" href="assets\theme\css\style.css">
	<link rel= "stylesheet" href="assets\theme\css\skin_color.css">	

</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent hover-primary" data-toggle="push-menu" role="button">
			<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
		</a>	
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <span class="light-logo"><img src="assets\theme\images\logo-dark-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="assets\theme\images\logo-dark-text.png" alt="logo"></span>
		  </div>
		</a>	
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item d-md-none">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-info-light" data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">	
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-info-light" title="Full Screen">
					<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>	
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
		    <span class="label label-primary">5</span>
			<a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="Notifications">
			  <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>	
		  
		  <!-- Messages -->
		  <li class="dropdown messages-menu">
		    <span class="label label-primary">5</span>
			<a href="#" class="dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="Messages">
			  <i class="icon-Incoming-mail"><span class="path1"></span><span class="path2"></span></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Messages</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>
			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li><!-- start message -->
					<a href="#">
					  <div class="pull-left">
						<img src="../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Lorem Ipsum
						  <small><i class="fa fa-clock-o"></i> 15 mins</small>
						 </h4>
						 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
					  </div>
					</a>
				  </li>
				  <!-- end message -->
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Nullam tempor
						  <small><i class="fa fa-clock-o"></i> 4 hours</small>
						 </h4>
						 <span>Curabitur facilisis erat quis metus congue viverra.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Proin venenatis
						  <small><i class="fa fa-clock-o"></i> Today</small>
						 </h4>
						 <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Praesent suscipit
						<small><i class="fa fa-clock-o"></i> Yesterday</small>
						 </h4>
						 <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
					  </div>
					</a>
				  </li>
				  <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Donec tempor
						  <small><i class="fa fa-clock-o"></i> 2 days</small>
						 </h4>
						 <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
					  </div>

					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">				  
				  <a href="#">See all e-Mails</a>
			  </li>
			</ul>
		  </li>
          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item">
			  <span class="label label-danger">5</span>
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light nav-link full-screen btn-danger-light">
			  	<i class="icon-Settings-2"></i>
			  </a>
          </li>		  
	      <!-- Right Sidebar Toggle Button -->
          <li class="btn-group nav-item d-xl-none d-inline-flex">
              <a href="#" class="push-btn right-bar-btn waves-effect waves-light nav-link full-screen btn-info-light">
			  	<span class="icon-Layout-left-panel-1"><span class="path1"></span><span class="path2"></span></span>
			  </a>
          </li>
	      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle p-0 text-dark hover-primary ms-md-30 ms-10" data-bs-toggle="dropdown" title="User">
				<span class="ps-30 d-md-inline-block d-none">Hello,</span> <strong class="d-md-inline-block d-none">Alia</strong><img src="../images/avatar/avatar-11.png" class="user-image rounded-circle avatar bg-white mx-10" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i> Logout</a>
              </li>
            </ul>
          </li>	
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
				<li class="treeview">
				  <a href="#">
					<i class="icon-Home"></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 1</a></li>
					<li><a href="index2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 2</a></li>
					<li><a href="index3.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 3</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>Categories</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="order.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Category List</a></li>
					<li><a href="order_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Order Details</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Dinner"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
					<span>Menus</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{ route('addcategory') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add New Category</a></li>
					<li><a href="menu_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Menu List</a></li>
					<li><a href="menu_categories.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Categories</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Group"><span class="path1"></span><span class="path2"></span></i>
					<span>Customer</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="customer.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Customer list</a></li>
					<li><a href="members.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Members</a></li>
				  </ul>
				</li>
				<li>
				  <a href="analysis.html">
					<i class="icon-Chart-line"><span class="path1"></span><span class="path2"></span></i>
					<span>Analysis</span>
				  </a>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
					<span>Online Store</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="ecommerce_products.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
					<li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
					<li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
					<li><a href="ecommerce_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
					<li><a href="ecommerce_orders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
					<li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li>
					<li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
					<li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>	
				  </ul>
				</li>				
				<li class="header">UI & Pages</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
					<span>Collections</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blog</a></li>
							<li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
							<li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
							<li><a href="widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
							<li><a href="widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
							<li><a href="widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
							<li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="component_modals.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a></li>
							<li><a href="component_sweatalert.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
							<li><a href="component_notification.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Toastr</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Apps
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
							<li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
							<li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>
							<li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
						</ul>
					</li>
					<li><a href="email_index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>
				  </ul>
				</li>				  
				<li class="treeview">
				  <a href="#">
					<i class="icon-Brush"><span class="path1"></span><span class="path2"></span></i>
					<span>UI & Components</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Components
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
							<li><a href="component_date_paginator.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
							<li><a href="component_media_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
							<li><a href="component_rangeslider.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
							<li><a href="component_rating.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
							<li><a href="component_animations.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
							<li><a href="extension_fullscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
							<li><a href="extension_pace.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
							<li><a href="component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
							<li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Utilities
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>
							<li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
							<li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
							<li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
							<li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
							<li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
							<li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
							<li><a href="ui_border_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
							<li><a href="ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>	
							<li><a href="ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
							<li><a href="ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
							<li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
							<li><a href="ui_progress_bars.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>	
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="icons_fontawesome.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
							<li><a href="icons_glyphicons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
							<li><a href="icons_material.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>	
							<li><a href="icons_themify.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
							<li><a href="icons_simpleline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
							<li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
							<li><a href="icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
							<li><a href="icons_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Elements
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
							<li><a href="ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
							<li><a href="ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
							<li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
							<li><a href="ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
							<li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
						</ul>
					</li>
				  </ul>
				</li>				  
				<li class="treeview">
				  <a href="#">
					<i class="icon-File"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>Forms & Tables</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					  <li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="forms_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
							<li><a href="forms_general.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
							<li><a href="forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>	
							<li><a href="forms_validation.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
							<li><a href="forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
							<li><a href="forms_xeditable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
							<li><a href="forms_dropzone.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
							<li><a href="forms_code_editor.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
							<li><a href="forms_editors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
							<li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tables
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
							<li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
							<li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
							<li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>
						</ul>
					</li>					
				  </ul>
				</li>				  
				<li class="treeview">
				  <a href="#">
					<i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
					<span>Charts & Maps</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					  <li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Charts
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="charts_chartjs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
							<li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
							<li><a href="charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
							<li><a href="charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
							<li><a href="charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
							<li><a href="charts_chartist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
							<li><a href="charts_c3_axis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
							<li><a href="charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
							<li><a href="charts_c3_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
							<li><a href="charts_c3_line.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
							<li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
							<li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
							<li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie & Doughnut Chart</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maps
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="map_google.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Google Map</a></li>
							<li><a href="map_vector.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vector Map</a></li>
						</ul>
					</li>					
				  </ul>
				</li>			
				<li class="treeview">
				  <a href="#">
					<i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
					<span>Authentication</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="auth_login.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a></li>
					<li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a></li>
					<li><a href="auth_lockscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a></li>
					<li><a href="auth_user_pass.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a></li>	
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Chat-check"><span class="path1"></span><span class="path2"></span></i>
					<span>Miscellaneous</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="error_404.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a></li>
					<li><a href="error_500.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a></li>
					<li><a href="error_maintenance.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a></li>	
				  </ul>
				</li>  		
				<li class="treeview">
				  <a href="#">
					<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
					<span>Usefull Page</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
					<li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Profile</a></li>
					<li><a href="contact_userlist_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist Grid</a></li>
					<li><a href="contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>	
					<li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
				  </ul>
				</li>		  
				<li class="treeview">
				  <a href="#">
					<i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
					<span>Extra Pages</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
					<li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
					<li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
					<li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
					<li><a href="sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
					<li><a href="sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
				  </ul>
				</li>  	     
			  </ul>
			  
			  <div class="sidebar-widgets">
				  <div class="mx-25 mb-30 pb-20 side-bx bg-primary bg-food-dark rounded20">
					<div class="text-center">
						<img src="../images/res-menu.png" class="sideimg" alt="">
						<h3 class="title-bx">Add Menu</h3>
						<a href="#" class="text-white py-10 fs-16 mb-0">
							Manage Your food and beverages menu <i class="mdi mdi-arrow-right"></i>
						</a>
					</div>
				  </div>
				<div class="copyright text-start m-25">
					<p><strong class="d-block">Riday Admin Dashboard</strong> © 2021 All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Menu Categories</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Menu</li>
								<li class="breadcrumb-item active" aria-current="page">Menu Categories</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/sandwich.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Sandwich</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Burger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/salads.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Salads</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Carrot"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/burgers.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Burgers</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Burger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/pizza.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Pizza's</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Pizza"></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/soups.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Soups</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/main.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Main Course</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Dinner1"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/noodles.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Noodles</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Sushi"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/rice.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Rice</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/starters.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Starters</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Fish"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/subziyan.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Subziyan</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/dals.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Dals</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/breads.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Breads</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-French-Bread"></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/biryanis.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Pulao / Biryanis</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/dessert.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Dessert</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Ice-cream1"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/mocktails.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Smoothies & Mocktails</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Wine"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>

							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="../images/food/icecream.jpg" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Ice Cream</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="fs-18 mx-10 text-primary icon-Ice-cream"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
		    </div>
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Content Right Sidebar -->
   <!-- <div class="right-bar">
	  <div id="sidebarRight">
		  <div class="right-bar-inner">
			  <div class="text-end position-relative">
				  <a href="#" class="d-inline-block d-xl-none btn right-bar-btn waves-effect waves-circle btn btn-circle btn-danger btn-sm">
					<i class="mdi mdi-close"></i>
				  </a>
			  </div>
			  <div class="right-bar-content">
				  <div class="box no-shadow box-bordered border-light">
				  	  <div class="box-body">
					  	  <div class="d-flex justify-content-between align-items-center">
							  <div>
								  <h5>Total Sale</h5>
								  <h2 class="mb-0">$254.90</h2>
							  </div>
							  <div class="p-10">
							  	<div id="chart-spark1"></div>
							  </div>
						  </div>
					  </div>
					  <div class="box-footer">
					  	  <div class="d-flex align-items-center justify-content-between">
						  	  <h5 class="my-0">6 total orders</h5>
							  <a href="#" class="mb-0">View Report</a>
						  </div>
					  </div>
				  </div>
				  <div class="box no-shadow box-bordered border-light">
				  	  <div class="box-body">
					  	  <div class="d-flex justify-content-between align-items-center">
							  <div>
								  <h5>Total Sessions</h5>
								  <h2 class="mb-0">845</h2>
							  </div>
							  <div class="p-10">
							  	<div id="chart-spark2"></div>
							  </div>
						  </div>
					  </div>
					  <div class="box-footer">
					  	  <div class="d-flex align-items-center justify-content-between">						  	  
							  <a href="#" class="btn btn-primary-light btn-sm">Live</a>						  	  
							  <a href="#" class="btn btn-info-light btn-sm">4 Visitors</a>						  	  
							  <a href="#" class="btn btn-success-light btn-sm">See Live View</a>
						  </div>
					  </div>
				  </div>
				  <div class="box no-shadow box-bordered border-light">
				  	  <div class="box-body">
					  	  <div class="d-flex justify-content-between align-items-center">
							  <div>
								  <h5>Customer rate</h5>
								  <h2 class="mb-0">5.12%</h2>
							  </div>
							  <div class="p-10">
							  	<div id="chart3"></div>
							  </div>
						  </div>
					  </div>
					  <div class="box-footer">
					  	  <div class="d-flex align-items-center justify-content-between">						  	  
							  <h5 class="my-0"><span class="badge badge-xl badge-dot badge-primary me-10"></span>First Time</h5>								  	  
							  <h5 class="my-0"><span class="badge badge-xl badge-dot badge-danger me-10"></span>Returning</h5>						  	  		
						  </div>
					  </div>
				  </div>
				  <div class="box no-shadow box-bordered border-light">
					  <div class="box-header">
					  	<h4 class="box-title">Resent Activity</h4>
					  </div>
				  	  <div class="box-body p-5">
					  	  <div class="media-list media-list-hover">
							<a class="media media-single mb-10 p-0 rounded-0" href="#">
							  <h4 class="w-50 text-gray fw-500">10:10</h4>
							  <div class="media-body ps-15 bs-5 rounded border-primary">
								<p>Morbi quis ex eu arcu auctor sagittis.</p>
								<span class="text-fade">by Johne</span>
							  </div>
							</a>

							<a class="media media-single mb-10 p-0 rounded-0" href="#">
							  <h4 class="w-50 text-gray fw-500">08:40</h4>
							  <div class="media-body ps-15 bs-5 rounded border-success">
								<p>Proin iaculis eros non odio ornare efficitur.</p>
								<span class="text-fade">by Amla</span>
							  </div>
							</a>

							<a class="media media-single mb-10 p-0 rounded-0" href="#">
							  <h4 class="w-50 text-gray fw-500">07:10</h4>
							  <div class="media-body ps-15 bs-5 rounded border-info">
								<p>In mattis mi ut posuere consectetur.</p>
								<span class="text-fade">by Josef</span>
							  </div>
							</a>

							<a class="media media-single mb-10 p-0 rounded-0" href="#">
							  <h4 class="w-50 text-gray fw-500">01:15</h4>
							  <div class="media-body ps-15 bs-5 rounded border-danger">
								<p>Morbi quis ex eu arcu auctor sagittis.</p>
								<span class="text-fade">by Rima</span>
							  </div>
							</a>

							<a class="media media-single mb-10 p-0 rounded-0" href="#">
							  <h4 class="w-50 text-gray fw-500">23:12</h4>
							  <div class="media-body ps-15 bs-5 rounded border-warning">
								<p>Morbi quis ex eu arcu auctor sagittis.</p>
								<span class="text-fade">by Alaxa</span>
							  </div>
							</a>

						  </div>
					  </div>
					  <div class="box-footer">
					  	  <div class="text-center">						  	  
							  <a href="#" class="mb-0">Load More</a>					  	  		
						  </div>
					  </div>
				  </div>
			  </div>
		  </div>
	  </div>
  </div>  -->
  <!-- /.Content Right Sidebar -->
	
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2021 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
	
	<!-- ./side demo panel -->
	<!-- <div class="sticky-toolbar">	    
	    <a href="https://themeforest.net/item/riday-restaurant-bootstrap-admin-template-webapp/31603200" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
	    <a href="https://themeforest.net/user/multipurposethemes/portfolio" data-bs-toggle="tooltip" data-bs-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Image"></span>
		</a>
	    <a id="chat-popup" href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div> -->
	<!-- Sidebar -->
	
	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-45">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
                      <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                      <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">You</a>
                                <p class="text-muted fs-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="../images/avatar/3.jpg" class="avatar avatar-lg">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.         
                        </div>        
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>      
            </div>
		</div>
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="assets\theme\js\vendors.min.js"></script>
	<script src="assets\theme\js\pages\chartjs-int.js"></script>
	<script src="assets\vendor_components\apexcharts-bundle\dist\apexcharts.min.js"></script>
    <script src="assets\theme\assets\icons\feather-icons\feather.min.js"></script>	
	
	<!-- Riday Admin App -->
	<script src="assets\theme\js\template.js"></script>
	
	

</body>
</html>