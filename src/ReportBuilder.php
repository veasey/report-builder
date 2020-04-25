<?php

namespace Veasey\ReportBuilder;

class ReportBuilder {

  protected $headers;
  protected $rows;

  public $columns;

  private function setNumberOfColumns(int $cols) {
    $this->columns = $cols;
  }

  public function setHeaders(array $headers) {
    $this->setNumberOfColumns(count($headers));
    $this->headers = $headers;
    return $this;
  }

  public function getHeaders() {
    return $this->headers;
  }

  public function insertRow(array $row) {
    if (count($headers) == $columns) {
      $this->rows[] = $row;
      return true;
    } else {
      throw new Exception("Number of items in row must be equal to number of columns");
    }
  }

  public function getRows() {
    return $this->rows;
  }
}
