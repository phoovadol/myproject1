<nav class="app-header navbar navbar-expand bg-body">
  <!-- Begin: Container -->
  <div class="container-fluid">
    <!-- Begin: Start Navbar Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button" aria-label="Toggle Sidebar">
          <i class="bi bi-list"></i>
        </a>
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="#" class="nav-link" aria-label="Home">Home</a>
      </li>
      <li class="nav-item d-none d-md-block">
        <a href="#" class="nav-link" aria-label="Contact">Contact</a>
      </li>
    </ul>
    <!-- End: Start Navbar Links -->

    <!-- Begin: End Navbar Links -->
    <ul class="navbar-nav ms-auto">
      <!-- Begin: Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button" aria-label="Search">
          <i class="bi bi-search"></i>
        </a>
      </li>
      <!-- End: Navbar Search -->

      <!-- Begin: Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-label="Messages">
          <i class="bi bi-chat-text"></i>
          <span class="navbar-badge badge text-bg-danger">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <a href="#" class="dropdown-item">
            <!-- Begin: Message -->
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img
                  src="./assets/img/user1-128x128.jpg"
                  alt="User Avatar"
                  class="img-size-50 rounded-circle me-3"
                />
              </div>
              <div class="flex-grow-1">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-end fs-7 text-danger">
                    <i class="bi bi-star-fill"></i>
                  </span>
                </h3>
                <p class="fs-7 mb-1">Call me whenever you can...</p>
                <p class="fs-7 text-secondary">
                  <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                </p>
              </div>
            </div>
            <!-- End: Message -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img
                  src="./assets/img/user8-128x128.jpg"
                  alt="User Avatar"
                  class="img-size-50 rounded-circle me-3"
                />
              </div>
              <div class="flex-grow-1">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-end fs-7 text-secondary">
                    <i class="bi bi-star-fill"></i>
                  </span>
                </h3>
                <p class="fs-7 mb-1">I got your message bro</p>
                <p class="fs-7 text-secondary">
                  <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                </p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- End: Messages Dropdown Menu -->

      <!-- Begin: Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-label="Notifications">
          <i class="bi bi-bell-fill"></i>
          <span class="navbar-badge badge text-bg-warning">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="bi bi-envelope me-2"></i> 4 new messages
            <span class="float-end text-secondary fs-7">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="bi bi-people-fill me-2"></i> 8 friend requests
            <span class="float-end text-secondary fs-7">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <!-- End: Notifications Dropdown Menu -->

      <!-- Begin: Fullscreen Toggle -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-lte-toggle="fullscreen" aria-label="Toggle Fullscreen">
          <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
          <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
        </a>
      </li>
      <!-- End: Fullscreen Toggle -->

      <!-- Begin: User Menu Dropdown -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-label="User Menu">
          <img
            src="./assets/img/user2-160x160.jpg"
            class="user-image rounded-circle shadow"
            alt="User Image"
          />
          <span class="d-none d-md-inline">
            <?php echo $_SESSION['fullname'] ?>
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <!-- Begin: User Image -->
          <li class="user-header text-bg-primary">
            <img
              src="./assets/img/user2-160x160.jpg"
              class="rounded-circle shadow"
              alt="User Image"
            />
            <p>
              Alexander Pierce - Web Developer
              <small>Member since Nov. 2023</small>
            </p>
          </li>
          <!-- End: User Image -->
          <!-- Begin: Menu Footer -->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href=" logout.php"class="btn btn-default btn-flat float-end">Sign out</a>
          </li>
          <!-- End: Menu Footer -->
        </ul>
      </li>
      <!-- End: User Menu Dropdown -->
    </ul>
    <!-- End: End Navbar Links -->
  </div>
  <!-- End: Container -->
</nav>
