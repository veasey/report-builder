<?php

namespace Veasey\ReportBuilder;

use Illuminate\Support\Collection;

class CollectionGenerator extends ReportBuilder {

  public function build() {

    $report = collect();

    if ($this->headers && $this->rows) {
      $headers = collect($this->headers);
      foreach($this->rows as $row) {
        $report->push( $headers->combine($row) );
      }
    }

    return $report;
  }
}
