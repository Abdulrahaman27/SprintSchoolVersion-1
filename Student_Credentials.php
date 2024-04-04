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
                    <button class="btn btn-outline-dark">Credentials</button>
                    <button class="btn btn-outline-dark">Academics</button>
                    <button class="btn btn-outline-dark">Behaviour</button>
                    <button class="btn btn-outline-dark">Certificate</button>
                    <button class="btn btn-outline-dark">Domitory</button>
                    <button class="btn btn-outline-dark">Fees</button>
                    <button class="btn btn-outline-dark">Medical</button>
                    <button class="btn btn-outline-dark">Discplin & Transfer</button>
                    <button class="btn btn-outline-dark">Transportation</button>
                </div>
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

<!-- Content End-->

<!-- Footer Section -->
<?php include 'footer.php'; ?>
