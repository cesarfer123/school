<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php $this->view('includes/crumbs'); ?>
        <h4>Profile</h4>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <img src="<?=ASSETS?>/user_female.png" class="border border-primary d-block mx-auto rounded-circle" style="width:100px;" alt="">
                <h3 class="text-center">Mery Phiri</h3>
            </div>
            <div class="col-sm-12 col-md-8 bg-light p-2">
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
                    <tr>
                        <th>Date created:</th>
                        <td>2023-08-02</td>
                    </tr>
                </table>
            </div>
        </div>

        <hr>

        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Class</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Test</a>
                </li>

            </ul>

            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search">&nbsp; </i></span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        
                    </div>
                </form>
            </nav>

        </div>
    </div>
<?php $this->view('includes/footer'); ?>
