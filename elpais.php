<?php
$xml = simplexml_load_file('https://feeds.elpais.com/mrss-s/pages/ep/site/elpais.com/portada');

foreach ($xml->channel->item as $item) {
    $title= (string) $item->title;
  
    print '<div>';
  
    printf(
      '<h2>%s</h2>', 
      $title, 
    );
  
    if ($media = $item->children('media', TRUE)) {
      if ($media->content->thumbnail) {
        $attributes = $media->content->thumbnail->attributes();
      }
    }
  
    echo '</div>';
  }
  
?>
