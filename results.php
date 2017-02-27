<?php
$searchQuery = $_GET['q'];

$data = require 'includes/data.php';


function filterResults($searchQuery, $data) {
        $matches = [];
 
        foreach ($data as $key => $value) {
          if (strpos(strtolower($value['text']), strtolower($searchQuery)) !== false) {
            $matches[] = $value;
          }
        }
        return $matches;
    }
 
$terms = filterResults($searchQuery, $data);

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
        if (empty($terms)):
        ?>
        <li class="list-group-item notification-bar-fail m-b-1">


          <div class="notification-bar-details">
            <h3 class="notification-bar-title">
              Nothing was found :(<br>
            </h3>
            <p>
              <strong>Suggestions:</strong>
              <ul>
                <li>Make sure that all words are spelled correctly.</li>
                <li>Try different keywords.</li>
                <li>Try more general keywords.</li>
              </ul>

            </p>
          </div>
        </li>
        <!-- End of single result -->
        <?php
        else:
// the foreach code should be here..... don't forget to close the if statement below!
      
      
        foreach ($terms as $term): 
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
          endif;
        ?>

      </ul>
    </div>
  </div>
</div>

<?php
require "partials/footer-bottom.php";
?>

