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
                    <button class="btn btn-outline-dark">Profile</button>
                    <button class="btn btn-outline-dark">Professional Info</button>
                    <button class="btn btn-outline-dark">Activity Fee</button>
                    <button class="btn btn-outline-dark">Salary & Performance</button>
                    <button class="btn btn-outline-dark">Behaviour</button>
                    <button class="btn btn-outline-dark">Certificate</button>
                    <button class="btn btn-outline-dark">Medical</button>
                    <button class="btn btn-outline-dark">Discplin & Transfer</button>
                    <button class="btn btn-outline-dark">Transportation</button>
                    <button class="btn btn-outline-dark">Pay Structure</button>
                    <button class="btn btn-outline-dark">Teaching Details</button>
                    <button class="btn btn-outline-dark">Domitory</button>
                </div>
            </div>

            <div>
                <div class="row mt-4 mb-0 ms-5">
                    <div class="d-flex gap-2 align-items-center flex-wrap">
                        <button class="btn light btn-dark">Personal Profile</button>
                        <button class="btn light btn-dark">Family Detaials</button>
                        <button class="btn light btn-dark">Assigned Assets</button>
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
                            <label class="form-label">Height</label>
                            <input type="number" class="form-control input-default" placeholder="Height">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Weight</label>
                            <input type="number" class="form-control input-default" placeholder="Weight">
                        </div>
                    </div>
                    <div class="col-xl-4 card-body">
                        <div class="m-2">
                            <label class="form-label">Nation</label>
                            <input type="text" class="form-control input-default" placeholder="Nation">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Religion</label>
                            <input type="text" class="form-control input-default" placeholder="Religion">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Ethnicity</label>
                            <input type="text" class="form-control input-default" placeholder="Ethnicity">
                        </div>
                        <!-- date -->
                        <div class="m-2">
                            <label class="form-label">Date</label>
                            <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Emp Code</label>
                            <input type="text" class="form-control input-default" placeholder="Emp Code">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Enter </label>
                            <textarea class="form-control" rows="4" id="comment"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- below check box section -->
     <div class="card col-xl-11 ms-5">
        <div class="card-body">
            <div class="basic-form">
            <form>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                    Bus Facility?
                        <input type="checkbox" class="form-check-input" value="">
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                    Dorm Facility?
                        <input type="checkbox" class="form-check-input" value="">
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                    Can Staff Login?
                        <input type="checkbox" class="form-check-input" value="">
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                    Physicaly Challenged?
                        <input type="checkbox" class="form-check-input" value="">
                    </label>
                </div>
            </form>
            </div>
        </div>
     </div>
     <!-- About Staff and special Note  -->
     <div class="col-xl-12">
        <div class="card-body booking-status d-flex justify-content-around align-items-center">
            <!-- About Staff -->
            <div class="col-xl-5 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">About Staff</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" id="comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Special Note -->
            <div class="col-xl-5 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Special Note </h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" id="comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
