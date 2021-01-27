<?php snippet('header') ?>

<div id="first" data-magellan-target="first"></div>


<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
	<img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>">
	<hr class="invisible space">
<?php endforeach ?>


<?php if(!$page->text()->empty()): ?>
	<?php echo $page->text()->kirbytext() ?>
<?php endif ?>

<ul class="menu" data-magellan>
  <li><a href="#first" class="">Back</a></li>
</ul>

<?php snippet('footer') ?>