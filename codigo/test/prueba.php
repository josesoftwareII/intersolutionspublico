<?php
include 'simpletest/autorun.php';
include '../php/lib/connect.php';
/**
 * Test unit
 */
class testUnit extends UnitTestCase{
  function testConnect(){
    $this->assertEqual("OK",connectT());
  }
  function testConnect2(){
    $this->assertEqual("OK","Oasd");
  }

}
 ?>
