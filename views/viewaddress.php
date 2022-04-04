<br/>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addressModal">
    Insert Address
</button>

<!-- Modal -->
<div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                   
                <label>Trading Partner</label>
                <select type="text" name = "tp_id" id="tp_id" class="form-control" >
                </select>
                <label>Location Id</label>
                <select type="text" name = "loc_id" id="loc_id" class="form-control" >
                </select>
                
                <label>Type</label>
                <select id="selectType" class="form-control">
                            <option selected>Select one</option>
                            <option value="location">location</option>
                            <option value="trading_partner">trading_partner</option>
                </select>
                
                <label>Address Line 1</label>
                <input type="text" name = "add1" id="add1" class="form-control" >

                <label>Address Line 2</label>
                <input type="text" name = "add2" id="add2" class="form-control" >

                <label>Pincode</label>
                <input type="text" name = "pin" id="pin" class="form-control" >

                <label>City</label>
                <input type="text" name = "city" id="city" class="form-control" >


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
                <h5 class="modal-title" id="exampleModalLabel">Edit Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">

                <input type="text" name="edit_id" id="edit_id" class="form-control" >

                <label>Trading Partner Id</label>
                <select  name = "tp_id_edit" id="tp_id_edit" class="form-control" >
                </select>

                <label>Location Id</label>
                <select  name = "loc_id_edit" id="loc_id_edit" class="form-control" >
                </select>
                
                <label>Type</label>
                <select id="selectType_edit" class="form-control">
                            <option selected>Select one</option>
                            <option value="location">location</option>
                            <option value="trading_partner">trading_partner</option>
                </select>
                
                <label>Address Line 1</label>
                <input type="text" name = "add1_edit" id="add1_edit" class="form-control" >

                <label>Address Line 2</label>
                <input type="text" name = "add2_edit" id="add2_edit" class="form-control" >

                <label>Pincode</label>
                <input type="text" name = "pin_edit" id="pin_edit" class="form-control" >

                <label>City</label>
                <input type="text" name = "city_edit" id="city_edit" class="form-control" >


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnclose2" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id ="btn2" class="btn btn-primary">Save</button>
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
        <th>Trading Partner Id</th>
        <th>Location Id</th>
        <th>Type</th>
        <th>Address Line 1</th>
        <th>Address Line 2</th>
        <th>Pincode</th>
        <th>City</th>
        <th>is_delete</th>
        <th>Action</th>
    </thead>
    <tbody id="tbody">

    </tbody>
</table>

<script>
    $(document).ready(function (){
        loadAddress();

    })
    function loadAddress(){
        call_api("GET", "/addressdisplay", {}, function(Response){
                console.log(Response);
                var html = '';
                for(var i in Response){
                    html += '<tr>' +
                        '<td>'+ Response[i].id+'</td>' +
                        '<td>'+ Response[i].trading_partner_id+'</td>' +
                        '<td>'+ Response[i].location_id+'</td>' +
                        '<td>'+ Response[i].type+'</td>' +
                        '<td>'+ Response[i].address_line1+'</td>' +
                        '<td>'+ Response[i].address_line2+'</td>' +
                        '<td>'+ Response[i].pincode+'</td>' +
                        '<td>'+ Response[i].city+'</td>' +
                        '<td>'+ Response[i].is_delete+'</td>' +
                        '<td><a href="javascript:void(0)" onclick="open_edit_modal('+Response[i].id+')"><i class="icon pencil alternate"></i>Edit</a> &nbsp; &nbsp; &nbsp;' +
                        '&nbsp; &nbsp; &nbsp; <a href="javascript:void(0)" onclick="open_delete_modal('+Response[i].id+')"><i class="trash alternate icon"></i>Delete</a></td>' +
                        '</tr>'
                }
                $('#tbody').html(html)
            },
            function(Response){console.log(Response); debugger;} )
    }

    $('#btn1').click(function(){
        
        var tp_id = $('#tp_id').val();
        var loc_id = $('#loc_id').val();
        var type = $('#selectType').val();
        var add1 = $('#add1').val();
        var add2 = $('#add2').val();
        var pin = $('#pin').val();
        var city = $('#city').val();
        call_api("POST", "/insertaddress", {'tp_id':tp_id, 'loc_id':loc_id, 'type':type, 'add1':add1, 'add2':add2, 'pin':pin, 'city':city}, 
            function(Response){
                debugger;
                loadAddress();
                $('#btnclose').trigger('click');
                debugger;

            }, 
            function(Response){
                console.log(Response.responseText+"fail"); 
                debugger;
            } 
        )
    })

