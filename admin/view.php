<?php
session_start();
if (empty($_SESSION['user'])) {
    header("LOCATION:../login.php");
}
$title = "view post";
$connect = mysqli_connect("localhost","root","","blog");
$query = "select * from `post`";
$myq = mysqli_query($connect,$query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="design/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="design/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-boxed">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">

            <li class="nav-item d-none d-sm-inline-block">
                <a href="../logout.php" class="nav-link">log out</a>
            </li>

        </ul>

        <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../index.php" class="brand-link">
            <img src="design/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">details</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->


            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->






                    <li class="nav-item">
                        <a href="post.php" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">post</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="view.php" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>view all</p>
                        </a>
                    </li>

<!--                    <li class="nav-item">-->
<!--                        <a href="user.php" class="nav-link">-->
<!--                            <i class="nav-icon far fa-circle text-info"></i>-->
<!--                            <p>users</p>-->
<!--                        </a>-->
<!--                    </li>-->
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?= $title ?></h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Title</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>title</th>
                                            <th>artical</th>
                                            <th>created_at</th>
                                            <th>img</th>
                                            <th>user_id</th>
                                            <th colspan="2">edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($myq as $data) : ?>
                                        <tr>
                                            <td><?= $data['id']; ; ?></td>
                                            <td><?= $data['title']; ?></td>
                                            <td><?= $data['artical']; ?></td>
                                            <td><?= $data['created_at']; ?></td>
                                            <td><img width="50px" height="50px" src="../img/<?= $data['img']; ?>"></td>
                                            <td><?= $data['user_id']; ?></td>
                                            <td><a href="update.php?id=<?=$data['id']; ?>"> update</a></td>
                                            <td><a href="deletepost.php?id=<?=$data['id']; ?>"> delete</a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>title</th>
                                            <th>artical(s)</th>
                                            <th>created_at</th>
                                            <th>img</th>
                                            <th>user_id</th>
                                            <th colspan="2">edit</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                Footer

                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="design/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="design/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="design/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="design/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="design/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="design/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="design/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="design/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="design/plugins/jszip/jszip.min.js"></script>
<script src="design/plugins/pdfmake/pdfmake.min.js"></script>
<script src="design/plugins/pdfmake/vfs_fonts.js"></script>
<script src="design/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="design/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="design/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="design/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="design/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<!-- jQuery -->
<script src="design/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="design/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="design/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="design/dist/js/demo.js"></script>
</body>
</html>

