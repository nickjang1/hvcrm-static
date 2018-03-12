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
        <li class="breadcrumb-item active">Reports</li>
      </ol>

      <div class="container-fluid">

        <div class="animated fadeIn">
          <div class="card-columns cols-2">
            <div class="card">
              <div class="card-header">
                Line Chart
                <div class="card-actions">
                  <a href="http://www.chartjs.org">
                    <small class="text-muted">docs</small>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-wrapper">
                  <canvas id="canvas-1"></canvas>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                Bar Chart
                <div class="card-actions">
                  <a href="http://www.chartjs.org">
                    <small class="text-muted">docs</small>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-wrapper">
                  <canvas id="canvas-2"></canvas>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                Doughnut Chart
                <div class="card-actions">
                  <a href="http://www.chartjs.org">
                    <small class="text-muted">docs</small>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-wrapper">
                  <canvas id="canvas-3"></canvas>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                Radar Chart
                <div class="card-actions">
                  <a href="http://www.chartjs.org">
                    <small class="text-muted">docs</small>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-wrapper">
                  <canvas id="canvas-4"></canvas>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                Pie Chart
                <div class="card-actions">
                  <a href="http://www.chartjs.org">
                    <small class="text-muted">docs</small>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-wrapper">
                  <canvas id="canvas-5"></canvas>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                Polar Area Chart
                <div class="card-actions">
                  <a href="http://www.chartjs.org">
                    <small class="text-muted">docs</small>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-wrapper">
                  <canvas id="canvas-6"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>
    <?php
      include 'aside.php';
    ?>
</div>
<?php
require_once 'footer.php';
?>