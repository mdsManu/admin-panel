<header id="header">
  <!-- start header nav  -->
  <div class="navbar-fixed">
    <nav class="mdsorange">
      <div class="nav-wrapper">
        <div class="row">

            <!-- Left Navbar -->
            <div class="col s2  hide-on-med-and-down">
              <ul class="left">
                <li>
                  <div class="logo-wrapper">
                    <a href="index.php">
                    <!-- <img src="" alt=""> -->
                      <span class="logo-text">
                        <h5><strong>MDS.com</strong></h5>
                      </span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Search Bar -->
            <div class="col s7 hide-on-med-and-down">
              <div class="searchbar">
                <i class="material-icons" style="position: absolute; padding-left: 20px">search</i>
                <input type="text" name="searchbar" placeholder="Search the Intranet...">
              </div>
            </div>

            <!-- Right Navbar -->
            <div class="col s3 hide-on-med-and-down">
              <ul class="right">
                <li>
                  <a href="#!" class=" dropdown-trigger" data-target="translation-dropdown">
                    <i class="flag-icon flag-icon-de"></i>
                  </a>

                  <!-- Translation Dropdown -->
                  <?php require 'parts/header/dropdowns/translation.php'; ?>
                </li>

                <li>
                  <a href="#!" class="dropdown-trigger" data-target="notifications-dropdown">
                    <i class="material-icons">
                      notifications
                    </i>
                    <!-- <small class="badge pink accent-2">5</small> -->
                  </a>

                  <!-- Notification Dropdown -->
                  <?php require 'parts/header/dropdowns/notifications.php'; ?>
                </li>

                <li>
                  <a href="#" class="dropdown-trigger" data-target="profile-dropdown">
                    <img src="img/avatars/003-boy.png" alt="" style="width: 28px; padding-top: 18px">
                  </a>

                  <!-- Profile Dropdown -->
                  <?php require 'parts/header/dropdowns/profile.php'; ?>
                </li>
              </ul>
            </div>

        </div>
      </div>
    </nav>
  </div>
  <!-- end header nav  -->
</header>


<!-- Initialiswations -->
<script>
  $('.dropdown-trigger').dropdown({hover: true, coverTrigger: false, alignment: "right"});
  $('input#input_text, textarea#textarea1').characterCounter();
</script>
