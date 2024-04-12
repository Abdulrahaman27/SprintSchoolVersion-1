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
            <div>
                <div class="row mt-4 mb-0 ms-5">
                    <div class="d-flex gap-2 align-items-center flex-wrap">
                        <a href="<?php echo STUDENT_URL; ?>Student_Profile.php" class="btn light btn-dark">Personal Profile</a>
                        <a href="<?php echo STUDENT_URL; ?>Student_Family.php" class="btn light btn-dark">Family Details</a>
                        <a href="<?php echo STUDENT_URL; ?>Student_Assigned_Assects.php" class="btn light btn-dark">Assigned Assets</a>
                    </div>
                </div>
                <div class=" mt-1 mb-0 card col-xl-11 d-flex justify-content-center ms-5 ">
                    <div class="card-body booking-status d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Personal Details</h4>
                        <button type="button" class="btn btn-rounded btn-dark"><span
                            class="btn-icon-start text-dark"><i class="fa fa-plus color-dark"></i>
                        </span>Add</button>
                    </div>
                </div>
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-4 card-body">
                        <div class="m-2">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control input-default " placeholder="First Name">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Middle Name</label>
                            <input type="text" class="form-control input-default" placeholder="Middle Name">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control input-default" placeholder="Last Name">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Date Of Birth</label>
                            <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control input-default" placeholder="dev-jay-jay@gmail.com">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control input-default" placeholder="Phone Number">                        </div>
                        <div class="m-2 row">
                            <div class="col-form-lable-lg">Gender</div>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 card-body">
                        <div class="m-2">
                            <label class="form-label">Department</label>
                            <input type="text" class="form-control input-default" placeholder="Department">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Design</label>
                            <input type="text" class="form-control input-default" placeholder="Design">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Salary</label>
                            <input type="number" class="form-control input-default" placeholder="Salary">
                        </div>
                        <div class="m-2">
                            <label class="form-label">PAN No</label>
                            <input type="number" class="form-control input-default" placeholder="PAN No">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Blood Group</label>
                            <input type="text" class="form-control input-default" placeholder="Blood Group">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Nation</label>
                            <input type="text" class="form-control input-default" placeholder="Nation">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Religion</label>
                            <input type="text" class="form-control input-default" placeholder="Religion">
                        </div>
                    </div>
                    <div class="col-xl-4 card-body">
                        <div class="m-2">
                            <label class="form-label">Date</label>
                            <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Height</label>
                            <input type="number" class="form-control input-default" placeholder="Height">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Weight</label>
                            <input type="number" class="form-control input-default" placeholder="Weight">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Enter </label>
                            <textarea class="form-control" rows="4" id="comment"></textarea>
                        </div>
                        <div class="mt-2 form-check">
                            <label class="form-check-label">
                            Bus Facility?
                                <input type="checkbox" class="form-check-input" value="">
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            Dorm Facility?
                                <input type="checkbox" class="form-check-input" value="">
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            Can Student Login?
                                <input type="checkbox" class="form-check-input" value="">
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            Physicaly Challenged?
                                <input type="checkbox" class="form-check-input" value="">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Curiculum Table -->
    <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th><strong>Curiculumn Code*</strong></th>
                            <th><strong>Class*</strong></th>
                            <th><strong>Section*</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 
                                <select id="inputState" class="default-select form-control wide">
                                    <option selected>Choose...</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </td>
                            <td>
                            <select id="inputState" class="default-select form-control wide">
                                <option selected>Choose...</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                            </td>
                            <td>
                            <select id="inputState" class="default-select form-control wide">
                                <option selected>Choose...</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                            </td>
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
                                <th><strong>Primary Contact*</strong></th>
                                <th><strong>Secondary Contact*</strong></th>
                                <th><strong>Emergency Contact*</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 
                                    <select id="inputState" class="default-select form-control wide">
                                        <option selected>Choose...</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </td>
                                <td>
                                <select id="inputState" class="default-select form-control wide">
                                    <option selected>Choose...</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                                </td>
                                <td>
                                <select id="inputState" class="default-select form-control wide">
                                    <option selected>Choose...</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
     <!-- Buttons -->
     <div class="col-xl-6 d-flex justify-content-center gap-3 ms-5">
        <button class="btn btn-outline-secondary">Save Personal Details</button>
        <button class="btn btn-outline-secondary">Clear</button>
     </div>
    </div>

<!-- Content End-->

<!-- Footer Section -->
<?php include 'footer.php'; ?>
