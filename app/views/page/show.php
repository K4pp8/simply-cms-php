<?php require_once VIEW_ROOT . '/templates/header.php'; ?> 

	<?php if ( !$page ): ?>
	
		<p> Nessuna pagina trovata</p>
	
	<?php else: ?>
		
		<h2> <?php echo escap( $page['title'] ); ?> </h2>

		<?php echo escap( $page['body'] ); ?> 

		<?php $date = date_create($page['created']);?>
		<p class="text-muted">Creato il <?php echo date_format($date, 'd m Y'); ?>
			
			<?php if ( $page['updated'] ): ?>
				<?php $dateU = date_create($page['updated']);?>
				e aggiornato il <?php echo date_format($dateU, 'd m Y');?>
			<?php endif; ?>

		</p>

	<?php endif; ?>

<?php require_once VIEW_ROOT . '/templates/footer.php'; ?> 