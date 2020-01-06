
<div class="container main-form">
<h2>Create Account</h2>
    <form method="post" action="<?php  base_url().'memberAccount/index'?>" class="container-fluid form-check form-size middle" >
  <div class="col-md-10">
    <legend>First Name</legend>
    <input type="text" class="form-control middle" size="40" name="firstname" placeholder="Enter first Name">
    <legend>Last Name</legend>
    <input type="text" class="form-control middle" size="40" name="lastname" placeholder="Enter Last Name">
    <legend>Email</legend>
      <input type="text" class="form-control middle" size="40" name="email"    placeholder="Enter Your Valid Email">
    <legend>Password</legend>  
    <input type="password" class="form-control middle" size="40" name="password"    placeholder="Enter Password to Set"><br>
    <button class="middle btn btn-success"  name="Submit">Create Account</button>
</div></form>
</div>
