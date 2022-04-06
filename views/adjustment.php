
<br xmlns="http://www.w3.org/1999/html">
<button type="button" class="ui positive basic button" data-toggle="modal" data-target="#adjustProductModal">
    Adjust Product
</button>






<!--adjust product Modal -->
<div class="modal fade" id="adjustProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ui top attached block header" >
                <h2 class="modal-title" id="exampleModalLabel">Adjust Product</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row "  id="viewForm">
                    <div class="col-9">

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Location</label>
                                    <select  name = "location" id="location"  class="form-control" ></select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Storage Area</label>
                                    <select name = "storage_area" id="storage_area" class="form-control" ></select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Storage shelfs</label>
                                    <select name = "storage_shelf" id="storage_shelf" class="form-control" ></select>
                                </div>
                            </div>
                        </div>

                        <div class = "row">
                            <div class = "col">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <select name ="p_name" id="p_name" class="form-control" ></select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Product serial</label>
                                    <select name = "p_serial" id="p_serial" class="form-control" ></select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <label>Status</label>
                                <select class="form-select mb-3 form-control" id="selectType" >
                                    <option>----select type-----</option>
                                    <option value="quarantine">Quarantine</option>
                                    <option value="un-quarantine">UN-Quarantine</option>
                                    <option value="transfer">Transfer</option>
                                    <option value="destroy">Destroy</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="ui secondary button" data-dismiss="modal">Close</button>
                <div class="row">
                    <div class="col">
                        <button type="submit" id="adjustProduct" class="ui primary button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end adjust product modal-->



<!--start edit adjust product Modal -->
<div class="modal fade" id="editadjustModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ui top attached block header" >
                <h2 class="modal-title" id="exampleModalLabel">Edit Adjusted Product</h2>
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
                                    <input type="hidden" name ="e_id" id="e_id" class="form-control" >
                                    <label>Product Name</label>
                                    <select name ="e_name" id="e_name" class="form-control" ></select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Location</label>
                                    <select  name = "e_location" id="e_location" class="form-control" ></select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Storage Area</label>
                                    <select name = "e_storage_area" id="e_storage_area" class="form-control" ></select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Storage shelfs</label>
                                    <select name = "e_storage_shelf" id="e_storage_shelf" class="form-control" ></select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Product serial</label>
                                    <select name = "e_serial" id="e_serial" class="form-control" ></select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <label>Status</label>
                                <select class="form-select mb-3 form-control" id="e_selectType" >
                                    <option><-----select type-----></option>
                                    <option value="quarantine">Quarantine</option>
                                    <option value="un-quarantine">UN-Quarantine</option>
                                    <option value="transfer">Transfer</option>
                                    <option value="destroy">Destroy</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="e_close" class="ui secondary button" data-dismiss="modal">Close</button>
                <div class="row">
                    <div class="col">
                        <button type="submit" id="e_adjustProduct" class="ui primary button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of edit modal-->






<!--show product list from database-->
<table class="ui celled table" style="text-align: center">
    <thead>
        <th>Product name</th>
        <th>Location</th>
        <th>Storage area</th>
        <th>Storage shelf</th>
        <th>Product Serial</th>
        <th>Status</th>
        <th>Timestamp</th>
        <th colspan="2">Action</th>
    </thead>
    <tbody id="tbody">

    </tbody>
</table>
<!--end show product list from database-->


<!--load data from database and displayed here in table form-->
<script>
    $(document).ready(function () {
        loadProduct();
    });

    function loadProduct(){
        call_api("GET", "/viewadjustedProducts", {}, function(Response){ console.log(Response);
            var html = '';
            for(var i in Response){
                     html += '<tr>' +
                    '<td>'+ Response[i].product_name+'</td>' +
                    '<td>'+ Response[i].location_name+'</td>' +
                    '<td>'+ Response[i].storage_area_name+'</td>' +
                    '<td>'+ Response[i].shelf_name+'</td>' +
                    '<td>'+ Response[i].serial_number+'</td>' +
                    '<td>'+ Response[i].status+'</td>' +
                    '<td>'+ Response[i].timestamp+'</td>' +
                    '<td><a href = "javascript:void(0)" onclick = "open_edit_modal('+Response[i].id+')" ><i class="icon pencil alternate"></i> Edit</a>'+

                    '<a href = "javascript:void(0)" onclick="open_delete('+ Response[i].id +')">&nbsp;&nbsp;&nbsp;<i class="trash alternate icon"></i> Delete</a></td>'+
                    '</tr>'
            }
            $('#tbody').html(html);
        },
            function(Response){console.log(Response); debugger;} )
    };
<!--end display-->




<!--api call for load particular product in edit adjust modal-->
function open_edit_modal(id){
    call_api("GET", "/loadParticularData", {'id':id},
        function(Response){
           // debugger;
            var myModal = new bootstrap.Modal(document.getElementById('editadjustModal'), {
                keyboard: false
            });
            myModal.toggle();
            console.log(Response);
            $('#e_id').val(Response.product_id);
debugger;
            //$('#e_name').val(Response.product_id);
            viewProducts(Response.product_id);
            debugger;
            $('#e_location').val(Response.location_id);
            $('#e_storage_area').val(Response.sa_id);
            $('#e_storage_shelf').val(Response.ss_id);
            $('#e_serial').val(Response.i_id);
            $('#e_selectType').val(Response.status);


        },
        function(Response){console.log(Response.responseText+"fail");debugger;
        }
    )
};
<!-- end api call for load particular product in edit modal-->





