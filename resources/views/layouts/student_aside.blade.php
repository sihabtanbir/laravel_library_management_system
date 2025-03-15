<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
      <!--begin::Brand Link-->
      <a href="/student_dashboard" class="brand-link">
       
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">Student</span>
        <!--end::Brand Text-->
      </a>
      <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
      <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul
          class="nav sidebar-menu flex-column"
          data-lte-toggle="treeview"
          role="menu"
          data-accordion="false"
        >
          <li class="nav-item menu-open">
            <a href="/student_dashboard" class="nav-link active">
              <i class="nav-icon bi bi-speedometer"></i>
              <p>
                Dashboard
                <i class="nav-arrow bi "></i>
              </p>
            </a>
            
          </li>
        

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-box-seam-fill"></i>
              <p>
              Books Details
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('book.student')}}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p> See Books </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('student.books')}}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Issue Books</p>
                </a>
              </li>
              
            </ul>
          </li>
        
           
             
            
             
            
         
        
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-box-arrow-in-right"></i>
              <p>
                Auth
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
              
                    
               
                <a href="{{route('student.profile')}}" class="nav-link">
                  <i class="nav-icon bi bi-box-arrow-in-right"></i>
                  <p>
                  See Profile
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
               
              </li>
             

              <li class="nav-item">
                <a href="/logout" class="nav-link">
                  <i class="nav-icon bi bi-box-arrow-in-right"></i>
                  <p>
                   Log out
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
              
              </li>
              
            </ul>
          </li>
        
          
         
        </ul>
        <!--end::Sidebar Menu-->
      </nav>
    </div>
    <!--end::Sidebar Wrapper-->
  </aside>