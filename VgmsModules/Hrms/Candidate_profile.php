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
  <!-- Flatpickr CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
  <!-- Flatpickr JS -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
      <div class="card shadow-none border my-4" data-component-card="data-component-card">
        <div class="card-header p-4 border-bottom bg-body">
          <div class="row g-3 justify-content-between align-items-center">
            <div class="col-12 col-md">
              <h4 class="text-body mb-0" data-anchor="data-anchor">Candidate Details</h4>
            </div>

          </div>
        </div>
        <div class="card-body p-0">
          <div class="collapse code-collapse" id="form-grid-layout-code">
            <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;form class=&quot;row g-3&quot;&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;label class=&quot;form-label&quot; for=&quot;inputEmail4&quot;&gt;Email&lt;/label&gt;
    &lt;input class=&quot;form-control&quot; id=&quot;inputEmail4&quot; type=&quot;email&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;label class=&quot;form-label&quot; for=&quot;inputPassword4&quot;&gt;Password&lt;/label&gt;
    &lt;input class=&quot;form-control&quot; id=&quot;inputPassword4&quot; type=&quot;password&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;label class=&quot;form-label&quot; for=&quot;inputAddress&quot;&gt;Address&lt;/label&gt;
    &lt;input class=&quot;form-control&quot; id=&quot;inputAddress&quot; type=&quot;text&quot; placeholder=&quot;1234 Main St&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;label class=&quot;form-label&quot; for=&quot;inputAddress2&quot;&gt;Address 2&lt;/label&gt;
    &lt;input class=&quot;form-control&quot; id=&quot;inputAddress2&quot; type=&quot;text&quot; placeholder=&quot;Apartment, studio, or floor&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;label class=&quot;form-label&quot; for=&quot;inputCity&quot;&gt;City&lt;/label&gt;
    &lt;input class=&quot;form-control&quot; id=&quot;inputCity&quot; type=&quot;text&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;
    &lt;label class=&quot;form-label&quot; for=&quot;inputState&quot;&gt;State&lt;/label&gt;
    &lt;select class=&quot;form-select&quot; id=&quot;inputState&quot;&gt;
      &lt;option selected=&quot;selected&quot;&gt;Choose...&lt;/option&gt;
      &lt;option&gt;...&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-2&quot;&gt;
    &lt;label class=&quot;form-label&quot; for=&quot;inputZip&quot;&gt;Zip&lt;/label&gt;
    &lt;input class=&quot;form-control&quot; id=&quot;inputZip&quot; type=&quot;text&quot; /&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input class=&quot;form-check-input&quot; id=&quot;gridCheck&quot; type=&quot;checkbox&quot; /&gt;
      &lt;label class=&quot;form-check-label&quot; for=&quot;gridCheck&quot;&gt;Check me out&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Sign in&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
          </div>
          <div class="p-4 code-to-copy">
            <form class="row g-3">

              <div class="row">
                <div class="col-md-6">
                  <label class="form-label" for="inputCity">Certificate ID</label>
                  <input class="form-control" id="inputCity" type="text" />
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="inputCity">Full Name</label>
                  <input class="form-control" id="inputCity" type="text" />
                </div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="inputEmail4">Email</label>
                <input class="form-control" id="inputEmail4" type="email" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="inputCity">Phoen Number</label>
                <input class="form-control" id="inputCity" type="text" />
              </div>
              <div class="col-md-3">
                <label class="form-label" for="validationCustom04">Position Applied For</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Maharashtra</option>
                  <option>Gujarat</option>
                  <option>Karnataka</option>
                  <option>Tamil Nadu</option>
                  <option>Uttar Pradesh</option>
                  <!-- Add more states as needed -->
                </select>
                <div class="invalid-feedback">Please select a valid state.</div>
              </div>

              <div class="col-md-4">
                <label class="form-label" for="datetimepicker">Application Date</label>
                <input class="form-control datetimepicker" id="datetimepicker" type="text"
                  placeholder="dd/mm/yyyy hour : minute"
                  data-options='{"enableTime":true,"dateFormat":"d/m/y H:i","disableMobile":true}' />
              </div>

               <div class="col-md-3">
                <label class="form-label" for="validationCustom04"> Current Status</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Applied</option>
                  <option>Shortlisted</option>
                  <option>Interview</option>
                  <option>Scheduled</option>
                  <option>Offered</option>
                  <option>Rejected</option>
                  <!-- Add more states as needed -->
                </select>
                <div class="invalid-feedback">Please select a valid state.</div>
              </div>
              <!-- <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="gridCheck" type="checkbox" />
                                    <label class="form-check-label" for="gridCheck">Check me out</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div> -->
            </form>
          </div>
        </div>
      </div>


      <div class="mb-9">
        <div class="card shadow-none border mb-3 mt-6" data-component-card="data-component-card">
          <div class="card-header p-4 border-bottom bg-body">
            <div class="row g-3 justify-content-between align-items-end">
              <div class="col-12 col-md">
                <h4 class="text-body mb-0" data-anchor="dat a-anchor">Resume Upload</h4>


              </div>



            </div>
          </div>
          <div class="card-body p-0">
            <div class="collapse code-collapse" id="single-file-upload-code">
              <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;dropzone dropzone-multiple p-0&quot; id=&quot;dropzone&quot; data-dropzone=&quot;data-dropzone&quot; data-options='{&quot;url&quot;:&quot;valid/url&quot;,&quot;maxFiles&quot;:1,&quot;dictDefaultMessage&quot;:&quot;Choose or Drop a file here&quot;}'&gt;
  &lt;div class=&quot;fallback&quot;&gt;&lt;input type=&quot;file&quot; name=&quot;file&quot; /&gt;&lt;/div&gt;
  &lt;div class=&quot;dz-message&quot; data-dz-message=&quot;data-dz-message&quot;&gt;
    &lt;div class=&quot;dz-message-text&quot;&gt;&lt;img class=&quot;me-2&quot; src=&quot;../../../assets/img/icons/cloud-upload.svg&quot; width=&quot;25&quot; alt=&quot;&quot; /&gt;Drop your file here&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;dz-preview dz-preview-multiple m-0 d-flex flex-column&quot;&gt;
    &lt;div class=&quot;d-flex pb-3 border-bottom border-translucent media px-2&quot;&gt;
      &lt;div class=&quot;border p-2 rounded-2 me-2&quot;&gt;&lt;img class=&quot;rounded-2 dz-image&quot; src=&quot;../../../assets/img/icons/file.png&quot; alt=&quot;...&quot; data-dz-thumbnail=&quot;data-dz-thumbnail&quot; /&gt;&lt;/div&gt;
      &lt;div class=&quot;flex-1 d-flex flex-between-center&quot;&gt;
        &lt;div&gt;
          &lt;h6 data-dz-name=&quot;data-dz-name&quot;&gt;&lt;/h6&gt;
          &lt;div class=&quot;d-flex align-items-center&quot;&gt;
            &lt;p class=&quot;mb-0 fs-9 text-body-quaternary lh-1&quot; data-dz-size=&quot;data-dz-size&quot;&gt;&lt;/p&gt;
            &lt;div class=&quot;dz-progress&quot;&gt;&lt;span class=&quot;dz-upload&quot; data-dz-uploadprogress=&quot;&quot;&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;/div&gt;&lt;span class=&quot;fs-10 text-danger&quot; data-dz-errormessage=&quot;data-dz-errormessage&quot;&gt;&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;dropdown&quot;&gt;&lt;button class=&quot;btn btn-link text-body-quaternary btn-sm dropdown-toggle btn-reveal dropdown-caret-none&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;fas fa-ellipsis-h&quot;&gt;&lt;/span&gt;&lt;/button&gt;
          &lt;div class=&quot;dropdown-menu dropdown-menu-end border border-translucent py-2&quot;&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot; data-dz-remove=&quot;data-dz-remove&quot;&gt;Remove File&lt;/a&gt;&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
            <div class="p-4 code-to-copy">
              <div class="dropzone dropzone-multiple p-0" id="dropzone" data-dropzone="data-dropzone"
                data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
                <div class="fallback"><input type="file" name="file" /></div>
                <div class="dz-message" data-dz-message="data-dz-message">
                  <div class="dz-message-text"><img class="me-2" src="../../../assets/img/icons/cloud-upload.svg"
                      width="25" alt="" />Drop your file here</div>
                </div>
                <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                  <div class="d-flex pb-3 border-bottom border-translucent media px-2">
                    <div class="border p-2 rounded-2 me-2"><img class="rounded-2 dz-image"
                        src="../../../assets/img/icons/file.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" />
                    </div>
                    <div class="flex-1 d-flex flex-between-center">
                      <div>
                        <h6 data-dz-name="data-dz-name"></h6>
                        <div class="d-flex align-items-center">
                          <p class="mb-0 fs-9 te  xt-body-quaternary lh-1" data-dz-size="data-dz-size"></p>
                          <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                        </div><span class="fs-10 text-danger" data-dz-errormessage="data-dz-errormessage"></span>
                      </div>
                      <div class="dropdown"><button
                          class="btn btn-link text-body-quaternary btn-sm dropdown-toggle btn-reveal dropdown-caret-none"
                          type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border border-translucent py-2"><a
                            class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove File</a></div>
                      </div>
                      <div class="col-md-3">
                        <label class="form-label" for="validationCustom04">State</label>
                        <select class="form-select" id="validationCustom04" required="">
                          <option selected="" disabled="" value="">Choose...</option>
                          <option>...</option>
                        </select>
                        <div class="invalid-feedback">Please select a valid state.</div>
                      </div>
                    </div>
                  </div>
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
  <!-- the belwo is the code for the dropdown for selecting the department  -->
  <form class="row g-3 needs-validation" novalidate>
    <!-- your form inputs including the above dropdown -->
  </form>

  <script>
    // Bootstrap 5 validation script
    (() => {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>



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