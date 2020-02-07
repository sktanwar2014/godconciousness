<section class="page">
	<!-- Load Bludit Plugins: Page Begin -->
	<?php Theme::plugins('pageBegin'); ?>

<!-- Page title 
<h1 class="title"><?php echo $page->title(); ?></h1>

<?php if ($page->description()): ?>
<p class="page-description"><?php echo $page->description(); ?></p>
<?php endif ?>
-->
<!-- Page cover image -->
<?php if ($page->coverImage()): ?>
<div class="page-cover-image py-6 mb-4" style="background-image: url('<?php echo $page->coverImage(); ?>');">
	<div style="height: 300px;"></div>
</div>
<?php endif ?>

<!-- Page content  class="page-content" -->
<div>
<?php echo $page->content(); ?>
</div>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>
</section>
