<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{url('admin/dashboard')}}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('admin/images/logo-dark.png') }}" alt="">
						  <h3><b>Yeakin</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="{{url('admin/dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.brands') }}"><i class="ti-more"></i>All Brands</a></li>
            
          </ul>
        </li> 
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
            <li><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All Sub Category</a></li>
            <li><a href="{{ route('all.sub_subcategory') }}"><i class="ti-more"></i>All Sub Sub->Category</a></li>
           
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i data-feather="file"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('add.product') }}"><i class="ti-more"></i>Add Products</a></li>
            <li><a href="{{ route('all.product') }}"><i class="ti-more"></i>Manage Products</a></li>
          </ul>
        </li> 		



      

        <li class="treeview">
          <a href="">
            <i data-feather="file"></i>
            <span>Show by category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('show.category') }}"><i class="ti-more"></i>Show Category</a></li>
            <li><a href="{{ route('manage.show.category') }}"><i class="ti-more"></i>Manage Show Category</a></li>


           
          </ul>
        </li>

        <li class="treeview">
          <a href="">
            <i data-feather="file"></i>
            <span>Show by Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('show.brand') }}"><i class="ti-more"></i>Show Brand</a></li>
            <li><a href="{{ route('manage.show.brand') }}"><i class="ti-more"></i>Manage Show Brand</a></li>


           
          </ul>
        </li>





</ul>






  
  
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
