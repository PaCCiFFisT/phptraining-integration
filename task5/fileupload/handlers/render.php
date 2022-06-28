<?php
//$dir = "./upload/";
//$files = array_slice(scandir($dir, SCANDIR_SORT_NONE), 2);

function renderGallery() {
  $dir = "./upload/";
  $files = array_slice(scandir($dir), 2);
  natcasesort($files);
//  var_dump($files);
  foreach ($files as $image) {
    $time =date ('d-m-Y', filemtime($dir.$image));
    $size = filesize($dir.$image);
    if ($size<10000){
      $sizeText = $size . ' b';
    }elseif ($size<1000000){
      $sizeText = round($size/1000, 2) . ' Kb';
    }else{
      $sizeText = round($size/1000000,2) . ' Mb';
    }
    ?>
    <div class="gallery__item">
      <img class="gallery__img"
           src="<?= $dir . $image ?>"
           alt="<?= $image ?>">

      <div>
        <p class="gallery__img gallery__img--title">
          <?= $image ?>
        </p>
        <p class="gallery__image gallery__image--size">
          Size: <?=$sizeText?>
        </p>
        <p class="gallery__upload-date">Uploaded:
          <?=$time?>
        </p>
        <input class="gallery__checkbox"
               type="checkbox"
               onchange="<?php
               $checkboxArr = [];
               ?>" /><span>Delete</span>


      </div>
    </div>
    <?php
  }
}