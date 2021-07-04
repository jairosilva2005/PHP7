<?php

  function show_iterable(iterable $iterable_item) {
    foreach($iterable_item as $i) {
      echo $i;
    }
  }

  function get_iterable(): iterable {
    return [12, 49, 37, 29];
  }

  show_iterable([1, 2, 3, 4]);

  echo PHP_EOL;

  $iterable_item = get_iterable();
  foreach($iterable_item as $i) {
    echo "[" . $i . "]";
  }

?>
