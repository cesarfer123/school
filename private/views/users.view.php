<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php $this->view('includes/crumbs'); ?>

        <div class="card-group justify-content-center">

        <?php foreach ($rows as $row): ?>
            <div class="card m-2 shadow-sm" style="max-width: 12rem;min-width: 12rem">
                <div class="card-header">User Pofile</div>
                <img src="<?=ASSETS?>/user_male.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?=$row->firstname?> <?=$row->lastname?></h5>
                    <p class="card-text"><?=str_replace('_',' ',$row->nivel)?></p>
                    <a href="#" class="btn btn-primary">Profile</a>
                </div>
            </div>
        <?php endforeach; ?>    
        </div>
    </div>
<?php $this->view('includes/footer'); ?>
