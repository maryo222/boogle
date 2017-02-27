<?php
$searchQuery = $_GET['q'];

$data = array
  (
    array(
          'text' => 'apple',
          'url' => 'http://apple.com',
    ),
    array(
          'text' => 'Bakers Delight',
          'url' => 'http://bakersdelight.co.nz',
    )
  );
  // die(var_dump($data));

// foreach ($data as $term) {
//   echo '<a href="'. $term['url'] .'">' .$term['text'] .'</a><br>';
// }

  // foreach ($data as $term): 
    ?>
<!--       <a href="<?= $term['url'] ?>"><?= $term['text'] ?></a><br> -->
    <?php
//   endforeach;
// die();


require "partials/header.php";
require "partials/navigation.php";
?>

<!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h4>Search results for <strong><?= $searchQuery; ?></strong></h4>
      
      <?php
        foreach ($data as $term): 
      ?>
      <!-- Displayed results -->
      <ul class="list-group">
        
        <!-- Single Result -->
        <li class="list-group-item notification-bar-fail m-b-1">
          <div class="notification-bar-details">
            <a href= "<?= $term ['url']?> " class="notification-bar-title">
              <?= $term['text']?>
            </a>
            <span class="text-muted">
            <?= $term['url']?></span>
          </div>
        </li>
        <!-- End of single result -->
        <?php
          endforeach;
        ?>

      </ul>
    </div>
  </div>
</div>

<?php
require "partials/footer-bottom.php";
?>

