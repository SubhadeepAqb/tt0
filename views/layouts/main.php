<!DOCTYPE html>
<html lang="en">
<head>
    <title>aQb</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>-->
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<script>
    
    function call_api(method, url, data, successCallback, errorCallback)
    {
        $.ajax({
            type: method,
            url: url,
            data: data,
            dataType: "json", 
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            crossDomain: true,
            beforeSend: function(jqxhr){},            
            success: successCallback,
            error: errorCallback
        });
    }
</script>


<?php
    if(isset($_COOKIE['loginTrue']) && $_COOKIE['loginTrue']!='undefined' && $_COOKIE['loginTrue']!=null 
        && $_COOKIE['loginTrue']>=1647450336 )
        {
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">aQb Solutions</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="location">Location</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tradingpartner">Trading Partner</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="inbound">Inbound</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="location">Location</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="address">Address</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="storagearea">Storage Area</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="storageshelf">Storage Shelves</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="transactions">Transaction</a>
            </li>




<?php
            if(isset($_COOKIE['type']) && $_COOKIE['type']!='undefined' && $_COOKIE['type']!=null 
            && $_COOKIE['type']=='admin' )
            {
?>
            <li class="nav-item">
                <a class="nav-link" href="viewUsers">Manage Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>
<?php
            }
?>

        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/logout" onclick= "return confirm('Do You Want to Logout?')">Logout</a>
            </li>
        </ul>
    </div>

</nav>

<div class="container">
{{content}}

</div>
<?php
    }

    else{
?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">aQb Solutions</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
        </ul>
    </div>
</nav>


<?php
    }
?>
</body>
</html>
