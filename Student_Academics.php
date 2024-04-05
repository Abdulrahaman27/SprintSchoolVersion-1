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
                <div class="mb-3 col-lg-3">
                    <label class="form-label">State</label>
                    <select id="inputState" class="default-select form-control wide">
                        <option selected>Choose...</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
                <div class="mb-3 col-lg-3">
                    <label class="form-label">State</label>
                    <select id="inputState" class="default-select form-control wide">
                        <option selected>Choose...</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
                <div class="mb-3 col-lg-3">
                    <label class="form-label">State</label>
                    <select id="inputState" class="default-select form-control wide">
                        <option selected>Choose...</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
            </div>
            <!-- Input Boxes -->
            <div class="col-lg-11 mt-5 ms-5 d-flex gap-2 align-items-center justify-content-between flex-wrap">
                <h5><strong>Subject Assignment</strong></h5>
                <div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value=""
                                checked>Compeleted
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Not Compeleted
                        </label>
                    </div>
                    <div class="form-check form-check-inline disabled">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value=""
                                disabled>Both
                        </label>
                    </div>
                </div>
            </div>
        <!-- Contacts Table -->
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>
                                    <select id="inputState" class="default-select form-control wide">
                                        <option selected><strong>Subject*</strong></option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </th>
                                <th><strong>Assigned Date*</strong></th>
                                <th><strong>Due Date*</strong></th>
                                <th><strong>Lesson Name*</strong></th>
                                <th><strong>Assignment Details*</strong></th>
                                <th><strong>Attachment*</strong></th>
                                <th><strong>Action*</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Award</td>
                                <td>2021-09-09</td>
                                <td>2021-09-09</td>
                                <td>Mathematics</td>
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
