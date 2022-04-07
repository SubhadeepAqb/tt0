
<!-- <a href="/displayTransactions" class="ui positive basic button">Add_new_Transactions</a> -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#transactionModal">
Add New Transactions
</button>

<!-- Modal -->
<div class="modal fade" id="transactionModal" tabindex="-1" role="dialog" aria-labelledby="transactionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transactionModalLabel">Add Transactions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div text-align="center">
                <div class="form-group">
                    <label>Order Type</label>
                    <select name = "order" id = "order"  class="form-control" >
                                <option id = "disable" selected disabled class = "form-control">--purchase/sale--</option>
                                <option  class = "form-control" value="purchase">Purchase Order</option>
                                <option  class = "form-control" value="sale">Sales Order</option>
                    </select><hr>

                    <label>Trading Partner ID</label>
                    <select type="text" name = "TradingPartnerID" id="TradingPartnerID" class="form-control" >
                    </select><hr>

                    <label>Delivery status</label>
                    <select name = "DeliveryStatus" id = "DeliveryStatus" class="form-control" >
                                <option id = "disable" selected disabled class = "form-control">--deliverystatus--</option>
                                <option  class = "form-control" value="incomplete">Incomplete</option>
                                <option  class = "form-control" value="complete">Complete</option>
                    </select><hr>

                    <label>Delivery Address</label>
                    <select type="text" id = "Deliveryaddress" name = "Deliveryaddress" class="form-control" required></select>
                </div>
            </div>



            <div class="modal-footer">
                <button type="button" id="btnclose" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" id ="insertbtn" class="btn btn-primary">Save</button> -->
                <button type="button" id ="insertbtn" class="btn btn-primary" data-toggle="modal" data-target="#nextModal" data-dismiss="modal">Save & Next</button>
                <!-- id ="nextbtn"<a type ="button" id="next" class="ui inverted brown button" href="javascript:void(0)" onclick="open_next_modal()">Next</a> -->
                
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Edit Modal Start-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type = "hidden" name="transaction_id" id="transaction_id" class="form-control" >
                    <label>Order Type</label>
                    <select name = "orders" id = "orders" class="form-control" >
                                <option id = "disable" selected disabled class = "form-control">--select--</option>
                                <option  class = "form-control" value="purchase">Purchase Order</option>
                                <option  class = "form-control" value="sale">Sales Order</option>
                    </select><hr>

                    <label>Trading Partner ID</label>
                    <select type="text" name = "TPID" id="TPID" class="form-control" ></select><hr>

                    <label>Delivery status</label>
                    <select name = "DS" id = "DS" class="form-control" >
                                <option id = "disable" selected disabled class = "form-control">--select--</option>
                                <option  class = "form-control" value="incomplete">Incomplete</option>
                                <option  class = "form-control" value="complete">Complete</option>
                    </select><hr>
                    

                    <label>Delivery Address</label>
                    <select type="text" id = "Daddress" name = "Daddress" class="form-control" required></select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnupclose" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id ="btn_up" class="btn btn-primary">Update</button>
                <button type ="button" id="next" class="ui inverted brown button">Next</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal End-->



<!-- Delete Modal Start-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type = "hidden" name="del_id" id="del_id" class="form-control" >

                    <label>Do you want to delete this data?</label>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btndeleteclose" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id ="btn_delete" class="btn btn-primary">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal End-->

<!--next modal-->
<div class="modal fade" id="nextModal" tabindex="-1" role="dialog" aria-labelledby="nextModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nextModalLabel">Add Transactions Line Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div text-align="center">
                <div class="form-group">
                    
                    <!-- <label>Transaction_ID</label> -->
                    <input type="text" name = "TransactionID" id="TransactionID" class="form-control" ><hr>

                    <label>Product_ID</label>
                    <select  id = "ProductId" name = "ProductId" class="form-control" required></select><hr>

                    <label>Order Quantity</label>
                    <input type = "text" name = "OQ" id = "OQ"  class="form-control" ><hr>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" id="btnclosenext" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id ="insertnext" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!--Next Modal End-->



