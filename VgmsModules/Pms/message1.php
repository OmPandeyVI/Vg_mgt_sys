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
    <title>Support System</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
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
        <div class="chat d-flex phoenix-offcanvas-container pt-1 mt-n1 mb-9">
          <div class="card p-3 p-xl-1 mt-xl-n1 chat-sidebar me-3 phoenix-offcanvas phoenix-offcanvas-start" id="chat-sidebar"><button class="btn d-none d-sm-block d-xl-none mb-2" data-bs-toggle="modal" data-bs-target="#chatSearchBoxModal"><span class="fa-solid fa-magnifying-glass text-body-tertiary text-opacity-85 fs-7"></span></button>
            <div class="d-none d-sm-block d-xl-none mb-5"><button class="btn w-100 mx-auto" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-bars text-body-tertiary text-opacity-85 fs-7"></span></button>
              <ul class="dropdown-menu dropdown-menu-end p-0">
                <li><a class="dropdown-item" href="#!">All</a></li>
                <li><a class="dropdown-item" href="#!">Read</a></li>
                <li><a class="dropdown-item" href="#!">Unread</a></li>
              </ul>
            </div>
            <div class="form-icon-container mb-4 d-sm-none d-xl-block"><input class="form-control form-icon-input" type="text" placeholder="People, Groups and Messages" /><span class="fas fa-user text-body fs-9 form-icon"></span></div>
            <ul class="nav nav-phoenix-pills mb-5 d-sm-none d-xl-flex" id="contactListTab" data-chat-thread-tab="data-chat-thread-tab" role="tablist">
              <li class="nav-item" role="presentation"><a class="nav-link cursor-pointer active" data-bs-toggle="tab" data-chat-thread-list="all" role="tab" aria-selected="true">All</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link cursor-pointer" data-bs-toggle="tab" role="tab" data-chat-thread-list="read" aria-selected="false">Read</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link cursor-pointer" data-bs-toggle="tab" role="tab" data-chat-thread-list="unread" aria-selected="false">Unread</a></li>
            </ul>
            <div class="scrollbar">
              <div class="tab-content" id="contactListTabContent">
                <div data-chat-thread-tab-content="data-chat-thread-tab-content">
                  <ul class="nav chat-thread-tab flex-column list">
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  active" data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-1" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/20.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Sharuka Nijibum</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Just now</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">This is a message from you</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-2" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/29.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Urito Nisemuno</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 11 PM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Say Hi to your new friend now</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-3" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/30.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Xiang Ledepisipang</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 PM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">We can also discuss prese....</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item unread" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2 unread " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-4" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/25.webp" alt="" /><span class="bg-primary rounded-circle top-0 end-0 position-absolute text-white d-flex flex-center fs-10 fw-semibold d-none d-sm-flex d-xl-none lh-1" style="height: 1rem; width: 1rem;">3</span></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Abshini Thipano</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 PM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">WHAT!</p><span class="badge badge-phoenix badge-phoenix-primary px-1 unread-badge">3+</span>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-5" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/15.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Nenko Nimitanip</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 9 PM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Nenko sent an attachment</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item unread" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2 unread " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-6" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/59.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Shanito Bistroglini</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 1 PM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">https://youtu.be/dQw4w9WgXcQ</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-7" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Misthoni Trepalnano</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 11 AM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">You shared an album</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-8" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/1.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Zogidi Lishang</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 AM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Reacted ❤️ to your photo</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-9" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/6.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Nonteporano Lepat</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 AM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Thanks for understanding. I will forever be in debt</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-10" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/60.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Jessica Ball</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 AM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Thanks for understanding. I will forever be in debt</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-11" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/57.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Harley Brown</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 AM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Thanks for understanding. I will forever be in debt</p>
                          </div>
                        </div>
                      </a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="card tab-content flex-1 phoenix-offcanvas-container">
            <div class="tab-pane h-100 fade active show" id="tab-thread-1" role="tabpanel" aria-labelledby="tab-thread-1">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-0"><span class="line-clamp-1">Sharuka Nijibum</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-0">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">I have got a date at a quarter to eight; I’ll see you at the gate, so don’t be late.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">This is a message from you</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">You know New York, you need New York, you know you need a unique New York.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Willie’s really weary.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Eddie edited it.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2 w-min-content">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Yes, in an organization stature</p><a href="../assets/img/chat/1.png" data-gallery="gallery-undefined"><img class="rounded-2 object-fit-cover mt-1" src="../assets/img/chat/1.png" alt="" style="max-width: 200px;" /></a>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">If Peter Piper picked a peck of pickled peppers, where’s the peck of pickled peppers Peter Piper picked?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Peter Piper picked a peck of pickled peppers. A peck of pickled peppers Peter Piper picked.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message..."></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-0"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-0" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-0"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-0" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-0">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/20.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Sharuka Nijibum</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-2" role="tabpanel" aria-labelledby="tab-thread-2">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-1"><span class="line-clamp-1">Urito Nisemuno</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                   <div class="d-flex"><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-1">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">However, the shot Shott shot shot not Shott, but Nott.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/29.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">But if the shot Shott shot shot Shott, then Shott was shot, not Nott.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">If the shot Shott shot shot Nott, Nott was shot.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/29.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">But Shott says he shot Nott. Either the shot Shott shot at Nott was not shot, Or Nott was shot.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Some say Nott was not shot. But Shott says he shot Nott.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content gallery" data-bs-theme="light">
                              <p class="mb-0"></p>
                              <div class="row g-2 mt-0">
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/13.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/13.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/2.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/2.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/3.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/3.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/4.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/4.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/5.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/5.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/6.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/6.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/7.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/7.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/8.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/8.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/9.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/9.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/10.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/10.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/11.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/11.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/12.png" data-gallery="gallery-undefined"> <img class="rounded-2 object-fit-cover img-fluid" src="../assets/img/chat/12.png" alt="" /></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/29.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Ned Nott was shot and Sam Shott was not. So it is better to be Shott than Nott.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message..."></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-1"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-1" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-1"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-1" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-1">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/29.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Urito Nisemuno</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-3" role="tabpanel" aria-labelledby="tab-thread-3">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-2"><span class="line-clamp-1">Xiang Ledepisipang</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                   <div class="d-flex"><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-2">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/30.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">A tree-toad loved a she-toad who lived up in a tree. He was a two-toed tree-toad, but a three-toed toad was she. The two-toed tree-toad tried to win the three-toed she-toad’s heart, for the two-toed tree-toad loved the ground that the three-toed tree-toad trod. But the two-toed tree-toad tried in vain; he couldn’t please her whim. From her tree-toad bower, with her three-toed power, the she-toad vetoed him.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message..."></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-2"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-2" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-2"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-2" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-2">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/30.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Xiang Ledepisipang</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-4" role="tabpanel" aria-labelledby="tab-thread-4">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-3"><span class="line-clamp-1">Abshini Thipano</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                   <div class="d-flex"><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-3">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">An anchor, right?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/25.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">A cold. But what do you throw out when you want to use it but take in when you don’t want to use it?</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Well tell me what I am if I can never be thrown but I can be caught. Ways to lose me are always being sought.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">A coin, or what?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/25.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">A river. But I have a head and a tail that will never meet. Having too many of me is always a treat. What am I?</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/25.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">What runs, but never walks. Murmurs, but never talks. Has a bed, but never sleeps. And has a mouth, but never eats?</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/25.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Hello, I’m Doctor Triple A! How can I help?</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message..."></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-3"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-3" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-3"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-3" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-3">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/25.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Abshini Thipano</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-5" role="tabpanel" aria-labelledby="tab-thread-5">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-4"><span class="line-clamp-1">Nenko Nimitanip</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                   <div class="d-flex"><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-4">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">When a doctor doctors a doctor, does the doctor doing the doctoring doctor as the doctor being doctored wants to be doctored or does the doctor doing the doctoring doctor as he wants to doctor?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message..."></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-4"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-4" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-4"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-4" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-4">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/15.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Nenko Nimitanip</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-6" role="tabpanel" aria-labelledby="tab-thread-6">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-5"><span class="line-clamp-1">Shanito Bistroglini</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                   <div class="d-flex"><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-5">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/59.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Well… check the attached file for answer, man!</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">When a doctor doctors a doctor, does the doctor doing the doctoring doctor as the doctor being doctored wants to be doctored or does the doctor doing the doctoring doctor as he wants to doctor?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message..."></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-5"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-5" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-5"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-5" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-5">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/59.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Shanito Bistroglini</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-7" role="tabpanel" aria-labelledby="tab-thread-7">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-6"><span class="line-clamp-1">Misthoni Trepalnano</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                   <div class="d-flex"><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-6">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">So See’s saw sawed Soar’s seesaw. But it was sad to see Soar so sore just because See’s saw sawed Soar’s seesaw.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Had Soar seen See’s saw before See sawed Soar’s seesaw, See’s saw would not have sawed Soar’s seesaw.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Mr. See owned a saw. And Mr. Soar owned a seesaw. Now, See’s saw sawed Soar’s seesaw before Soar saw See, which made Soar sore.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message..."></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-6"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-6" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-6"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-6" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-6">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Misthoni Trepalnano</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-8" role="tabpanel" aria-labelledby="tab-thread-8">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-7"><span class="line-clamp-1">Zogidi Lishang</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                   <div class="d-flex"><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-7">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/1.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Brisk brave brigadiers brandished broad bright blades, blunderbusses, and bludgeons—balancing them badly.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Ingenious iguanas improvising an intricate impromptu on impossibly-impractical instruments.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Green glass globes glow greenly.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/1.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">I slit the sheet, the sheet I slit, and on the slitted sheet I sit.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Perspicacious Polly Perkins purchased Peter’s product and peddled pickles to produce a pretty profit!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message..."></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-7"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-7" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-7"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-7" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-7">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/1.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Zogidi Lishang</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-9" role="tabpanel" aria-labelledby="tab-thread-9">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-8"><span class="line-clamp-1">Nonteporano Lepat</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                   <div class="d-flex"><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-8">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">The longest book title is made up of 3,777 words. I don’t wanna write it down for you, go find it!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/6.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Well…no?</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Well… I know a uniquely long title. Do you know which has it?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/6.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Victor Hugo’s &quot;Les Miserables&quot; contains an 823 word sentence, and hopefully no one elese will write longer to break the record.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0"> I dunno! Guess ‘tis not easy to read and count the words!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/6.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">which book do you remember to have the longest possible sentence? </p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message..."></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-8"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-8" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-8"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-8" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-8">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/6.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Nonteporano Lepat</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-10" role="tabpanel" aria-labelledby="tab-thread-10">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-9"><span class="line-clamp-1">Jessica Ball</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                   <div class="d-flex"><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-9">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/60.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Cows kill more people than sharks!</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Whaat?!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/60.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Hard to believe, but true. Sharks kill an average of 5 people per year while cows kill an average of 22 people per year.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">But in fact, humans are more deadly to sharks than they are to humans. Humans kill about 100 million sharks per year!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/60.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Also, what?!</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message..."></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-9"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-9" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-9"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-9" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-9">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/60.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Jessica Ball</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-11" role="tabpanel" aria-labelledby="tab-thread-11">
              <div class="d-flex flex-column h-100">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-10"><span class="line-clamp-1">Harley Brown</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                   <div class="d-flex"><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar chat-content-body-10">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">OMG! I should leave my dietitian and ask for some advice from the Sun God then!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/57.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">And the Sun loses a billion kilos per second.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">And know what I heard? Neptune has only completed one orbit around the Sun since its discovery!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/57.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Oh yeah! It contains enough alcohol to supply every person on the planet with 300,000 pints of beer per day for the next billion years!</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Really?! </p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/57.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Clouds at the centre of the Milky Way smell of rum, taste of raspberries and are packed with booze!</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message..."></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-10"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-10" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-10"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-10" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-10">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/57.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Harley Brown</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="object-fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="phoenix-offcanvas-backdrop d-lg-none top-0" data-phoenix-backdrop="data-phoenix-backdrop"></div>
          <div class="modal fade" id="chatSearchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
              <div class="modal-content mt-15">
                <div class="modal-body p-0">
                  <div class="chat-search-box">
                    <div class="form-icon-container"><input class="form-control py-3 form-icon-input rounded-1" type="text" autofocus="autofocus" placeholder="Search People, Groups and Messages" /><span class="fa-solid fa-magnifying-glass fs-9 form-icon"></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-body-tertiary text-opacity-85">v1.19.0</p>
            </div>
          </div>
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
                                        <div class="py-2"><a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="../assets/img/products/60x60/3.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center" href="e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/60x60/3.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                                        <div class="py-2"><a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                                        <div class="py-2"><a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                                                <div class="avatar avatar-l status-online  me-2 text-body">
                                                    <img class="rounded-circle " src="../assets/img/team/40x40/10.webp" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                                                <div class="avatar avatar-l  me-2 text-body">
                                                    <img class="rounded-circle " src="../assets/img/team/40x40/12.webp" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                                        <div class="py-2"><a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="e-commerce/landing/product-details.html">
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
        <div class="support-chat-container">
            <div class="container-fluid support-chat">
                <div class="card bg-body-emphasis">
                    <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
                        <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs-11"></span></h5>
                        <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
                        </div>
                    </div>
                    <div class="card-body chat p-0">
                        <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                            <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a><a class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                                    <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                                </a></div>
                            <div class="text-center mt-auto">
                                <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-light-subtle" src="../assets/img/team/30.webp" alt="" /></div>
                                <h5 class="mt-2 mb-3">Eric</h5>
                                <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
                        <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text" placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos" /><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs-9"></span></button>
                    </div>
                </div>
            </div><button class="btn btn-support-chat p-0 border border-translucent"><span class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
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
                    <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/default-light.png" alt="" /></span><span class="label-text">Light</span></label></div>
                    <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text"> Dark</span></label></div>
                    <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/auto.png" alt="" /></span><span class="label-text"> Auto</span></label></div>
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
                    <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">Vertical</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text"> Horizontal</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/nav-combo-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/nav-combo-dark.png" alt="" /></span><span class="label-text"> Combo</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/dual-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/dual-dark.png" alt="" /></span><span class="label-text"> Dual nav</span></label></div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-slim.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text"> Slim</span></label></div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-style-darker.png" alt="" /></span><span class="label-text">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/navbar-top-style-light.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-style-lighter.png" alt="" /></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
                </div>
            </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
        </div>
    </div>



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
    <script src="../../vendors/glightbox/glightbox.min.js"></script>
    <script src="../../../../unpkg.com/picmo%405.7.6/dist/umd/index.js"></script>
    <script src="../../../../unpkg.com/%40picmo/popup-picker%405.7.6/dist/umd/index.js"></script>
    <script src="../../vendors/lottie/lottie.min.js"></script>
    <script src="../assets/js/phoenix.js"></script>





    </script>



</body>




</html>