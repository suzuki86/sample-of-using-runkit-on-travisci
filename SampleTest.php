<?php

class SampleTest extends PHPUnit_Framework_TestCase{
  public function testRunkit(){
    runkit_function_redefine('time', '', 'return "hello";');
    $this->assertEquals('hello', time());
  }
}
