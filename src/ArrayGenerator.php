<?php

namespace Veasey\ReportBuilder;

class ArrayGenerator extends ReportBuilder {

  public function build() {
    $array = array();
    if($this->headers)
      $array[] = $this->headers;
    if($this->rows)
      $array[] = $this->rows;
    return $array;
  }
}
