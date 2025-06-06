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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
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
            <h2 class="text-center fw-bold mb-4">Role-Based Access Control</h2>
            <hr>

            <div class="row g-3 align-items-end mb-3">

            <div class="row mb-3 align-items-end">
  <div class="col-md-6">
    <label class="form-label" for="customSelect">Select Employee</label>
    <select class="form-select" id="customSelect">
      <option selected disabled>Select Employee</option>
      <option value="admin">Employee 1</option>
      <option value="manager">Employee 2</option>
    </select>
  </div>

  <div class="col-md-6 text-end">
    <button class="btn btn-primary mt-4" type="button">Submit</button>
  </div>
</div>


                <br>

                <br>
                <div id="tableExample3" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
                    <div class="search-box mb-3 mx-auto">
                        <form class="position-relative"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search">
                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                            </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top border-translucent ps-3" data-sort="name">Page</th>
                                    <th class="sort border-top" data-sort="email">Add</th>
                                    <th class="sort border-top" data-sort="email">View</th>
                                    <th class="sort border-top" data-sort="age">Edit</th>

                                </tr>
                            </thead>
                            <tbody class="list">


                                <tr>
                                    <td class="align-middle ps-3 name">Leads</td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Property</td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Document</td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle ps-3 name">Follow Up</td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle email">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block" data-list-info="data-list-info">1 to 10 <span class="text-body-tertiary"> Items of </span>43</span>
                        <div class="d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                                </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                            <ul class="mb-0 pagination">
                                <li class="active"><button class="page" type="button" data-i="1" data-page="10">1</button></li>
                                <li><button class="page" type="button" data-i="2" data-page="10">2</button></li>
                                <li><button class="page" type="button" data-i="3" data-page="10">3</button></li>
                                <li class="disabled"><button class="page" type="button">...</button></li>
                            </ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
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




</html>