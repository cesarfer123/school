<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
    <div class="container-fluid">
        <h1><i class="fa fa-plus"></i></h1>
        <h1 class="alert alert-success">HOME PAGE</h1>
    </div>

    <?php 
    
        echo "<pre>";
        print_r($rows);
        
    ?>
<?php $this->view('includes/footer'); ?>