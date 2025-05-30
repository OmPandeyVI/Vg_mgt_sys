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
    <title>Manage Reservation</title>

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
            <!-- view leads table  -->
            <div class="row g-0 justify-content-between align-items-center h-100">
                <!-- Container for the Title -->
                <div style="width: 100%; text-align: center; margin: 20px 0;">
                    <h3 style="margin: 0;">View/Manage reservation</h3>
                </div>
                <hr>
                <!-- button to add reservation Name -->
                <div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#verticallyCentered">ADD</button>
                    <div class="modal fade" id="verticallyCentered" tabindex="-1"
                        aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="verticallyCenteredModalLabel">Add reservation Name</h5>
                                    <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="addreservationForm" method="post">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name Of the reservation Name</label>
                                            <input class="form-control" type="text" id="name" name="name"
                                                placeholder="Enter reservation Name" required>
                                        </div>
                                        <input type="hidden" name="action" value="add_reservation">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" name="addReservation" type="submit" form="addreservationForm">ADD</button>
                                    <button class="btn btn-outline-primary" type="button"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add data -->
                    <?php
                    include '../PhpFiles/connection.php';

                    if(isset($_POST['addReservation'])){
                        $reservation_name = $_POST['name'];
                        
                        // generate unique id
                        $uid = uniqid('reservation_',true);
                        $query = "INSERT INTO `tbl_manage_reservation` (`uid`, `reservation_name`, `is_active`) VALUES ('$uid', '$reservation_name', 'Yes')";

                        $result = mysqli_query($conn, $query) or die('Query Unsuccessful'.mysqli_error($conn));
                        if($result){
                            echo '<script> alert("Data added successfully"); window.location.href = "view-manage-reservation.php" </script>';
                        }else{
                            echo '<script> alert("Failed : '.mysqli_error($conn).'"); window.location.href = "view-manage-reservation.php" </script>';
                        }
                    }
                    ?>


                </div>
                <!-- Container for the Table -->
                <div id="tableExample3"
                    data-list='{"valueNames":["id","name"],"page":5,"pagination":true}'
                    style="width: 100%; padding-top: 20px;">

                    <!-- Search -->
                    <div class="search-box mb-3 mx-auto">
                        <form class="position-relative">
                            <input class="form-control search-input search form-control-sm" type="search"
                                placeholder="Search" aria-label="Search">
                        </form>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top border-translucent ps-3" data-sort="id">ID</th>
                                    <th class="sort border-top" data-sort="name">Reservation Name</th>
                                    <th class="border-top">Edit</th>
                                    <th class="border-top">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="reservationTableBody">
                                <!-- Sample Data -->
                                 <?php
                                include '../PhpFiles/connection.php';

                                $query = "SELECT * FROM tbl_manage_reservation";
                                $result = mysqli_query($conn, $query) or die("Query Unsuccessful".mysqli_error($conn));
                                if($result){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '<tr>
                                    <td class="id ps-3">'.$row['id'].'</td>
                                    <td class="name">'.$row['reservation_name'].'</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary edit-btn"
                                            data-bs-toggle="modal" data-bs-target="#editreservation"
                                            data-id="'.$row['id'].'" data-name="'.$row['reservation_name'].'" style="border: none;">🖉</button>
                                    </td>
                                    <td>
                                         <input type="checkbox" class="form-check-input active-checkbox"
         data-id="' . $row['id'] . '" ' . ($row['is_active'] === 'Yes' ? 'checked' : '') . '>
                                </tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- checkbox -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        document.querySelectorAll('.active-checkbox').forEach(checkbox => {
                                            checkbox.addEventListener('change', function() {
                                                const builderId = this.getAttribute('data-id');
                                                const isActive = this.checked ? 'Yes' : 'No';

                                                fetch('view-manage-reservation.php', {
                                                        method: 'POST',
                                                        headers: {
                                                            'Content-Type': 'application/x-www-form-urlencoded'
                                                        },
                                                        body: `id=${builderId}&is_active=${isActive}`
                                                    })
                                                    .then(response => response.text())
                                                    .then(data => {
                                                        console.log('Update response:', data);
                                                    })
                                                    .catch(error => {
                                                        console.error('Error updating status:', error);
                                                    });
                                            });
                                        });
                                    });
                                </script>

                         <!-- checkbox -->
                        <?php
                        include '../PhpFiles/connection.php';

                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['is_active'])) {
                            $id = $_POST['id'];
                            $is_active = ($_POST['is_active'] === 'Yes') ? 'Yes' : 'No';

                            $stmt = $conn->prepare("UPDATE tbl_manage_reservation SET is_active = ? WHERE id = ?");
                            $stmt->bind_param("si", $is_active, $id);

                            if ($stmt->execute()) {
                                echo "success";
                            } else {
                                echo "error: " . $stmt->error;
                            }

                            $stmt->close();
                            $conn->close();
                            exit(); // prevent rest of page from being echoed
                        }
                        ?>


                    <!-- Pagination -->
                    <div class="d-flex justify-content-end mt-3">
                        <div class="d-flex">
                            <button class="page-link" data-list-pagination="prev">
                                <span class="fas fa-chevron-left"></span>
                            </button>
                            <ul class="mb-0 pagination"></ul>
                            <button class="page-link pe-0" data-list-pagination="next">
                                <span class="fas fa-chevron-right"></span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Edit Modal -->
                <div class="modal fade" id="editreservation" tabindex="-1" aria-labelledby="editregionLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Reservation</h5>
                                <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="editreservationform" method="POST">
                                    <div class="mb-3">
                                        <label for="edit_name" class="form-label">Name of Reservation</label>
                                        <input class="form-control" type="text" id="edit_name" name="edit_name" required>
                                    </div>
                                    <input type="hidden" id="edit_id" name="edit_id">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" name="editReservation" type="submit" form="editreservationform">Edit</button>
                                <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
