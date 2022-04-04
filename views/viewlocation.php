<br/>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Insert Location
</button>




<!-- Insert Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Location Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Location Name</label>
                    <input type="text" name = "lname" id="lname" class="form-control" >
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" name = "id" id = "id"  class="form-control" >
                
                    <label>Location Name</label>
                    <input type="text" name = "loc_name" id="loc_name" class="form-control" >
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
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" name = "del_id" id = "del_id"  class="form-control" >
                
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
        <th>Location Name</th>
        <th>is_delete</th>
        <th>Action</th>
    </thead>
    <tbody id="tbody">

    </tbody>
</table>


<script>
    $(document).ready(function (){
        loadLocation();

    })
    function loadLocation(){
        call_api("GET", "/locationdisplay", {}, 
            function(Response){
                console.log(Response);
                var html = '';
                for(var i in Response){
                    html += '<tr>' +
                        '<td>'+ Response[i].id+'</td>' +
                        '<td>'+ Response[i].location_name+'</td>' +
                        '<td>'+ Response[i].is_delete+'</td>' +
                        '<td><a href="javascript:void(0)" onclick="open_edit_modal('+Response[i].id+')"><i class="icon pencil alternate"></i>Edit</a> &nbsp; &nbsp; &nbsp;' +
                        '&nbsp; &nbsp; &nbsp; <a href="javascript:void(0)" onclick="open_delete_modal('+Response[i].id+')"><i class="trash alternate icon"></i>Delete</a></td>' +
                        '</tr>'
                }
                $('#tbody').html(html)
            },
            function(Response){
                console.log(Response); 
                debugger;
            } 
        )
    }


    //On clicking Insert button in the Insert Modal window the following code executes
    $('#btn1').click(function(){
        var lname = $('#lname').val();
        call_api("POST", "/insertlocation", {'lname':lname}, 
            function(Response){
                loadLocation();
                $('#btnclose').trigger('click');
                debugger;

            }, 
            function(Response){
                console.log(Response.responseText+"fail"); 
                debugger;
            }
        )
    })



    //On clicking Yes in the Edit modal window the following code executes
    $('#btn2').click(function(){
        var updated_lname = $('#loc_name').val();
        var id = $('#id').val();
        call_api("POST","/updatelocation",{
            'id':id, 
            'new_lname':updated_lname
        },
            function(Response){
                loadLocation();
                $('#btnclose2').trigger('click');
                debugger;
            },
            function(Response){
                console.log(Response.responseText+"fail"); 
                debugger;
            }
        )
    })


    function open_edit_modal(id)
    {   debugger;
        call_api("GET", "/editlocations", {'id':id}, 
            function(Response){
                var myModal = new bootstrap.Modal(document.getElementById('editModal'),{
                    keyboard: false
                })
                myModal.toggle()
                $('#id').val(Response.id);
                $('#loc_name').val(Response.location_name);
            },
            function(Response){
                console.log(Response.responseText+"fail");
                debugger;
            }
        )
    }




    function open_delete_modal(id){
        var myModal = new bootstrap.Modal(document.getElementById('deleteModal'),{
                    keyboard: false
                })
        myModal.toggle();
        $('#btn3').click(function(){
            call_api("POST","/deleterecordslocation",{'id':id},
                function(Response){
                    loadLocation();
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

//     function open_delete_modal(id){
//     // var id = $(this).attr('data-id');
//     if(confirm("are you sure you want to delete this product")) 
//     {
//         console.log(id);
//         call_api("POST", "/deleterecords", {'id': id},
//             function (Response) {
//                // debugger;
//                 if (Response.success == true) {
//                     alert(Response.msg);
//                     loadLocation();
//                     //debugger;
//                 }
//              },
//             function (Response) {
//                 console.log(Response.responseText + "fail");
//             }
//         )
//     }
// };
</script>

