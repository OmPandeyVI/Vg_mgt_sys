
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
  <title>Salary Slip Generator</title>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
    <!-- change this to your navbar code link should be replaced properly -->
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
      <!-- your main contents goes here  with footer . -->
      <div class="container py-5">
        <div class="mb-4 text-start">
          <h1 class="display-6 fw-bold d-flex align-items-center gap-2">
            <!-- <i class="bi bi-receipt" style="color: #0d6efd;"></i> -->
            Salary Slip Generator
          </h1>
          <p class="text-muted ms-1">Easily view and generate employee payslips</p>
          <hr class="hr">
        </div>
      </div>


     <form id="salaryForm" class="p-4 rounded shadow-sm">
  <div class="row mb-3">
    <div class="col-md-4">
      <label for="organizerSingle" class="form-label">
        <i class="bi bi-person me-1"></i> Select Employee
      </label>
      <select class="form-select" id="organizerSingle" name="employee" required>
        <option value="">Select Employee...</option>
        <option value="priya">Priya</option>
        <option value="riya">Riya</option>
        <option value="siya">Siya</option>
        <option value="geeta">Geeta</option>
      </select>
    </div>
    <div class="col-md-4">
      <label class="form-label">
        <i class="bi bi-calendar-month me-1"></i>Select Month
      </label>
      <select class="form-select" name="month" required>
        <option value="" disabled selected>Choose...</option>
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
      </select>
    </div>
    <div class="col-md-4">
      <label class="form-label">
        <i class="bi bi-calendar3 me-1"></i>Select Year
      </label>
      <select class="form-select" id="yearSelect" name="year" required></select>
    </div>
  </div>

  <div class="d-flex justify-content-end mb-4">
    <button type="button" class="btn btn-outline-primary" id="fetchBtn">
      <i class="bi bi-search me-1"></i>Fetch
    </button>
  </div>

  <div id="slipPreview" class="border-top pt-4" style="display: none;">
    <h5 class="mb-3">
      <i class="bi bi-file-earmark-text me-1"></i>Salary Slip Details
    </h5>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">
          <i class="bi bi-cash-stack me-1"></i>Basic Salary
        </label>
        <input type="text" class="form-control" name="basicSalary" placeholder="e.g. 40000" pattern="^\d+(\.\d{1,2})?$" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">
          <i class="bi bi-house-door me-1"></i>HRA
        </label>
        <input type="text" class="form-control" name="hra" placeholder="e.g. 12000" pattern="^\d+(\.\d{1,2})?$" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">
          <i class="bi bi-briefcase me-1"></i>Allowances
        </label>
        <input type="text" class="form-control" name="allowances" placeholder="e.g. 5000" pattern="^\d+(\.\d{1,2})?$" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">
          <i class="bi bi-dash-circle me-1"></i>Deductions
        </label>
        <input type="text" class="form-control" name="deductions" placeholder="e.g. 2000" pattern="^\d+(\.\d{1,2})?$" required>
      </div>
    </div>
    <div class="text-end mt-4">
      <button type="submit" class="btn btn-outline-success">
        <i class="bi bi-send-check me-1"></i>Submit
      </button>
    </div>
  </div>
