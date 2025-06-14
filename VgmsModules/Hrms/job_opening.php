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
  <title>Job Opening</title>

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
      <?php
        include '../PhpFiles/connection.php'; // DB connection

        // Fetch skills for dropdown
        $skills_query = "SELECT id, skills FROM tbl_skills";
        $skills_result = mysqli_query($conn, $skills_query);

        // Fetch next Job ID (AUTO_INCREMENT)
        $next_job_id = 1;
        $result = mysqli_query($conn, "SHOW TABLE STATUS LIKE 'tbl_jobs'");
        if ($row = mysqli_fetch_assoc($result)) {
            $next_job_id = $row['Auto_increment'];
        }
      ?>

    <div class="content">
      <!-- <--------------------------------------------------------
      From here the Forms section are starting
      ------------------------------------------------------------->
      <!-- Here is the heading of the page  -->
      <h2 class="mb-1 5h-sm">Job Opening</h2>
      <div class="content">
        <div class="mt 1">
          <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0" style="margin-top: -70px;">
              <div class="mb-9">
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body ">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Job Details</h4>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="custom-styles-example-code">
                    </div>
                    <div class="p-4 code-to-copy">
                      <form method="POST" class="row g-3 needs-validation" novalidate=""  action="../PhpFiles/handle_job_opening.php">

                        <div class="col-md-4">
                          <label class="form-label" for="validationCustom01">Job ID</label>
                          <!--input class="form-control" id="validationCustom01" type="text" value="Mark" required="" /-->
                          <input type="text" class="form-control" value="<?php echo $next_job_id; ?>" disabled>


                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-4">
                          <label class="form-label" for="validationCustom02">Job Text</label>
                          <!--input class="form-control" id="validationCustom02" type="text" value="Otto" required="" /-->
                          <input class="form-control" id="validationCustom02" name="job_text" type="text" value="Job-<?php echo $next_job_id; ?>" required />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-3">
                          <label class="form-label" for="departmentSelect">Department</label>
                          <select class="form-select" id="departmentSelect" name="department" required>
  <option selected disabled value="">Choose...</option>
  <option value="Department 1">Department 1</option>
  <option value="Department 2">Department 2</option>
  <option value="Department 3">Department 3</option>
  <option value="Department 4">Department 4</option>
  <option value="Department 5">Department 5</option>
  <option value="Department 6">Department 6</option>