<!--api call for delete particular product-->
    // function open_delete(id){
    //     // var id = $(this).attr('data-id');
    //     if(confirm("are you sure you want to delete this product")) {
    //         call_api("POST", "/deleteProduct", {'id': id},
    //             function (Response) {
    //                // debugger;
    //                 if (Response.success == true) {
    //                     alert(Response.msg);
    //                     loadProduct();
    //                     //debugger;
    //                 }
    //              },
    //             function (Response) {
    //                 console.log(Response.responseText + "fail");
    //             }
    //         )
    //     }
    // };
<!--end api call for delete particular product-->








<!-- start call functions for getting data from database for dropdown  -->
    $("#adjustProductModal").on('shown.bs.modal', function() {

        //call api for getting product details
       // viewProducts();

        // ///call api for getting location details
        displayLocations();


        ///call api for getting product serial
        //viewInbounds();


       ///call api for getting storage area
        //displayAreas();


        ///call epi for storage shelf
        //displayShelf();

    });
<!-- end call function for getting data from database for dropdown -->



    // ///function for getting all products
    // function viewProducts(pid){
    //     var pid = pid.toString();
    //     call_api("GET", "/viewProducts", {},
    //         function (Response) {
    //             debugger;
    //             console.log(pid);
    //             if(pid) {
    //                 debugger;
    //                 $('#e_name').html('');
    //             }else{
    //                 $('#p_name').html('');
    //             }
    //             var html = '<option value="">----Choose Product Name----</option>';
    //             for (var i in Response) {
    //                 debugger;
    //                 if((Response[i].id) == String(pid)) {
    //                     debugger;
    //                     html += '<option value=' + Response[i].id + ' selected>' + Response[i].product_name + '</option>';
    //                 }else{
    //                    debugger;
    //                     html += '<option value=' + Response[i].id + '>' + Response[i].product_name + '</option>';
    //                 }
    //             }
    //             if(pid) {
    //                 $('#e_name').html(html);
    //             }else{
    //                 $('#p_name').html(html);
    //            }
    //             debugger;
    //         },
    //         function (Response) {
    //             debugger;
    //             if(id) {
    //                 $('#e_name').html('');
    //             }else{
    //                 $('#p_name').html('');
    //             }
    //         }
    //     );
    // }

    ///function for getting all products
    $('#storage_shelf').on("change", function (){
        var pid = $(this).val();
        call_api("GET", "/viewProducts", {},
            function (Response) {

                $('#p_name').html('');

                var html = '<option value="">----Choose Product Name----</option>';
                for (var i in Response) {
                    debugger;
                    if((Response[i].id) == pid) {
                        debugger;
                        html += '<option value=' + Response[i].id + ' >' + Response[i].product_name + '</option>';
                    }
                }

                $('#p_name').html(html);

                //debugger;
            },
            function (Response) {
                debugger;

                $('#p_name').html('');
                }
        )
    });






    //function for display loctaion
    $('#location').on("change", function (){
        var  lid = $(this).val();
        //function displayAreas(id){
        call_api("GET","/areadisplay",{},
            function(Response){
                console.log(Response);
                $('#storage_area').html('');
                var html = '<option value="">---Choose Storage Area---</option>';
                for(var i in Response)
                {
                    debugger;
                    console.log(this.value);
                    if(Response[i].location_id == lid) {
                        html += '<option value=' + Response[i].id + '>' + Response[i].storage_area_name + '</option>';
                    }
                }
                $('#storage_area').html(html);
                debugger;
            },
            function(Response){
                debugger;
                $('#storage_area').html('');
            }
        )
    })


    function displayLocations(id){
        call_api("GET","/locationdisplay",{},function(Response){
                $('#location').html('');
                var html = '<option value="">---Choose Location----</option>';
                for(var i in Response)
                {
                    html+= '<option value='+Response[i].id+' >'+Response[i].location_name+'</option>';
                }
                $('#location').html(html);
            },
            function(Response){
                debugger;
                $('#location').html('');
            }


        )
    }



    ///function for view all inbounds
    function viewInbounds(id){
        call_api("GET", "/viewInbounds", {}, function(Response){
                // console.log(Response);
                $('#p_serial').html = '';
                var html = '<option value="">----Choose Product Serial no----</option>';
                for(var i in Response){
                    html += '<option value=' + Response[i].serial_number + '>' + Response[i].serial_number + '</option>';
                }
                $('#p_serial').html(html);
            },
            function(Response){
                console.log(Response);
                debugger;
                $('#p_serial').html('');
            }
        )
    }



    ///function for display storagee areas
    // function displayAreas(id){
    //     call_api("GET","/areadisplay",{},
    //         function(Response){
    //             //console.log(Response);
    //             $('#storage_area').html('');
    //             var html = '<option value="">---Choose Storage Area---</option>';
    //             for(var i in Response)
    //             {
    //                 //debugger;
    //                 html+= '<option value='+Response[i].id+'>'+Response[i].storage_area_name+'</option>';
    //             }
    //             $('#storage_area').html(html);
    //             //  debugger;
    //         },
    //         function(Response){
    //             debugger;
    //             $('#storage_area').html('');
    //         }
    //     )
    // }



    ///function for display storage shelf
    $('#storage_area').on("change", function (){
        var said = $(this).val();
        call_api("GET","/shelfdisplay",{},
            function(Response){
                //console.log(Response);
                $('#storage_shelf').html('');
                var html = '<option value="">---Choose Storage shelf---</option>';
                for(var i in Response)
                {
                    //debugger;
                    if(Response[i].storage_area_id == said) {
                        html += '<option value=' + Response[i].product_id + '>' + Response[i].shelf_name + '</option>';
                    }
                }
                $('#storage_shelf').html(html);
                //  debugger;
            },
            function(Response){
                debugger;
                $('#storage_shelf').html('');
            }
        )
    })






</script>



