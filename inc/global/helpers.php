<?php
  // Get a title
  function title_field($title)
  {
    $title = get_field($title);
    
    if ( variable_exists($title) )
      echo '<h1 class="panel__heading text-secondary">' . $title . '</h1>';
  }
  
  // Get some text
  function text_field($text, $set_width = false, $wrapper = false)
  {
    $text = get_field($text);
    $set_width = ( $set_width === true ? 'class="panel__text"' : false );
    if ( $wrapper === true )
    {
      if ( variable_exists($text) ) echo '<p ' . $set_width . '>' . $text . '</p>';
    }
    else
    {
      echo $text;
    }
  }

  // Srcset helper - device pixel ratio only
  /* Usage example: <img <?php srcset('image_id', 'image_size'); ?> class="a class"> */
  function srcset($img_id, $img_size) {
      $image = get_field($img_id);
      $size = $img_size;
      $size_2x = $img_size.'_2x';
      $thumb = $image['sizes'][$size];
      $thumb_2x = $image['sizes'][$size_2x];

      echo 'src="'.$thumb.'" srcset="'.$thumb.' 1x, '.$thumb_2x.' 2x"';
  }
  
?>