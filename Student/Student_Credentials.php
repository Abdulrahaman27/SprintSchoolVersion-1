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
                </div>
                <div class="mt-5 ms-5 d-flex gap-2 align-items-center flex-wrap">
                    <!-- Select input -->
                    <div class="mb-3 col-lg-4">
                        <label class="form-label">State</label>
                        <select id="inputState" class="default-select form-control wide">
                            <option selected>Choose...</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <!-- Button Toggle -->
                    <button type="button" class="btn btn-rounded btn-dark col-lg-3 ms-5 mt-4"><span
                        class="btn-icon-start text-dark"><i class="fa fa-plus color-dark"></i>
                    </span>Achivement Management</button>
                </div>
            <!-- Contacts Table -->
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th><strong>Reward*</strong></th>
                                    <th><strong>Name*</strong></th>
                                    <th><strong>Achivement Name*</strong></th>
                                    <th><strong>Location*</strong></th>
                                    <th><strong>Comment*</strong></th>
                                    <th><strong>Attachment*</strong></th>
                                    <th><strong>Action*</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Award</td>
                                    <td>2021-09-09</td>
                                    <td>Best Student</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        <!-- Buttons -->
        <div class="col-xl-6 d-flex justify-content-center gap-3 ms-5">
            <button class="btn btn-outline-secondary">Save</button>
            <button class="btn btn-outline-danger">Clear</button>
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

<!-- Footer Section -->
<?php include 'footer.php'; ?>
