<?php
/**
 * The main template file
 */

get_header();?>

<div class="container">

  <h1>Share your favorites airports</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="csv-file">
    <input type="submit" value="Submit">
  </form>

</div>

<?php get_footer();
