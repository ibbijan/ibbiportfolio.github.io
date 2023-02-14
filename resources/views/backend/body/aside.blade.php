<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3><b>Sunny</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="{{route('admin_dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            {{-- <li><a href="{{route('admin_home_create')}}"><i class="ti-more"></i>Create </a></li> --}}
            <li><a href="{{route('admin_home_manage')}}"><i class="ti-more"></i>Manage</a></li>
          </ul>

          
        </li> 


        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>About</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            {{-- <li><a href="{{route('admin_about_create')}}"><i class="ti-more"></i>Manage </a></li> --}}
            <li><a href="{{route('admin_about_manage')}}"><i class="ti-more"></i>Manage</a></li>
          </ul>

          
        </li> 

        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Skills</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin_skills_create')}}"><i class="ti-more"></i>Create </a></li>
            {{-- <li><a href="{{route('admin_home_manage')}}"><i class="ti-more"></i>Manage</a></li> --}}
          </ul>

          
        </li> 

        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Resume</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin_resume_education_create')}}"><i class="ti-more"></i>Education</a></li>
            <li><a href="{{route('admin_resume_experience_create')}}"><i class="ti-more"></i>Experience</a></li>
          </ul>

          
        </li>
        
        
        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Portfolio</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin_portfolio_category_create')}}"><i class="ti-more"></i>Category</a></li>
            <li><a href="{{route('admin_portfolio_project_create')}}"><i class="ti-more"></i>Project</a></li>
          
          </ul>

          
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Contacts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin_contact_pending')}}"><i class="ti-more"></i>Pending</a></li>
            <li><a href="{{route('admin_contact_approved')}}"><i class="ti-more"></i>Approved</a></li>
          
          </ul>

          
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin_services_create')}}"><i class="ti-more"></i>Services</a></li>
            {{-- <li><a href="{{route('admin_contact_approved')}}"><i class="ti-more"></i>Approved</a></li> --}}
          
          </ul>

          
        </li>
		  

        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>SEO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin_seo_manage')}}"><i class="ti-more"></i>SEO</a></li>
            {{-- <li><a href="{{route('admin_contact_approved')}}"><i class="ti-more"></i>Approved</a></li> --}}
          
          </ul>

          
        </li>
		  
		  
        
	
      
      </ul>
    </section>
	
	
  </aside>