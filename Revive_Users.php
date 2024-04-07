<!--  Header -->
<?php include 'Header.php'; ?>

<!-- SideBar Section -->
<?php include 'SideBar.php'; ?>

<!-- Content Start-->


<div class="content-body">
    <div class="row">
        <div class="col-xl-12">
            <div class="row ms-2 mb-0">
                <div class="d-flex gap-2 align-items-center flex-wrap">
                    <button class="btn btn-outline-dark">Revive Users</button>
                    <button class="btn btn-outline-dark">Alumini Users</button>
                </div>
            </div>
            <div class="mt-5 ms-5 d-flex gap-2 align-items-center flex-wrap">
                <!-- Select input -->
                <div class="mb-3 col-lg-3">
                    <label class="form-label">User Role</label>
                    <select id="inputState" class="default-select form-control wide">
                        <option selected>Choose...</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
            </div>
            <div class="d-flex gap-2 align-items-center flex-wrap">
                <!-- Button Toggle -->
                <button type="button" class="btn btn-rounded btn-dark col-lg-2 ms-5 mt-4"><span
                    class="btn-icon-start text-dark"><i class="fa fa-plus color-dark"></i>
                </span>Job Opening</button>
            </div>
            <!-- Input Boxes -->
            <div class="col-lg-11 mt-5 ms-5 d-flex gap-2 align-items-center justify-content-between flex-wrap">
                <h5><strong>Revive Users</strong></h5>
            </div>
        <!-- Contacts Table -->
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th><strong>#</strong></th>
                                <th><strong>User Name*</strong></th>
                                <th><strong>Department Name*</strong></th>
                                <th><strong>Job Discription*</strong></th>
                                <th><strong>Joined On*</strong></th>
                                <th><strong>Detailed Reason*</strong></th>
                                <th><strong>Documents*</strong></th>
                                <th><strong>Form Date*</strong></th>
                                <th><strong>To Date*</strong></th>
                                <th><strong>Select*</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Jay Jay</td>
                                <td>Software Developer</td>
                                <td>Software Developement</td>
                                <td>2021-09-09</td>
                                <td>Suspension</td>
                                <td></td>
                                <td>2021-08-09</td>
                                <td>2021-09-09</td>
                                <td>
                                    <input type="checkbox" class="form-check-input" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Jay Jay</td>
                                <td>Software Developer</td>
                                <td>Software Developement</td>
                                <td>2021-09-09</td>
                                <td>Suspension</td>
                                <td></td>
                                <td>2021-08-09</td>
                                <td>2021-09-09</td>
                                <td>
                                    <input type="checkbox" class="form-check-input" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Jay Jay</td>
                                <td>Software Developer</td>
                                <td>Software Developement</td>
                                <td>2021-09-09</td>
                                <td>Suspension</td>
                                <td></td>
                                <td>2021-08-09</td>
                                <td>2021-09-09</td>
                                <td>
                                    <input type="checkbox" class="form-check-input" value="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-6 d-flex justify-content-center gap-3 ms-5">
            <button class="btn btn-outline-secondary">Activate Selected Users</button>
        </div>
    </div>
</div>
<!-- Content End-->

<!-- Footer Section -->
<?php include 'footer.php'; ?>
