<!--  Header -->
<?php include 'Header.php'; ?>

<!-- SideBar Section -->
<?php include 'SideBar.php'; ?>

<!-- Content Start-->


<div class="content-body">
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
     <!-- Buttons -->
     <div class="col-xl-6 d-flex justify-content-center gap-3 ms-5">
        <button class="btn btn-outline-secondary">Save Behaviour</button>
        <button class="btn btn-outline-secondary">Edit</button>
        <button class="btn btn-outline-danger">Reset</button>
     </div>
    </div>

<!-- Content End-->

<!-- Footer Section -->
<?php include 'footer.php'; ?>
