 <div class="modal fade " role="dialog" tabindex="-1" id="new_user_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content mod_gem_rec">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h1 class="text-center modal-title">Create New User</h1></div>
                <div class="modal-body">

                    <form method="post" action="includes/create_new_user.php" enctype="multipart/form-data">
                        <input class="form-control input-lg gem_rec" type="text" name="name" placeholder="User Name">
                        <input class="form-control input-lg gem_rec" type="password" name="password" placeholder="Password">

                         <select class="form-control input-lg univ-select" name="user_role">
                                            <optgroup label=" Select user Role">
                                            
                                            <option value="admin" selected="">admin</option>

                                           
                                            </optgroup>
                                        </select>
                       
  
                </div>


                <div class="modal-footer">
                   <p class="help-block gem_rec"><span class="war-note">Note:</span> You are giving Administrative Rights to the user.</p>
                    <button class="btn btn-danger btn-lg btn-gem-cust " type="submit" name="create_user">Create</button>
                    <button class="btn btn-default btn-lg " type="reset" data-dismiss="modal">Close</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

