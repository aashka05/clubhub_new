<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClubHub - Campus Life</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/dashboardstyle.css">
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
</head>
<body>
  <!-- Navbar -->
  <?php include_once 'includes/navbar.php' ?>

  <!-- Sidebar -->
  <?php include_once 'includes/sidebar.php' ?>

  <!-- Main Content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-banner mb-5">
        <!-- <div class="banner-badge mb-4">BVM College ClubHub</div>
        <h1 class="display-4 fw-bold mb-4">
          Explore <span class="text-primary">Campus Life</span>
          <br> Through Our Clubs
        </h1>
        <p class="lead text-secondary mb-5">
          Join clubs, attend events, and connect with like-minded 
          students at Birla Vishvakarma Mahavidyalaya.
        </p> -->
        
        <!-- <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
          <a href="#" class="btn btn-primary d-flex align-items-center">
            Explore Clubs
            <i class="bi bi-arrow-right ms-2"></i>
          </a>
          <a href="#" class="btn btn-secondary">
            Upcoming Events
          </a>
        </div>
      </div> -->
      
      <div class="text-center mb-5">
        <h2 class="fs-1 fw-bold mb-3">Our Clubs</h2>
        <div class="badge bg-success bg-opacity-25 text-success p-2 rounded-pill mb-5">
          <i class="bi bi-circle-fill me-2 small"></i>
          20+ Active Clubs
        </div>
      </div>
      
      <div class="row g-4" id="clubsContainer">
        <!-- Club cards will be inserted here by JavaScript -->
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Club data (mocking the data from the React app)
    const clubsData = [
      {
        id: 1,
        name: "Robotics Club",
        description: "A community of students passionate about robotics and automation. We host workshops, competitions and collaborate on innovative projects.",
        members: 124,
        founded: 2010,
        isRecruiting: true,
        category: "Technology",
        logo: "https://via.placeholder.com/100?text=RC",
        color: "blue"
      },
      {
        id: 2,
        name: "Photography Club",
        description: "Capturing moments and sharing perspectives. We explore techniques, go on photo walks, and exhibit our best works around campus.",
        members: 87,
        founded: 2012,
        isRecruiting: false,
        category: "Arts",
        logo: "https://via.placeholder.com/100?text=PC",
        color: "purple"
      },
      {
        id: 3,
        name: "Debate Society",
        description: "Enhancing critical thinking through the art of debate. We participate in tournaments and discuss current events and philosophical topics.",
        members: 56,
        founded: 2008,
        isRecruiting: true,
        category: "Academic",
        logo: "https://via.placeholder.com/100?text=DS",
        color: "red"
      },
      {
        id: 4,
        name: "Eco Warriors",
        description: "Promoting environmental awareness and sustainability on campus. We organize clean-ups, recycling drives, and educational workshops.",
        members: 93,
        founded: 2015,
        isRecruiting: true,
        category: "Environment",
        logo: "https://via.placeholder.com/100?text=EW",
        color: "green"
      },
      {
        id: 5,
        name: "Music Ensemble",
        description: "A collective of musicians coming together to create beautiful melodies. We perform at campus events and organize jam sessions.",
        members: 72,
        founded: 2011,
        isRecruiting: false,
        category: "Arts",
        logo: "https://via.placeholder.com/100?text=ME",
        color: "orange"
      },
      {
        id: 6,
        name: "Coding Ninjas",
        description: "Honing programming skills through collaborative projects and hackathons. We explore new technologies and solve coding challenges.",
        members: 110,
        founded: 2013,
        isRecruiting: true,
        category: "Technology",
        logo: "https://via.placeholder.com/100?text=CN",
        color: "blue"
      }
    ];

    // Function to render club cards
    function renderClubCards() {
      const clubsContainer = document.getElementById('clubsContainer');
      
      clubsData.forEach(club => {
        const clubCard = document.createElement('div');
        clubCard.className = 'col-md-6 col-lg-4';
        
        clubCard.innerHTML = `
          <div class="club-card">
            <div class="club-card-header club-${club.color}">
              <div class="club-logo">
                <img src="${club.logo}" alt="${club.name} logo">
              </div>
              <div>
                <h5 class="card-title text-white mb-0">${club.name}</h5>
                <p class="card-text text-white-50 small mb-0">
                  ${club.members} members · Est. ${club.founded}
                </p>
              </div>
            </div>
            <div class="club-card-body">
              <p class="card-text text-secondary mb-3">
                ${club.description}
              </p>
              <div class="d-flex flex-wrap gap-2">
                <span class="badge badge-outline">${club.category}</span>
                ${club.isRecruiting ? '<span class="badge badge-recruiting">Recruiting</span>' : ''}
              </div>
            </div>
            <div class="club-card-footer">
              <a href="club-${club.id}.html" class="btn btn-secondary w-100">View Details</a>
            </div>
          </div>
        `;
        
        clubsContainer.appendChild(clubCard);
      });
    }

    // Initialize the page
    document.addEventListener('DOMContentLoaded', function() {
      renderClubCards();
      
      // Show toast notification on page load (simulating the React toaster)
      setTimeout(() => {
        const toastHTML = `
          <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1100">
            <div class="toast show bg-dark text-white" role="alert">
              <div class="toast-header bg-dark text-white">
                <strong class="me-auto">Welcome to ClubHub</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
              </div>
              <div class="toast-body">
                Explore club activities and upcoming events!
              </div>
            </div>
          </div>
        `;
        
        const toastContainer = document.createElement('div');
        toastContainer.innerHTML = toastHTML;
        document.body.appendChild(toastContainer);
        
        // Auto-dismiss after 3 seconds
        setTimeout(() => {
          const toast = document.querySelector('.toast');
          const bsToast = new bootstrap.Toast(toast);
          bsToast.hide();
        }, 3000);
      }, 1000);
    });
  </script>
  <script src="assets/js/script.js"></script>
</body>
</html>