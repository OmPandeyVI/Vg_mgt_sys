<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">



<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Phoenix</title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
  <link rel="manifest" href="../../assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <script src="../../vendors/simplebar/simplebar.min.js"></script>
  <script src="../../assets/js/config.js"></script>

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">
  <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="../../assets/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
  <link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
  <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
  <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
  <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script>
    var phoenixIsRTL = window.config.config.phoenixIsRTL;
    if (phoenixIsRTL) {
      var linkDefault = document.getElementById('style-default');
      var userLinkDefault = document.getElementById('user-style-default');
      linkDefault.setAttribute('disabled', true);
      userLinkDefault.setAttribute('disabled', true);
      document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
      var linkRTL = document.getElementById('style-rtl');
      var userLinkRTL = document.getElementById('user-style-rtl');
      linkRTL.setAttribute('disabled', true);
      userLinkRTL.setAttribute('disabled', true);
    }
  </script>
</head>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <?php include_once('../../Components/navbar.php'); ?>
    <script>
      var navbarTopShape = window.config.config.phoenixNavbarTopShape;
      var navbarPosition = window.config.config.phoenixNavbarPosition;
      var body = document.querySelector('body');
      var navbarDefault = document.querySelector('#navbarDefault');
      var navbarTop = document.querySelector('#navbarTop');
      var topNavSlim = document.querySelector('#topNavSlim');
      var navbarTopSlim = document.querySelector('#navbarTopSlim');
      var navbarCombo = document.querySelector('#navbarCombo');
      var navbarComboSlim = document.querySelector('#navbarComboSlim');
      var dualNav = document.querySelector('#dualNav');

      var documentElement = document.documentElement;
      var navbarVertical = document.querySelector('.navbar-vertical');

      if (navbarPosition === 'dual-nav') {
        topNavSlim?.remove();
        navbarTop?.remove();
        navbarTopSlim?.remove();
        navbarCombo?.remove();
        navbarComboSlim?.remove();
        navbarDefault?.remove();
        navbarVertical?.remove();
        dualNav.removeAttribute('style');
        document.documentElement.setAttribute('data-navigation-type', 'dual');

      } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
        navbarDefault?.remove();
        navbarTop?.remove();
        navbarTopSlim?.remove();
        navbarCombo?.remove();
        navbarComboSlim?.remove();
        topNavSlim.style.display = 'block';
        navbarVertical.style.display = 'inline-block';
        document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

      } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
        navbarDefault?.remove();
        navbarVertical?.remove();
        navbarTop?.remove();
        topNavSlim?.remove();
        navbarCombo?.remove();
        navbarComboSlim?.remove();
        dualNav?.remove();
        navbarTopSlim.removeAttribute('style');
        document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
      } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
        navbarDefault?.remove();
        navbarTop?.remove();
        topNavSlim?.remove();
        navbarCombo?.remove();
        navbarTopSlim?.remove();
        dualNav?.remove();
        navbarComboSlim.removeAttribute('style');
        navbarVertical.removeAttribute('style');
        document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
      } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
        navbarDefault?.remove();
        topNavSlim?.remove();
        navbarVertical?.remove();
        navbarTopSlim?.remove();
        navbarCombo?.remove();
        navbarComboSlim?.remove();
        dualNav?.remove();
        navbarTop.removeAttribute('style');
        document.documentElement.setAttribute('data-navigation-type', 'horizontal');
      } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
        topNavSlim?.remove();
        navbarTop?.remove();
        navbarTopSlim?.remove();
        navbarDefault?.remove();
        navbarComboSlim?.remove();
        dualNav?.remove();
        navbarCombo.removeAttribute('style');
        navbarVertical.removeAttribute('style');
        document.documentElement.setAttribute('data-navigation-type', 'combo');
      } else {
        topNavSlim?.remove();
        navbarTop?.remove();
        navbarTopSlim?.remove();
        navbarCombo?.remove();
        navbarComboSlim?.remove();
        dualNav?.remove();
        navbarDefault.removeAttribute('style');
        navbarVertical.removeAttribute('style');
      }

      var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
      var navbarTop = document.querySelector('.navbar-top');
      if (navbarTopStyle === 'darker') {
        navbarTop.setAttribute('data-navbar-appearance', 'darker');
      }

      var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
      var navbarVertical = document.querySelector('.navbar-vertical');
      if (navbarVerticalStyle === 'darker') {
        navbarVertical.setAttribute('data-navbar-appearance', 'darker');
      }
    </script>
    <div class="content">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="mt-1">
          <h2 class="fw-bold">Employee Directory</h2>
          <p class="text-muted">A comprehensive list of all employees under your management</p>
        </div>
        <button class="btn btn-outline-primary">+ Add New Employee</button>
      </div>

      <hr class="hr" />
      <br>
      <div id="tableExample3"
        data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;phone&quot;,&quot;designation&quot;,&quot;address&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
        <div class="search-box mb-3 mx-auto">
          <form class="position-relative"><input class="form-control search-input search form-control-sm" type="search" name="searchQuery"
              placeholder="Search" aria-label="Search">
            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false"
              data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512" data-fa-i2svg="">
              <path fill="currentColor"
                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
              </path>
            </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
          </form>
        </div>
        <div class="table-responsive">
