<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">



<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Profile Page</title>

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
  <link href="../../vendors/dropzone/dropzone.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="../../assets/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
  <link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
  <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
  <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
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
    <?php include '../../Components/navbar.php'; ?>
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
      <!-- <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
          <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
          <li class="breadcrumb-item active">Default</li>
        </ol>
      </nav> -->
      <div class="pb-9">
        <div class="row">
          <div class="col-12">
            <div class="row align-items-center justify-content-between g-3 mb-3">
              <div class="col-12 col-md-auto">
                <h2 class="mb-0">Profile page</h2>
              </div>
              <div class="col-12 col-md-auto">
                <div class="d-flex">
                  <div class="flex-1 d-md-none"><button class="btn px-3 btn-phoenix-secondary text-body-tertiary me-2" data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"><span class="fa-solid fa-bars"></span></button></div><button class="btn btn-primary me-2"><span class="fa-solid fa-envelope me-2"></span><span>Send an email</span></button><button class="btn btn-phoenix-secondary px-3 px-sm-5 me-2"><span class="fa-solid fa-thumbtack me-sm-2"></span><span class="d-none d-sm-inline">Shortlist</span></button><button class="btn px-3 btn-phoenix-secondary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                  <ul class="dropdown-menu dropdown-menu-end p-0" style="z-index: 9999;">
                    <li><a class="dropdown-item" href="#!">View profile</a></li>
                    <li><a class="dropdown-item" href="#!">Report</a></li>
                    <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    <li><a class="dropdown-item text-danger" href="#!">Delete Lead</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-0 g-md-4 g-xl-6">
          <div class="col-md-5 col-lg-5 col-xl-4">
            <div class="sticky-leads-sidebar">
              <div class="lead-details-offcanvas bg-body scrollbar phoenix-offcanvas phoenix-offcanvas-fixed" id="productFilterColumn">
                <div class="d-flex justify-content-between align-items-center mb-2 d-md-none">
                  <h3 class="mb-0">Profile Page </h3><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-7"></span></button>
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row align-items-center g-3 text-center text-xxl-start">
                      <div class="col-12 col-xxl-auto">
                        <div class="avatar avatar-5xl"><img class="rounded-circle" src="../../assets/img/team/33.webp" alt="" /></div>
                      </div>
                      <div class="col-12 col-sm-auto flex-1">
                        <h3 class="fw-bolder mb-2">Ansolo Lazinatov</h3>
                        <p class="mb-0">Chief tech officer,</p><a class="fw-bold" href="#!">Blue Beetles</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                      <h3>About lead</h3><button class="btn btn-link px-3" type="button">Edit</button>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-envelope-alt"> </span>
                        <h5 class="text-body-highlight mb-0">Email</h5>
                      </div><a href="mailto:shatinon@jeemail.com:">ansolo5@jeemail.com</a>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-phone"> </span>
                        <h5 class="text-body-highlight mb-0">Phone</h5>
                      </div><a href="tel:+1234567890">+1234567890 </a>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-globe"></span>
                        <h5 class="text-body-highlight mb-0">Website</h5>
                      </div><a href="#!">www.bb.ru.com </a>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-building"></span>
                        <h5 class="text-body-highlight mb-0">Industry</h5>
                      </div>
                      <p class="mb-0 text-body-secondary">Large Enterprise</p>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-postcard"></span>
                        <h5 class="text-body-highlight mb-0">Number of employees</h5>
                      </div>
                      <p class="mb-0 text-body-secondary">126</p>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-dollar-alt"></span>
                        <h5 class="text-body-highlight mb-0">Annual Revenue</h5>
                      </div>
                      <p class="mb-0 text-body-secondary">$12000 </p>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-clock"></span>
                        <h5 class="text-body-highlight mb-0">Last contacted</h5>
                      </div>
                      <p class="mb-0 text-body-secondary">12 November 2021, 10:54 AM</p>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-file-check-alt"></span>
                        <h5 class="text-body-highlight mb-0">Lead source</h5>
                      </div>
                      <p class="mb-0 text-body-secondary">Advertisement</p>
                    </div>
                    <div>
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-check-circle"></span>
                        <h5 class="text-body-highlight mb-0">Lead status</h5>
                      </div><span class="badge badge-phoenix badge-phoenix-primary">New Lead</span>
                    </div>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                      <h3>Address</h3><button class="btn btn-link" type="button">Edit</button>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-estate"></span>
                        <h5 class="mb-0">Street</h5>
                      </div>
                      <p class="mb-0 text-body-secondary">38/2 Penelope street</p>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-map-pin-alt"></span>
                        <h5 class="mb-0 text-body-highlight">Zip code</h5>
                      </div>
                      <p class="mb-0 text-body-secondary">1425</p>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-map"></span>
                        <h5 class="mb-0 text-body-highlight">City</h5>
                      </div>
                      <p class="mb-0 text-body-secondary">Qualimando</p>
                    </div>
                    <div>
                      <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-windsock"></span>
                        <h5 class="mb-0 text-body-highlight">Country</h5>
                      </div>
                      <p class="mb-0 text-body-secondary">United Empire of Brekania</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="phoenix-offcanvas-backdrop d-lg-none top-0" data-phoenix-backdrop="data-phoenix-backdrop"></div>
            </div>
          </div>
          <div class="col-md-7 col-lg-7 col-xl-8">
            <div class="lead-details-container">
              <nav class="navbar pb-4 px-0 sticky-top bg-body nav-underline-scrollspy" id="navbar-deals-detail">
                <ul class="nav nav-underline fs-9">
                  <li class="nav-item"><a class="nav-link me-2" href="#scrollspyTask">Tasks</a></li>
                  <li class="nav-item"><a class="nav-link me-2" href="#scrollspyDeals">Deals</a></li>
                  <li class="nav-item"><a class="nav-link me-2" href="#scrollspyEmails">Emails</a></li>
                  <li class="nav-item"><a class="nav-link" href="#scrollspyAttachments">Attachments </a></li>
                </ul>
              </nav>
              <div class="scrollspy-example rounded-2" data-bs-spy="scroll" data-bs-offset="0" data-bs-target="#navbar-deals-detail" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
                <div class="mb-8">
                  <h2 class="mb-4" id="scrollspyTask">Tasks</h2>
                  <div class="row align-items-center g-0 justify-content-start mb-3">
                    <div class="col-12 col-sm-auto">
                      <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                        <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search" />
                          <span class="fas fa-search search-box-icon"></span>
                        </form>
                      </div>
                    </div>
                    <div class="col-auto d-flex">
                      <p class="mb-0 ms-sm-3 fs-9 text-body-tertiary fw-bold"><span class="fas fa-filter me-1 fw-extra-bold fs-10"></span>23 tasks</p><button class="btn btn-link p-0 ms-3 fs-9 text-primary fw-bold"><span class="fas fa-sort me-1 fw-extra-bold fs-10"></span>Sorting</button>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" /><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-0">Platforms for data administration</label></div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">19 Nov, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">11:56 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-2">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" /><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-1">Make wiser business choices.</label></div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">05 Nov, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">09:30 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-3">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-2" /><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-2">Market and consumer insights</label></div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">02 Nov, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">05:25 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-4">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-3" /><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-3">Dashboards for business insights</label></div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">29 Oct, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">08:21 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-5">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-4" checked="checked" /><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-4">Analytics and consultancy for data</label></div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">21 Oct, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">03:45 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-6">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-5" checked="checked" /><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-5">Planning your locations Customer data platform</label></div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">14 Oct, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">10:00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-7">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-6" checked="checked" /><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-6">Promotion of technology</label></div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">12 Oct, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">02:00 AM</p>
                        </div>
                      </div>
                    </div>
                  </div><a class="fw-bold fs-9 mt-4" href="#!"><span class="fas fa-plus me-1"></span>Add new task</a>
                </div>
                <div class="mb-8">
                  <div class="d-flex justify-content-between align-items-center mb-4" id="scrollspyDeals">
                    <h2 class="mb-0">Deals</h2><button class="btn btn-primary btn-sm"><span class="fa-solid fa-plus me-2"></span>Add Deals</button>
                  </div>
                  <div class="border-top border-bottom border-translucent" id="leadDetailsTable" data-list='{"valueNames":["dealName","amount","stage","probability","date","type"],"page":5,"pagination":true}'>
                    <div class="table-responsive scrollbar mx-n1 px-1">
                      <table class="table fs-9 mb-0">
                        <thead>
                          <tr>
                            <th class="white-space-nowrap fs-9 align-middle ps-0" style="width:26px;">
                              <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select='{"body":"lead-details-table-body"}' /></div>
                            </th>
                            <th class="sort white-space-nowrap align-middle pe-3 ps-0 text-uppercase" scope="col" data-sort="dealName" style="width:15%; min-width:200px">Deal name</th>
                            <th class="sort align-middle pe-6 text-uppercase text-end" scope="col" data-sort="amount" style="width:15%; min-width:100px">Amount</th>
                            <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="stage" style="width:20%; min-width:200px">Stage</th>
                            <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="probability" style="width:20%; min-width:100px">Probability</th>
                            <th class="sort align-middle ps-0 text-end text-uppercase" scope="col" data-sort="date" style="width:15%; min-width:120px">Closing Date</th>
                            <th class="sort align-middle text-end text-uppercase" scope="col" data-sort="type" style="width:15%; min-width:140px">Type</th>
                            <th class="align-middle pe-0 text-end" scope="col" style="width:15%;"> </th>
                          </tr>
                        </thead>
                        <tbody class="list" id="lead-details-table-body">
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealName":"Mocking Bird","active":true,"amount":"$6,800,000","stage_status":{"label":"won deal","type":"badge-phoenix-success"},"progress":{"min":"67","max":"145","color":"bg-info"},"date":"Dec 29, 2021","type_status":{"label":"warm","type":"badge-phoenix-info"}}' /></div>
                            </td>
                            <td class="dealName align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Mocking Bird</a></td>
                            <td class="amount align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 text-end pe-6">$6,800,000</td>
                            <td class="stage align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">won deal</span></td>
                            <td class="probability align-middle white-space-nowrap">
                              <p class="text-body-secondary fs-10 mb-0">67%</p>
                              <div class="progress bg-primary-subtle" style="height:3px;" role="progressbar">
                                <div class="progress-bar bg-info" style="width: 46.206896551724135%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="date align-middle text-body-tertiary text-center py-2">Dec 29, 2021</td>
                            <td class="type align-middle fw-semibold py-2 text-end"><span class="badge badge-phoenix fs-10 badge-phoenix-info">warm</span></td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealName":"Airbender","active":true,"amount":"$89,090,000","stage_status":{"label":"new Deal","type":"badge-phoenix-primary"},"progress":{"min":"34","max":"145","color":"bg-warning"},"date":"Mar 27, 2021","type_status":{"label":"hot","type":"badge-phoenix-danger"}}' /></div>
                            </td>
                            <td class="dealName align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Airbender</a></td>
                            <td class="amount align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 text-end pe-6">$89,090,000</td>
                            <td class="stage align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-primary">new Deal</span></td>
                            <td class="probability align-middle white-space-nowrap">
                              <p class="text-body-secondary fs-10 mb-0">34%</p>
                              <div class="progress bg-primary-subtle" style="height:3px;" role="progressbar">
                                <div class="progress-bar bg-warning" style="width: 23.448275862068964%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="date align-middle text-body-tertiary text-center py-2">Mar 27, 2021</td>
                            <td class="type align-middle fw-semibold py-2 text-end"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">hot</span></td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealName":"Showmen","active":true,"amount":"$78,650,000","stage_status":{"label":"Canceled","type":"badge-phoenix-secondary"},"progress":{"min":"89","max":"145","color":"bg-success"},"date":"Jun 24, 2021","type_status":{"label":"cold","type":"badge-phoenix-warning"}}' /></div>
                            </td>
                            <td class="dealName align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Showmen</a></td>
                            <td class="amount align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 text-end pe-6">$78,650,000</td>
                            <td class="stage align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary">Canceled</span></td>
                            <td class="probability align-middle white-space-nowrap">
                              <p class="text-body-secondary fs-10 mb-0">89%</p>
                              <div class="progress bg-primary-subtle" style="height:3px;" role="progressbar">
                                <div class="progress-bar bg-success" style="width: 61.37931034482759%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="date align-middle text-body-tertiary text-center py-2">Jun 24, 2021</td>
                            <td class="type align-middle fw-semibold py-2 text-end"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">cold</span></td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealName":"Tarakihi","active":true,"amount":"$1,200,000","stage_status":{"label":"In Progress","type":"badge-phoenix-info"},"progress":{"min":"90","max":"145","color":"bg-success"},"date":"May 19, 2024","type_status":{"label":"hot","type":"badge-phoenix-danger"}}' /></div>
                            </td>
                            <td class="dealName align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Tarakihi</a></td>
                            <td class="amount align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 text-end pe-6">$1,200,000</td>
                            <td class="stage align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info">In Progress</span></td>
                            <td class="probability align-middle white-space-nowrap">
                              <p class="text-body-secondary fs-10 mb-0">90%</p>
                              <div class="progress bg-primary-subtle" style="height:3px;" role="progressbar">
                                <div class="progress-bar bg-success" style="width: 62.06896551724138%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="date align-middle text-body-tertiary text-center py-2">May 19, 2024</td>
                            <td class="type align-middle fw-semibold py-2 text-end"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">hot</span></td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealName":"Ponce d’leon","active":true,"amount":"$46,000","stage_status":{"label":"won Deal","type":"badge-phoenix-success"},"progress":{"min":"97","max":"145","color":"bg-success"},"date":"Aug 19, 2024","type_status":{"label":"cold","type":"badge-phoenix-warning"}}' /></div>
                            </td>
                            <td class="dealName align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Ponce d’leon</a></td>
                            <td class="amount align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 text-end pe-6">$46,000</td>
                            <td class="stage align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">won Deal</span></td>
                            <td class="probability align-middle white-space-nowrap">
                              <p class="text-body-secondary fs-10 mb-0">97%</p>
                              <div class="progress bg-primary-subtle" style="height:3px;" role="progressbar">
                                <div class="progress-bar bg-success" style="width: 66.89655172413794%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="date align-middle text-body-tertiary text-center py-2">Aug 19, 2024</td>
                            <td class="type align-middle fw-semibold py-2 text-end"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">cold</span></td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"dealName":"leon","active":true,"amount":"$66,000","stage_status":{"label":"IN PROGRESS","type":"badge-phoenix-info"},"progress":{"min":"88","max":"145","color":"bg-success"},"date":"Aug 19, 2024","type_status":{"label":"cold","type":"badge-phoenix-warning"}}' /></div>
                            </td>
                            <td class="dealName align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">leon</a></td>
                            <td class="amount align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 text-end pe-6">$66,000</td>
                            <td class="stage align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info">IN PROGRESS</span></td>
                            <td class="probability align-middle white-space-nowrap">
                              <p class="text-body-secondary fs-10 mb-0">88%</p>
                              <div class="progress bg-primary-subtle" style="height:3px;" role="progressbar">
                                <div class="progress-bar bg-success" style="width: 60.689655172413794%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="date align-middle text-body-tertiary text-center py-2">Aug 19, 2024</td>
                            <td class="type align-middle fw-semibold py-2 text-end"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">cold</span></td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                      <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                      </div>
                      <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                        <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-8">
                  <h2 class="mb-2" id="scrollspyEmails">Emails</h2>
                  <div>
                    <div class="scrollbar">
                      <ul class="nav nav-underline fs-9 flex-nowrap mb-1" id="emailTab" role="tablist">
                        <li class="nav-item me-3"><a class="nav-link text-nowrap border-0 active" id="mail-tab" data-bs-toggle="tab" href="#tab-mail" aria-controls="mail-tab" role="tab" aria-selected="true">Mails (68)<span class="text-body-tertiary fw-normal"></span></a></li>
                        <li class="nav-item me-3"><a class="nav-link text-nowrap border-0" id="drafts-tab" data-bs-toggle="tab" href="#tab-drafts" aria-controls="drafts-tab" role="tab" aria-selected="true">Drafts (6)<span class="text-body-tertiary fw-normal"></span></a></li>
                        <li class="nav-item me-3"><a class="nav-link text-nowrap border-0" id="schedule-tab" data-bs-toggle="tab" href="#tab-schedule" aria-controls="schedule-tab" role="tab" aria-selected="true">Scheduled (17)</a></li>
                      </ul>
                    </div>
                    <div class="search-box w-100 mb-3">
                      <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search..." aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>
                      </form>
                    </div>
                    <div class="tab-content" id="profileTabContent">
                      <div class="tab-pane fade show active" id="tab-mail" role="tabpanel" aria-labelledby="mail-tab">
                        <div class="border-top border-bottom border-translucent" id="allEmailsTable" data-list='{"valueNames":["subject","sent","date","source","status"],"page":7,"pagination":true}'>
                          <div class="table-responsive scrollbar mx-n1 px-1">
                            <table class="table fs-9 mb-0">
                              <thead>
                                <tr>
                                  <th class="white-space-nowrap fs-9 align-middle ps-0" style="width:26px;">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select='{"body":"all-email-table-body"}' /></div>
                                  </th>
                                  <th class="sort white-space-nowrap align-middle pe-3 ps-0 text-uppercase" scope="col" data-sort="subject" style="width:31%; min-width:350px">Subject</th>
                                  <th class="sort align-middle pe-3 text-uppercase" scope="col" data-sort="sent" style="width:15%; min-width:130px">Sent by</th>
                                  <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="date" style="min-width:165px">Date</th>
                                  <th class="sort align-middle pe-0 text-uppercase" scope="col" style="width:15%; min-width:100px">Action</th>
                                  <th class="sort align-middle text-end text-uppercase" scope="col" data-sort="status" style="width:15%; min-width:100px">Status</th>
                                </tr>
                              </thead>
                              <tbody class="list" id="all-email-table-body">
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"Quary about purchased soccer socks","email":"jackson@mail.com"},"active":true,"sent":"Jackson Pollock","date":"Dec 29, 2021 10:23 am","source":"Call","type_status":{"label":"sent","type":"badge-phoenix-success"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Quary about purchased soccer socks</a>
                                    <div class="fs-10 d-block">jackson@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Jackson Pollock</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 29, 2021 10:23 am</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">sent</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"How to take the headache out of Order","email":"ansolo45@mail.com"},"active":true,"sent":"Ansolo Lazinatov","date":"Dec 27, 2021 3:27 pm","source":"Call","type_status":{"label":"delivered","type":"badge-phoenix-info"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">How to take the headache out of Order</a>
                                    <div class="fs-10 d-block">ansolo45@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Ansolo Lazinatov</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 27, 2021 3:27 pm</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info">delivered</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"The Arnold Schwarzenegger of Order","email":"ansolo45@mail.com"},"active":true,"sent":"Ansolo Lazinatov","date":"Dec 24, 2021 10:44 am","source":"Call","type_status":{"label":"Bounce","type":"badge-phoenix-warning"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">The Arnold Schwarzenegger of Order</a>
                                    <div class="fs-10 d-block">ansolo45@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Ansolo Lazinatov</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 24, 2021 10:44 am</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">Bounce</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"My order is not being taken","email":"jackson@mail.com"},"active":true,"sent":"Jackson Pollock","date":"Dec 19, 2021 4:55 pm","source":"Call","type_status":{"label":"Spam","type":"badge-phoenix-danger"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">My order is not being taken</a>
                                    <div class="fs-10 d-block">jackson@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Jackson Pollock</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 4:55 pm</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">Spam</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"Shipment is missing","email":"jackson@mail.com"},"active":true,"sent":"Jackson Pollock","date":"Dec 19, 2021 2:43 pm","source":"Call","type_status":{"label":"sent","type":"badge-phoenix-success"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Shipment is missing</a>
                                    <div class="fs-10 d-block">jackson@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Jackson Pollock</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 2:43 pm</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">sent</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"How can I order something urgently?","email":"ansolo45@mail.com"},"active":true,"sent":"Jackson Pollock","date":"Dec 19, 2021 2:43 pm","source":"Call","type_status":{"label":"Delivered","type":"badge-phoenix-info"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">How can I order something urgently?</a>
                                    <div class="fs-10 d-block">ansolo45@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Jackson Pollock</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 2:43 pm</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info">Delivered</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"How the delicacy of the products will be handled?","email":"ansolo45@mail.com"},"active":true,"sent":"Ansolo Lazinatov","date":"Dec 16, 2021 5:18 pm","source":"Call","type_status":{"label":"bounced","type":"badge-phoenix-warning"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">How the delicacy of the products will be handled?</a>
                                    <div class="fs-10 d-block">ansolo45@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Ansolo Lazinatov</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 16, 2021 5:18 pm</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">bounced</span></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                            <div class="col-auto d-flex">
                              <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                              <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="tab-drafts" role="tabpanel" aria-labelledby="drafts-tab">
                        <div class="border-top border-bottom border-translucent" id="draftsEmailsTable" data-list='{"valueNames":["subject","sent","date","source","status"],"page":7,"pagination":true}'>
                          <div class="table-responsive scrollbar mx-n1 px-1">
                            <table class="table fs-9 mb-0">
                              <thead>
                                <tr>
                                  <th class="white-space-nowrap fs-9 align-middle ps-0" style="width:26px;">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select='{"body":"drafts-email-table-body"}' /></div>
                                  </th>
                                  <th class="sort white-space-nowrap align-middle pe-3 ps-0 text-uppercase" scope="col" data-sort="subject" style="width:31%; min-width:350px">Subject</th>
                                  <th class="sort align-middle pe-3 text-uppercase" scope="col" data-sort="sent" style="width:15%; min-width:130px">Sent by</th>
                                  <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="date" style="min-width:165px">Date</th>
                                  <th class="sort align-middle pe-0 text-uppercase" scope="col" style="width:15%; min-width:100px">Action</th>
                                  <th class="sort align-middle text-end text-uppercase" scope="col" data-sort="status" style="width:15%; min-width:100px">Status</th>
                                </tr>
                              </thead>
                              <tbody class="list" id="drafts-email-table-body">
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"Quary about purchased soccer socks","email":"jackson@mail.com"},"active":true,"sent":"Jackson Pollock","date":"Dec 29, 2021 10:23 am","source":"Call","type_status":{"label":"sent","type":"badge-phoenix-success"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Quary about purchased soccer socks</a>
                                    <div class="fs-10 d-block">jackson@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Jackson Pollock</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 29, 2021 10:23 am</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">sent</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"How to take the headache out of Order","email":"ansolo45@mail.com"},"active":true,"sent":"Ansolo Lazinatov","date":"Dec 27, 2021 3:27 pm","source":"Call","type_status":{"label":"delivered","type":"badge-phoenix-info"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">How to take the headache out of Order</a>
                                    <div class="fs-10 d-block">ansolo45@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Ansolo Lazinatov</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 27, 2021 3:27 pm</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info">delivered</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"The Arnold Schwarzenegger of Order","email":"ansolo45@mail.com"},"active":true,"sent":"Ansolo Lazinatov","date":"Dec 24, 2021 10:44 am","source":"Call","type_status":{"label":"Bounce","type":"badge-phoenix-warning"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">The Arnold Schwarzenegger of Order</a>
                                    <div class="fs-10 d-block">ansolo45@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Ansolo Lazinatov</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 24, 2021 10:44 am</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">Bounce</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"My order is not being taken","email":"jackson@mail.com"},"active":true,"sent":"Jackson Pollock","date":"Dec 19, 2021 4:55 pm","source":"Call","type_status":{"label":"Spam","type":"badge-phoenix-danger"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">My order is not being taken</a>
                                    <div class="fs-10 d-block">jackson@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Jackson Pollock</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 4:55 pm</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">Spam</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"Shipment is missing","email":"jackson@mail.com"},"active":true,"sent":"Jackson Pollock","date":"Dec 19, 2021 2:43 pm","source":"Call","type_status":{"label":"sent","type":"badge-phoenix-success"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Shipment is missing</a>
                                    <div class="fs-10 d-block">jackson@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Jackson Pollock</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 2:43 pm</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">sent</span></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                            <div class="col-auto d-flex">
                              <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                              <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="tab-schedule" role="tabpanel" aria-labelledby="schedule-tab">
                        <div class="border-top border-bottom border-translucent" id="scheduledEmailsTable" data-list='{"valueNames":["subject","sent","date","source","status"],"page":7,"pagination":true}'>
                          <div class="table-responsive scrollbar mx-n1 px-1">
                            <table class="table fs-9 mb-0">
                              <thead>
                                <tr>
                                  <th class="white-space-nowrap fs-9 align-middle ps-0" style="width:26px;">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select='{"body":"scheduled-email-table-body"}' /></div>
                                  </th>
                                  <th class="sort white-space-nowrap align-middle pe-3 ps-0 text-uppercase" scope="col" data-sort="subject" style="width:31%; min-width:350px">Subject</th>
                                  <th class="sort align-middle pe-3 text-uppercase" scope="col" data-sort="sent" style="width:15%; min-width:130px">Sent by</th>
                                  <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="date" style="min-width:165px">Date</th>
                                  <th class="sort align-middle pe-0 text-uppercase" scope="col" style="width:15%; min-width:100px">Action</th>
                                  <th class="sort align-middle text-end text-uppercase" scope="col" data-sort="status" style="width:15%; min-width:100px">Status</th>
                                </tr>
                              </thead>
                              <tbody class="list" id="scheduled-email-table-body">
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"Quary about purchased soccer socks","email":"jackson@mail.com"},"active":true,"sent":"Jackson Pollock","date":"Dec 29, 2021 10:23 am","source":"Call","type_status":{"label":"sent","type":"badge-phoenix-success"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Quary about purchased soccer socks</a>
                                    <div class="fs-10 d-block">jackson@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Jackson Pollock</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 29, 2021 10:23 am</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">sent</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"How to take the headache out of Order","email":"ansolo45@mail.com"},"active":true,"sent":"Ansolo Lazinatov","date":"Dec 27, 2021 3:27 pm","source":"Call","type_status":{"label":"delivered","type":"badge-phoenix-info"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">How to take the headache out of Order</a>
                                    <div class="fs-10 d-block">ansolo45@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Ansolo Lazinatov</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 27, 2021 3:27 pm</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info">delivered</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"The Arnold Schwarzenegger of Order","email":"ansolo45@mail.com"},"active":true,"sent":"Ansolo Lazinatov","date":"Dec 24, 2021 10:44 am","source":"Call","type_status":{"label":"Bounce","type":"badge-phoenix-warning"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">The Arnold Schwarzenegger of Order</a>
                                    <div class="fs-10 d-block">ansolo45@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Ansolo Lazinatov</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 24, 2021 10:44 am</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">Bounce</span></td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                  <td class="fs-9 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"mail":{"subject":"My order is not being taken","email":"jackson@mail.com"},"active":true,"sent":"Jackson Pollock","date":"Dec 19, 2021 4:55 pm","source":"Call","type_status":{"label":"Spam","type":"badge-phoenix-danger"}}' /></div>
                                  </td>
                                  <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">My order is not being taken</a>
                                    <div class="fs-10 d-block">jackson@mail.com</div>
                                  </td>
                                  <td class="sent align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">Jackson Pollock</td>
                                  <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 4:55 pm</td>
                                  <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><span class="fa-solid fa-phone text-primary me-2"></span>Call</a></td>
                                  <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">Spam</span></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                            <div class="col-auto d-flex">
                              <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                              <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <h2 class="mb-4" id="scrollspyAttachments">Attachments</h2>
                  <div class="border-top border-dashed pt-3 pb-4">
                    <div class="d-flex flex-between-center">
                      <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                        <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                      </div>
                      <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                      </div>
                    </div>
                    <p class="fs-9 text-body-tertiary mb-3"><span>768kB</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="../../assets/img/generic/40.png" alt="" />
                  </div>
                  <div class="border-top border-dashed py-4">
                    <div class="d-flex flex-between-center">
                      <div>
                        <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs-9 text-body-tertiary"></span>
                          <p class="text-body-highlight mb-0 lh-1">All_images.zip</p>
                        </div>
                        <p class="fs-9 text-body-tertiary mb-0"><span>12.8 mB</span><span class="text-body-quaternary mx-1">|</span><a href="#!">Yves Tanguy </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                      </div>
                      <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="border-top border-dashed py-4">
                    <div class="d-flex flex-between-center">
                      <div>
                        <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span>
                          <p class="text-body-highlight mb-0 lh-1">Project.txt</p>
                        </div>
                        <p class="fs-9 text-body-tertiary mb-0"><span>123 kB</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                      </div>
                      <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute">
        <!-- <div class="row g-0 justify-content-between align-items-center h-100">
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
          </div>
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-body-tertiary text-opacity-85">v1.19.0</p>
          </div>
        </div> -->
         <!-- Footer -->
      <?php include("../../Components/footer.php"); ?>
      </footer>
    </div>
    <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
      <div class="modal-dialog">
        <div class="modal-content mt-15 rounded-pill">
          <div class="modal-body p-0">
            <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
              <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
              <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                <div class="scrollbar-overlay" style="max-height: 30rem;">
                  <div class="list pb-3">
                    <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                    <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="../../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center" href="../e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="img-fluid" src="../../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                    <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                    <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.html">
                        <div class="avatar avatar-l status-online  me-2 text-body">
                          <img class="rounded-circle " src="../../assets/img/team/40x40/10.webp" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.html">
                        <div class="avatar avatar-l  me-2 text-body">
                          <img class="rounded-circle " src="../../assets/img/team/40x40/12.webp" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                    <div class="py-2"><a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="text-center">
                    <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     
    </div>






  </main>

  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

  <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
      <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
        <div>
          <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
          <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
        </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
      </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
    </div>
    <div class="offcanvas-body scrollbar px-card" id="themeController">
      <div class="setting-panel-item mt-0">
        <h5 class="setting-panel-item-title">Color Scheme</h5>
        <div class="row gx-2">
          <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/default-light.png" alt="" /></span><span class="label-text">Light</span></label></div>
          <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text"> Dark</span></label></div>
          <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/auto.png" alt="" /></span><span class="label-text"> Auto</span></label></div>
        </div>
      </div>
      <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="setting-panel-item-title mb-1">RTL </h5>
          <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" /></div>
        </div>
        <p class="mb-0 text-body-tertiary">Change text direction</p>
      </div>
      <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
          <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" /></div>
        </div>
        <p class="mb-0 text-body-tertiary">Toggle support chat</p>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Navigation Type</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">Vertical</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text"> Horizontal</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/nav-combo-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/nav-combo-dark.png" alt="" /></span><span class="label-text"> Combo</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/dual-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/dual-dark.png" alt="" /></span><span class="label-text"> Dual nav</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="../../assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-slim.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text"> Slim</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-darker.png" alt="" /></span><span class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../assets/img/generic/navbar-top-style-light.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../../assets/img/generic/top-style-lighter.png" alt="" /></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
        </div>
      </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
    </div>
  </div>
  <!-- <a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
    <div class="card-body d-flex align-items-center px-2 py-1">
      <div class="position-relative rounded-start" style="height:34px;width:28px">
        <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                </svg></span></span></span></div>
      </div><small class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
    </div>
  </a> -->

  <!-- ===============================================-->
  <!--    JavaScripts-->

  <!-- ===============================================-->
  <!--Dropdown for contacted-to--->

  <script src="../../vendors/popper/popper.min.js"></script>
  <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
  <script src="../../vendors/anchorjs/anchor.min.js"></script>
  <script src="../../vendors/is/is.min.js"></script>
  <script src="../../vendors/fontawesome/all.min.js"></script>
  <script src="../../vendors/lodash/lodash.min.js"></script>
  <script src="../../vendors/list.js/list.min.js"></script>
  <script src="../../vendors/feather-icons/feather.min.js"></script>
  <script src="../../vendors/dayjs/dayjs.min.js"></script>
  <script src="../../vendors/leaflet/leaflet.js"></script>
  <script src="../../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
  <script src="../../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
  <script src="../../assets/js/phoenix.js"></script>
  <script src="../../vendors/echarts/echarts.min.js"></script>
  <script src="../../assets/js/ecommerce-dashboard.js"></script>





  </script>



</body>




</html>