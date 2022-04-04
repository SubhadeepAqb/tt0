<br/>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertModal">
    Insert Storage Shelf
</button>

<!-- Modal -->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Storage Shelf Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Storage Area Id</label>
                    <select type="text" name = "sa_id" id="sa_id" class="form-control" >
                    </select>   

                    <label>Shelf Name</label>
                    <input type="text" name = "shelf_name" id="shelf_name" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnclose" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id ="btn1" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!--Edit Modal-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Trading Partner Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="form-group">
                
                    <input type="text" name = "edit_id" id="edit_id" class="form-control" >
                
                
                    <label>Storage Area Id</label>
                    <select type="text" name = "edit_sa_id" id="edit_sa_id" class="form-control" >
                    </select>   

                    <label>Shelf Name</label>
                    <input type="text" name = "edit_shelf_name" id="edit_shelf_name" class="form-control">
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnclose2" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id ="btn2" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div>

<!--Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" name = "id" id = "id"  class="form-control" >
                
            
                    <p><h3>Do you want to delete this Record?</h3></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnclose3" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" id ="btn3" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>

<table class="ui celled table">
    <thead>
        <th>ID</th>
        <th>Storage Area ID</th>
        <th>Shelf Name</th>
        <th>is_delete</th>
        <th>Action</th>
    </thead>
    <tbody id="tbody">

    </tbody>
</table>

<script>
    $(document).ready(function (){
        loadStorageShelf();

    })
    function loadStorageShelf(){
        call_api("GET", "/shelfdisplay", {}, function(Response){
                console.log(Response);
                var html = '';
                for(var i in Response){
                    html += '<tr>' +
                        '<td>'+ Response[i].id+'</td>' +
                        '<td>'+ Response[i].storage_area_id+'</td>' +
                        '<td>'+ Response[i].shelf_name+'</td>' +
                        '<td>'+ Response[i].is_delete+'</td>' +
                        '<td><a href="javascript:void(0)" onclick = "open_edit_modal('+Response[i].id+')"><i class="icon pencil alternate"></i> Edit</a> &nbsp; &nbsp; &nbsp;' +
                        '&nbsp; &nbsp; &nbsp; <a href="javascript:void(0)" onclick = "open_delete_modal('+Response[i].id+')"><i class="trash alternate icon"></i> Delete</a></td>'+
                        '</tr>'
                }
                debugger;
                $('#tbody').html(html);
                debugger;
            },
            function(Response){console.log(Response); debugger;} )
    }



    $('#btn1').click(function(){
        var sa_id = $('#sa_id').val();
        var shelf_name = $('#shelf_name').val();
        call_api("POST", "/insertshelf", {'sa_id':sa_id, 'shelf_name':shelf_name}, 
        function(Response){
            loadStorageShelf();
            $('#btnclose').trigger('click');
            debugger;

        }, function(Response){console.log(Response.responseText+"fail"); debugger;} )
    })

    $("#insertModal").on('shown.bs.modal', 
    function(){
        call_api("GET","/areadisplay",{},
                    function(Response){
                        $('#sa_id').html('');
                        var html = '<option value="">Choose Storage Area</option>';
                        for(var i in Response)
                        {
                            html+= '<option value='+Response[i].id+'>'+Response[i].storage_area_name+'</option>';
                        }
                        $('#sa_id').html(html);
                    }, 
                    function(Response){
                        debugger;
                        $('#sa_id').html('');
                    }
                )   
        }
    );

    $("#editModal").on('shown.bs.modal', 
    function(){
        call_api("GET","/areadisplay",{},
                    function(Response){
                        $('#edit_sa_id').html('');
                        var html = '<option value="">Choose Storage Area</option>';
                        for(var i in Response)
                        {
                            html+= '<option value='+Response[i].id+'>'+Response[i].storage_area_name+'</option>';
                        }
                        $('#edit_sa_id').html(html);
                    }, 
                    function(Response){
                        debugger;
                        $('#edit_sa_id').html('');
                    }
                )   
        }
    );

    function open_edit_modal(id)
    {
        call_api("GET", "/editStorageShelves", {'id':id}, 
            function(Response){
                var myModal = new bootstrap.Modal(document.getElementById('editModal'),{
                    keyboard: false
                })
                myModal.toggle()
                $('#edit_id').val(Response.id);
                $('#edit_sa_id').val(Response.storage_area_name);
                $('#edit_shelf_name').val(Response.shelf_name);
            },
            function(Response){
                console.log(Response.responseText+"fail");debugger;
        })

    }


    function open_delete_modal(id)
    {
        var myModal = new bootstrap.Modal(document.getElementById('deleteModal'),{
                    keyboard: false
                })
        myModal.toggle()
        $('#btn3').click(function(){
            call_api("POST","/deleterecordsshelf",{'del_id':id},
                function(Response){
                    loadStorageShelf();
                    $('#btnclose3').trigger('click');
                    debugger;
                },
                function(Response){
                    console.log(Response.responseText+"fail"); 
                    debugger;
                }
            )
        })
    }

    $('#btn2').click(function(){
        var edit_id = $('#edit_id').val();
        var edit_sa_id = $('#edit_sa_id').val();
        var edit_shelf_name = $('#edit_shelf_name').val();
        call_api("POST","/updateShelf",{
            'edit_id':edit_id, 
            'edit_sa_id':edit_sa_id, 
            'edit_shelf_name':edit_shelf_name 
        },
            function(Response){
                loadStorageShelf();
                $('#btnclose2').trigger('click');
                debugger;
            },
            function(Response){
                console.log(Response.responseText+"fail"); 
                debugger;
            }
        )
    })
</script>