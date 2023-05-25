@extends('layouts.admin')

@section('dashboardContent')
<nav aria-label="breadcrumb" class="mx-4 my-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('dashBoard') }}">Dashboard</a></li>
        <!-- <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li> -->
        <li class="breadcrumb-item active" aria-current="page"><strong>User Registration</strong></li>
    </ol>
</nav>

<!-- User List Start -->
<div class="container-fluid px-4">
    <div class="bg-light rounded p-4">

        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="text-center mb-3">User Registration</h3>
        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">

                <div class="form-group row mb-3">
                    <label for="userId" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-form-label">User ID :</label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" id="userId" name="userId" placeholder="00001" disabled>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="empId" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-form-label">Employee ID :</label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" id="empId" name="empId" placeholder="EMP-000001" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="fullName" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-form-label">Full Name :</label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="User Full Name" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="userRole" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-form-label">User Role :</label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <select class="form-select" aria-label="Select User Role" id="userRole" name="userRole" required>
                            <option selected>Select User Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Manager Level 1</option>
                            <option value="2">Manager Level 2</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="userName" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-form-label">User Name :</label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="mail" class="form-control" id="userName" name="userName" placeholder="ex: user@gmail.com" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="password" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-form-label">Password :</label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="password" class="form-control" id="password" name="password" placeholder="ex: 123_@user" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="confirmPassword" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-form-label">Confirm Password :</label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Re-enter Password" required>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            </div>

            <div class="col-lg-12">
                <div class="form-group row my-5 mx-2">
                    <div class="col-lg-12 item-flex-end">
                        <button type="submit" name="submit_user" class="btn btn-primary btn-custom mb-3">Submit</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- User List End -->
@endsection