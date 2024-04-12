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
            
            <!-- Table -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th style="width:80px;"><strong>#</strong></th>
                                <th><strong>Attachment Type*</strong></th>
                                <th><strong>Attachment Name*</strong></th>
                                <th><strong>Date*</strong></th>
                                <th><strong>Attachment*</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Swies Attachment</td>
                                <td>UDUS Attachment</td>
                                <td>2020-12-12</td>
                                <td>Computer science</td>
                            </tr>
                            <tr>
                                <td><strong>02</strong></td>
                                <td>Swies Attachment</td>
                                <td>UDUS Attachment</td>
                                <td>2020-09-28</td>
                                <td>Computer science</td>
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
                    <img src="public/assets/images/profile/pic1.jpg" alt=""/>
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