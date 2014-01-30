<?php
	$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);
?>

<div class="navigation">
<!-- 	<ul class="list-inline">
		<li>
		Hiển thị
		<?php echo $paginator->getFrom(); ?>
		-
		<?php echo $paginator->getTo(); ?>
		trong
		<?php echo $paginator->getTotal(); ?>
		bài viết
		</li>
	</ul> -->
	
	<ul class="pagination">
		<?php echo $presenter->render(); ?>
	</ul>

</div>
