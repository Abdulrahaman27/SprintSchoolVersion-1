<?php include 'Header.php'; ?>
 
    
<!--********************************** Sidebar start ***********************************-->
<?php include 'SideBar.php'; ?>
<!--********************************** Sidebar end ***********************************-->  


<!-- Content Start -->

<div class="content-body">
    <div class="d-flex mt-3 justify-content-evenly ms-0">
        <div class="row">
           <!-- Staff Top Button Nav-->
           <?php include 'StaffTopButtonNav.php'; ?>
            <!-- Staff Top Button Nav End-->
            
            <!-- switch button -->
            <button type="button" class="col-lg-2 ms-5 mt-5 mb-0 btn btn-rounded btn-dark"><span
                class="btn-icon-start text-dark"><i class="fa fa-plus color-info"></i>
            </span>Activity Fee (INR)</button>
            <!-- Table -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th style="width:80px;"><strong>#</strong></th>
                                <th><strong>Avtivity*</strong></th>
                                <th><strong>Total Amount*</strong></th>
                                <th><strong>Waived Amount*</strong></th>
                                <th><strong>Paid Amount*</strong></th>
                                <th><strong>Balance Amount*</strong></th>
                                <th><strong>Payment Status*</strong></th>
                                <th><strong>Due Date*</strong></th>
                                <th><strong>Action*</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Library Fine</td>
                                <td>20,000</td>
                                <td>0.00</td>
                                <td>10,000</td>
                                <td>10,000</td>
                                <td>PENDING</td>
                                <td>2019-09-02</td>
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
                                <td>Library Fine</td>
                                <td>20,000</td>
                                <td>0.00</td>
                                <td>10,000</td>
                                <td>10,000</td>
                                <td>PENDING</td>
                                <td>2019-09-02</td>
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
                            <td><strong>03</strong></td>
                                <td>Library Fine</td>
                                <td>20,000</td>
                                <td>0.00</td>
                                <td>10,000</td>
                                <td>10,000</td>
                                <td>PENDING</td>
                                <td>2019-09-02</td>
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

<!-- Content End -->


<!--********************************** Footer start ***********************************--> 
	<?php include 'footer.php'; ?>
<!--********************************** Footer End ***********************************-->