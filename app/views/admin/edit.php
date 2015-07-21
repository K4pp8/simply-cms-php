<?php require_once VIEW_ROOT . '/templates/header.php'; ?> 
	
	<h2> Modifica pagina </h2>

	<form action="<?php echo BASE_URL; ?>admin/edit-page.php" method="post">

	<fieldset>

	  <div class="form-group">
	    <label for="title">Titolo</label>
	    <input type="text" class="form-control" name="title" id="title" placeholder="titolo" 
	    		value="<?php echo escap( $page['title'] ); ?>">
	  </div>

	  <div class="form-group">
	    <label for="labe">label</label>
	    <input type="text" class="form-control" name="label" id="label" placeholder="label"
	    		value="<?php echo escap( $page['label'] ); ?>">
	  </div>

	  <div class="form-group">
	    <label for="slug">Slug</label>
	    <input type="text" class="form-control" name="slug" id="slug" placeholder="slug"
	    		value="<?php echo escap( $page['slug'] ); ?>">
	  </div>

	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea class="form-control" rows="3" id="body" name="body" placeholder="body"><?php echo escap( $page['body'] ); ?></textarea>
	  </div>
		
	  <input type="hidden" name="id" placeholder="id"
	    		value="<?php echo escap( $page['id'] ); ?>">

	  <button id="submit" name="submit" type="submit" class="btn btn-default">Modifica</button>
		 
	</fieldset>

	</form>


<?php require_once VIEW_ROOT . '/templates/footer.php'; ?> 