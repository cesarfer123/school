<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php $this->view('includes/crumbs'); ?>
        <h4>Profile</h4>
        <div class="row">
            <div class="col-4">
                <img src="<?=ASSETS?>/user_female.png" class="border border-primary d-block mx-auto rounded-circle" style="width:100px;" alt="">
            </div>
            <div class="col-8 bg-light p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr>
                        <th>First Name:</th>
                        <td>Mary</td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td>Phiri</td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td>Female</td>
                    </tr>
                </table>
            </div>
        </div>

        <div>
            
        </div>
    </div>
<?php $this->view('includes/footer'); ?>