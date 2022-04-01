<?php
//print_r(json_decode($params));
?>
<!--<a href="/addProduct" class="ui positive basic button">add product</a>-->
<br xmlns="http://www.w3.org/1999/html">
<button type="button" class="ui positive basic button" data-toggle="modal" data-target="#addProductModal">
    Add Product
</button>

<button type="button" class="ui positive basic button" data-toggle="modal" data-target="#addCompositionModal">
    Add Composition
</button>






<!--add product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ui top attached block header" >
                <h2 class="modal-title" id="exampleModalLabel">Add Product</h2>
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
                                    <label>Product Name</label>
                                    <input type="text" name ="name" id="name" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name = "description" id="description" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="number" name = "quantity" id="quantity" class="form-control" >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <label>Product Type</label>
                                <select class="form-select mb-3 form-control" id="selectType" >
                                    <option><-----select type-----></option>
                                    <option value="single">single</option>
                                    <option value="box">box</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnclose" class="ui secondary button" data-dismiss="modal">Close</button>
                <div class="row">
                    <div class="col">
                        <button type="submit" id="addProduct" class="ui primary button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end add product modal-->



<!--edit product Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ui top attached block header" >
                <h2 class="modal-title" id="exampleModalLabel">Edit Product</h2>
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
                                    <input type="hidden" name ="p_id" id="p_id" class="form-control" >
                                    <label>Product Name</label>
                                    <input type="text" name ="p_name" id="p_name" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name = "p_desc" id="p_desc" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="number" name = "p_quantity" id="p_quantity" class="form-control" >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <label>Product Type</label>
                                <select class="form-select mb-3 form-control" id="p_type" >
                                    <option><-----select type-----></option>
                                    <option value="single">single</option>
                                    <option value="box">box</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col">
                        <button type="button" id="close" class="ui secondary button" data-dismiss="modal">Close</button>
                        <button type="submit" id="editProduct" class="ui primary button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end edit modal-->


<!--add composition Modal -->
<div class="modal fade" id="addCompositionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ui top attached block header" >
                <h2 class="modal-title" id="exampleModalLabel">Add Composition</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row "  id="viewForm">
                    <div class="col-11">
                        <div class = "row">
                            <div class = "col">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <select class="form-control" id="selectP_name" name="selectP_name"></select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Composition Product</label>
                                    <div class="ui input">
                                        <select class="form-control" id="selectComp_name" name="selectComp_name"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <div class="ui input">
                                        <input type="number" id="qty" name="qty">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn" class="ui secondary button" data-dismiss="modal">Close</button>
                <div class="row">
                    <div class="col">
                        <button type="submit" id="addcomposition" class="ui primary button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end add composition modal-->



<!--show product list from database-->
<table class="ui celled table" style="text-align: center">
    <thead>
        <th>Product name</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Type</th>
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
        call_api("GET", "/viewProducts", {}, function(Response){ console.log(Response);
            var html = '';
            for(var i in Response){
                     html += '<tr>' +
                    '<td>'+ Response[i].product_name+'</td>' +
                    '<td>'+ Response[i].quantity+'</td>' +
                    '<td>'+ Response[i].description+'</td>' +
                    '<td>'+ Response[i].type+'</td>' +
                    '<td><a href = "javascript:void(0)" onclick = "open_edit_modal('+Response[i].id+')" ><i class="icon pencil alternate"></i> Edit</a>'+

                    '<a href = "javascript:void(0)" onclick="open_delete('+ Response[i].id +')">&nbsp;&nbsp;&nbsp;<i class="trash alternate icon"></i> Delete</a></td>'+
                    '</tr>'
            }
            $('#tbody').html(html)
        },
            function(Response){console.log(Response); debugger;} )
    };
<!--end display-->


// <!--after click save button insert api call-->
    $("#addProduct").click(function(){
        var name = $("#name").val();
        var description = $("#description").val();
        var quantity = $("#quantity").val();
        var type = document.querySelector('#selectType').value;
        call_api("POST", "/product",
            {'name':name, 'description':description,'quantity':quantity,'type':type},
            function(Response){
                if (Response.success == true) {
                    alert(Response.msg);
                    loadProduct();
                    $('#btnclose').trigger('click');
                    //debugger;
                }
            },
            function(Response){console.log(Response.responseText+"fail"); debugger;}
        )
    });
<!--end insert api call-->


