<?php $this->view('includes/header'); ?>
    <div class="container-fluid">
        <div class="p-4 mx-auto shadow rounded" style="margin-top: 20px; width: 100%;max-width: 310px">
            <h 2>My School</h2>    
            <img src="<?=ROOT?>/assets/logo.png" class="border border-primary d-block mx-auto rounded-circle" style="width: 140px">
            <h3>Add User</h3>    
            <input class="my-2 form-control" type="text" name="firstname" placeholder="First Name">
            <input class="my-2 form-control" type="text" name="lastname" placeholder="Last Name">
            <input class="my-2 form-control" type="email" name="email" placeholder="Email">
            
            <select name="" class="my-2 form-control">
                <option>--Select a Gender</option>
                <option>Male</option>
                <option>Female</option>
            </select>
            
            <select name="" class="my-2 form-control">
                <option value="">--Select a Rank</option>
                <option value="student">Student</option>
                <option value="reception">Reception</option>
                <option value="lecturer">Lecturer</option>
                <option value="admin">Admin</option>
                <option value="super_admin">SuperAdmin</option>
            </select>

            <input class="my-2 form-control" type="password" name="password" placeholder="Password">
            <input class="my-2 form-control" type="password" name="password2" placeholder="Retype Password">
            <br>    
            <button class="btn btn-primary float-end">Add User</button>
            <button class="btn btn-danger">Cancel</button>
        </div>
    </div>
<?php $this->view('includes/footer'); ?>