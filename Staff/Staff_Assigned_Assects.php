<!--  Header -->
<?php include 'Header.php'; ?>

<!-- SideBar Section -->
<?php include 'SideBar.php'; ?>

<!-- Content Start-->


<div class="content-body">
    <div class="row">
        <div class="col-xl-12">
            <!-- TopButtonNav Start -->
            <?php include 'StaffTopButtonNav.php'; ?>
            <!-- TopButtonNav Ends -->
            <div>
                <div class="row mt-4 mb-0 ms-5">
                    <div class="d-flex gap-2 align-items-center flex-wrap">
                        <a href="http://localhost/PHP/SprintSchool/Staff_Profile.php" class="btn light btn-dark">Personal Profile</a>
                        <a href="http://localhost/PHP/SprintSchool/Staff_Family.php" class="btn light btn-dark">Family Details</a>
                        <a href="http://localhost/PHP/SprintSchool/Staff_Assigned_Assects.php" class="btn light btn-dark">Assigned Assets</a>
                    </div>
                </div>
                    <h4 class="ms-5 m-3 mb-1"><strong>Issued Assets</strong></h4>
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th><strong>#</strong></th>
                                <th><strong>Assets Name*</strong></th>
                                <th><strong>Assets Type*</strong></th>
                                <th><strong>Assets ID*</strong></th>
                                <th><strong>Assets Date*</strong></th>
                                <th><strong>Recoverd Date*</strong></th>
                                <th><strong>Conditions*</strong></th>
                                <th><strong>Comments*</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>KeyBoard</td>
                                <td>KeyBoard</td>
                                <td>HJK!UJ98</td>
                                <td>2018-08-01</td>
                                <td></td>
                                <td>GOOD</td>
                                <td>GOOD</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>KeyBoard</td>
                                <td>KeyBoard</td>
                                <td>HJK!UJ98</td>
                                <td>2018-08-01</td>
                                <td></td>
                                <td>GOOD</td>
                                <td>GOOD</td>
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
