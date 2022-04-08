<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../tentor" class="brand-link">
      <img src="../assets/dist/img/pp.jpg" alt="Osing Course Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">OsingCourse </span>
    
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          
            <a href="#" class="d-block"><?=$s_aktif['nm_siswa']?></a> <a class="btn-xs btn-success"> <?=$s_aktif['email']?></a>
          
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu --> 
      <nav class="mt-1">
        <ul class="nav nav-pills nav-sidebar" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="../siswa" class="nav-link">
              <i class="nav-icon fas fa-chart-area"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li>

         

        <?php 
        
        $statuskelas = $kelas->cek_kelas_aktif($con,$s_aktif['id_siswa']);
        //JIKA KELAS SISWA AKTIF----------------------------------------------
        if(!empty($statuskelas[0]))
        {        
        ?>

          <li class="nav-item">
            <a href="?p=d-kelas" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Timeline Materi
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?p=ops" class="nav-link">
              <i class="fa fa-pencil-ruler nav-icon"></i>
              <p>
               Quiz
               <span class="btn-xs bg-red">soon</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?p=ops" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Pencapaianku
              </p>
            </a>
          </li>

         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-reader"></i>
              <p>
                E-Learning
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?p=list-materi" class="nav-link">
                  <i class="fa fa-list-alt nav-icon"></i>
                  <pa>List Materi</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="?p=materi2" class="nav-link">
                  <i class="fa fa-stream nav-icon"></i>
                  <pa>Timeline Materi</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="?p=quiz-list" class="nav-link">
                  <i class="fa fa-pencil-ruler nav-icon"></i>
                  <pa>Quiz</p>
                </a>
              </li>
            </ul>
            
          </li>

          <?php } else { echo "";} ?>

          <li class="nav-item">
            <a href="?p=status-kelas" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Status Kelasku 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?p=logout" class="nav-link bg-danger">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               Logout
              </p>
            </a>
          </li>


        

         

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>