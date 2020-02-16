(function ($, Drupal, window, document) {

  'use strict';

  Drupal.behaviors.insta_block = {
    attach: function (context, settings) {

      const user = Drupal.settings.insta_block.insta_block_string;
      let i = 0;

      const jqxhr = jQuery.getJSON(`https://www.instagram.com/${user}/?__a=1`)
        .success(function () {
          const listOfImagesJSON = jqxhr.responseJSON.graphql.user.edge_owner_to_timeline_media.edges;
          jQuery('.block-insta-block-insta-block .images .image').each(function () {
            jQuery(this).attr('src', listOfImagesJSON[i++].node.thumbnail_src);
          });
        })
        .error(function () {
          console.log("Ошибка выполнения");
        });

    }
  };

})(jQuery, Drupal, this, this.document);
