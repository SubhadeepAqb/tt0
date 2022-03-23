<h1>ADD LOCATION DETAILS</h1>

    <div class="form-group">
        <label>Location Name</label>
        <input type="text" name = "lname" id="lname" class="form-control" >
    </div>

    <button type="submit" id ="btn1" class="btn btn-primary">Submit</button>

    <button type="submit" id ="btn2" class="btn btn-primary">View</button>
    <script>
         
            $('#btn1').click(function(){
                var lname = $('#lname').val();
                call_api("POST", "/location", {'lname':lname}, function(Response){ console.log(Response.responseText); debugger;}, function(Response){console.log(Response.responseText+"fail"); debugger;} )
            })
    </script>

<script>
         
         $('#btn2').click(function(){
             call_api("GET", "/location", {}, function(Response){ debugger;}, function(Response){debugger;} )
         })
 </script>