</form>



      <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
      <script>
        // Populate year dropdown with current year as default
        const yearSelect = document.getElementById("yearSelect");
        const currentYear = new Date().getFullYear();
        for (let i = currentYear; i >= currentYear - 10; i--) {
          const option = document.createElement("option");
          option.value = i;
          option.textContent = i;
          if (i === currentYear) option.selected = true;
          yearSelect.appendChild(option);
        }

        // Animate form on load
        gsap.from("form", {
          duration: 1,
          opacity: 0,
          y: 30,
          ease: "power2.out"
        });

        // Animate fetch button click
        document.getElementById("fetchBtn").addEventListener("click", () => {
          const slip = document.getElementById("slipPreview");
          slip.style.display = "block";
          gsap.fromTo(slip, {
            opacity: 0,
            y: 20
          }, {
            opacity: 1,
            y: 0,
            duration: 0.6,
            ease: "power2.out"
          });
        });

        // Prevent form submission
        document.getElementById("salaryForm").addEventListener("submit", (e) => {
          e.preventDefault();
          alert("Salary slip submitted successfully!");
        });


        document.addEventListener('DOMContentLoaded', function() {
          const form = document.querySelector('form');
          const yearSelect = document.getElementById('yearSelect');
          const employeeSelect = document.getElementById('organizerSingle');
          const monthSelect = form.querySelector('select:nth-of-type(2)'); // 2nd select inside the form
          const currentDate = new Date();
          const currentYear = currentDate.getFullYear();
          const previousYear = currentYear - 1;
          const currentMonthIndex = currentDate.getMonth();

          const monthList = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
          ];

          // Populate Year Dropdown
          [currentYear, previousYear].forEach(year => {
            const option = new Option(year, year);
            yearSelect.appendChild(option);
          });

          // Helper: Mark field valid/invalid
          function setValidationState(element, isValid, message = '') {
            if (isValid) {
              element.classList.remove('is-invalid');
              element.nextElementSibling?.remove?.(); // remove old error if any
            } else {
              element.classList.add('is-invalid');
              if (!element.nextElementSibling || !element.nextElementSibling.classList.contains('invalid-feedback')) {
                const error = document.createElement('div');
                error.className = 'invalid-feedback';
                error.textContent = message;
                element.parentNode.appendChild(error);
              }
            }
          }

          // Disable future months if current year selected
          function updateMonthOptions() {
            const selectedYear = parseInt(yearSelect.value);
            const options = monthSelect.options;
            for (let i = 0; i < options.length; i++) {
              options[i].disabled = (selectedYear === currentYear && i > currentMonthIndex);
            }
          }

          yearSelect.addEventListener('change', updateMonthOptions);

          form.addEventListener('submit', function(e) {
            let isValid = true;

            // Validate Employee Selection
            if (!employeeSelect.value.trim()) {
              setValidationState(employeeSelect, false, 'Please select an employee.');
              isValid = false;
            } else {
              setValidationState(employeeSelect, true);
            }

            // Validate Year Selection
            const selectedYear = parseInt(yearSelect.value);
            if (![currentYear, previousYear].includes(selectedYear)) {
              setValidationState(yearSelect, false, `Please select ${previousYear} or ${currentYear}.`);
              isValid = false;
            } else {
              setValidationState(yearSelect, true);
            }

            // Validate Month Selection
            const selectedMonthText = monthSelect.options[monthSelect.selectedIndex]?.text.trim();
            const selectedMonthIndex = monthList.indexOf(selectedMonthText);

            if (selectedMonthIndex === -1) {
              setValidationState(monthSelect, false, 'Please select a valid month.');
              isValid = false;
            } else if (selectedYear === currentYear && selectedMonthIndex > currentMonthIndex) {
              setValidationState(monthSelect, false, 'Cannot select a future month.');
              isValid = false;
            } else {
              setValidationState(monthSelect, true);
            }

            // If not valid, stop submission
            if (!isValid) {
              e.preventDefault();
              alert('Please correct the errors before proceeding.');
            }
          });

        });
      </script>


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
  <script src="../../vendors/popper/popper.min.js"></script>
  <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
  <script src="../../vendors/anchorjs/anchor.min.js"></script>
  <script src="../../vendors/is/is.min.js"></script>
  <script src="../../vendors/fontawesome/all.min.js"></script>
  <script src="../../vendors/lodash/lodash.min.js"></script>
  <script src="../../vendors/list.js/list.min.js"></script>
  <script src="../../vendors/feather-icons/feather.min.js"></script>
  <script src="../../vendors/dayjs/dayjs.min.js"></script>
  <script src="../../assets/js/phoenix.js"></script>
  <!-- you js code goes here -->
</body>




</html>