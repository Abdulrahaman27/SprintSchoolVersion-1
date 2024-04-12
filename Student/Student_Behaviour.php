<!--  Header -->
<?php include 'Header.php'; ?>

<!-- SideBar Section -->
<?php include 'SideBar.php'; ?>

<!-- Content Start-->


<div class="content-body">
    <div class="d-flex mt-3 justify-content-evenly ms-0"> 
        <div class="row">
            <div class="col-xl-12">
            <!-- TopButtonNav Start -->
            <?php include 'StudentTopButtonNav.php'; ?>
                <!-- TopButtonNav Ends -->
                
                <div class="mt-4 col-lg-12 ms-5 d-flex gap-2 align-items-center flex-wrap">
                    <!-- Select input -->
                    
                    <div class="col-lg-4">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value=""
                                    checked>NEGATIVE
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">POSITIVE
                            </label>
                        </div>
                    </div>

                    <!-- Input Boxes -->
                    <div class="col-lg-6 mt-5  d-flex gap-2 align-items-center justify-content-between flex-wrap">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th><strong>POOR*</strong></th>
                                    <th><strong>FAIR*</strong></th>
                                    <th><strong>GOOD*</strong></th>
                                    <th><strong>VERY GOOD*</strong></th>
                                    <th><strong>EXCELLENT*</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>-13 to -7</td>
                                    <td>-6 to -1</td>
                                    <td><strong>0</strong></td>
                                    <td>1 to 6</td>
                                    <td>7 to 13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <!-- Contacts Table -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th><strong>Behaviour Characteristics*</strong></th>
                                <th><strong>Weight*</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admin Comments</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Staff Comments</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Parent Comments</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile Card Section -->
        <div class="card row col-lg-3 me-2">
            <div class="dropdown header-profile2">
                <div class="header-info2 text-center mt-3">
                    <img src="<?php echo BASE_URL; ?>public/assets/images/profile/pic1.jpg" alt=""/>
                    <div class="sidebar-info">
                        <div class="mt-3">
                            <div class="d-flex m-2">
                                <strong>
                                    <h5 class="font-w500 pe-3">NAME :</h5>
                                </strong>
                                <h5 class="font-w500 pe-3">William Johanson</h5>
                            </div>
                            <div class="d-flex m-2">
                                <strong>
                                    <h5 class="font-w500 pe-3">EMAIL :</h5>
                                </strong>
                                <h5 class="font-w500 pe-3">willjohn@mail.com</h5>
                            </div>
                            <div class="d-flex m-2">
                                <strong>
                                    <h5 class="font-w500 pe-3">CLASS :</h5>
                                </strong>
                                <h5 class="font-w500 pe-3">SS2A</h5>
                            </div>
                            <div class="d-flex m-2">
                                <strong>
                                    <h5 class="font-w500 pe-3">DOB :</h5>
                                </strong>
                                <h5 class="font-w500 pe-3">19-June-2000</h5>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End-->
<!-- Buttons -->
<div class="col-xl-6 d-flex justify-content-center gap-3 ms-5">
    <button class="btn btn-outline-secondary">Save Behaviour</button>
    <button class="btn btn-outline-secondary">Edit</button>
    <button class="btn btn-outline-danger">Reset</button>
</div>

<!-- Footer Section -->
<?php include 'footer.php'; ?>