include '../PhpFiles/connection.php';

if (isset($_POST['editReservation'])) {
    $id = mysqli_real_escape_string($conn, $_POST['edit_id']);
    $reservation_name = mysqli_real_escape_string($conn, $_POST['edit_name']);

    $query = "UPDATE `tbl_manage_reservation` 
              SET reservation_name = '$reservation_name' 
              WHERE `id` = '$id'";

    $result = mysqli_query($conn, $query);
    if ($result) {
        echo '<script>alert("Data updated successfully"); window.location.href = "view-manage-reservation.php";</script>';
    } else {
        echo '<script>alert("Failed: ' . mysqli_error($conn) . '"); window.location.href = "view-manage-reservation.php";</script>';
    }
}
?>

            </div>
            <footer>
                <!-- Footer -->
                <?php include("../../Components/footer.php"); ?>
            </footer>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editModal = document.getElementById('editreservation');
            editModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget; // Button that triggered the modal
                const id = button.getAttribute('data-id');
                const type = button.getAttribute('data-type');

                // Populate the form fields
                editModal.querySelector('#edit_id').value = id;
                editModal.querySelector('#edit_name').value = type;
            });
        });
    </script>

    <!-- edit operation -->
    <script>
        // Edit button handler
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', () => {
                document.getElementById('edit_name').value = button.getAttribute('data-name');
                document.getElementById('edit_id').value = button.getAttribute('data-id');
            });
        });

        // Delete button handler
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', () => {
                const row = button.closest('tr');
                row.remove(); // delete row
            });
        });
    </script>

       <!-- checkbox -->
 <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        document.querySelectorAll('.active-checkbox').forEach(checkbox => {
                                            checkbox.addEventListener('change', function() {
                                                const agencyId = this.getAttribute('data-id');
                                                const isActive = this.checked ? 'Yes' : 'No';

                                                fetch('view-manage-reservation.php', {
                                                        method: 'POST',
                                                        headers: {
                                                            'Content-Type': 'application/x-www-form-urlencoded'
                                                        },
                                                        body: `id=${agencyId}&is_active=${isActive}`
                                                    })
                                                    .then(response => response.text())
                                                    .then(data => {
                                                        console.log('Update response:', data);
                                                    })
                                                    .catch(error => {
                                                        console.error('Error updating status:', error);
                                                    });
                                            });
                                        });
                                    });
</script>

    </script>
 



</body>




</html>