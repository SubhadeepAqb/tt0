

<h1>Login</h1>


    <div class="form-group">
        <label>Email</label>
        <input type="email" name = "email" id="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name = "password" id ="password" class="form-control" required>
    </div>



    <button type="submit" id="login_btn" class="btn btn-primary">Login</button>


<script>


////Prevent Back Button

            function preventBack() { window.history.forward(); }  
            setTimeout("preventBack()", 0);  
            window.onunload = function () { null };  




         
            $('#login_btn').click(function(){
                var email = $('#email').val();
                var password = $('#password').val();
                //var user_type = $('#user_type').val();

                if(email==null || email=="" || password == null || password=="" ){

                    window.alert('Please make sure that all fields are filled up')
                }

                if(email!=null && email!="" && password != null && password!="" ){
                call_api("POST", "/login", {'email':email , 'password':password }, 
                    function(Response){ 
                        var now = new Date();
                        now.setTime(now.getTime() + 1000*60*60);
                        console.log(Response);
                        document.cookie = `loginTrue=${Response.timestamp}; expires=`+now.toUTCString();   
                        document.cookie = `type=${Response.type}; expires=`+now.toUTCString(); 

                        if(Response.timestamp>=Response.timestamp && Response.timestamp!='undefined' && Response.timestamp!=null)
                        {
                        window.location.href = "/home";
                        }
                        else {
                            alert('Invalid Email or Password. Please check befor Submit.');
                            now.setTime(now.getTime() - 1000*60);
                            document.cookie = `loginTrue=${Response.timestamp}; expires=`+now.toUTCString();
                            window.location.href = "/login";
                        }

                        
                    }, 
                    function(error){
                        console.log(error,"error");
                    } )
                }
            })
</script>

