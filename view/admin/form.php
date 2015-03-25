<form class="form-horizontal" method="post" action="controller/ajout.php">
<fieldset>

<!-- Form Name -->

<?= "<input id='id' name='id' type='hidden' value='" . $values['id'] . "' class='input-medium' required=''>" ?>

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <legend><?= $titre ?></legend>
    <div class="row">
      <div class="col-md-4 col-md-offset-1">
        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="titre">Titre</label>
          <div class="controls">
            <?= "<input id='titre' name='titre' type='text' value='" . $values['titre'] . "' class='input-medium' required=''>" ?>

          </div>
        </div>

        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="textMenu">Menu</label>
          <div class="controls">
            <?= "<input id='textMenu' name='textMenu' type='text' value='" . $values['menuText'] . "' class='input-medium'>" ?>

          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-1">
        <!-- Textarea -->
        <div class="control-group">
          <label class="control-label" for="contenu">Contenu</label>
          <div class="controls">
            <textarea id='contenu' name='contenu' class='textarea' style='width: 600px; height: 200px'><?= $values['contenu'] ?></textarea>
            <!-- <div id='contenu' name='contenu'></div> -->
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
<div class="row">
  <div class="col-md-10 col-md-offset-8">
    <!-- Button -->
        <div class="control-group">
          <label class="control-label" for="valider"></label>
          <div class="controls">
            <button type="submit" id="valider" name="valider" class="btn btn-primary">Valider</button>
          </div>
        </div>
  </div>
</div>

</fieldset>
</form>