$("#addressModal").on('shown.bs.modal', function(){
    call_api("GET","/tradingdisplay",{},function(Response){
            $('#tp_id').html('');
            var html = '<option value="">Choose Trading Partner</option>';
            for(var i in Response)
            {
                html+= '<option value='+Response[i].id+'>'+Response[i].trading_partner_name+'</option>';
            }
            $('#tp_id').html(html);
        }, 
        function(Response){
            debugger;
            $('#tp_id').html('');
        })

    call_api("GET","/locationdisplay",{},function(Response){
            $('#loc_id').html('');
            var html = '<option value="">Choose Location</option>';
            for(var i in Response)
            {
                html+= '<option value='+Response[i].id+'>'+Response[i].location_name+'</option>';
            }
            $('#loc_id').html(html);
        }, 
        function(Response){
            debugger;
            $('#loc_id').html('');
        }
    )
});

// $("#editModal").on('shown.bs.modal', function(){
//     call_api("GET","/tradingdisplay",{},function(Response){
//             $('#tp_id_edit').html('');
//             var html = '<option value="">Choose Trading Partner</option>';
//             for(var i in Response)
//             {   
//                 html+= '<option  value='+Response[i].id+' selected>'+Response[i].trading_partner_name+'</option>';
//             }
//             $('#tp_id_edit').html(html);
//         }, 
//         function(Response){
//             debugger;
//             $('#tp_id_edit').html('');
//         })

//     call_api("GET","/locationdisplay",{},function(Response){
//             $('#loc_id_edit').html('');
//             var html = '<option value="">Choose Location</option>';
//             for(var i in Response)
//             {
//                 html+= '<option value='+Response[i].id+'>'+Response[i].location_name+'</option>';
//             }
//             $('#loc_id_edit').html(html);
//         }, 
//         function(Response){
//             debugger;
//             $('#loc_id_edit').html('');
//         }
//     )
// });

function afterModalLoad(idd, lid)
{
    call_api("GET","/tradingdisplay",{},function(Response){
            $('#tp_id_edit').html('');
            var html = '<option value="">Choose Trading Partner</option>';
            for(var i in Response)
            {   
                if(Response[i].id==idd){
                    html+= '<option  value='+Response[i].id+' selected>'+Response[i].trading_partner_name+'</option>';
                }
                else
                {
                    html+= '<option  value='+Response[i].id+'>'+Response[i].trading_partner_name+'</option>';
                }
                
            }
            $('#tp_id_edit').html(html);
        }, 
        function(Response){
            debugger;
            $('#tp_id_edit').html('');
        })

    call_api("GET","/locationdisplay",{},function(Response){
            $('#loc_id_edit').html('');
            var html = '<option value="">Choose Location</option>';
            for(var i in Response)
            {
                if(Response[i].id==lid)
                {
                    html+= '<option value='+Response[i].id+' selected>'+Response[i].location_name+'</option>';
                }
                else
                {
                    html+= '<option value='+Response[i].id+'>'+Response[i].location_name+'</option>';
                }
                
            }
            $('#loc_id_edit').html(html);
        }, 
        function(Response){
            debugger;
            $('#loc_id_edit').html('');
        }
    )
}

function open_edit_modal(id)
{
    
    call_api("GET","/editAddresses", {'id':id},
    function(Response)
    {
        var myModal = new bootstrap.Modal(document.getElementById('editModal'),{
                    keyboard: false
                })
                myModal.toggle()
                $('#edit_id').val(Response.id);
                $('#tp_id_edit').val(Response.trading_partner_id);
                $('#loc_id_edit').val(Response.location_id);
                $('#selectType_edit').val(Response.type);
                $('#add1_edit').val(Response.address_line1);
                $('#add2_edit').val(Response.address_line2);
                $('#pin_edit').val(Response.pincode);
                $('#city_edit').val(Response.city);
                afterModalLoad(Response.trading_partner_id, Response.location_id);
    },
    function(Response)
    {
        console.log(Response.responseText+"fail");
        debugger;
    })

    
}

function open_delete_modal(id){
        var myModal = new bootstrap.Modal(document.getElementById('deleteModal'),{
                    keyboard: false
                })
        myModal.toggle()
        $('#btn3').click(function(){
            call_api("POST","/deleterecordsaddress",{'del_id':id},
                function(Response){
                    loadAddress();
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
        var tp_id_edit = $('#tp_id_edit').val();
        var loc_id_edit = $('#loc_id_edit').val();
        var selectType_edit = $('#selectType_edit').val();
        var add1_edit = $('#add1_edit').val();
        var add2_edit = $('#add2_edit').val();
        var pin_edit = $('#pin_edit').val();
        var city_edit = $('#city_edit').val();
        call_api("POST","/updateAddress",{
            'edit_id':edit_id, 
            'tp_id_edit':tp_id_edit, 
            'loc_id_edit':loc_id_edit, 
            'selectType_edit':selectType_edit, 
            'add1_edit':add1_edit,
            'add2_edit':add2_edit,
            'pin_edit':pin_edit,
            'city_edit':city_edit
        },
            function(Response){
                loadAddress();
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