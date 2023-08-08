<?= $this->extend("layout/subpage") ?>

<<<<<<< HEAD
<?= $this->section("pageTitle") ?>
Register
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="ui two column centered grid" style="width: 150vh;">
  <div class="middle aligned column">
    <h1>Registration Form</h1>
    <div>Please fill in the registration details:</div>
    <div class="ui raised segment">
      <div class="column q-mt-sm">
        <div class="bold-text" style="margin-top: 10px;">Full Name :</div>
        <div class="ui labeled input fluid">
          <input type="text" id="fullname" name="fullname" placeholder="Please Enter Full Name">
        </div>
        <div class="bold-text" style="margin-top: 10px;">Username :</div>
        <div class="column q-mt-sm">
          <div class="ui labeled input fluid">
            <input type="text" id="username" name="username" placeholder="Please Enter Username">
          </div>
        </div>
        <div class="bold-text" style="margin-top: 10px;">Email :</div>
        <div class="column q-mt-sm">
          <div class="ui labeled input fluid">
            <input type="email" id="email" name="email" placeholder="Please Enter Email">
          </div>
        </div>
        <div class="bold-text" style="margin-top: 10px;">Password :</div>
        <div class="column">
          <div class="ui labeled input fluid">
            <input type="password" id="password" name="password" placeholder="Please Enter Password">
          </div>
        </div>
        <div class="bold-text" style="margin-top: 10px;">Re-enter Your Password :</div>
        <div class="column">
          <div class="ui labeled input fluid">
            <input type="repassword" id="repassword" name="repassword" placeholder="Please Re-enter The Password">
          </div>
        </div>
        <div class="bold-text" style="margin-top: 10px;">
          <input type="checkbox" tabindex="0" class="fitted">
          <label>I agree to the Terms and Conditions</label>
        </div>
        <!-- Add more form fields as needed for registration -->
        <div class="column q-mt-sm" style="margin-top: 10px;">
          <a href="/" class="ui black button flat no-caps" style="margin-top: 10px; margin-left: 10px; margin-right: 10px;">Register</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Custom JavaScript functions here, including the submitRegistration() function
    function submitRegistration() {
      // Implement the registration form submission
    }
  </script>

  <?= $this->endSection() ?>
=======
 <?= $this->section("pageTitle") ?>
 <?= esc($title) ?>
 <?= $this->endSection() ?>

 <?= $this->section("content") ?>

 <div class="ui two column centered grid" style="width: 150vh;">
   <div class="middle aligned column">

     <h1>Registration Form</h1>
     <div>Please fill in the registration details:</div>

     <!-- error message -->
     <?php if (session('error') !== null) : ?>
       <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
     <?php elseif (session('errors') !== null) : ?>
       <div class="alert alert-danger" role="alert">
         <?php if (is_array(session('errors'))) : ?>
           <?php foreach (session('errors') as $error) : ?>
             <?= $error ?>
             <br>
           <?php endforeach ?>
         <?php else : ?>
           <?= session('errors') ?>
         <?php endif ?>
       </div>
     <?php endif ?>

     <div class="ui raised segment">
       <form action="<?= url_to('register') ?>" method="post" class="column q-mt-sm">
         <?= csrf_field() ?>

         <!-- username -->
         <div class="bold-text" style="margin-top: 10px;">Username :</div>
         <div class="column q-mt-sm">
           <div class="ui labeled input fluid">
             <input type="text" id="username" name="username" placeholder="Please Enter Username">
           </div>
         </div>

         <!-- email -->
         <div class="bold-text" style="margin-top: 10px;">Email :</div>
         <div class="column q-mt-sm">
           <div class="ui labeled input fluid">
             <input type="email" id="email" name="email" placeholder="Please Enter Email">
           </div>
         </div>

         <!-- password -->
         <div class="bold-text" style="margin-top: 10px;">Password :</div>
         <div class="column">
           <div class="ui labeled input fluid">
             <input type="password" id="password" name="password" placeholder="Please Enter Password">
           </div>
         </div>

         <!-- confirm password -->
         <div class="bold-text" style="margin-top: 10px;">Re-enter Your Password :</div>
         <div class="column">
           <div class="ui labeled input fluid">
             <input type="password" id="password_confirm" name="password_confirm" placeholder="Please Re-enter The Password">
           </div>
         </div>

         <!-- Add more form fields as needed for registration -->
         <div class="column q-mt-sm" style="margin-top: 10px;">
           <button type="submit" class="ui black button flat no-caps" style="margin-top: 10px; margin-left: 10px; margin-right: 10px;">Register</button>
         </div>
       </form>
     </div>
   </div>

   <?= $this->endSection() ?>
>>>>>>> upstream/auth-implementation
