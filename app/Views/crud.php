
<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="card shadow mb-4">
                        <div class="card-header py-3" style="  display: flex;justify-content: space-between;" >
                                <h6 class="m-0 font-weight-bold text-primary">User's List </h6>
                                <a  id="add" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Add User</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                           
                                    <tbody>
                               
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


    <!-- Add User Modal-->
    <div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="user">
                    
                            <input type="text" name="fname" class="form-control mb-2" placeholder="Firstname">
                            <input type="text" name="lname" class="form-control mb-2 " placeholder="Lastname">
                            <input type="number" name="age" class="form-control mb-2" placeholder="Age">
                            <textarea name="address"id="" cols="1" rows="2" class="form-control " placeholder="Address" ></textarea>
                
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function () {
         
         $("#add").click(function (e) { 
             e.preventDefault();
              $("#add_user").modal("toggle");

         });

         $("#user").submit(function (e) { 
            e.preventDefault();
         
            let form = $(this);
             
             if (confirm("Sure want to save User ?")) {

                $.ajax({
                    type: "POST",
                    url: "Crud/save_user",
                    data: form.serialize(),
                    dataType: "json",
                    success: function (res) {
                     console.log(res);   
                    }
                });

                $("#add_user").modal("toggle");
                 
             }

         });

    });
</script>


<?= $this->endSection() ?>
