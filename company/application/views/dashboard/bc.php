<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="mt-0 header-title">Subscribers</h4>
            <div class="row">
                <div class="col-sm-12 text-right">
                    <button type="button" onclick="addUser()" class="btn btn-success btn-rounded w-md waves-effect waves-light mb-3"><i class="mdi mdi-plus"></i>Book Customer</button>
                </div>
            </div>
            <table id="datatable" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Date of Birth</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>Service Type</th>
                        <th>Agent Code</th>
                    </tr>
                </thead>


                <tbody>

                    <tr>
                        <td>Bakari Said</td>
                        <td>1st July 1992</td>
                        <td>0765345500</td>
                        <td>bakari.Said@gmail.com</td>
                        <td>Type B</td>
                        <td>AG560</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>



<div class="modal fade" id="user-groups-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalScrollableTitle">Assign User Groups</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" value="" id="user_group_id" hidden />
                <div id="checkbox-groups">
                    <?php
                    $ml = $data['groups'];
                    if (count($ml) > 0) {
                        for ($i = 0; $i < count($ml); $i++) {
                            echo '<br><div title="' . $ml[$i]['GROUP_DESCRIPTION'] . '" data-toggle="tooltip" class="checkbox checkbox-info"><input value="' . $ml[$i]['ID'] . '" id="checkbox' . $ml[$i]['ID'] . '" type="checkbox"><label for="checkbox' . $ml[$i]['ID'] . '"> ' . $ml[$i]['GROUP_NAME'] . '</label></div>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="assignUserGroups()" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>




<!--  Modal content for Edit users -->
<div id="edit-user-modal" class="modal fade bs-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="text-right">
                    <button onclick="updateUserHr()" type="button" title="Sync" data-toggle="tooltip" class="btn btn-xs btn-success" aria-hidden="true"><i class="fas fa-sync-alt"></i></button>

                </div>

                <form method="POST" action="" id="edit-user-form">
                    <div class="form-group">
                        <label class="text-muted">PF Number</label>
                        <input class="form-control" id="e-pfnumber" name="pf_number">
                    </div>
                    <div class="form-group">
                        <label class="text-muted">Username</label>
                        <input hidden id="e-id">
                        <input class="form-control" id="e-username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">Fullname</label>
                        <input class="form-control" id="e-fullname" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">Email</label>
                        <input class="form-control" id="e-email" name="email" type="email">
                    </div>

                    <div class="form-group">
                        <label class="text-muted">Department/Branch</label>
                        <select style="width:100%" class="form-control select2" id="e-bussnessunit" name="u-bussnessunit" required>
                            <option></option>
                            <?php
                            if (isset($data['stations']) && is_array($data['stations']) && count($data['stations']) > 0) {
                                foreach ($data['stations'] as $station) {
                                    echo '<option>' . $station['STATION_NAME'] . '</option>';
                                }
                            }
                            ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">Job Title</label>
                        <input class="form-control" id="e-jobtitle" name="job_title">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="updateUser()" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- end of model for Edit users -->




<!--  Modal content for adding users -->
<div id="add-user-modal" class="modal fade bs-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Add Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" id="add-user-form">
                    <div class="form-group">
                        <label class="text-muted">Full name</label>
                        <input class="form-control" id="u-pfnumber" name="pf_number">
                    </div>
                    <div class="form-group">
                        <label class="text-muted">Date of Birth</label>
                        <input type="date" class="form-control" id="u-username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">Mobile</label>
                        <input class="form-control" id="u-fullname" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <label class="text-muted">Email</label>
                        <input class="form-control" id="u-email" name="email" type="email">
                    </div>
                    <div class="form-group">
                        <label class="text-muted">Agent Code</label>
                        <input class="form-control" id="u-jobtitle" name="job_title">
                    </div>
                    <div class="form-group">
                        <label class="text-muted">Service Type</label>
                        <select class="form-control" name="" id="">
                            <option>Type A</option>
                            <option>Type B</option>
                            <option>Type C</option>
                        </select>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="saveUser()" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- end of model for adding users -->

<script>
    function addUser() {
        $('#add-user-modal').modal('show');
    }

    function saveUser() {
        $('#add-user-modal').modal('hide');
        toastr["success"]('Successfull');
    }
</script>