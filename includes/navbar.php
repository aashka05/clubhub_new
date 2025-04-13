<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid px-4">
      <a href="index.php" class="d-flex align-items-center text-decoration-none mb-4 mt-2">
        <div class="bg-primary rounded d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
          <span class="fw-bold text-white">C</span>
        </div>
        <span class="ms-2 fw-bold text-white fs-5">ClubHub</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarContent">
        <div class="search-box mx-auto d-none d-md-block">
          <i class="bi bi-search"></i>
          <input type="text" class="form-control search-input" placeholder="Search...">
        </div>
        
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item me-3">
            <button class="btn btn-link text-secondary position-relative">
              <i class="bi bi-bell fs-5"></i>
              <span class="position-absolute badge rounded-pill bg-primary notification-badge">4</span>
            </button>
          </li>
          <li class="nav-item me-3">
            <button class="btn btn-link text-secondary position-relative">
              <i class="bi bi-chat-square-text fs-5"></i>
              <span class="position-absolute badge rounded-pill bg-success notification-badge">3</span>
            </button>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
              <div class="avatar">JD</div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end bg-dark">
              <li class="px-3 py-2 border-bottom border-secondary">
                <p class="text-white mb-0 fw-medium">K. Anderson</p>
                <small class="text-secondary">k.anderson@example.com</small>
              </li>
              <li><a class="dropdown-item text-white" href="profile.php"><i class="bi bi-person me-2"></i> Profile</a></li>
              <li><a class="dropdown-item text-white" href="#"><i class="bi bi-gear me-2"></i> Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>