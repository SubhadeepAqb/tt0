<h1>Register an Inbound shipment</h1>

<div class="form-group">
    <label>Product Name</label>
    <input type="text" id = "product_name" name = "product_name" class="form-control" required>

    <label>Product Serial</label>
    <input type="text" id = "product_serial" name = "product_serial" class="form-control" required>
</div>

<button type="submit"  id ="btn1" class="btn btn-primary">Submit</button>

<script>
    $('#btn1').click(function(){
        var product_name = $('#product_name').val();
        var product_serial = $('#product_serial').val();
        call_api("POST", "/inbound", {'product_name': product_name ,
                                       'product_serial' : product_serial
                                     }
                                      , function(Response){ debugger;}, function(Response){debugger;} )
    })
</script>