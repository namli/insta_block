<?php

/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
?>
<div class="<?php print $classes; ?>" <?php print $attributes; ?> id="<?php print $block_html_id; ?>">

  <?php print render($title_prefix); ?>
  <?php if ($title) : ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <ul class="images">
      <?php foreach ($images as $key => $value) : ?>
        <li><img class="image" src="<?php print $value; ?>" /></li>
      <?php endforeach; ?>
    </ul>

    <a href="<?php print $user_url; ?>" type="button"><?php print t('View Instagramm Profile') ?></a>


</div>