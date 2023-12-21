  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="assets/images/faces/<?= UserData($id_user, 'profile_pic') ?>" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2"><?= UserData($id_user, 'name') ?></span>
            <span class="text-secondary text-small"><?= UserData($id_user, 'user_dregination') ?></span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">From</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <?php if (UserData($id_user, 'name') !='null') { ?>
              <li class="nav-item"> <a class="nav-link" href="new_user.php">প্রোফাইল</a></li>
              <li class="nav-item"> <a class="nav-link" href="zoripyer_11.php">মৌমাছির বক্সের সংখ্যা</a></li>
              <li class="nav-item"> <a class="nav-link" href="kitpotong_f12.php">মৌমাছির খামারে কীটপতঙ্গ</a></li>
              <li class="nav-item"> <a class="nav-link" href="khamer_rug13.php">খামারে পরিলক্ষিত রোগ</a></li>
              <li class="nav-item"> <a class="nav-link" href="product_info17.php">পন্য সম্পর্কিত তথ্য</a></li>
              <li class="nav-item"> <a class="nav-link" href="fuler_utts18.php">ফুল উৎস</a></li>
              <li class="nav-item"> <a class="nav-link" href="bebostha_neya19.php">কীটপতঙ্গের জন্য নেওয়া ব্যবস্থা</a></li>
              <li class="nav-item"> <a class="nav-link" href="ruger_bebostha20.php">রোগের জন্য নেওয়া ব্যবস্থা</a></li>
              <li class="nav-item"> <a class="nav-link" href="dearth_period21.php">অভাবের সময় ব্যবস্থাপনা</a></li>
              <li class="nav-item"> <a class="nav-link" href="training_23.php">প্রশিক্ষণ</a></li>
              <li class="nav-item"> <a class="nav-link" href="rani_24.php">রানীর পরিস্থতি</a></li>
              <li class="nav-item"> <a class="nav-link" href="raza_25.php">ড্রোন পরিস্থতি</a></li>
              <li class="nav-item"> <a class="nav-link" href="lalun_palon_somosa_26.php">মৌমাছি পালন সংক্রান্ত সমস্যা</a></li>
              <li class="nav-item"> <a class="nav-link" href="pruduct_sell_27.php">পন্য বিপণন</a></li>
              <li class="nav-item"> <a class="nav-link" href="masipaloner_dukal_36.php">আনুষাঙ্গিক সংগ্রহের দোকান</a></li>
            <?php } else { ?>
              <li class="nav-item"> <a class="nav-link" href="new_user.php">প্রোফাইল</a></li>
            <?php } ?>
          </ul>
        </div>
      </li>

      <?php if (UserData($id_user, 'name') != 'null') { ?>
        <li class="nav-item">
          <a class="nav-link" href="print.php?id=<?= UserData($id_user, 'user_id') ?>" target="null">
            <span class="menu-title">Print</span>
            <i class="mdi mdi-printer menu-icon"></i>
          </a>
        </li>
      <?php } ?>

    </ul>
  </nav>