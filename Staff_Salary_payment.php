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
                            <th><strong>Teacher Rating*</strong></th>
                            <th><strong>1st Half*</strong></th>
                            <th><strong>2nd Half*</strong></th>
                            <th><strong>3rd Half*</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>01</strong></td>
                            <td>John Doe</td>
                            <td>50%</td>
                            <td>60%</td>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <td><strong>02</strong></td>
                            <td>John Doe</td>
                            <td>60%</td>
                            <td>70%</td>
                            <td>60%</td>
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
</div>

<!-- Content End -->


<!--********************************** Footer start ***********************************--> 
	<?php include 'footer.php'; ?>
<!--********************************** Footer End ***********************************-->