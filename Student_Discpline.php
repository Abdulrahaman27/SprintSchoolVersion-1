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
        <!-- switch button -->
        <button type="button" class="col-lg-2 ms-5 mt-5 mb-0 btn btn-rounded btn-dark"><span
            class="btn-icon-start text-dark"><i class="fa fa-plus color-info"></i>
        </span>Discipline</button>
        <!-- Table -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th style="width:80px;"><strong>#</strong></th>
                            <th><strong>DATE*</strong></th>
                            <th><strong>INCIDIENT*</strong></th>
                            <th><strong>ANY ACTION*</strong></th>
                            <th><strong>SUGGESTION*</strong></th>
                            <th><strong>DAMAGE AMOUNT*</strong></th>
                            <th><strong>ACTION*</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>01</strong></td>
                            <td>2020-01-03</td>
                            <td>Damage School Property</td>
                            <td>School</td>
                            <td>Warning</td>
                            <td>Warning</td>
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
        <!-- Last button -->
        <div class="col-xl-6 d-flex justify-content-center gap-3 ms-5">
        <button class="btn btn-outline-secondary">Save</button>
        <button class="btn btn-outline-danger">Clear</button>
        
     </div>

    </div>
</div>

<!-- Content End -->


<!--********************************** Footer start ***********************************--> 
	<?php include 'footer.php'; ?>
<!--********************************** Footer End ***********************************-->