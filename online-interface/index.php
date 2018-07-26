<?php define ('APPROOT', realpath(dirname(__FILE__))); ?>
<?php include('includes/header.php'); ?>

<div class="col-sm-12">
  <h2 align="center">Translating your written text into the <div class="colorize">parlance</div> of another.</h2>
</div>
<div class="col-sm-5">
  <div class="button-group"></div>
  <textarea id="input-translation" name="input-paragraph" placeholder="Type or paste text in your vernacular" style="height:200px" textarea></textarea>
</div>
<div class="col-sm-2">
  <div class="call-to-translate">
    <button class="button-translate">Translate</button>
  </div>
</div>
<div class="col-sm-5">
  <div class="button-group">
    <button class="button-left">Trump
    </button><button class="button-middle">Shakespeare
    </button><button class="button-right">More</button>
  </div>
  <textarea id="output-translation" name="input-paragraph" placeholder="Wait for your translation" style="height:200px" textarea></textarea>
</div>

<?php include('includes/footer.php'); ?>
