<?php require_once VIEW_ROOT . '/templates/header.php'; ?> 

	<?php if ( !$page ): ?>
	
		<p> Nessuna pagina trovata</p>
	
	<?php else: ?>
		
		<h2> <?php echo escap( $page['title'] ); ?> </h2>

		<?php echo escap( $page['body'] ); ?> 

	<?php endif; ?>

<?php require_once VIEW_ROOT . '/templates/footer.php'; ?> 