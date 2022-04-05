
<!--<a href="/addTradingpartner" class="ui positive basic button">Add Trading Partner</a>-->
<!--Button trigger model-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Trading Partner
</button>
<!--Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Trading Partner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Trading Partner Name</label>
                    <input type="text" name = "tp_name" id="tp_name" class="form-control" >

                    <label>Business Name</label>
                    <input type="text" name = "bu_name" id="bu_name" class="form-control" >

                    <label>Contact Number</label>
                    <input type="number" name="mobile" id="mobile" class="form-control" required>

                    <label>Email Id</label>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnclose" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id ="btn1" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!--End Modal-->

<!--Edit form Modal-->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Trading Partner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="btn btn-info">x</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">


                    <input type="hidden" name = "edit_id" id="edit_id" class="form-control" >

                    <label>Trading Partner Name</label>
                    <input type="text" name = "tp_name1" id="tp_name1" class="form-control" >

                    <label>Business Name</label>
                    <input type="text" name = "bu_name1" id="bu_name1" class="form-control" >

                    <label>Contact Number</label>
                    <input type="number" name="mobile1" id="mobile1" class="form-control" required>

                    <label>Email Id</label>
                    <input type="text" name="email1" id="email1" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnupclose" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id ="btnup" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>


<!--End Edit for Modal-->


<!-- Start delete form Modal-->

<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="delModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delModalLabel">Delete Trading Partner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="btn btn-danger">x</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" name = "del_id" id="del_id" class="form-control" >

                    <label>Trading Partner Name</label>
                    <input type="text" name = "tp_name2" id="tp_name2" class="form-control" >
                    <br><br>
                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<label style="color:#FF0000">Do You Want to Delete?</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btndelclose" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id ="btndel" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<!--end delete form Modal-->



<!--form View-->


<table class="ui celled table">
    <thead>
    <th>ID</th>
    <th>Trading Partner name</th>
    <th>Business name</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Delete Status</th>
    <th>Action</th>

    </thead>
    <tbody id="tpbody" >

    </tbody>
</table>


<script>
    $(document).ready(function (){
       loadTradingpartner();

    })
    function loadTradingpartner(){
        call_api("GET", "/viewtradingpartners", {}, function(Response){ console.log(Response);
            var html = '';

            for(var i in Response){
           
                     html += '<tr>' +
                    '<td>'+ Response[i].id+'</td>' +
                    '<td>'+ Response[i].trading_partner_name+'</td>' +
                    '<td>'+ Response[i].business_name+'</td>' +
                    '<td>'+ Response[i].mobile+'</td>' +
                    '<td>'+ Response[i].email+'</td>' +
                    '<td>'+ Response[i].is_delete+'</td>' +

              '<td><a href="#editModal" data-toggle="modal" data-target="#editModal" id="edit"  data-id="'+ Response[i].id +'"> <i class="icon pencil alternate"></i> Edit</a>&nbsp;|&nbsp;<a href="#delModal" data-toggle="modal" data-target="#delModal" id="delete" data-id="'+ Response[i].id +'"><i class="trash alternate icon"></i> Delete</a></td>' +

                    '</tr>'
            }
            $('#tpbody').html(html)
        },
            function(Response){console.log(Response); debugger;} )
    }

</script>

<!--End Form View-->



<script>
<!--Fetch Existing values in EDIT MODAL-->

  $(document).on('click','#edit',function (){
        var id = $(this).attr('data-id');
        console.log(id);
        call_api("GET", "/editTradingpartners", {'id':id}, function(Response){
            $('#edit_id').val(Response.id);
            $('#tp_name1').val(Response.trading_partner_name);
            $('#bu_name1').val(Response.business_name);
            $('#mobile1').val(Response.mobile);
            $('#email1').val(Response.email);

        }, function(Response){console.log(Response.responseText+"fail"); } )
    });


<!--END-->

<!--FETCH EXISTING VALUES IN DELETE MODAL-->

    $(document).on('click','#delete',function (){
        var id = $(this).attr('data-id');
        console.log(id);
        call_api("GET", "/viewdeleteTradingpartners", {'id':id}, function(Response){
            $('#del_id').val(Response.id);
            $('#tp_name2').val(Response.trading_partner_name);
        }, function(Response){console.log(Response.responseText+"fail"); } )
    });


<!--END-->


<!--Start Insert value-->

    $('#btn1').click(function(){
        var tp_name = $('#tp_name').val();
        var bu_name = $('#bu_name').val();
        var mobile  = $('#mobile').val();
        var email   = $('#email').val();
        call_api("POST", "/tradingpartner", {'tp_name': tp_name ,
            'bu_name' : bu_name,
            'mobile'  : mobile,
             'email'  : email
        }, function(Response){
            loadTradingpartner();
            $('#btnclose').trigger('click');
            debugger;

        }, function(Response){console.log(Response.responseText+"fail"); debugger;} )
    });

<!--END-->

<!--START update values-->


$('#btnup').click(function(){
        var edit_id  = $("#edit_id").val();
        var tp_name1 = $("#tp_name1").val();
        var bu_name1 = $("#bu_name1").val();
        var mobile1  = $("#mobile1").val();
        var email1   = $("#email1").val();



        call_api("POST","/updateTradingpartner",
            {'edit_id' : edit_id,
            'tp_name1' :tp_name1,
             'bu_name1':bu_name1,
             'mobile1' :mobile1,
             'email1'  :email1 },
             function(Response){
                 loadTradingpartner();
                 $('#btnupclose').trigger('click');

                },
         function(Response){console.log(Response.responseText+"fail"); debugger;} )
    })




<!--end -->



<!--START DELETE VALUES-->



$('#btndel').click(function(){
        var del_id  = $("#del_id").val();
        var tp_name2 = $("#tp_name2").val();




        call_api("POST","/deleteTradingpartner",
            {'del_id' : del_id,
            'tp_name2' :tp_name2,
                            },
             function(Response){
                 loadTradingpartner();
                 $('#btndelclose').trigger('click');

                },
         function(Response){console.log(Response.responseText+"fail"); debugger;} )
    })
</script>