</select>

                          <div class="invalid-feedback">Please select a valid department.</div>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="validationCustom03">City</label>
                          <input class="form-control" id="validationCustom03" type="text" name="city" required />
                          <div class="invalid-feedback">Please provide a valid city.</div>
                        </div>
                        <label class="form-label" for="validationCustomUsername">Job Description</label>
                        <div class="form-floating mt -1" style="margin-top: 6px;">
                          <textarea class="form-control" id="floatingTextarea2" placeholder="Leave a comment here"
                            style="height: 100px" name="job_description"></textarea>
                          <label for="floatingTextarea2">Comments</label>
                        </div>
                        <div class="col-12">
                        </div>
                      <!--/form-->
                    </div>
                  </div>
                </div>
                <div class="card shadow-none border my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom bg-body">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Information</h4>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse code-collapse" id="tooltips-code">
                    </div>
                    <div class="p-4 code-to-copy">
                      <!--form action="../PhpFiles/handle_job_opening.php" method="POST" class="row g-3 needs-validation" novalidate=""-->
                      <div class="row g-3 needs-validation" novalidate="">
                        <div class="col-md-4 position-relative">
                          <label class="form-label" for="validationTooltip01">Experience Required</label>
                          <input class="form-control" id="validationTooltip01" type="text" name="experience_required" placeholder="Experience in years" value=""
                            required="" />
                          <div class="valid-tooltip">Looks good!</div>
                        </div>
                        <div class="col-md-3 position-relative">
                          <label for="skillsRequired" class="form-label">Skills Required</label>
                          <!--select class="form-select" id="skillsRequired" required>
                            <option value="" selected disabled>Choose...</option>
                            <option>HTML</option>
                            <option>CSS</option>
                            <option>JavaScript</option>
                            <option>PHP</option>
                            <option>Python</option>
                            <option>React</option>
                          </select-->
                          <select class="form-select" id="skillsRequired" name="skills_required_id" required>
                            <option value="" selected disabled>Choose...</option>
                            <?php while($skill = mysqli_fetch_assoc($skills_result)): ?>
                            <option value="<?= $skill['id']; ?>"><?= $skill['skills']; ?></option>
                            <?php endwhile; ?>
                          </select>

                          <div class="invalid-tooltip">
                            Please select a valid skill.
                          </div>
                        </div>
                        <!-- Flatpickr CSS & JS -->
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

                        <!-- Input Field -->
                        <div class="col-md-6 ml-3 mt-3">
                          <label class="form-label" for="datepicker2">Posting Date</label>
                          <input class="form-control" id="datepicker2" type="text" placeholder="dd/mm/yyyy" name="posting_date" required>
                          <div class="invalid-feedback">Please select a valid date (today or later).</div>
                        </div>
                        <!-- Script -->
                        <script>
                          flatpickr("#datepicker2", {
                            dateFormat: "d/m/Y",
                            disableMobile: true,
                            minDate: "today",
                            onMonthChange: function (selectedDates, dateStr, instance) {
                              // Recheck after month change to prevent navigation to past months
                              const today = new Date();
                              const selectedMonth = instance.currentMonth;
                              const selectedYear = instance.currentYear;

                              if (selectedYear < today.getFullYear() ||
                                (selectedYear === today.getFullYear() && selectedMonth < today.getMonth())) {
                                instance.changeMonth(today.getMonth());
                                instance.changeYear(today.getFullYear());
                              }
                            },
                            onYearChange: function (selectedDates, dateStr, instance) {
                              // Prevent navigating to previous years
                              const today = new Date();
                              if (instance.currentYear < today.getFullYear()) {
                                instance.changeYear(today.getFullYear());
                              }
                            },
                            onReady: function (selectedDates, dateStr, instance) {
                              // Prevent initial calendar from opening in past
                              const today = new Date();
                              instance.changeMonth(today.getMonth());
                              instance.changeYear(today.getFullYear());
                            }
                          });
                        </script>
                        <!-- Flatpickr CSS & JS -->
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

                        <!-- Input Field -->
                        <div class="col-md-6 ml-3 mt-3">
                          <label class="form-label" for="datepicker2">Closing Date</label>
                          <input class="form-control" id="datepicker2" type="text" placeholder="dd/mm/yyyy" name="closing_date" required>
                          <div class="invalid-feedback">Please select a valid date (today or later).</div>
                        </div>
                        <!-- Script -->
                        <script>
                          flatpickr("#datepicker2", {
                            dateFormat: "d/m/Y",
                            disableMobile: true,
                            minDate: "today",

                            onMonthChange: function (selectedDates, dateStr, instance) {
                              // Recheck after month change to prevent navigation to past months
                              const today = new Date();
                              const selectedMonth = instance.currentMonth;
                              const selectedYear = instance.currentYear;

                              if (selectedYear < today.getFullYear() ||
                                (selectedYear === today.getFullYear() && selectedMonth < today.getMonth())) {
                                instance.changeMonth(today.getMonth());
                                instance.changeYear(today.getFullYear());
                              }
                            },
                            onYearChange: function (selectedDates, dateStr, instance) {
                              // Prevent navigating to previous years
                              const today = new Date();
                              if (instance.currentYear < today.getFullYear()) {
                                instance.changeYear(today.getFullYear());
                              }
                            },
                            onReady: function (selectedDates, dateStr, instance) {
                              // Prevent initial calendar from opening in past
                              const today = new Date();
                              instance.changeMonth(today.getMonth());
                              instance.changeYear(today.getFullYear());
                            }
                          });
                        </script>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                      </div><!--/form-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050">
          <div class="toast align-items-center text-white bg-dark border-0" id="icon-copied-toast" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex" data-bs-theme="dark">
              <div class="toast-body p-3"></div><button class="btn-close me-2 m-auto" type="button"
                data-bs-dismiss="toast" aria-label="Close"></button>
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
  <script>
    document.getElementById('submitTable2').addEventListener('click', function () {
      const table1Ratings = collectRatings('table1');
      const table2Ratings = collectRatings('table2');

      const allRatings = {
        table1: table1Ratings,
        table2: table2Ratings
      };

      console.log('Submitting all ratings:', allRatings);

      // Submit using fetch, ajax, or store in Excel/DB
      // Example:
      // fetch('/submit', {
      //     method: 'POST',
      //     headers: { 'Content-Type': 'application/json' },
      //     body: JSON.stringify(allRatings)
      // }).then(...);
    });
    // Here is teh code for the table 2 which is Information//
    
  </script>
  <!--select class="form-select" id="skillsRequired" required multiple>
  <option>HTML</option>
  <option>CSS</option>
  <option>JavaScript</option>
  <option>Python</option>
</select>
<small class="text-muted">Hold Ctrl (or ⌘ on Mac) to select multiple</small-->
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