<!--api call for showing data in edit form-->
    // $(document).on('click','#edit',function (){
    //     var id = $(this).attr('data-id');
    //     //alert(id);
    //     call_api("GET", "/loadProduct", {'id': id}, function(Response){
    //        // console.log(Response);
    //         $('#p_id').val(Response.id);
    //         $('#p_name').val(Response.product_name);
    //         $('#p_desc').val(Response.description);
    //         $('#p_quantity').val(Response.quantity);
    //         $('#p_type').val(Response.type);
    //
    //     }, function(Response){console.log(Response.responseText+"fail"); } )
    // });
<!--end api call for showing data in edit form-->



<!--after click save button update api call-->
    $("#editProduct").click(function(){
        var pid = $("#p_id").val();
        var name = $("#p_name").val();
        var description = $("#p_desc").val();
        var quantity = $("#p_quantity").val();
        var type = document.querySelector('#p_type').value;

        call_api("POST", "/updateProduct",
            {'product_id':pid,'name':name, 'description':description,'quantity':quantity,'type':type},
            function(Response){
                 if (Response.success == true) {
                    alert(Response.msg);
                    loadProduct();
                    $('#close').trigger('click');
                    //debugger;
                }
            },
            function(Response){console.log(Response.responseText+"fail"); debugger;}
        )
    });
<!--end update api call-->



<!--api call for delete particular product-->
    function open_delete(id){
        // var id = $(this).attr('data-id');
        if(confirm("are you sure you want to delete this product")) {
            call_api("POST", "/deleteProduct", {'id': id},
                function (Response) {
                   // debugger;
                    if (Response.success == true) {
                        alert(Response.msg);
                        loadProduct();
                        //debugger;
                    }
                 },
                function (Response) {
                    console.log(Response.responseText + "fail");
                }
            )
        }
    };
<!--end api call for delete particular product-->




<!--api call for load particular product in edit modal-->
    function open_edit_modal(id){
        //debugger;
        call_api("GET", "/loadProduct", {'id':id},
            function(Response){
                //$('#editModal').modal().toggle();
                var myModal = new bootstrap.Modal(document.getElementById('editModal'), {
                    keyboard: false
                })
                myModal.toggle();
                $('#p_id').val(Response.id);
                $('#p_name').val(Response.product_name);
                $('#p_desc').val(Response.description);
                $('#p_quantity').val(Response.quantity);
                $('#p_type').val(Response.type);
                //console.log(Response);
            },
            function(Response){console.log(Response.responseText+"fail");debugger;
            }
        )
    };
<!-- end api call for load particular product in edit modal-->




<!-- start epi call for getting product name where product type are "box" -->
    $("#addCompositionModal").on('shown.bs.modal', function() {
        call_api("GET", "/viewProducts", {},
            function (Response) {
                //debugger;
                $('#selectP_name').html('');
                var html = '<option value="">----Choose Product Name----</option>';
                for (var i in Response) {
                    //debugger;
                    if (Response[i].type == 'box') {
                        html += '<option value=' + Response[i].id + '>' + Response[i].product_name + '</option>';
                    }
                }
                $('#selectP_name').html(html);
                //debugger;
            },
            function (Response) {
                debugger;
                $('#p_name').html('');
            }
        )

        call_api("GET", "/viewProducts", {},
            function (Response) {
                //debugger;
                $('#selectComp_name').html('');
                var html = '<option value="">---Choose Product---</option>';
                for (var i in Response) {
                    //debugger;
                    html += '<option value=' + Response[i].id + '>' + Response[i].product_name + '</option>';
                }
                $('#selectComp_name').html(html);
                //debugger;
            },
            function (Response) {
                debugger;
                $('#selectComp_name').html('');
            }
        )
    });
<!-- end epi call for getting product name where product type are "box" -->


<!--after click save button insert composition api call-->
    $("#addcomposition").click(function(){
        var product_id = $("#selectP_name").val();
        var content_id = $("#selectComp_name").val();
        var qty = $("#qty").val();

        call_api("POST", "/composition",
            {'product_id':product_id, 'content_id':content_id,'quantity':qty},
            function(Response){
                if (Response.success === true) {
                    alert(Response.msg);
                    loadProduct();
                    $('#btn').trigger('click');
                }
            },
            function(Response){console.log(Response.responseText+"fail"); debugger;}
        )
    });
 <!--end insert api call-->


</script>