<table class="ui celled table">
    <thead>
        <th>id</th>
        <th>transaction_type</th>
        <th>trading_partner_id</th>
        <th>status</th>
        <th>delivery_address</th>
        <th>timestamp</th>
        <th>is_delete</th>
        <th>edit</th>
        <th>delete</th>
    </thead>

    <tbody id="tbody">
    </tbody>
</table>





<table class="ui celled table">
    <thead>
        <th>id</th>
        <th>transaction_id</th>
        <th>product_id</th>
        <th>order_quantity</th>
        <th>is_delete</th>
        <th>timestamp</th>
        <th>edit</th>
        <th>delete</th>
    </thead>

    <tbody id="ntbody">
    </tbody>
</table>



<script>

//show the tables
    $(document).ready(function(){
        loadTransaction();
    })

    function loadTransaction(){
        call_api("GET","/displayTransactions", {}, 
            function(Response){ console.log(Response);
                var html = '';
                for(var i in Response){
                    html += '<tr>' +
                            '<td>'+ Response[i].id+'</td>'+
                            '<td>'+ Response[i].transaction_type+'</td>' +
                            '<td>'+ Response[i].trading_partner_name+'</td>' +
                            '<td>'+ Response[i].status+'</td>' +
                            '<td>'+ Response[i].city+'</td>' +
                            '<td>'+ Response[i].timestamp+'</td>' +
                            '<td>'+ Response[i].is_delete+'</td>' +
                            '<td><a href = "javascript:void(0)" onclick = "open_edit_modal('+Response[i].id+')"><i class="icon pencil alternate"></i> Edit</a></td>'+
                            '<td><a href = "javascript:void(0)" onclick = "open_delete_modal('+Response[i].id+')"><i class="trash alternate icon"></i> Delete</a></td>' 
                            '</tr>'
                            
                    }
                $('#tbody').html(html)
                },
                function(Response)
                {
                    console.log(Response); debugger;
                }   
    )}
    

//insert transaction
    $('#insertbtn').click(function(){
            //var order = document.$("#order").value;
            var order = $("#order").val();
            var TradingPartnerID = $("#TradingPartnerID").val();
            var DeliveryStatus = $("#DeliveryStatus").val();
            var Deliveryaddress = $("#Deliveryaddress").val();
            // var LineItems[] = ['productId'=>1,
            //                  'quantity'=>10];

        call_api("POST", "/inserttransactions", 
            {
                'order':order,
                'TradingPartnerID':TradingPartnerID,
                'DeliveryStatus':DeliveryStatus,
                'Deliveryaddress':Deliveryaddress,
                // 'lineItems':Json_encode(LineItems[])
            },
                function(Response){
                    $('#TransactionID').val(Response.id);
                    loadTransaction();
                    $('#btnclose').trigger('click');
                    debugger;

                },
                function(Response){
                    console.log(Response.responseText+"fail");debugger;
                }
        )
    })




  ////view in dropdown
// $("#transactionModal").on('shown.bs.modal', function(){
//     call_api("GET","/tradingpartnerDisplay", {}, function(Response){
//         debugger;
//         $('#TradingPartnerID').html('');
//         var html = '<option value="">Choose Trading Partner ID</option>';
//         for(var i in Response)
//         {
//             html+= '<option value='+Response[i].id+'>'+Response[i].trading_partner_name+'</option>';
//         }
//         $('#TradingPartnerID').html(html);
//     }, 
//     function(Response){
//         debugger;
//         $('#TradingPartnerID').html('');
//     })
    
