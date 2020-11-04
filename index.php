<?php include 'common/header.php' ?>

<div class="row">
    <div class="col">
        <div class="card mt-5">
            <div class="card-title ml-5 my-2">
                <!--reg button-->
                <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#Registration">Add new User</button>
            </div>
            <div class="card-body">
                <div id="table"></div>
            </div>
        </div>
    </div>
</div>

<!-- Registarion Modal -->
<div class="modal" id="Registration">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-dark">Registration Form</h3>
            </div>
            <div class="modal-body">
                <p id="message" class="text-dark"></p>
                <form>
                    <input type="text" class="form-control my-2" placeholder="User Name" id="userName">
                    <input type="email" class="form-control my-2" placeholder="Email" id="userEmail">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnReg">Register Now</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnClose">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Update Modal -->
<div class="modal" id="Update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-dark">Update Form</h3>
            </div>
            <div class="modal-body">
                <p id="upMessage" class="text-dark"></p>
                <form>
                    <input type="text" class="form-control my-2" placeholder="User Name" id="upUserName">
                    <input type="email" class="form-control my-2" placeholder="Email" id="upUserEmail">
                    <input type="hidden" class="form-control my-2" placeholder="Email" id="upUserId">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnUpdate">Update Now</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnClose">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include 'common/footer.php' ?>

