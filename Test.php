<?php 
require_once(__DIR__."/../../lib/test.php");
require_once("pico_removeindex.php");

class SortTest extends PHPUnit_Framework_TestCase {
  public function setUp() {
    $this->pico = $GLOBALS['pico'];
    $this->test = new Pico_RemoveIndex($this->pico);
  }

  public function testOnSPL_hasIndex() {
    $pd = array('url' => 'testurl/has/index');
    $this->test->onSinglePageLoaded($pd);
    $this->assertEquals('testurl/has/', $pd['url']);
  }

  public function testOnSPL_hasNoIndex() {
    $pd = array('url' => 'testurl/has/inde');
    $this->test->onSinglePageLoaded($pd);
    $this->assertEquals('testurl/has/inde', $pd['url']);
  }
};

?>