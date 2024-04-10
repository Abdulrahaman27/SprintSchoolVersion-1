<!--  Header -->
<?php include 'Header.php'; ?>

<!-- SideBar Section -->
<?php include 'SideBar.php'; ?>

<!-- Content Start-->


<div class="content-body">
    <div class="d-flex mt-3 justify-content-evenly ms-0">
        <div class="row">
            <div class="col-xl-12">
                <!-- TopButtonNav Start -->
                 <?php include 'StudentTopButtonNav.php'; ?>
                <!-- TopButtonNav Ends -->

                <div class="mt-4 col-lg-12 ms-5 d-flex gap-2 align-items-center flex-wrap">
                    <!-- Select input -->
                    
                    <div class="col-lg-4">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value=""
                                    checked>NEGATIVE
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">POSITIVE
                            </label>
                        </div>
                    </div>
    
                    <!-- Input Boxes -->
                    <div class="col-lg-6 mt-5  d-flex gap-2 align-items-center justify-content-between flex-wrap">
                        <div class="row align-items-center">
                            <div class="col-auto my-1">
                                <label class="me-sm-2">Certificate Type</label>
                                <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Contacts Table -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th><strong>Attachment Type*</strong></th>
                                <th><strong>Attachment Name*</strong></th>
                                <th><strong>Date*</strong></th>
                                <th><strong>Attachment*</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
         <!-- Buttons -->
         <!-- No Button -->
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
</div>

<!-- Content End-->

<!-- Footer Section -->
<?php include 'footer.php'; ?>
