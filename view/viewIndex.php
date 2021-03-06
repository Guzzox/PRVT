<?php
$title = "PRVT - Home";
ob_start();
 ?>
     <section class="main-page container-fluid h-100" id="main-section">
         <h1 class="title-page">My message</h1>
         <p class="text-white citation-page">A free service for human's right.</p>
         <button class="btn btn-lg btn-light btn-start" onclick="ShowRules()" aria-keyshortcuts="enter">Get
             started</button>
     </section>
     <section class="rules container h-75" id="rules-section">
         <!--Start Rules-->
         <div class="container m-5">
             <h3 class="display-4">Rule</h3>
             <p class="text-muted">PRVT is absolutly free of expression, but there is few very basics rules :</p>
         </div>
         <!--START Rule row-->
         <div class="card-deck mb-2">
             <div class="card">
                 <div class="card-body">
                     <h5 class="card-title">Rule 1</h5>
                     <p class="card-text">Do not post Pornography. We don't allow any kind Pornography here. Are
                         forbidden : links to
                         videos / images (you can talk about this with no problem)</p>
                 </div>
             </div>
             <div class="card">
                 <div class="card-body">
                     <h5 class="card-title">Rule 2</h5>
                     <p class="card-text">Do not sell, or promote anything you're related with. (You can make an
                         announcement about a project, if you're looking for staff for example).
                     </p>
                 </div>
             </div>
             <div class="card">
                 <div class="card-body">
                     <h5 class="card-title">Rule 3</h5>
                     <p class="card-text">Do not spam, flood, or troll (too much is bad), trying to access to our
                         database
                         is forbidden.</p>
                 </div>
             </div>
         </div>
         <!--END Rule row-->
         <!--START Rule row-->
         <div class="card-deck mb-2">
             <div class="card">
                 <div class="card-body">
                     <h5 class="card-title">Rule 4</h5>
                     <p class="card-text">Do not use slang, use a good english, mistakes are allowed, everyone have to
                         understand what you want to say.</p>
                 </div>
             </div>
             <div class="card">
                 <div class="card-body">
                     <h5 class="card-title">Rule 5</h5>
                     <p class="card-text">Do not harass anyone.
                     </p>
                 </div>
             </div>
             <div class="card">
                 <div class="card-body">
                     <h5 class="card-title">Rule 6</h5>
                     <p class="card-text">Racism, anti-semitism, sexism etc ... are prohibed. (A woman and be stronger
                         than some man)</p>
                 </div>
             </div>
         </div>
         <!--END Rule row-->

         <button class="btn btn-lg btn-outline-primary d-block mx-auto m-5" onclick="showChoose()">Understood</button>
     </section>

     <section class="choose h-100" id="choose-section">
         <div class="h-50 w-100 bg-info" onclick="showSignin()">
           <h6 class="display-4 text-center text-white choose-buttons">
             Sign in
           </h6>
           </div>
         <div class="h-50 w-100 bg-primary" onclick="showSignup()">
           <h6 class="display-4 text-center text-white choose-buttons">
             Sign up
           </h6>
           </div>
     </section>

     <section class="sign-in container h-75" id="sign-in-section">
         <div>
             <h1 class="display-4">Sign-in</h1>
             <form method="POST" aria-roledescription="register">
                     <div class="form-group">
                         <label for="InputUsername">Username</label>
                         <input name="login_username" type="text" class="form-control" id="InputUsername" aria-describedby="Username"
                             placeholder="Enter Username">
                         <small id="emailUsername" class="form-text text-muted">We'll never share your email with anyone
                             else.</small>
                     </div>
                     <div class="form-group">
                         <label for="InputPassword">Password</label>
                         <input name="login_password" type="password" class="form-control" id="InputPassword" aria-describedby="password"
                             placeholder="Password">
                     </div>
                     <input type="submit" name="login-form" class="btn btn-primary">
                     <button type="button" class="btn btn-secondary" onclick="gotToRegister()">Go to register</button>
                     <button class="btn btn-outline-warning" onclick="alert('Well you\'re a moron')">Lost password?</button>
                 </form>
         </div>
     </section>

     <section class="sign-in container h-75" id="sign-up-section">
         <div>
             <h1 class="display-4">Sign-up</h1>
             <form method="POST" aria-roledescription="register">
                 <div class="form-group">
                     <label for="InputUsername">Username</label>
                     <input name="register_username" type="text" class="form-control" id="InputUsername" aria-describedby="Username"
                         placeholder="Enter Username">
                 </div>
                 <div class="form-group">
                     <label for="InputPassword">Password</label>
                     <p class="text-muted">Don't lose this password, there is no recovery system</p>
                     <input name="register_password" type="password" class="form-control" id="InputPassword" aria-describedby="password"
                         placeholder="Password">
                 </div>
                 <label for="InputConfirmPassword">Confirm password</label>
                 <input name="register_password_confirm" type="password" class="form-control" id="InputConfirmPassword" aria-describedby="confirmPassword"
                     placeholder="Confirm password"><br>
                 <input type="submit" name="register-form" class="btn btn-primary">
                 <button type="button" class="btn btn-secondary" onclick="goToLogin()">Go to login</button>
             </form>
         </div>
     </section>




<?php
$content = ob_get_clean();
require('view/template.php');
?>
