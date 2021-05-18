<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item "><a href="<?php echo url(); ?>">Home</a></li>
            <?php
            if(!empty($_GET['url'])) {
                echo  '<li class="breadcrumb-item ">' . $_GET['url'] . '</li>';
            }

            if(!empty($_GET['sub_link'])) {
                echo  '<li class="breadcrumb-item ">' . $_GET['sub_link'] . '</li>';
            }

            if(!empty($_GET['sub_sub_link'])) {
                echo  '<li class="breadcrumb-item ">' . $_GET['sub_sub_link'] . '</li>';
            }
            ?>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>