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
            <h2 class="mb-1 lh-sm">Employee Training Record DashBoard</h2>
      <p class="text-muted mb-4">Monitor Employee Progress, Course Completion, and Training Deadlines</p>
      <hr class="hr" /><br>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 g-3 mb-9">
                <div class="col">
                    <div class="card h-100 hover-actions-trigger">
                        <div class="card-body">

                            <div class="d-flex align-items-center mb-2"><span
                                    class="fa-solid fa-user me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 text-truncate lh-1">Employee : <span
                                        class="fw-semibold text-primary ms-1"> Rohit Yadav</span></p>
                            </div>
                            <div class="d-flex align-items-center mb-4"> <span
                                    class="fa-solid fa-graduation-cap me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 lh-1">Course : <span class="ms-1 text-body-emphasis">IT systems &
                                        tools introduction</span></p>
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold fs-9 mb-1">Progress</label>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;"
                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div> -->
                            <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">Started :<span
                                        class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov.
                                        2020</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Deadline : <span
                                        class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 21st May
                                        2028</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-actions-trigger">
                        <div class="card-body">

                            <div class="d-flex align-items-center mb-2"><span
                                    class="fa-solid fa-user me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 text-truncate lh-1">Employee : <span
                                        class="fw-semibold text-primary ms-1"> Rohit Yadav</span></p>
                            </div>
                            <div class="d-flex align-items-center mb-4"> <span
                                    class="fa-solid fa-graduation-cap me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 lh-1">Course : <span class="ms-1 text-body-emphasis">IT systems &
                                        tools introduction</span></p>
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold fs-9 mb-1">Progress</label>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;"
                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div> -->
                            <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">Started :<span
                                        class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov.
                                        2020</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Deadline : <span
                                        class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 21st May
                                        2028</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-actions-trigger">
                        <div class="card-body">

                            <div class="d-flex align-items-center mb-2"><span
                                    class="fa-solid fa-user me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 text-truncate lh-1">Employee : <span
                                        class="fw-semibold text-primary ms-1"> Rohit Yadav</span></p>
                            </div>
                            <div class="d-flex align-items-center mb-4"> <span
                                    class="fa-solid fa-graduation-cap me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                                <p class="fw-bold mb-0 lh-1">Course : <span class="ms-1 text-body-emphasis">IT systems &
                                        tools introduction</span></p>
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold fs-9 mb-1">Progress</label>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;"
                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div> -->
                            <div class="d-block" data-rater='{"starSize":32,"step":0.5}'></div>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">Started :<span
                                        class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov.
                                        2020</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Deadline : <span
                                        class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 21st May
                                        2028</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Footer -->
                <?php include("../../Components/footer.php"); ?>
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


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>