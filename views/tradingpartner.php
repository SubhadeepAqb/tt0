<h1>ADD TRADING PARTNER DETAILS</h1>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name = "tpname" id="tpname" class="form-control" >
    </div>
    <div class="form-group">
        <label>Business Name</label>
        <input type="text" name = "bname" id="bname" class="form-control" >
    </div>
    <div class="form-group">
        <label>Mobile</label>
        <input type="text" name = "mobile" id="mobile" class="form-control" >
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name = "email" id="email" class="form-control" >
    </div>
    <button type="submit" id="btn1" class="btn btn-primary">Submit</button>


<script>
         
            $('#btn1').click(function(){
                var tpname = $('#tpname').val();
                var bname = $('#bname').val();
                var mobile = $('#mobile').val();
                var email = $('#email').val();
                call_api("POST", "/tradingpartner", {'tpname':tpname, 'bname':bname, 'mobile':mobile, 'email':email}, function(Response){ debugger;}, function(Response){debugger;} )
            })
    </script>