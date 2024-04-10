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
            <div class="mt-5  d-flex gap-2 align-items-center flex-wrap">
                <!-- Button Toggle -->
                <button type="button" class="btn btn-rounded btn-dark col-lg-2 ms-5 mt-4"><span
                    class="btn-icon-start text-dark"><i class="fa fa-plus color-dark"></i>
                </span>Job Opening</button>
            </div>
        <!-- Contacts Table -->
        <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th><strong>#</strong></th>
                                <th><strong>Job Position*</strong></th>
                                <th><strong>Job Title*</strong></th>
                                <th><strong>Date Of Posting*</strong></th>
                                <th><strong>Available Position*</strong></th>
                                <th><strong>Position Filled*</strong></th>
                                <th><strong>Job Expiriy Date*</strong></th>
                                <th><strong>Job Decs Attachment*</strong></th>
                                <th><strong>Action*</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Driver</td>
                                <td>Bus Driver</td>
                                <td>2021-09-09</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2021-09-09</td>
                                <td></td>
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
                                <td>Helper</td>
                                <td>Helper</td>
                                <td>2021-09-09</td>
                                <td>4</td>
                                <td>1</td>
                                <td>2021-09-09</td>
                                <td></td>
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
     <!-- Buttons -->
     <div class="col-xl-6 d-flex justify-content-center gap-3 ms-5">
        <button class="btn btn-outline-secondary">Save</button>
        <button class="btn btn-outline-danger">Clear</button>
     </div>
    </div>

<!-- Content End-->

<!-- Footer Section -->
<?php include 'footer.php'; ?>
