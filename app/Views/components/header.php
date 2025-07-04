<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="container-fluid d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
      <img src="<?= base_url() ?>NiceAdmin/assets/img/logo.png" alt="">
      <span class="d-none d-lg-block">NiceAdmin</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>

    <!-- Search bar -->
    <div class="search-bar ms-3">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <!-- Diskon Hari Ini -->
    <?php if (session()->has('diskon') && session('diskon')): ?>
      <div class="ms-3 text-center">
        <span class="badge bg-success shadow-sm px-3 py-2 rounded-pill">
          🎉 Diskon Hari Ini: <strong>Rp <?= number_format(session('diskon'), 0, ',', '.') ?></strong>
        </span>
      </div>
    <?php endif; ?>

    <!-- Nav -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?= base_url() ?>NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">
              <?= session()->get('username'); ?> (<?= session()->get('role'); ?>)
            </span>
          </a><!-- End Profile Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= session()->get('fullname'); ?></h6>
              <span><?= session()->get('job'); ?></span>
            </li>
            <li><hr class="dropdown-divider"></li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Dropdown Menu -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </div>
</header><!-- End Header -->
