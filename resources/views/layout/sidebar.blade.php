<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			<!-- sidebar menu-->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="">
					<a href="{{ route('dashboad')}}">
						<i class="icon-Home"></i>
						<span>Dashboard</span>
					</a>
				</li>

				@if(view_permission('company'))
					<li class="treeview">
						<a href="#">
							<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
						  <span>Companies</span>
						  <span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						  </span>
						</a>
						<ul class="treeview-menu">
						  <li><a href="{{ route('companies.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add New</a></li>
						  <li><a href="{{ route('companies.list') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
						</ul>
					</li>
				@endif
				
				@if (view_permission('users'))
					<li class="treeview">
						<a href="#">
							<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
							<span>Managers</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="{{ route('users.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add New</a></li>
							<li><a href="{{ route('users.list') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
						</ul>
					</li>
				@endif
				@if (view_permission('categories'))
					<li class="treeview">
					<a href="#">
						<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
						<span>Categories</span>
						<span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{ route('category.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add New</a></li>
						<li><a href="{{ route('category.list') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
						{{-- <li><a href=" {{ route('sample') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Order Details</a></li> --}}
					</ul>
					</li>
				@endif

				@if (view_permission('menu'))
					<li class="treeview">
						<a href="#">
							<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
						<span>Deals</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						</span>
						</a>
						<ul class="treeview-menu">
						<li><a href="{{ route('menu.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add New</a></li>
						<li><a href="{{ route('menu.edit') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Edit</a></li>
						<li class="treeview">
							<a href="#">
								<i class="icon-Chat-check"><span class="path1"></span><span class="path2"></span></i>
								<span>Options/Sides</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
							<li><a href="{{ route('options.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add New</a></li>
							<li><a href="{{ route('options.list') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
							<span>Products</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
							</a>
							<ul class="treeview-menu">
							<li><a href="{{ route('products.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add New</a></li>
							<li><a href="{{ route('products.list') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
							</ul>
						</li>
					</ul>
					</li>
				@endif

				@if (view_permission('schedules'))
				<li class="treeview">
					<a href="#">
						<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
						<span>Restaurant Schedule</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
					<li><a href="{{ route('schedules.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Schedule</a></li>
					</ul>
				</li>
			@endif
			</ul>

			<div class="sidebar-widgets">
				{{-- <div class="mx-25 mb-30 pb-20 side-bx bg-primary bg-food-dark rounded20">
					<div class="text-center">
						<img src="#" class="sideimg" alt="">
						<h3 class="title-bx">Add Menu</h3>
						<a href="#" class="text-white py-10 fs-16 mb-0">
							Manage Your food and beverages menu <i class="mdi mdi-arrow-right"></i>
						</a>
					</div>
				</div> --}}
				<div class="copyright text-start m-25">
					<p><strong class="d-block">Tech Solutons Pro</strong> © 2024</p>
				</div>
			</div>
		  </div>
		</div>
    </section>
</aside>