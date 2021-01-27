<?php snippet('header') ?>


<div class="" style="overflow-y: hidden; overflow-x: scroll; white-space:nowrap">
<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
	<img style="display: inline-block;" src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
<?php endforeach ?>
</div>

<hr class="invisible space">

<?php if(!$page->text()->empty()): ?>
	<?php echo $page->text()->kirbytext() ?>
<?php endif ?>

<?php snippet('footer') ?>