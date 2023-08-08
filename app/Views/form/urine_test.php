<?= $this->extend("layout/menusubpage") ?>

<?= $this->section("pageTitle") ?>
<?= esc($title) ?>
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="ui two column centered grid" style="width: 100%">
  <div class="middle aligned column">
    <h1>Urine Test Request Form</h1>
    <div>Please fill in the Urine Test Request details:</div>
    <form action="<?= url_to('urine_test') ?>" method="post" class="ui raised segment">
      <?= csrf_field() ?>
      <div class="ui one column centered grid">
        <div class="column">
          <div class="bold-text" style="margin-top: 10px;">Full Name :</div>
          <div class="ui labeled input" style="width: 40%">
            <input type="text" id="fullname" name="fullname" placeholder="Please Enter Full Name">
          </div>
          <div class="bold-text" style="margin-top: 10px;">Date of Birth :</div>
          <div class="ui input">
            <input type="date" id="dob" name="dob">
          </div>
          <div class="bold-text" style="margin-top: 10px;">Current Symptoms or Concerns :</div>
          <div class="ui form">
            <div class="field">
              <textarea name="descriptions" rows="3" placeholder="Please Enter Current Symptoms or Concerns"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="column" style="margin-top: 10px;">
<<<<<<< HEAD
        <a href="/dashboard" class="ui black button flat no-caps" style="margin-top: 10px; margin-left: 10px; margin-right: 10px;">Submit Request</a>
      </div>
    </div>
=======
        <button type="submit" class="ui black button flat no-caps" style="margin-top: 10px; margin-left: 10px; margin-right: 10px;">Submit Request</button>
      </div>
    </form>
>>>>>>> upstream/auth-implementation
  </div>

  <?= $this->endSection() ?>