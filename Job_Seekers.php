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
                    <a href="Job_Opening.php" class="btn btn-outline-dark">Job Opening</a>
                    <a href="Job_Seekers.php" class="btn btn-outline-dark">Job Seeker List</a>
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
            <div class="d-flex gap-2 align-items-center flex-wrap">
                <!-- Button Toggle -->
                <button type="button" class="btn btn-rounded btn-dark col-lg-2 ms-5 mt-4"><span
                    class="btn-icon-start text-dark"><i class="fa fa-plus color-dark"></i>
                </span>Job Opening</button>
            </div>
            <!-- Input Boxes -->
            <div class="col-lg-11 mt-5 ms-5 d-flex gap-2 align-items-center justify-content-between flex-wrap">
                <h5><strong>JOB SEEKERS</strong></h5>
                <div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value=""
                                checked>Selected
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Rejected
                        </label>
                    </div>
                    <div class="form-check form-check-inline disabled">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value=""
                                disabled>Pending
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
                                <th><strong>#</strong></th>
                                <th><strong>Name*</strong></th>
                                <th><strong>Job Position*</strong></th>
                                <th><strong>Date Of Posting*</strong></th>
                                <th><strong>Email*</strong></th>
                                <th><strong>Phone Number*</strong></th>
                                <th><strong>Status*</strong></th>
                                <th><strong>Action*</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Jay Jay</td>
                                <td>Software Developer</td>
                                <td>2021-09-09</td>
                                <td>dev-jay-jay@gmail.com</td>
                                <td>080 123 123 21</td>
                                <td>Successful</td>
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
                                <td>Jay Jay</td>
                                <td>Software Developer</td>
                                <td>2021-09-09</td>
                                <td>dev-jay-jay@gmail.com</td>
                                <td>080 123 123 21</td>
                                <td>Successful</td>
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
<!-- Content End-->

<!-- Footer Section -->
<?php include 'footer.php'; ?>
