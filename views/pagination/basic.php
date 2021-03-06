<p class="pagination">

	<?php if ($first_page !== FALSE): ?>
		<a href="<?php echo $page->url($first_page) ?>"><?php echo __('First') ?></a>
	<?php else: ?>
		<?php echo __('First') ?>
	<?php endif ?>

	<?php if ($previous_page !== FALSE): ?>
		<a href="<?php echo $page->url($previous_page) ?>"><?php echo __('Previous') ?></a>
	<?php else: ?>
		<?php echo __('Previous') ?>
	<?php endif ?>

	<?php if($start_page > 1) { ?>
		&#0133;&nbsp;
	<?php } ?>
	
	<?php for ($i = $start_page; $i <= $end_page; $i++): ?>

		<?php if ($i == $current_page): ?>
			<strong>[<?php echo $i ?>]</strong>
		<?php else: ?>
			<a href="<?php echo $page->url($i) ?>"><?php echo $i ?></a>
		<?php endif ?>

	<?php endfor ?>

	<?php if($total_pages > $end_page) { ?>
		&#0133;
	<?php } ?>
	
	<?php if ($next_page !== FALSE): ?>
		<a href="<?php echo $page->url($next_page) ?>"><?php echo __('Next') ?></a>
	<?php else: ?>
		<?php echo __('Next') ?>
	<?php endif ?>

	<?php if ($last_page !== FALSE): ?>
		<a href="<?php echo $page->url($last_page) ?>"><?php echo __('Last') ?></a>
	<?php else: ?>
		<?php echo __('Last') ?>
	<?php endif ?>

</p><!-- .pagination -->