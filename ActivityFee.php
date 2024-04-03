<?php include 'Header.php'; ?>
 
    
<!--********************************** Sidebar start ***********************************-->
<?php include 'SideBar.php'; ?>
<!--********************************** Sidebar end ***********************************-->  


<!-- Content Start -->

<div class="content-body">
    <div class="row">
        <!-- Top Buttons -->
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
        <!-- Table -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th style="width:80px;"><strong>#</strong></th>
                            <th><strong>Activity*</strong></th>
                            <th><strong>TOTAL AMOUNT*</strong></th>
                            <th><strong>WAIVED AMOUNT*</strong></th>
                            <th><strong>PAID AMOUNT*</strong></th>
                            <th><strong>BALANCE AMOUNT*</strong></th>
                            <th><strong>PAYMENT STATUS*</strong></th>
                            <th><strong>DUE DATE*</strong></th>
                            <th><strong>ACTION*</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>01</strong></td>
                            <td>Library Fine</td>
                            <td>20,000</td>
                            <td>0.00</td>
                            <td>15,000</td>
                            <td>5,000</td>
                            <td>PENDING</td>
                            <td>2012-09-28</td>
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
                            <td><strong>02</strong></td>
                            <td>Computer Training</td>
                            <td>70,000</td>
                            <td>0.00</td>
                            <td>10,000</td>
                            <td>10,000</td>
                            <td>PENDING</td>
                            <td>2012-12-12</td>
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
                        <!-- to add the third section of the table an others -->
                        <!-- <tr>
                            <td><strong>03</strong></td>
                            <td>Mr. Bobby</td>
                            <td>Dr. Jackson</td>
                            <td>01 August 2020</td>
                            <td><span class="badge light badge-warning">Pending</span></td>
                            <td>$21.56</td>
                            <td></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Last button -->
        <div class="col-xl-6 d-flex justify-content-center gap-3 ms-5">
        <button class="btn btn-outline-secondary">Payment History</button>
     </div>

    </div>
</div>

<!-- Content End -->


<!--********************************** Footer start ***********************************--> 
	<?php include 'footer.php'; ?>
<!--********************************** Footer End ***********************************-->