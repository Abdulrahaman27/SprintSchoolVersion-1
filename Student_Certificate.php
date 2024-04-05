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
            <div class="mt-4 col-lg-12 ms-5 d-flex gap-2 align-items-center flex-wrap">
                <!-- Select input -->
                
                <div class="col-lg-4">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value=""
                                checked>CERTIFICATE
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">LETTER
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
     <!-- Buttons -->
     <!-- No Buttons -->
    </div>

<!-- Content End-->

<!-- Footer Section -->
<?php include 'footer.php'; ?>
