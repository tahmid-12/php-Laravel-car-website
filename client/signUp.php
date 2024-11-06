<div class="container">
    <h1 class="heading">Sign Up</h1>
</div>

<form method="post" action="./server/requests.php">

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="retype-password" class="form-label">Retype Password</label>
    <input type="password" class="form-control" name="retype-password" id="retype-password" placeholder="Retype Password">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="address" class="form-label">User Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>


  <!-- <div class="col-6 offset-sm-3 margin-bottom-15">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->

  <div class="col-6 offset-sm-3 margin-bottom-15">
        <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
  </div>

</form>