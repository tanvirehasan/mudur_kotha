<?php require_once "inc/header.php" ?>

<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white me-2">
      <i class="mdi mdi-home"></i>
    </span> Dashboard
  </h3>
  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
      </li>
    </ul>
  </nav>
</div>
<div class="row">
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-danger card-img-holder text-white">
      <div class="card-body">
        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3">Total Participations <i class="mdi mdi-account-multiple mdi-24px float-right"></i>
        </h4>
        <h2 class="mb-5">0</h2>
        <h6 class="card-text"></h6>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-info card-img-holder text-white">
      <div class="card-body">
        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3">Total Clients <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
        </h4>
        <h2 class="mb-5">0</h2>
        <h6 class="card-text"></h6>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card bg-gradient-success card-img-holder text-white">
      <div class="card-body">
        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
        <h4 class="font-weight-normal mb-3">Total Workshop <i class="mdi mdi-border-color mdi-24px float-right"></i>
        </h4>
        <h2 class="mb-5">0</h2>
        <h6 class="card-text">Increased by 5%</h6>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-7 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="clearfix">
          <h4 class="card-title float-left">Visit And Sales Statistics</h4>
          <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
        </div>
        <canvas id="visit-sale-chart" class="mt-4"></canvas>
      </div>
    </div>
  </div>
  <div class="col-md-5 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Traffic Sources</h4>
        <canvas id="traffic-chart"></canvas>
        <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Recent Training</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th> SL# </th>
                <th> Banner </th>
                <th> Event ID</th>
                <th> Title </th>
                <th> Date </th>
                <th> Client </th>
                <th> Venue </th>
              </tr>
            </thead>
            <tbody>

              

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Recent Updates</h4>
        <div class="d-flex">
          <div class="d-flex align-items-center me-4 text-muted font-weight-light">
            <i class="mdi mdi-account-outline icon-sm me-2"></i>
            <span>jack Menqu</span>
          </div>
          <div class="d-flex align-items-center text-muted font-weight-light">
            <i class="mdi mdi-clock icon-sm me-2"></i>
            <span>October 3rd, 2018</span>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6 pe-1">
            <img src="assets/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
            <img src="assets/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded" alt="image">
          </div>
          <div class="col-6 ps-1">
            <img src="assets/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
            <img src="assets/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded" alt="image">
          </div>
        </div>
        <div class="d-flex mt-5 align-items-top">
          <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
          <div class="mb-0 flex-grow">
            <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
            <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
          </div>
          <div class="ms-auto">
            <i class="mdi mdi-heart-outline text-muted"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Admin Users</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th> Name </th>
                <th> Roll </th>
                <th> Status </th>
                <th> Last Update </th>
              </tr>
            </thead>
            <tbody>

              <?php
              $data = SelectData("fls_users", 'limit 5');
              while ($row = $data->fetch_object()) { ?>
                <tr>
                  <td>
                    <img src="assets/images/faces/<?= UserData($userid, 'profile_pic') ?>" class="mr-2" alt="image"> <?= $row->name ?>
                  </td>
                  <td> <?= $row->user_dregination ?> </td>
                  <td>
                    <label class="badge badge-gradient-success">
                      <?php if ($row->status == 1) {
                        echo "Active";
                      } ?></label>
                  </td>
                  <td> <?php echo date ("F d, Y | h:iA" , strtotime($row->updates)); ?> </td>
                </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require_once "inc/footer.php" ?>