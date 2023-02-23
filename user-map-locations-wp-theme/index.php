<?php
/**
 * The main template file
 */

get_header();?>

<h1>Share your favorites airports</h1>
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="cvs-file">
  <input type="submit" value="Submit">
</form>

<div id="map"></div>

<?php get_footer();
