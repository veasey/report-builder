<?php

namespace Veasey\ReportBuilder\Tests;

use Illuminate\Support\Collection;

use Veasey\ReportBuilder\ReportServiceProvider;
use Veasey\ReportBuilder\Facades\ReportArray;
use Veasey\ReportBuilder\Facades\ReportCollection;

class TestCase1 extends \Orchestra\Testbench\TestCase
{
  public function setUp(): void
  {
    parent::setUp();

    // additional setup


  }

  protected function getPackageProviders($app)
  {
    return [
      ReportServiceProvider::class,
    ];
  }

  protected function getEnvironmentSetUp($app)
  {
    // perform environment setup
  }

  // return array
  public function testArrayFacade() {
    $report = ReportArray::build();
    $this->assertTrue(is_array($report));
  }

  // return collection
  public function testCollectionFacade() {
    $report = ReportCollection::build();
    $this->assertTrue($report instanceof Collection);
  }

  public function getHeaders() {
      $headers = ReportCollection::setHeaders(['a', 'b'])->getHeaders();
      $this->assertTrue( is_array( $headers ) );
      $this->assertEquals( $headers[0] == 'a' );
  }

  public function getRows() {
      $rows = ReportCollection::setHeaders(['a', 'b'])->setRows([1, 1], [2, 2])->getRows();
      $this->assertTrue( is_array( $rows ));
      $this->assertEquals( $rows[1][0] == 2);
  }

  public function getReports() {
    $headers = ['name', 'age', 'limbs'];
    $data[] = ['chris', 25, 4];
    $data[] = ['octoman', 42, 8];
    $data[] = ['timmy', 9, 1];

    $report = ReportCollection::setHeaders($headers)->setRows($data)->build();
    $this->assertTrue($report instanceof Collection);
  }

  // add incorrect number of headers
  public function testTooManyColumns() {

    $rows = array(
      [1, 2, 3, 4],
      [2, 3, 4, 5]
    );

    $this->expectException( ReportCollection::setHeaders(['a', 'b', 'c'])->setRows($rows)->build() );
  }
}
