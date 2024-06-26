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
            
            <!-- Below Buttons -->
            <div class="row mt-4 mb-0 ms-5">
                <div class="d-flex gap-2 align-items-center flex-wrap">
                    <button class="btn light btn-dark">Acheivement</button>
                    <button class="btn light btn-dark">Experience</button>
                    <button class="btn light btn-dark">Qualifications</button>
                </div>
            </div>
            <!-- select section -->
            <div class="col-xl-3 mt-4 ms-5">
            <label class="form-label mb-0">Reward Type</label>
                <select multiple class="default-select form-control wide mt-3" >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <!-- Achivement add button -->
            <div class="ms-5 mt-4">
                <button type="button" class="btn btn-rounded btn-dark"><span
                    class="btn-icon-start text-info"><i class="fa fa-plus color-dark"></i>
                </span>Achievement</button>
            </div>
            <!-- Table -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th style="width:80px;"><strong>#</strong></th>
                                <th><strong>REWARD*</strong></th>
                                <th><strong>DATE*</strong></th>
                                <th><strong>DISCRIPTION*</strong></th>
                                <th><strong>LOCATION*</strong></th>
                                <th><strong>COMMENT*</strong></th>
                                <th><strong>ATTACHMENT*</strong></th>
                                <th><strong>ACTION*</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Acheievment</td>
                                <td>2020-12-12</td>
                                <td>Swimming Compertition Winner</td>
                                <td>School Compertition</td>
                                <td>Congratulation</td>
                                <td>123_47474</td>
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
                                <td>Reward</td>
                                <td>2020-09-28</td>
                                <td>Best Employee Award</td>
                                <td>School</td>
                                <td>Congratulation</td>
                                <td>1234_857363739</td>
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
            <button class="btn btn-outline-secondary">Save Achievement</button>
            <button class="btn btn-outline-secondary">Clear</button>
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