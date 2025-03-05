<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
      <!--begin::Brand Link-->
      <a href="/dashboard" class="brand-link">
       
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">Admin</span>
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
            <a href="/dashboard" class="nav-link active">
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
                <a href="/show_book" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p> See Books </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/add_book" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Add Book</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/category" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Add Category</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="/book_author" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Add Author</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-clipboard-fill"></i>
              <p>
               Students Details
               
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./layout/unfixed-sidebar.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>View Studens</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./layout/fixed-sidebar.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Add Student</p>
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
                <a href="/update/{id}" class="nav-link">
                  <i class="nav-icon bi bi-box-arrow-in-right"></i>
                  <p>
                   Update Profile
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