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
                        <h4 class="page-title">Edit your design</h4> </div>
                    
                </div>
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <!-- card -->
                    <div class="card mb-3">
                        
                        <div class="card-body">

                            <form action="" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $design->design_id?>" />

                                <div class="form-group">
                                    <label for="name">Name Design</label>
                                    <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" type="text" name="name" placeholder="Name design.." value="<?php echo $design->name ?>"/>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('name') ?>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label for="name">Photo</label>
                                    <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>" type="file" name="image"/>
                                    <input type="hidden" name="old_image" value="<?php echo $design->image ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('image') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Description</label>
                                    <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>" name="description"
                                        placeholder="Design description.."><?php echo $design->description?></textarea>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('description') ?>
                                    </div>
                                </div>

                                <input class="btn btn-success" type="submit" name="btn" value="Save"/>
                            </form>

                        </div>

                        <div class="card-footer small text-muted">
                            * required fields
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
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php $this->load->view('admin/_partials/js.php') ?>
</body>

</html>
