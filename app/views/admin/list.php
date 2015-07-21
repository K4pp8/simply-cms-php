<?php require_once VIEW_ROOT . '/templates/header.php'; ?> 

	<?php if ( empty($pages) ): ?>
	
		<p> Nessuna pagina disponibile</p>
	
	<?php else: ?>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>Label</th>
					<th>Titolo</th>
					<th>Slug</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pages as $page ):?>
					<tr>
						<td> <?php echo escap( $page['id'] ); ?> </td>
						<td> <?php echo escap( $page['label'] ); ?> </td>
						<td> <?php echo escap( $page['title'] ); ?> </td>
						<td> <a href="<?php echo BASE_URL;?>/page.php?page=<?php echo escap( $page['slug'] ); ?>"> <?php echo escap( $page['slug'] ); ?> </a></td>
						<td> <a href="<?php echo BASE_URL; ?>admin/edit-page.php?id=<?php echo escap( $page['id'] ); ?>"> modifica </a> </td>
						<td> <a href="<?php echo BASE_URL; ?>admin/delete-page.php?id=<?php echo escap( $page['id'] ); ?>"> cancella </a> </td>
					</tr>
				<?php endforeach ;?>
			</tbody>
		</table>

	<?php endif; ?>

	<a href="<?php echo BASE_URL;?>/admin/add-page.php">Aggiungi pagina</a>

<?php require_once VIEW_ROOT . '/templates/footer.php'; ?> 