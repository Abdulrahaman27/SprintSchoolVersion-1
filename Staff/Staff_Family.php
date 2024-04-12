<!--  Header -->
<?php include 'Header.php'; ?>

<!-- SideBar Section -->
<?php include 'SideBar.php'; ?>

<!-- Content Start-->


<div class="content-body">
    <div class="row">
        <div class="col-xl-12">
            <!-- TopButtonNav Start -->
            <?php include 'StaffTopButtonNav.php'; ?>
            <!-- TopButtonNav Ends -->
            <div>
                <div class="row mt-4 mb-0 ms-5">
                    <div class="d-flex gap-2 align-items-center flex-wrap">
                        <a href="<?php echo STAFF_URL; ?>Staff_Profile.php" class="btn light btn-dark">Personal Profile</a>
                        <a href="<?php echo STAFF_URL; ?>Staff_Family.php" class="btn light btn-dark">Family Details</a>
                        <a href="<?php echo STAFF_URL; ?>Staff_Assigned_Assects.php" class="btn light btn-dark">Assigned Assets</a>
                    </div>
                </div>
                <div class="mt-2 mb-1 col-xl-11 ms-5 ">
                    <button type="button" class="col-xl-2 btn btn-rounded btn-dark"><span
                        class="btn-icon-start text-dark"><i class="fa fa-plus color-info"></i>
                    </span>Family Details</button>
                    <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th><strong>#</strong></th>
                                <th><strong>Relation*</strong></th>
                                <th><strong>First Name*</strong></th>
                                <th><strong>Middle Name*</strong></th>
                                <th><strong>Last Name*</strong></th>
                                <th><strong>Phone Number*</strong></th>
                                <th><strong>Email*</strong></th>
                                <th><strong>Action*</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Father</td>
                                <td>John</td>
                                <td>Jonathan</td>
                                <td>Gaiya</td>
                                <td>080 123 123 21</td>
                                <td>dev-jay-jay@gmail.com</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-dark light sharp" data-bs-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Father</td>
                                <td>John</td>
                                <td>Jonathan</td>
                                <td>Gaiya</td>
                                <td>080 123 123 21</td>
                                <td>dev-jay-jay@gmail.com</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-dark light sharp" data-bs-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
     <!-- Buttons -->
     <div class="col-xl-6 d-flex justify-content-center gap-3 ms-5">
        <button class="btn btn-outline-secondary">Save Family Details</button>
        <button class="btn btn-outline-danger">Clear</button>
     </div>

<!-- Content End-->

<!-- Footer Section -->
<?php include 'footer.php'; ?>
