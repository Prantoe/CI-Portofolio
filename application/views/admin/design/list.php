<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body class="fix-header">
    
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php $this->load->view('admin/_partials/navbar.php') ?>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <?php $this->load->view('admin/_partials/sidebar.php') ?>
                
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">View Design</h4> </div>
                    
                </div>
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <!-- card -->
                    <div class="card mb-3">
                        
                        <!-- DataTables -->
				<div class="card mb-3">
					
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Photo</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($design as $ds): ?>
									<tr>
										<td width="150">
											<?php echo $ds->name ?>
										</td>
										
										<td>
											<img src="<?php echo base_url('upload/design/'.$ds->image) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($ds->description, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('admin/Design/edit/'.$ds->design_id) ?>"
                                            class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            
        <a href="<?php echo base_url('admin/Design/delete/'.$ds->design_id) ?>" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
                    </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                
            </div>
            <!-- /.container-fluid -->
            <!-- FOOTER -->
            <?php $this->load->view('admin/_partials/footer.php') ?>

        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>

    <?php $this->load->view('admin/_partials/js.php') ?>

    <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
</body>

</html>
