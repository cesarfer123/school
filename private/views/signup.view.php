<?php $this->view('includes/header'); ?>

    <?php 

        print_r($errors);    

    ?>
    <div class="container-fluid">
        <form method="post">
            <div class="p-4 mx-auto shadow rounded" style="margin-top: 20px; width: 100%;max-width: 310px">
                <h 2>My School</h2>    
                <img src="<?=ROOT?>/assets/logo.png" class="border border-primary d-block mx-auto rounded-circle" style="width: 140px">
                <h3>Add User</h3> 
                <?php if(count($errors)>0): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Errors: </strong>
                    <?php foreach($errors as $error): ?>
                        <br>
                        <?=$error?> 
                    <?php endforeach; ?>
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <?php endif; ?>
                <input value="<?=get_var('firstname')?>" class="my-2 form-control" type="text" name="firstname" placeholder="First Name">
                <input value="<?=get_var('lastname')?>" class="my-2 form-control" type="text" name="lastname" placeholder="Last Name">
                <input value="<?=get_var('email')?>" class="my-2 form-control" type="email" name="email" placeholder="Email">
                
                <select name="gender" class="my-2 form-control">
                    <option value="">--Select a Gender</option>
                    <option <?=get_select('gender','male')?> value="male">Male</option>
                    <option <?=get_select('gender','female')?> value="female">Female</option>
                </select>
                
                <select name="nivel" class="my-2 form-control">
                    <option value="">--Select a Rank</option>
                    <option <?=get_select('nivel','student')?> value="student">Student</option>
                    <option <?=get_select('nivel','reception')?> value="reception">Reception</option>
                    <option <?=get_select('nivel','lecturer')?> value="lecturer">Lecturer</option>
                    <option <?=get_select('nivel','admin')?> value="admin">Admin</option>
                    <option <?=get_select('nivel','super_admin')?> value="super_admin">SuperAdmin</option>
                </select>

                <input class="my-2 form-control" value="<?=get_var('password')?>" type="password" name="password" placeholder="Password">
                <input class="my-2 form-control" value="<?=get_var('password2')?>" type="password" name="password2" placeholder="Retype Password">
                <br>    
                <button class="btn btn-primary float-end">Add User</button>
                <button class="btn btn-danger">Cancel</button>
            </div>
        </form>
    </div>
<?php $this->view('includes/footer'); ?>