//     call_api("GET","/deliveryDisplay",{},function(Response){
//         debugger;
//         $('#Deliveryaddress').html('');
//         var html = '<option value="">Choose Delivery Address</option>';
//         for(var i in Response)
//         {
//             html+= '<option value='+Response[i].id+'>'+Response[i].city+'</option>';
//         }
//         $('#Deliveryaddress').html(html);
//     }, 
//     function(Response){
//         debugger;
//         $('#Deliveryaddress').html('');
//     })
// });



$("#transactionModal").on('shown.bs.modal', function(){
    call_api("GET","/viewtradingpartners", {}, function(Response){
            //debugger;
            $('#TradingPartnerID').html('');
            var html = '<option value="">Choose Trading Partner</option>';
            for(var i in Response)
            {
                html+= '<option value='+Response[i].id+'>'+Response[i].trading_partner_name+'</option>';
            }
            $('#TradingPartnerID').html(html);
        }, 
        function(Response){
            debugger;
            $('#TradingPartnerID').html('');
        })

    call_api("GET","/addressdisplay",{},function(Response){
            //debugger;
            $('#Deliveryaddress').html('');
            var html = '<option value="">Choose Location</option>';
            for(var i in Response)
            {
                html+= '<option value='+Response[i].id+'>'+Response[i].city+'</option>';
            }
            $('#Deliveryaddress').html(html);
        }, 
        function(Response){
            debugger;
            $('#Deliveryaddress').html('');
        }
    )
})





//edit button click
    function open_edit_modal(id){
        //debugger;
        call_api("GET", "/editTransactions",
         {'id':id}, 
            function(Response){
                //$('#editModal').modal().toggle();
                var myModal = new bootstrap.Modal(document.getElementById('editModal'), {
                    keyboard: false
                })
                myModal.toggle()
                $('#orders').val(Response.transaction_type);
                $('#TPID').val(Response.trading_partner_id);
                $('#DS').val(Response.status);
                $('#Daddress').val(Response.delivery_address);
                $('#transaction_id').val(Response.id);
                //console.log(Response);
            
            },
            function(Response){
                console.log(Response.responseText+"fail");debugger;
            })
    }




//foreign key drop down for edit modal

$("#editModal").on('shown.bs.modal', function(){
    call_api("GET","/viewtradingpartners", {}, function(Response){
            debugger;
            $('#TPID').html('');
            var html = '<option value="">Choose Trading Partner</option>';
            for(var i in Response)
            {
                html+= '<option value='+Response[i].id+'>'+Response[i].trading_partner_name+'</option>';
            }
            $('#TPID').html(html);
        }, 
        function(Response){
            debugger;
            $('#TPID').html('');
        })

    call_api("GET","/addressdisplay",{},function(Response){
            debugger;
            $('#Daddress').html('');
            var html = '<option value="">Choose Location</option>';
            for(var i in Response)
            {
                html+= '<option value='+Response[i].id+'>'+Response[i].city+'</option>';
            }
            $('#Daddress').html(html);
        }, 
        function(Response){
            debugger;
            $('#Daddress').html('');
        }
    )
})

//update transaction
    $('#btn_up').click(function()
    {
        var orders = $("#orders").val();
        var TPID = $("#TPID").val();
        var DS = $("#DS").val();
        var Daddress = $("#Daddress").val();
        var transaction_id = $("#transaction_id").val();

        call_api("POST","/updateTransactions",
            {'id':transaction_id,
            'orders':orders,
            'TPID':TPID,
            'DS':DS,
            'Daddress':Daddress
            },
            function(Response){
                loadTransaction();
                $('#btnupclose').trigger('click');
            },
            function(Response){
                console.log(Response.responseText+"fail"); debugger;
            })
    })



//////open delete modal/////


    function open_delete_modal(id)
    {
        debugger;
        var myModal = new bootstrap.Modal(document.getElementById('deleteModal'),{
                    keyboard:false
                })
        myModal.toggle()
        $('#btn_delete').click(function(){
            call_api("POST", "/deleteTransactions", 
            {'del_id':id},
            function(Response){
                loadTransaction();
                $('#btndeleteclose').trigger('click');
                debugger;
            },
            function(Response){
                    console.log(Response.responseText+"fail"); 
                    debugger;
            })
        })

    }






