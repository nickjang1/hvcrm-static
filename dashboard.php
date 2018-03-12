<?php
  include 'header.php';
?>
<div class="app-body">
<?php
  include 'sidebar.php';
?>
<!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>

      <div class="container-fluid">

        <div class="animated fadeIn">

          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-primary">
                <div class="card-body pb-0">
                  <div class="btn-group float-right">
                    <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <h4 class="mb-0">9.823</h4>
                  <p>Members online</p>
                </div>
                <div class="chart-wrapper px-3" style="height:70px;">
                  <canvas id="card-chart1" class="chart chart-line" height="70"></canvas>
                </div>
              </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-info">
                <div class="card-body pb-0">
                  <button type="button" class="btn btn-transparent p-0 float-right">
                    <i class="icon-location-pin"></i>
                  </button>
                  <h4 class="mb-0">9.823</h4>
                  <p>Members online</p>
                </div>
                <div class="chart-wrapper px-3" style="height:70px;">
                  <canvas id="card-chart2" class="chart chart-line" height="70"></canvas>
                </div>
              </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-warning">
                <div class="card-body pb-0">
                  <div class="btn-group float-right">
                    <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <h4 class="mb-0">9.823</h4>
                  <p>Members online</p>
                </div>
                <div class="chart-wrapper">
                  <div class="chart-wrapper" style="height:70px;">
                    <canvas id="card-chart3" class="chart chart-line" height="70"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-danger">
                <div class="card-body pb-0">
                  <div class="btn-group float-right">
                    <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                  <h4 class="mb-0">9.823</h4>
                  <p>Members online</p>
                </div>
                <div class="chart-wrapper px-3" style="height:70px;">
                  <canvas id="card-chart4" class="chart chart-bar" height="70"></canvas>
                </div>
              </div>
            </div>
            <!--/.col-->

          </div>
          <!--/.row-->

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <i class="icon-chart text-muted mr-1"></i>TRAFFIC &amp; REVENUE
                </div>
                <div class="card-body">
                  <div class="chart-wrapper" style="height:405px;margin-top:20px;">
                    <canvas id="main-chart" height="405"></canvas>
                  </div>
                </div>
                <div class="card-footer">
                  <ul>
                    <li>
                      <div class="text-muted">Visits</div>
                      <strong>29.703 Users (40%)</strong>
                      <div class="progress progress-xs mt-h">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="d-md-down-none">
                      <div class="text-muted">Unique</div>
                      <strong>24.093 Users (20%)</strong>
                      <div class="progress progress-xs mt-h">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li>
                      <div class="text-muted">Pageviews</div>
                      <strong>78.706 Views (60%)</strong>
                      <div class="progress progress-xs mt-h">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="d-md-down-none">
                      <div class="text-muted">New Users</div>
                      <strong>22.123 Users (80%)</strong>
                      <div class="progress progress-xs mt-h">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="d-md-down-none">
                      <div class="text-muted">Bounce Rate</div>
                      <strong>40.15%</strong>
                      <div class="progress progress-xs mt-h">
                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!--/.card-->
            </div>
            <!--/.col-->
          </div>
          <!--/.row-->
          <div class="row">
            <div class="col-md-25 col-sm-6">
              <div class="social-box google-analytics">
                <i class="fa fa-google-analytics fa-line-chart"></i>
                <ul>
                  <li>
                    <strong>48k</strong>
                    <span>friends</span>
                  </li>
                  <li>
                    <strong>570</strong>
                    <span>feeds</span>
                  </li>
                </ul>
              </div>
              <!--/.social-box-->
            </div>
            <!--/.col-->
            <div class="col-md-25 col-sm-6">
              <div class="social-box facebook">
                <i class="fa fa-facebook"></i>
                <ul>
                  <li>
                    <strong>89k</strong>
                    <span>friends</span>
                  </li>
                  <li>
                    <strong>459</strong>
                    <span>feeds</span>
                  </li>
                </ul>
              </div>
              <!--/.social-box-->
            </div>
            <!--/.col-->
            <div class="col-md-25 col-sm-6">
              <div class="social-box twitter">
                <i class="fa fa-twitter"></i>
                <ul>
                  <li>
                    <strong>973k</strong>
                    <span>followers</span>
                  </li>
                  <li>
                    <strong>1.792</strong>
                    <span>tweets</span>
                  </li>
                </ul>
              </div>
              <!--/.social-box-->
            </div>
            <!--/.col-->
            <div class="col-md-25 col-sm-6">
              <div class="social-box instagram">
                <i class="fa fa-instagram"></i>
                <ul>
                  <li>
                    <strong>500+</strong>
                    <span>contacts</span>
                  </li>
                  <li>
                    <strong>292</strong>
                    <span>feeds</span>
                  </li>
                </ul>
              </div>
              <!--/.social-box-->
            </div>
            <!--/.col-->
            <div class="col-md-25 col-sm-6">
              <div class="social-box youtube">
                <i class="fa fa-youtube"></i>
                <ul>
                  <li>
                    <strong>894</strong>
                    <span>followers</span>
                  </li>
                  <li>
                    <strong>92</strong>
                    <span>circles</span>
                  </li>
                </ul>
              </div>
              <!--/.social-box-->
            </div>
            <!--/.col-->
          </div>
          <!--/.row-->

        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>
</div>
<?php
include 'footer.php';
?>