<table class="table table-striped table-sm fs-9 mb-0 text-center justify-content-center align-items-center">
  <thead>
    <tr>
      <th><i class="bi bi-person-circle me-1"></i> Profile</th>
      <th><i class="bi bi-person-badge me-1"></i> Name</th>
      <th><i class="bi bi-envelope-at me-1"></i> Email</th>
      <th><i class="bi bi-telephone me-1"></i> Phone</th>
      <th><i class="bi bi-briefcase me-1"></i> Designation</th>
      <th><i class="bi bi-geo-alt me-1"></i> Address</th>
      <th><i class="bi bi-gear me-1"></i> Action</th>
    </tr>
  </thead>
  <tbody class="list">
    <?php
    include '../PhpFiles/connection.php';
    $empQuery = "SELECT id, f_name, m_name, l_name, personal_email, primary_phone_no, current_job_role, current_address FROM tbl_emp";
    $result = mysqli_query($conn, $empQuery);

    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $fullName = trim($row['f_name'] . ' ' . $row['m_name'] . ' ' . $row['l_name']);
      $email = $row['personal_email'];
      $phone = $row['primary_phone_no'];
      $designation = $row['current_job_role'];
      $address = $row['current_address'];
      $imgPath = "../uploads/employee_img/" . trim($row['f_name'] . ' ' . $row['m_name'] . ' ' . $row['l_name']) . ".jpg";
      $modalId = "empImageModal" . $id;
    ?>
      <tr>
        <td class="align-middle">
          <div class="d-flex align-items-center justify-content-center">
            <img src="<?php echo $imgPath; ?>" alt="<?php echo $fullName; ?>" class="rounded-circle me-2"
              width="40" height="40" style="cursor:pointer;"
              data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">
          </div>
        </td>
        <td class="align-middle"><?php echo $fullName; ?></td>
        <td class="align-middle"><?php echo $email; ?></td>
        <td class="align-middle"><?php echo $phone; ?></td>
        <td class="align-middle"><?php echo $designation; ?></td>
        <td class="align-middle"><?php echo $address; ?></td>
        <td class="align-middle">
          <div class="btn-reveal-trigger position-static">
            <button class="btn btn-sm dropdown-toggle btn-reveal fs-10"
              type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="fas fa-ellipsis-h fs-10"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-end py-2">
              <a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i> View</a>
              <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-up-right me-2"></i> Export</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="#"><i class="bi bi-trash3 me-2"></i> Remove</a>
            </div>
          </div>
        </td>
      </tr>

      <!-- Modal for image view -->
      <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content bg-transparent border-0">
            <div class="modal-body text-center">
              <img src="<?php echo $imgPath; ?>" alt="<?php echo $fullName; ?>" class="img-fluid rounded shadow">
            </div>
          </div>
        </div>
      </div>

    <?php } ?>
  </tbody>
