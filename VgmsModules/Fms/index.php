<?php
include '../PhpFiles/connection.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
    exit();
}
?>
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
            <div class="flex-grow-1 d-flex flex-column">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-start p-3 border-bottom">
                    <div>
                        <h4 class="mb-0">Offices</h4>
                        <small>Select an office to view rooms</small>
                    </div>
                    <div class="d-flex justify-content-end mb-3 px-3">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addOfficeModal">
                            <i class="bi bi-plus-lg me-1"></i> Add Office
                        </button>
                    </div>
                </div>

                <div class="container mt-4">
                    <div id="officeList" class="row g-3">
                        <?php
                        include '../Phpfiles/connection.php';
                        $sql = "SELECT * FROM tbl_offices";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="col-md-4 location-card">
                        <div class="card text-center h-100">
                          <div class="card-body d-flex flex-column justify-content-center">
                            <i class="bi bi-building display-4 text-primary"></i>
                            <h5 class="card-title mt-2">' . htmlspecialchars($row['office_name']) . '</h5>
                            <a href="rooms.php?office_id=' . $row['id'] . '"><button class="btn btn-outline-primary btn-sm mt-2">Open</button></a>
                          </div>
                        </div>
                      </div>';
                            }
                        } else {
                            echo '<div class="col-12 text-center">No offices available</div>';
                        }
                        ?>
                    </div>
                </div>

                <?php include("../../Components/footer.php"); ?>
            </div>
        </div>

        <!-- Add Office Modal -->
        <div class="modal fade" id="addOfficeModal" tabindex="-1" aria-labelledby="addOfficeLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="addOfficeForm">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addOfficeLabel">Add New Office</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="officeName" class="form-label">Office Name</label>
                                <input type="text" class="form-control" id="officeName" name="office_name" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save Office</button>
                        </div>
                    </form>
                </div>
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
    <!-- JS with GSAP -->
    <!-- Bootstrap JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const locationList = document.getElementById('locationList');
            const addLocationForm = document.getElementById('addLocationForm');
            const locationInput = document.getElementById('locationInput');
            const locationModalEl = document.getElementById('locationModal');
            const locationModal = new bootstrap.Modal(locationModalEl);

            // Animate header
            gsap.from(".border-bottom", {
                opacity: 1,
                y: -20,
                duration: 0.6,
                ease: "power2.out"
            });

            // Animate existing location cards on load
            const cards = locationList.querySelectorAll('.border.rounded');
            gsap.from(cards, {
                opacity: 1,
                y: 30,
                duration: 0.6,
                stagger: 0.15,
                ease: "power2.out"
            });

            // Animate modal content when shown
            locationModalEl.addEventListener('shown.bs.modal', () => {
                gsap.from("#locationModal .modal-content", {
                    opacity: 1,
                    y: -40,
                    duration: 0.4,
                    ease: "power2.out"
                });
            });

            // Handle new location submission
            addLocationForm.addEventListener('submit', function (e) {
                e.preventDefault();
                const name = locationInput.value.trim();
                if (!name) return;

                const newLocation = document.createElement('div');
                newLocation.className = 'border rounded d-flex flex-column justify-content-between align-items-center p-2';
                newLocation.style.width = '200px';
                newLocation.style.height = '200px';
                newLocation.innerHTML = `
        <div><strong>${name}</strong></div>
        <button class="btn btn-outline-secondary btn-sm">Open</button>
      `;

                locationList.appendChild(newLocation);

                gsap.from(newLocation, {
                    scale: 0.8,
                    opacity: 1,
                    duration: 0.5,
                    ease: "back.out(1.7)"
                });

                locationInput.value = '';
                locationModal.hide();
            });

            // Button hover animations
            document.addEventListener('mouseover', function (e) {
                if (e.target.classList.contains('btn')) {
                    gsap.to(e.target, {
                        scale: 1.05,
                        duration: 0.2
                    });
                }
            });

            document.addEventListener('mouseout', function (e) {
                if (e.target.classList.contains('btn')) {
                    gsap.to(e.target, {
                        scale: 1,
                        duration: 0.2
                    });
                }
            });
        });
    </script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            gsap.from(".location-card", {
                opacity: 0,
                y: 20,
                duration: 0.6,
                stagger: 0.1
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addOfficeForm = document.getElementById('addOfficeForm');
            const officeNameInput = document.getElementById('officeName');
            const officeList = document.getElementById('officeList');
            const addOfficeModal = new bootstrap.Modal(document.getElementById('addOfficeModal'));

            addOfficeForm.addEventListener('submit', function (e) {
                e.preventDefault();

                const formData = new FormData(addOfficeForm);

                fetch('../Phpfiles/add_office.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(res => res.json())
                    .then(data => {
                        if (data.status === 'success') {
                            window.location.reload(); // Reload to show the new office
                            alert("Office added successfully!");
                        } else {
                            alert(data.message || "Failed to add office.");
                        }
                    })
                    .catch(err => {
                        alert("Error: " + err);
                    });
            });
        });
    </script>

</body>

</html>