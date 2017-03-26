<?php
include 'simpletest/autorun.php';
include '../php/lib/connectFuntion.php';
include '../php/lib/scrapingTest.php';
include '../php/lib/select.php';
class UnitTest extends UnitTestCase{
  function testConnect(){
    $this->assertEqual("OK",conn());
  }
  function testScraping(){
    //$this->assertEqual("OK",scraping());
  }
  function testSelect(){
    $result=select("SELECT name_site, description_site FROM sites WHERE name_site='Casa del Fundador'");
    $this->assertEqual("Casa del Fundador",$result->fetch_assoc()["name_site"]);
  }
}
?>