</table>


        </div>
        <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block"
            data-list-info="data-list-info">1 to 5 <span class="text-body-tertiary"> Items of </span>43</span>
          <div class="d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg
                class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas"
                data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                data-fa-i2svg="">
                <path fill="currentColor"
                  d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                </path>
              </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
            <ul class="mb-0 pagination">
              <li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li>
              <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
              <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
              <li class="disabled"><button class="page" type="button">...</button></li>
            </ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right"
                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                <path fill="currentColor"
                  d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                </path>
              </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
          </div>
        </div>
      </div>

      <?php include_once('../../Components/footer.php'); ?>
    </div>
    <div>
  </main><!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->
  <!-- 
  <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
    aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
      <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
        <div>
          <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
          <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
        </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span
            class="fas fa-times fs-8"> </span></button>
      </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
          class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
    </div>
    <div class="offcanvas-body scrollbar px-card" id="themeController">
      <div class="setting-panel-item mt-0">
        <h5 class="setting-panel-item-title">Color Scheme</h5>
        <div class="row gx-2">
          <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
              value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9"
              for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="../../assets/img/generic/default-light.png" alt="" /></span><span
                class="label-text">Light</span></label></div>
          <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
              value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9"
              for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="../../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">
                Dark</span></label></div>
          <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio"
              value="auto" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9"
              for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="../../assets/img/generic/auto.png" alt="" /></span><span class="label-text">
                Auto</span></label></div>
        </div>
      </div>
      <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="setting-panel-item-title mb-1">RTL </h5>
          <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox"
              data-theme-control="phoenixIsRTL" /></div>
        </div>
        <p class="mb-0 text-body-tertiary">Change text direction</p>
      </div>
      <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
          <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox"
              data-theme-control="phoenixSupportChat" /></div>
        </div>
        <p class="mb-0 text-body-tertiary">Toggle support chat</p>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Navigation Type</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio"
              value="vertical" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/default-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/default-dark.png"
                  alt="" /></span><span class="label-text">Vertical</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio"
              value="horizontal" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/top-default.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/top-default-dark.png"
                  alt="" /></span><span class="label-text"> Horizontal</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio"
              value="combo" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/nav-combo-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/nav-combo-dark.png"
                  alt="" /></span><span class="label-text"> Combo</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio"
              value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span
                class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../../assets/img/generic/dual-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/dual-dark.png"
                  alt="" /></span><span class="label-text"> Dual nav</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name"
              value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label
              class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img
                class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/default-light.png"
                alt="" /><img class="img-fluid img-prototype d-light-none"
                src="../../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none">
                Default</span><span class="label-text d-light-none">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name"
              value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label
              class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img
                class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/vertical-darker.png"
                alt="" /><img class="img-fluid img-prototype d-light-none"
                src="../../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none">
                Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio"
              value="default" data-theme-control="phoenixNavbarTopShape" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../../assets/img/generic/top-default.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0"
                  src="../../assets/img/generic/top-default-dark.png" alt="" /></span><span
                class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim"
              data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9"
              for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img
                  class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-slim.png"
                  alt="" /><img class="img-fluid img-prototype d-light-none mb-0"
                  src="../../assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text">
                Slim</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio"
              value="default" data-theme-control="phoenixNavbarTopStyle" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../../assets/img/generic/top-default.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0"
                  src="../../assets/img/generic/top-style-darker.png" alt="" /></span><span
                class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio"
              value="darker" data-theme-control="phoenixNavbarTopStyle" /><label
              class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../../assets/img/generic/navbar-top-style-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0"
                  src="../../assets/img/generic/top-style-lighter.png" alt="" /></span><span
                class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label>
          </div>
        </div>
      </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary"
        href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase
        template</a>
    </div>
  </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
    <div class="card-body d-flex align-items-center px-2 py-1">
      <div class="position-relative rounded-start" style="height:34px;width:28px">
        <div class="settings-popover"><span class="ripple"><span
              class="fa-spin position-absolute all-0 d-flex flex-center"><span
                class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20"
                  viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                    fill="#2A7BE4"></path>
                </svg></span></span></span></div>
      </div><small class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
    </div>
  </a> -->

  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="../../vendors/popper/popper.min.js"></script>
  <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
  <script src="../../vendors/anchorjs/anchor.min.js"></script>
  <script src="../../vendors/is/is.min.js"></script>
  <script src="../../vendors/fontawesome/all.min.js"></script>
  <script src="../../vendors/lodash/lodash.min.js"></script>
  <script src="../../vendors/list.js/list.min.js"></script>
  <script src="../../vendors/feather-icons/feather.min.js"></script>
  <script src="../../vendors/dayjs/dayjs.min.js"></script>
  <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
  <script src="../../assets/js/phoenix.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      gsap.registerPlugin(ScrollTrigger);

      // Animate heading and add button
      gsap.from(".content h2", {
        opacity: 0,
        y: -30,
        duration: 1,
        ease: "power2.out"
      });

      gsap.from(".content .btn-outline-primary", {
        opacity: 0,
        x: 30,
        duration: 1,
        delay: 0.2,
        ease: "power2.out"
      });

      // Search box animation
      gsap.from(".search-box", {
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.4,
        ease: "power2.out"
      });

      // Animate each row in the table with a stagger
      gsap.from(".table tbody tr", {
        opacity: 0,
        y: 20,
        duration: 0.6,
        stagger: 0.1,
        delay: 0.6,
        ease: "power2.out",
        scrollTrigger: {
          trigger: ".table",
          start: "top 80%",
          toggleActions: "play none none none"
        }
      });

      // Animate dropdown buttons on hover (optional, adds a nice hover effect)
      const dropdowns = document.querySelectorAll(".btn-reveal");

      dropdowns.forEach((btn) => {
        btn.addEventListener("mouseenter", () => {
          gsap.to(btn, {
            scale: 1.1,
            duration: 0.2,
            ease: "power1.out"
          });
        });

        btn.addEventListener("mouseleave", () => {
          gsap.to(btn, {
            scale: 1,
            duration: 0.2,
            ease: "power1.out"
          });
        });
      });
    });
  </script>


</body>

</html>