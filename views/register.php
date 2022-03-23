<h1>Create User</h1>
 <form> 
  <div class="form-group">
        <label>FirstName</label>
        <input type="text" name = "fname" class="form-control" >
    </div>

    <div class="form-group">
        <label>LastName</label>
        <input type="text" name = "lname" class="form-control" >
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name = "email" class="form-control" >
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name = "password" class="form-control" >
    </div>



    <button type="submit" name="submit" class="btn btn-primary">Register</button>
</form>
<?php //$form = \app\core\form\Form::begin('',"post"); ?>

    <!-- <div class="row">
        <div class="col">
            <?php //echo $form->field($model , 'firstname');   ?>
        </div>

        <div class="col">
            <?php //echo $form->field($model , 'lastname');   ?>
        </div>
    </div> -->


    <?php //echo $form->field($model , 'email');   ?>
    <?php //echo $form->field($model , 'password')->passwordField();   ?>
    <?php //echo $form->field($model , 'confirmpassword')->passwordField();   ?>

    <!-- <button type="submit" class="btn btn-primary">Register</button> -->


<?php  //\app\core\form\Form::end(); ?>

<!--<form action="" method="post">-->
<!---->
<!--    <div class = "row">-->
<!---->
<!--        <div class = "col">-->
<!--            <div class="form-group">-->
<!--                <label>First Name</label>-->
<!--                <input type="text" name = "firstname" class="form-control --><?php // echo $model->hasError('firstname') ? 'is-invalid' : ''; ?><!--" value="--><?php //echo $model->firstname; ?><!--" >-->
<!--                <div class="invalid-feedback">-->
<!--                    --><?php //echo $model->getFirstError('firstname'); ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div class = "col">-->
<!--            <div class="form-group">-->
<!--                <label>Last Name</label>-->
<!--                <input type="text" name = "lastname" class="form-control" >-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            <div class="form-group">-->
<!--                <label>Email</label>-->
<!--                <input type="email" name = "email" class="form-control" >-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            <div class="form-group">-->
<!--                <label>Password</label>-->
<!--                <input type="password" name = "password" class="form-control" >-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            <div class="form-group">-->
<!--                <label>Confirm Password</label>-->
<!--                <input type="password" name = "confirmpassword" class="form-control" >-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            <button type="submit" class="btn btn-primary">Register</button>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--</form>-->
