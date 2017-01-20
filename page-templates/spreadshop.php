<?php
/**
 * Template Name: Shop Page
 * Description: Spreadshirt shop page
 */
?>

<?php get_header('page'); ?>

<main id="main" class="main" role="main">

  <div id="myshop"></div>

</main>

<script>
  var spread_shop_config= {
  "shopName" : "bigblueboxpodcast",
  "locale" : "en_GB",
  "prefix" : "//shop.spreadshirt.co.uk",
  "baseId" : "myshop"
  };
</script>
<script src="//shop.spreadshirt.co.uk/shopfiles/shopclient/shopclient.nocache.js"></script>

<?php get_footer(); ?>
