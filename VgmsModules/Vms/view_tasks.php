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
  <title>Starter code</title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
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
  <link rel="stylesheet" href="../../unicons.iconscout.com/release/v4.0.8/css/line.css">
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
  <link href="../../vendors/leaflet/leaflet.css" rel="stylesheet">
  <link href="../../vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
  <link href="../../vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
  <style>

  </style>
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
    <!-- MAIN CONTENT  -->
    <div class="content">
      <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 mt 0 border-y">
        <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
          <div class="row align-items-end justify-content-between pb-5 g-3">
            <div class="col-auto">
              <h3>My Tasks</h3>
            </div>
            <div class="col-12 col-md-auto">
              <div class="row g-2 gy-3">
                <div class="col-auto flex-1">
                  <div class="search-box">
                    <form class="position-relative"><input class="form-control search-input search form-control-sm"
                        type="search" placeholder="Search" aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div>
                </div>
                <div class="col-auto"><button
                    class="btn btn-sm btn-phoenix-secondary bg-body-emphasis bg-body-hover me-2" type="button">All
                    products</button><button
                    class="btn btn-sm btn-phoenix-secondary bg-body-emphasis bg-body-hover action-btn" type="button"
                    data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                    data-bs-reference="parent"><span class="fas fa-ellipsis-h"
                      data-fa-transform="shrink-2"></span></button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive mx-n1 px-1 scrollbar">
            <table class="table fs-9 mb-0 border-top border-translucent">
              <thead>
                <tr>
                  <th class="white-space-nowrap fs-9 ps-0 align-middle">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" id="checkbox-bulk-reviews-select"
                        type="checkbox" data-bulk-select='{"body":"table-latest-review-body"}' /></div>
                  </th>

                  <th class="sort align-middle" scope="col" data-sort="Task title" style="min-width:200px;">TASK TITLE
                  </th>
                  <th class="sort align-middle" scope="col" data-sort="Project Name" style="min-width:110px;">PROJECT
                    NAME
                  </th>

                  <th class="sort text-end align-middle" scope="col" data-sort="time ">STATUS</th>
                  <th class="sort text-start ps-10 align-middle" scope="col" data-sort="status">DEADLINE PRIORITY</th>

                  <th class="sort text-end pe-0 align-middle" scope="col"></th>
                </tr>
              </thead>
              <tbody class="list" id="table-latest-review-body">
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8">
                      <input class="form-check-input" type="checkbox" data-bulk-select-row='{
          "product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands)",
          "productImage":"/products/60x60/1.png",
          "customer":{"name":"Richard Dawkins","avatar":""},
          "rating":5,
          "review":"This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.",
          "status":{"title":"Approved","badge":"success","icon":"check"},
          "time":"Just now"
        }' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap">
                    <a class="fw-semibold" href="apps/e-commerce/landing/product-details.html">
                      Fitbit Sense Advanced Smartwatch with Tools fo...
                    </a>
                  </td>

                  <td class="align-middle customer white-space-nowrap">
                    <a class="d-flex align-items-center text-body" href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l">
                        <div class="avatar-name rounded-circle"><span>R</span></div>
                      </div>
                      <h6 class="mb-0 ms-3 text-body">Richard Dawkins</h6>
                    </a>
                  </td>

                  <!--Status with Dropdown -->
                  <td class="align-middle text-start ps-10 status">
                    <select class="form-select form-select-sm badge-status-select"
                      style="width: auto; font-size: 12px;">
                      <option value="approved" selected>To do </option>
                      <option value="rejected">In Progress</option>
                      <option value="pending">Completed</option>
                    </select>
                  </td>

                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions">
                        <button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button>
                        <button class="btn btn-sm btn-phoenix-secondary fs-10"><span
                            class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static">
                      <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent">
                        <span class="fas fa-ellipsis-h fs-10"></span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end py-2">
                        <a class="dropdown-item" href="#!">View</a>
                        <a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"iPhone 13 pro max-Pacific Blue-128GB storage","productImage":"/products/60x60/2.png","customer":{"name":"Ashley Garrett","avatar":"/team/40x40/59.webp"},"rating":3,"review":"The order was delivered ahead of schedule. To give us additional time, you should leave the packaging sealed with plastic.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Just now"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">iPhone 13 pro max-Pacific Blue-128GB
                      storage</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/59.webp"
                          alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Ashley Garrett</h6>
                    </a></td>

                  <td class="align-middle text-start ps-10 status">
                    <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                        class="badge-label">Approved</span><span class="ms-1" data-feather="check"
                        style="height:12.8px;width:12.8px;"></span></span>
                  </td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Just now</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"Apple MacBook Pro 13 inch-M1-8/256GB-space","productImage":"/products/60x60/3.png","customer":{"name":"Woodrow Burton","avatar":"/team/40x40/58.webp"},"rating":4.5,"review":"It&#39;s a Mac, after all. Once you&#39;ve gone Mac, there&#39;s no going back. My first Mac lasted over nine years, and this is my second.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Just now"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a>
                  </td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/58.webp"
                          alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Woodrow Burton</h6>
                    </a></td>

                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                        class="badge-label">Pending</span><span class="ms-1" data-feather="clock"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Just now</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"Apple iMac 24\" 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021","productImage":"/products/60x60/4.png","customer":{"name":"Eric McGee","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":3,"review":"Personally, I like the minimalist style, but I wouldn&#39;t choose it if I were searching for a computer that I would use frequently. It&#39;s not horrible in terms of speed and power, but the","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 09, 3:23 AM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">Apple iMac 24&quot; 4K Retina Display M1 8
                      Core CPU...</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder"
                          src="assets/img/team/40x40/avatar.webp" alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Eric McGee</h6>
                    </a></td>


                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                        class="badge-label">Pending</span><span class="ms-1" data-feather="clock"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 09, 3:23 AM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset","productImage":"/products/60x60/5.png","customer":{"name":"Kim Carroll","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":4,"review":"It performs exactly as expected. There are three of these in the family.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 09, 2:15 PM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">Razer Kraken v3 x Wired 7.1 Surroung Sound
                      Gam...</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder"
                          src="assets/img/team/40x40/avatar.webp" alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Kim Carroll</h6>
                    </a></td>


                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                        class="badge-label">Pending</span><span class="ms-1" data-feather="clock"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 09, 2:15 PM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"PlayStation 5 DualSense Wireless Controller","productImage":"/products/60x60/6.png","customer":{"name":"Barbara Lucas","avatar":"/team/40x40/57.webp"},"rating":4,"review":"The controller is quite comfy for me. Despite its increased size, the controller still fits well in my hands.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 08, 8:53 AM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">PlayStation 5 DualSense Wireless
                      Controller</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/57.webp"
                          alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Barbara Lucas</h6>
                    </a></td>
                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                        class="badge-label">Approved</span><span class="ms-1" data-feather="check"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 08, 8:53 AM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray","productImage":"/products/60x60/7.png","customer":{"name":"Ansolo Lazinatov","avatar":"/team/40x40/3.webp"},"rating":4.5,"review":"The response time and service I received when contacted the designers were Phenomenal!","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 07, 9:00 PM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB)
                      -...</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/3.webp"
                          alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Ansolo Lazinatov</h6>
                    </a></td>


                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                        class="badge-label">Pending</span><span class="ms-1" data-feather="clock"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 07, 9:00 PM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)","productImage":"/products/60x60/8.png","customer":{"name":"Emma watson","avatar":"/team/40x40/26.webp"},"rating":3,"review":"I have started using this theme in the last week and it has really impressed me very much, the support is second to none.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 07, 11:20 AM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">Amazon Basics Matte Black Wired Keyboard - US
                      ...</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/26.webp"
                          alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Emma watson</h6>
                    </a></td>


                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                        class="badge-label">Pending</span><span class="ms-1" data-feather="clock"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 07, 11:20 AM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"Amazon Basics Mesh, Mid-Back, Swivel Office Desk Chair with Armrests, Black","productImage":"/products/60x60/9.png","customer":{"name":"Rowen Atkinson","avatar":"/team/40x40/29.webp"},"rating":5,"review":"The best experience we could hope for. Customer service team is amazing and the quality of their products is unsurpassed. Great theme too!","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 07, 2:00 PM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">Amazon Basics Mesh, Mid-Back, Swivel Office
                      De...</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/29.webp"
                          alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Rowen Atkinson</h6>
                    </a></td>


                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                        class="badge-label">Approved</span><span class="ms-1" data-feather="check"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 07, 2:00 PM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"Apple Magic Mouse (Wireless, Rechargable) - Silver","productImage":"/products/60x60/10.png","customer":{"name":"Anthony Hopkins","avatar":""},"rating":4,"review":"This template has allowed me to convert my existing web app into a great looking, easy to use UI in less than 2 weeks. Very easy to use and understand and has a wide range of ready to use elements. ","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 06, 8:00 AM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">Apple Magic Mouse (Wireless, Rechargable) -
                      Si...</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l">
                        <div class="avatar-name rounded-circle"><span>A</span></div>
                      </div>
                      <h6 class="mb-0 ms-3 text-body">Anthony Hopkins</h6>
                    </a></td>


                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                        class="badge-label">Approved</span><span class="ms-1" data-feather="check"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 06, 8:00 AM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"Echo Dot (4th Gen) _ Smart speaker with Alexa _ Glacier White","productImage":"/products/60x60/11.png","customer":{"name":"Jennifer Schramm","avatar":"/team/40x40/8.webp"},"rating":4.5,"review":"The theme is really beautiful and the support answer very quickly and is friendly. Buy it, you will not regret it.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 05, 4:00 AM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">Echo Dot (4th Gen) _ Smart speaker with Alexa
                      ...</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/8.webp"
                          alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Jennifer Schramm</h6>
                    </a></td>


                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                        class="badge-label">Pending</span><span class="ms-1" data-feather="clock"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 05, 4:00 AM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"HORI Racing Wheel Apex for PlayStation 4_3, and PC","productImage":"/products/60x60/12.png","customer":{"name":"Raymond Mims","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":4,"review":"As others mentioned, the team behind this theme is super responsive. I sent a message during the weekend, fully expecting a response after the weekend, but I got one within minutes, and I was unblocked.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 04, 6:53 PM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">HORI Racing Wheel Apex for PlayStation 4_3,
                      an...</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder"
                          src="assets/img/team/40x40/avatar.webp" alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Raymond Mims</h6>
                    </a></td>


                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                        class="badge-label">Approved</span><span class="ms-1" data-feather="check"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 04, 6:53 PM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"Nintendo Switch with Neon Blue and Neon Red Joy‑Con - HAC-001(-01)","productImage":"/products/60x60/13.png","customer":{"name":"Michael Jenkins","avatar":"/team/40x40/9.webp"},"rating":5,"review":"I had a bit of a hard time at first but after I contacted the team they were able to help me set up the theme. It&#39;s really good and I highly recommend it to everyone.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 04, 12:00 PM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">Nintendo Switch with Neon Blue and Neon Red
                      Jo...</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/9.webp"
                          alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Michael Jenkins</h6>
                    </a></td>


                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                        class="badge-label">Pending</span><span class="ms-1" data-feather="clock"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 04, 12:00 PM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"Oculus Rift S PC-Powered VR Gaming Headset","productImage":"/products/60x60/14.png","customer":{"name":"Kristine Cadena","avatar":"/team/40x40/avatar.webp","avatarPlaceholder":true},"rating":5,"review":"Excellent. All my doubts were answered by the team quickly. I highly recommend it.","status":{"title":"Pending","badge":"warning","icon":"clock"},"time":"Nov 03, 8:53 AM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">Oculus Rift S PC-Powered VR Gaming Headset</a>
                  </td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder"
                          src="assets/img/team/40x40/avatar.webp" alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Kristine Cadena</h6>
                    </a></td>


                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-warning"><span
                        class="badge-label">Pending</span><span class="ms-1" data-feather="clock"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 03, 8:53 AM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs-9 align-middle ps-0">
                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                        data-bulk-select-row='{"product":"Sony X85J 75 Inch Sony 4K Ultra HD LED Smart Google TV","productImage":"/products/60x60/15.png","customer":{"name":"Suzanne Martinez","avatar":"/team/40x40/24.webp"},"rating":3.5,"review":"This theme is great. Clean and easy to understand. Perfect for those who don&#39;t have time to start everything from scratch. The support is simply phenomenal! Highly recommended!","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Nov 03, 10:43 AM"}' />
                    </div>
                  </td>

                  <td class="align-middle product white-space-nowrap"><a class="fw-semibold"
                      href="apps/e-commerce/landing/product-details.html">Sony X85J 75 Inch Sony 4K Ultra HD LED Smart
                      G...</a></td>
                  <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-body"
                      href="apps/e-commerce/landing/profile.html">
                      <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/40x40/24.webp"
                          alt="" /></div>
                      <h6 class="mb-0 ms-3 text-body">Suzanne Martinez</h6>
                    </a></td>

                  <td class="align-middle text-start ps-10 status"><span
                      class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                        class="badge-label">Approved</span><span class="ms-1" data-feather="check"
                        style="height:12.8px;width:12.8px;"></span></span></td>
                  <td class="align-middle text-end time white-space-nowrap">
                    <div class="hover-hide">
                      <h6 class="text-body-highlight mb-0">Nov 03, 10:43 AM</h6>
                    </div>
                  </td>
                  <td class="align-middle white-space-nowrap text-end pe-0">
                    <div class="position-relative">
                      <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs-10"><span
                            class="fas fa-check"></span></button><button
                          class="btn btn-sm btn-phoenix-secondary fs-10"><span class="fas fa-trash"></span></button>
                      </div>
                    </div>
                    <div class="btn-reveal-trigger position-static"><button
                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                        type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                        aria-expanded="false" data-bs-reference="parent"><span
                          class="fas fa-ellipsis-h fs-10"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                          class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row align-items-center py-1">
            <div class="pagination d-none"></div>
            <div class="col d-flex fs-9">
              <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a
                class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                  data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!"
                data-list-view="less">View Less</a>
            </div>
            <div class="col-auto d-flex">
              <button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span
                  class="fas fa-chevron-left me-2"></span>Previous</button><button class="btn btn-link px-1 ms-1"
                type="button" title="Next" data-list-pagination="next">Next<span
                  class="fas fa-chevron-right ms-2"></span></button>
            </div>
          </div>
        </div>
      </div>



      <!-- Footer -->
      <?php include("../../Components/footer.php"); ?>
    </div>



    </div>


  </main>

  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->



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