<?php
	include 'header.php';
?>

<div class="app-body">
<?php
	include 'sidebar.php';
?>
	<main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Calendar</li>
      </ol>

      <div class="container-fluid">

        <div class="animated fadeIn">
          <div class="card">
            <div class="card-header">
              <i class="icon-calendar"></i> FullCalendar
              <div class="card-actions">
                <a href="http://angular-ui.github.io/ui-calendar/">
                  <small class="text-muted">docs</small>
                </a>
              </div>
            </div>
            <div class="card-body">
              <div id="calendar"></div>
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
include 'footer.php';
?>