<?php
include 'simpletest/autorun.php';
include '../php/lib/connectFuntion.php';

class UnitTest extends UnitTestCase{
  function testConnect(){
    $this->assertEqual("OK",conn());
  }
  function testConnect2(){
    $this->assertEqual("OK","OK");
  }
}
?>
