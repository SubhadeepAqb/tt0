

<h1>Let's Create Your aQb Account</h1>

<div class="row "  id="">
    <div class="col-9">
        <div class = "row">
            <div class = "col">
                <div class="form-group">
                    <label>Select User Type</label>
                         <select name="reg_type" id="reg_type" require>
                              <option  selected disabled ><---Select From The List---></option>
                              <option value="admin">Admin</option>
                              <option value="user">User</option>
                         </select>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <lebel>First Name</lebel>
                    <input type="text"  name = "reg_fname" id ="reg_fname" require class="form-control" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <lebel>Last Name</lebel>
                    <input type="text" name = "reg_lname" id ="reg_lname" class="form-control"  require >
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="form-group">
                     <label>Email</label>
                     <input type="email" name = "reg_email" id="reg_email" class="form-control" require >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name = "reg_pass" id ="reg_pass" class="form-control" require>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                     <label>Confirm Password</label>
                     <input type="password" name = "reg_conpass" id ="reg_conpass" class="form-control" require>
                </div>
            </div>
        </div>

<!--        <div class="row">-->
<!--            <div class="col" >-->
<!--                <div class="form-group" id="composition" >-->
<!--                    <label>Compositions</label>-->
<!--                    <input type="number" name = "quantity" id="quantity" class="form-control" >-->
<!--                    <input type="checkbox" id="p1" name="p1" value="1">-->
<!--                    <label for="p1"> needle</label>-->
<!--                    <input type="checkbox" id="p2" name="p2" value="3">-->
<!--                    <label for="p2"> syring</label>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="row">
            <div class="col">
                <button type="submit" id="reg_btn" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>


<script>
         
            $('#reg_btn').click(function(){
                var reg_type  = $('#reg_type').val();
                var reg_fname = $('#reg_fname').val();
                var reg_lname = $('#reg_lname').val();
                var reg_email = $('#reg_email').val();
                var reg_pass = $('#reg_pass').val();
                var reg_conpass = $('#reg_conpass').val();

                if(reg_type==null || reg_type=="" || reg_fname == null || reg_fname=="" || reg_lname == null || reg_lname=="" ||reg_email==null || reg_email=="" || reg_pass == null || reg_pass=="" || reg_conpass == null || reg_conpass=="" ){

                window.alert('Please make sure that all fields are filled up')

                }

                if(reg_pass==reg_conpass){

                
                
                if(reg_type!=null && reg_type!="" && reg_fname != null && reg_fname!="" && reg_lname != null && reg_lname!="" &&reg_email!=null && reg_email!="" && reg_pass != null && reg_pass!="" && reg_conpass != null && reg_conpass!="" )
                {

                call_api("POST", "/register",
                {'reg_type':reg_type,'reg_fname':reg_fname, 'reg_lname':reg_lname, 'reg_email':reg_email, 'reg_pass':reg_pass, 'reg_conpass':reg_conpass},
                function(Response){
                    window.location.href ='/login'
                }, 
                function(Response){console.log(Response.responseText+" ....error.... ");} )

                }
                }

                else 
                {
                    window.alert("Confirm Password Does Not Matched!!")

                }
            })
</script>


