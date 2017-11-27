<!DOCTYPE html>
  <html>
    <?php require 'parts/head.php'; ?>

    <body>

      <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>

      <div id="content">
        <!-- START HEADER  -->
        <?php require 'parts/header/header.php'; ?>
        <!-- END HEADER -->
        <!-- =========================================================== -->
        <!-- START LEFT SIDEBAR -->
        <?php require 'parts/right_sidebar/sidebar.php'; ?>
        <!-- END LEFT SIDEBAR -->
        <!-- =========================================================== -->
        <!-- START MAIN CONTENT  -->
        <?php require 'parts/main_content/main.php'; ?>
        <!-- END MAIN CONTENT -->
      </div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/bin/materialize.min.js"></script>
    </body>
  </html>