//////next button modal show///////

$('#next').click(function()
    {
        call_api("GET", "/nextModal",{},
        function(Response)
        {
            debugger;

            var OrderQuantity = $("#order").val();
            var TradingPartnerID = $("#TradingPartnerID").val();
            var DeliveryStatus = $("#DeliveryStatus").val();
            var Deliveryaddress = $("#Deliveryaddress").val();
        },
        function(Response){
            console.log(Response.responseText+"fail"); debugger;
            })
    })

  

    function open_next_modal(){
        $("#nextModal").modal();

    }


    $("#nextModal").on('show.bs.modal', function () {
    $("#transactionModal").modal("hide");
});






////next modal on load table display/////

$(document).ready(function(){
        loadTransactionLineItems();
    })

    function loadTransactionLineItems(){
        call_api("GET","/displayTransactionLineItem", {}, 
            function(Response){ console.log(Response);
                var html = '';
                for(var i in Response){
                    html += '<tr>'+
                            '<td>'+ Response[i].id+'</td>'+
                            '<td>'+ Response[i].transaction_id+'</td>' +
                            '<td>'+ Response[i].product_id+'</td>' +
                            '<td>'+ Response[i].order_quantity+'</td>' +
                            '<td>'+ Response[i].is_delete+'</td>' +
                            '<td>'+ Response[i].timestamp+'</td>' +
                            '<td><a href = "javascript:void(0)" onclick = "open_next_edit_modal('+Response[i].id+')"><i class="icon pencil alternate"></i> Edit</a></td>'+
                            '<td><a href = "javascript:void(0)" onclick = "open_next_delete_modal('+Response[i].id+')"><i class="trash alternate icon"></i> Delete</a></td>' 
                            '</tr>'
                            
                    }
                $('#ntbody').html(html)
                },
                function(Response)
                {
                    console.log(Response.responseText+"fail");debugger;
                }   
    )}
    



/////////insert next modal////////
// $('#insertbtnnext').click(function(){
        
//         var TransactionID = $("#TransactionID").val();
//         var ProductId     = $("#ProductId").val();
//         var OQ            = $("#OQ").val();

//     call_api("POST", "/insertTransactionLineItem", 
//         {
//             'transactionid':TransactionID,
//             'productid':ProductId,
//             'orderQuantity':OQ
//         },
//             function(Response){
//                 loadTransactionLineItems();
//                 $('#btnclosenext').trigger('click');
//                 debugger;

//             },
//             function(Response){
//                 console.log(Response.responseText+"fail");debugger;
//             }
//     )
// })



///////show product name/////
$("#nextModal").on('shown.bs.modal',
    function(){
        call_api("GET","/viewProducts",{},
        function(Response)
        {
            debugger;
            $("#ProductId").html('');
            var html = '<option value="">Choose Product</option>';
            
            for(var i in Response)
            {
                html+= '<option value='+Response[i].id+'>'+Response[i].product_name+'</option>';      
            }
            $("#ProductId").html(html);
        },
        function(Response)
        {
            debugger;
            $("#ProductId").html('');
        })
    })




///// insert data into transaction_line_item table////

$('#insertnext').click(function(){

            var TransactionID = $("#TransactionID").val();
            var ProductId = $("#ProductId").val();
            var OQ = $("#OQ").val();

        call_api("POST", "/inserttransactionsinline", 
            {
                'transactionid':TransactionID,
                'productid':ProductId,
                'orderQuantity':OQ
            },
                function(Response){
                    loadTransactionLineItems();
                    $('#btnclosenext').trigger('click');
                    debugger;

                },
                function(Response){
                    console.log(Response.responseText+"fail");debugger;
                }
        )
    })
 </script>
