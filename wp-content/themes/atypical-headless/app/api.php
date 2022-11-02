<?php

function nullify_empty($value, $post_id, $field){
  if (empty($value)) {
    return null;
  }

  return $value;
}
add_filter('acf/format_value/type=image', 'nullify_empty', 100, 3);
add_filter('acf/format_value/type=relationship', 'nullify_empty', 100, 3);
add_filter('acf/format_value/type=gallery', 'nullify_empty', 100, 3);
add_filter('acf/format_value/type=post_object', 'nullify_empty', 100, 3);

