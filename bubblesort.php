<?php

class BubbleSort
{
  private $array;

  public function __construct($array)
  {
    $this->array = $array;
  }

  public function sort()
  {
    $length = count($this->array);

    for ($i = 0; $i < $length; $i++) {
      for ($j = 0; $j < $length - $i - 1; $j++) {
        if ($this->array[$j] > $this->array[$j + 1]) {
          $temp = $this->array[$j];
          $this->array[$j] = $this->array[$j + 1];
          $this->array[$j + 1] = $temp;
        }
      }
    }
  }

  public function getMedian()
  {
    $length = count($this->array);

    if ($length % 2 == 0) {
      return ($this->array[$length / 2 - 1] + $this->array[$length / 2]) / 2;
    } else {
      return $this->array[($length - 1) / 2];
    }
  }

  public function getLargest()
  {
    return $this->array[count($this->array) - 1];
  }
}

class Main
{
  public function processData()
  {
    $array = array(1, 5, 3, 8, 2);
    $bubbleSort = new BubbleSort($array);
    $bubbleSort->sort();

    echo "Median: " . $bubbleSort->getMedian() . "\n";
    echo "Largest: " . $bubbleSort->getLargest() . "\n";
  }
}

$main = new Main();
$main->processData();
