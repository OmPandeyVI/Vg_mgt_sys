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
    <title>PMS | Manage Competitors</title>

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
                    <h3 style="margin: 0;">View/Manage Competitors</h3>
                </div>
                <hr>


                <!-- Container for the Table -->
                <!-- Main Container(search) -->
                <div id="tableExample3"
                    data-list='{"valueNames":["name","contact","email","company_name"],"page":5,"pagination":true}'
                    style="width: 100%; padding-top: 20px;">

                    <!-- Add Button -->
                    <div class="d-flex  mb-3">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addCompetitorModal" name="add_competitor">Add Competitor</button>
                    </div>

                    <!-- Search Box -->
                    <div class="search-box mb-3 mx-auto">
                        <form class="position-relative">
                            <input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search"> 
                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!-- <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path> -->
                            </svg>
                        </form>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort name border-top" data-sort="name">Competitor Name</th>
                                    <th class="sort contact border-top" data-sort="contact">Contact</th>
                                    <th class="sort email border-top" data-sort="email">Email</th>
                                    <th class="sort company border-top" data-sort="company">Company</th>
                                    <th class="border-top">Edit</th>
                                    <th class="border-top">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="competitorTableBody">
                                <?php
                                include '../PhpFiles/connection.php';

                                $query = "SELECT * FROM tbl_manage_competitors";
                                $result = mysqli_query($conn, $query) or die("Query Unsuccessful".mysqli_error($conn));
                                if($result){
                                    while($row = mysqli_fetch_assoc($result)){
                                    echo '<tr>
                                    <td class="name">'.$row['competitor_name'].'</td>
                                    <td class="contact">'.$row['contact'].'</td>
                                    <td class="email">'.$row['email'].'</td>
                                    <td class="company_name">'.$row['company_name'].'</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary edit_competitors"
    data-bs-toggle="modal"
    data-bs-target="#editCompetitorModal"
    data-id=" '.$row['id'].' "
    data-competitor_name=" '.htmlspecialchars($row['competitor_name']).' "
    data-contact=" '. htmlspecialchars($row['contact']).' "
    data-email=" '.htmlspecialchars($row['email']).' "
    data-company_name=" '.htmlspecialchars($row['company_name']).' "
                                        style="border: none;">
                                            🖉
                                        </button>
                                    </td>
                                    <td>
                                         <input type="checkbox" class="form-check-input active-checkbox"
         data-id="' . $row['id'] . '" ' . ($row['is_active'] === 'Yes' ? 'checked' : '') . '>
                                    </td>
                                </tr>
                                ';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                         <!-- checkbox -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        document.querySelectorAll('.active-checkbox').forEach(checkbox => {
                                            checkbox.addEventListener('change', function() {
                                                const builderId = this.getAttribute('data-id');
                                                const isActive = this.checked ? 'Yes' : 'No';

                                                fetch('view-manage-competitors.php', {
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

                            $stmt = $conn->prepare("UPDATE tbl_manage_competitors SET is_active = ? WHERE id = ?");
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

                        <!-- pagination -->
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

                    <!-- Add Modal -->
                    <div class="modal fade" id="addCompetitorModal" tabindex="-1" aria-labelledby="addCompetitorModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="addCompetitorForm" method="post">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Competitor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="action" value="add">
                                        <div class="mb-3">
                                            <label for="competitor_name" class="form-label">Competitor Name</label>
                                            <input type="text" class="form-control" id="competitor_name" placeholder="Enter Competitor Name" name="competitor_name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="competitor_contact" class="form-label">Competitor Contact</label>
                                            <input type="text" class="form-control" id="competitor_contact" placeholder="Enter Competitor Contact" name="competitor_contact" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="competitor_email" class="form-label">Competitor Email</label>
                                            <input type="email" class="form-control" id="competitor_email" placeholder="Enter Competitor Email" name="competitor_email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="company_name" class="form-label">Competitor Company</label>
                                            <input type="text" class="form-control" id="company_name" placeholder="Enter Competitor Company" name="company_name" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit" name="add_competitors">Add</button>
                                        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                                <?php
include '../PhpFiles/connection.php';

if (isset($_POST['add_competitors'])) {
    // Sanitize input
    $competitor_name = mysqli_real_escape_string($conn, $_POST['competitor_name']);
    $contact = mysqli_real_escape_string($conn, $_POST['competitor_contact']);
    $email = mysqli_real_escape_string($conn, $_POST['competitor_email']);
    $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);

    // Generate a unique ID
    $uid = uniqid('competitors_', true);

    // SQL query (assuming your table has a column `is_active`)
    $query = "INSERT INTO `tbl_manage_competitors` 
              (`uid`, `competitor_name`, `contact`, `email`, `company_name`, `is_active`) 
              VALUES 
              ('$uid', '$competitor_name', '$contact', '$email', '$company_name', '1')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Added Successfully"); window.location.href = "view-manage-competitors.php";</script>';
    } else {
        echo '<script>alert("Failed: ' . mysqli_error($conn) . '"); window.location.href = "view-manage-competitors.php";</script>';
    }
}
?>

                            </div>
                        </div>
                    </div>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editCompetitorModal" tabindex="-1" aria-labelledby="editCompetitorModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="editCompetitorForm" method="post">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Competitor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" id="edit_id" name="edit_id">
                                        <div class="mb-3">
                                            <label for="edit_name" class="form-label">Competitor Name</label>
                                            <input type="text" class="form-control" id="edit_name" placeholder="Enter Competitor Name" name="edit_name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_contact" class="form-label">Competitor Contact</label>
                                            <input type="text" class="form-control" id="edit_contact" placeholder="Enter Competitor Contact" name="edit_contact" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_email" class="form-label">Competitor Email</label>
                                            <input type="email" class="form-control" id="edit_email" placeholder="Enter Competitor Email" name="edit_email" required>
                                        </div>
                                        <div class="mb-3">
    <label for="edit_company" class="form-label">Competitor Company</label>
    <input type="text" class="form-control" id="edit_company" name="edit_company" required>
</div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit" name="edit_competitors">Save Changes</button>
                                        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                               <?php
include '../PhpFiles/connection.php';

if (isset($_POST['edit_competitors'])) {
    $id = mysqli_real_escape_string($conn, $_POST['edit_id']);
    $competitor_name = mysqli_real_escape_string($conn, $_POST['edit_name']);
    $email = mysqli_real_escape_string($conn, $_POST['edit_email']);
    $contact = mysqli_real_escape_string($conn, $_POST['edit_contact']);
    $company_name = mysqli_real_escape_string($conn, $_POST['edit_company']); // ✅ MATCHES name="edit_company"

    $query = "UPDATE `tbl_manage_competitors` 
              SET `competitor_name` = '$competitor_name',
                  `company_name` = '$company_name',
                  `email` = '$email',
                  `contact` = '$contact'
              WHERE `id` = '$id'";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Updated Successfully"); window.location.href = "view-manage-competitors.php";</script>';
    } else {
        echo '<script>alert("Update failed: ' . mysqli_error($conn) . '"); window.location.href = "view-manage-competitors.php";</script>';
    }
}
?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <footer>
                <!-- Footer -->
                <?php include("../../Components/footer.php"); ?>
            </footer>
        </div>







    </main>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.edit_competitors').forEach(button => {
        button.addEventListener('click', () => {
            document.getElementById('edit_id').value = button.getAttribute('data-id');
            document.getElementById('edit_name').value = button.getAttribute('data-competitor_name');
            document.getElementById('edit_contact').value = button.getAttribute('data-contact');
            document.getElementById('edit_email').value = button.getAttribute('data-email');
            document.getElementById('edit_company').value = button.getAttribute('data-company_name');
        });
    });
});
</script>

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
        $(document).ready(function() {
            // Listen for the modal to be shown
            $('#editCompetitorModal').on('show.bs.modal', function(event) {
                // Get the triggering element (the link that was clicked)
                var button = $(event.relatedTarget);

                // Retrieve data attributes from the button
                var id = button.data('id');
                var name = button.data('name');
                var contact = button.data('contact');
                var email = button.data('email');
                var company = button.data('company_name');

                // Populate the modal fields with the data
                $('#edit_id').val(id);
                $('#edit_name').val(name);
                $('#edit_contact').val(contact);
                $('#edit_email').val(email);
                $('#edit_company').val(company);
            });
        });
    </script>

    <!-- edit functionally  -->
    <script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.edit_competitors').forEach(button => {
        button.addEventListener('click', () => {
            document.getElementById('edit_id').value = button.getAttribute('data-id');
            document.getElementById('edit_name').value = button.getAttribute('data-competitor_name');
            document.getElementById('edit_contact').value = button.getAttribute('data-contact');
            document.getElementById('edit_email').value = button.getAttribute('data-email');
            document.getElementById('edit_company').value = button.getAttribute('data-company_name');
        });
    });
});
</script>



    </script>


</body>




</html>