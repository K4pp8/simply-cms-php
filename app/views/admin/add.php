<?php require_once VIEW_ROOT . '/templates/header.php'; ?> 
	
	<h2> Aggiungi pagina </h2>

	<form action="<?php echo BASE_URL; ?>admin/add-page.php" method="post">

	<fieldset>

	  <div class="form-group">
	    <label for="title">Titolo</label>
	    <input type="text" class="form-control" name="title" id="title" placeholder="titolo">
	  </div>

	  <div class="form-group">
	    <label for="labe">label</label>
	    <input type="text" class="form-control" name="label" id="title" placeholder="label">
	  </div>

	  <div class="form-group">
	    <label for="slug">Slug</label>
	    <input type="text" class="form-control" name="slug" id="slug" placeholder="slug">
	  </div>

	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea class="form-control" rows="3" id="body" name="body" placeholder="body"></textarea>
	  </div>
		
	  <button id="submit" name="submit" type="submit" class="btn btn-default">Aggiungi</button>
		 
	</fieldset>

	</form>


<?php require_once VIEW_ROOT . '/templates/footer.php'; ?> 