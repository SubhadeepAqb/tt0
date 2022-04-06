<?php

if(isset($_COOKIE['loginTrue']) && $_COOKIE['loginTrue']!='undefined' && $_COOKIE['loginTrue']!=null 
   && $_COOKIE['loginTrue']>=1647450336 && isset($_COOKIE['type']) && $_COOKIE['type']!='undefined' && $_COOKIE['type']!=null 
   && $_COOKIE['type']=='admin')
   {

?>

<!--<a href="/addUser" class="ui positive basic button">add user</a>-->
<br xmlns="http://www.w3.org/1999/html">
<button type="button" class="ui positive basic button" data-toggle="modal" data-target="#addUserModal">
    Add User
</button>




<!--add user Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ui top attached block header" >
                <h2 class="modal-title" id="exampleModalLabel">Add User</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row "  id="viewForm">
                    <div class="col-9">
                        <div class = "row">
                            <div class = "col">
                                <div class="form-group">
                                    <label>Select User Type</label>
                                    <select name="user_type" id="user_type">
                                         <option  selected disabled ><---Select From The List---></option>
                                         <option value="admin">Admin</option>
                                         <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                   <lebel>Name</lebel>
                                   <input type="text" name = "name" id ="name" class="form-control"  required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                     <label>Email</label>
                                     <input type="email" name = "email" id="email" class="form-control" required >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name = "password" id ="password" class="form-control" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                     <label>Confirm Password</label>
                                     <input type="password" name = "conpass" id ="conpass" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnclose" class="ui secondary button" data-dismiss="modal">Close</button>
                <div class="row">
                    <div class="col">
                        <button type="submit" id="addUser" class="ui primary button">Add User</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end add user modal-->



<!--edit user Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ui top attached block header" >
                <h2 class="modal-title" id="exampleModalLabel">Edit User</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row "  id="viewForm">
                    <div class="col-9">
                        <div class = "row">
                            <div class = "col">
                                <div class="form-group">
                                    <input type="hidden" name ="edit_id" id="edit_id" class="form-control" >
                                    <label>User Type</label>
                                    <select name="edit_user_type" id="edit_user_type">
                                         <option  selected disabled ><---Select From The List---></option>
                                         <option value="admin">Admin</option>
                                         <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                     <label>Status</label>
                                        <select name="edit_status" id="edit_status">
                                             <option  selected disabled ><---Select From The List---></option>
                                             <option value="Pending">Pending</option>
                                             <option value="Rejected">Reject</option>
                                             <option value="Approved">Approve</option>
                                         </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name = "edit_name" id="edit_name" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name = "edit_email" id="edit_email" class="form-control" >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name = "edit_password" id ="edit_password" class="form-control" required>                                
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                     <label>Confirm Password</label>
                                     <input type="password" name = "edit_conpass" id ="edit_conpass" class="form-control" required>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col">
                        <button type="button" id="close" class="ui secondary button" data-dismiss="modal">Close</button>
                        <button type="submit" id="editUser" class="ui primary button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end edit modal-->


<!-- open permission modal -->

<div class="modal fade" id="permissionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ui top attached block header" >
                <h2 class="modal-title" id="exampleModalLabel">Set Permission</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row "  id="viewForm">
                    <div class="col-9">
                        <div class = "row">
                            <div class = "col">
                                <div class="form-group">
                                    <input type="hidden" name ="edit_id" id="edit_id" class="form-control" >
                                    <label>Asign Role</label>
                                    <select name="asign_role" id="asign_role">
                                         <option  selected disabled ><---Select From The List---></option>
                                         <option value="read">Read</option>
                                         <option value="write">Write</option>
                                         <option value="both">Both</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                     <label>Asign Moule</label>
                                        <select name="asign_module" id="asign_module">
                                             <option  selected disabled ><---Select From The List---></option>
                                             <option value="Pending">Pending</option>
                                             <option value="Rejected">Reject</option>
                                             <option value="Approved">Approve</option>
                                         </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name = "edit_name" id="edit_name" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name = "edit_email" id="edit_email" class="form-control" >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name = "edit_password" id ="edit_password" class="form-control" required>                                
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                     <label>Confirm Password</label>
                                     <input type="password" name = "edit_conpass" id ="edit_conpass" class="form-control" required>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col">
                        <button type="button" id="close" class="ui secondary button" data-dismiss="modal">Close</button>
                        <button type="submit" id="editUser" class="ui primary button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end permission modal -->


<!--show user list from database-->
<table class="ui celled table" style="text-align: center">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>User Type</th>
        <th>Is Deleted</th>
        <th>Registered On</th>
        <th>Status</th>
        <th colspan="2">Action</th>
    </thead>
    <tbody id="tbody">

    </tbody>
</table>
<!--end show user list from database-->


<!--load data from database and displayed here in table form-->
<script>
    $(document).ready(function () {
        loadUser();
    });

    function loadUser(){
       // window.alert('load User');
        call_api("GET", "/users", {}, function(Response){ console.log(Response);
            var html = '';
            for(var i in Response){

                    html += '<tr>' +
                    '<td>'+ Response[i].name+'</td>' +
                    '<td>'+ Response[i].email+'</td>' +
                    '<td>'+ Response[i].password+'</td>' +
                    '<td>'+ Response[i].user_type+'</td>' +
                    '<td>'+ Response[i].is_delete+'</td>' +
                    '<td>'+ new Date(Response[i].timestamp*1000)+'</td>' +
                    '<td>'+ Response[i].status+'</td>' +
                    '<td><a href = "javascript:void(0)" onclick = "open_edit_modal('+Response[i].id+')" ><i class="icon pencil alternate"></i> Edit</a>'+                    
                    '<td><a href = "javascript:void(0)" onclick = "open_permission_modal('+Response[i].id+')" ><i class="icon shield alternate"></i>Permission</a>'+
                    '<a href = "javascript:void(0)" onclick="open_delete('+ Response[i].id +')">&nbsp;&nbsp;&nbsp;<i class="trash alternate icon"></i> Delete</a></td>'+
                    '</tr>'
            }
            $('#tbody').html(html)
        },
        function(error){
                        console.log(error,"error")
                    })
    };
//<!--end display-->


// <!--after click save button insert api call-->
    $("#addUser").click(function(){
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var conpass = $("#conpass").val();
        var user_type = $("#user_type").val();

        if(email == null || email == "" || user_type == null || user_type == "" || password == null || password == "" || 
        conpass == null || conpass == ""){

        window.alert('Please make sure that all fields are filled up')
        }
        
        if(password === conpass){

        if(email!=null && email!="" && user_type != null && user_type != "" && password != null && password != ""  && 
        conpass != null && conpass != ""){

        call_api("POST", "/addUser",
            {'name':name, 'email':email,'password':password,'user_type':user_type},
            function(Response){
                if (Response.success == true) {
                    alert(Response.msg);
                    loadUser();
                    $('#btnclose').trigger('click');
                    //debugger;
                }
            },
            function(Response){console.log(Response.responseText+"fail");}
        )
        }
        }
        else
            {
                window.alert('Confirm Password Does Not Matched!!')
            }
    });
//<!--end insert api call-->


//<!--api call for showing data in edit form-->
    // $(document).on('click','#edit',function (){
    //     var id = $(this).attr('data-id');
    //     //alert(id);
    //     call_api("GET", "/loadUser", {'id': id}, function(Response){
    //        // console.log(Response);
    //         $('#p_id').val(Response.id);
    //         $('#p_name').val(Response.user_name);
    //         $('#p_desc').val(Response.description);
    //         $('#p_quantity').val(Response.quantity);
    //         $('#p_type').val(Response.type);
    //
    //     }, function(Response){console.log(Response.responseText+"fail"); } )
    // });
//<!--end api call for showing data in edit form-->



//<!--after click save button update api call-->
    $("#editUser").click(function(){
        var edit_id = $("#edit_id").val();
        var edit_status = $("#edit_status").val()
        var edit_name = $("#edit_name").val();
        var edit_email = $("#edit_email").val();
        var edit_password = $("#edit_password").val();
        var edit_user_type = $("#edit_user_type").val();
        var edit_conpass = $("#edit_conpass").val();
        

        if(edit_name == null || edit_name == "" || edit_status == null || edit_status == "" || edit_email == null || edit_email == "" || edit_user_type == null || edit_user_type == "" || edit_conpass == null || edit_password == "" || edit_conpass == null || edit_conpass == ""){

        window.alert('Please make sure that all fields are filled up')
        }
        
        if(edit_password === edit_conpass){

        if(edit_name != null && edit_name != "" && edit_status != null && edit_status != "" && edit_email!=null && edit_email!="" && edit_user_type != null && edit_user_type != "" && edit_password != null && edit_password != ""  && 
        edit_conpass != null && edit_conpass != ""){


        call_api("POST", "/updateUser",
            {'edit_id':edit_id,'edit_status':edit_status,'edit_name':edit_name, 'edit_email':edit_email,'edit_password':edit_password,'edit_user_type':edit_user_type},
            function(Response){
                 if (Response.success == true) {
                    alert(Response.msg);
                    loadUser();
                    $('#close').trigger('click');
                    //debugger;
                }
            },
            function(Response){console.log(Response.responseText+"fail"); debugger;}
        )
        }
        }

        else
            {
                window.alert('Confirm Password Does Not Matched!!')
            }
    });
//<!--end update api call-->



//<!--api call for delete particular user-->
    function open_delete(id){
        // var id = $(this).attr('data-id');
        if(confirm("are you sure you want to delete this user")) {
            call_api("POST", "/deleteUser", {'id':id},
                function (Response) {
                    if (Response.success == true) {
                        alert(Response.msg);
                        loadUser();
                        
                    }
                 },
                function (Response) {
                    console.log(Response.responseText + "fail");debugger;
                }
            )
        }
    };
//<!--end api call for delete particular user-->




//<!--api call for load particular user in edit modal-->
    function open_edit_modal(id){
        call_api("GET", "/loadUser", {'id':id},
            function(Response){
                //$('#editModal').modal().toggle();
                var myModal = new bootstrap.Modal(document.getElementById('editModal'), {
                    keyboard: false
                })
                myModal.toggle();
                $('#edit_id').val(Response.id);
                $('#edit_status').val(Response.status);
                $('#edit_name').val(Response.name);
                $('#edit_email').val(Response.email);
                $('#edit_password').val(Response.password);
                $('#edit_conpass').val(Response.password);
                $('#edit_user_type').val(Response.user_type);
                //console.log(Response);
            },
            function(Response){console.log(Response.responseText+"fail");debugger;
            }
        )
    };
// end api call for load particular user in edit modal-->




//<!--api call for load particular user in permission modal-->

function open_permission_modal(id){
        call_api("GET", "/loadUser", {'id':id},
            function(Response){
                //$('#editModal').modal().toggle();
                var myModal = new bootstrap.Modal(document.getElementById('permissionModal'), {
                    keyboard: false
                })
                myModal.toggle();
                $('#edit_id').val(Response.id);
                $('#edit_status').val(Response.status);
                $('#edit_name').val(Response.name);
                $('#edit_email').val(Response.email);
                $('#edit_password').val(Response.password);
                $('#edit_conpass').val(Response.password);
                $('#edit_user_type').val(Response.user_type);
                //console.log(Response);
            },
            function(Response){console.log(Response.responseText+"fail");debugger;
            }
        )
    };


// end api call for load particular user in permission modal-->



</script>
<?php
        }
?>




