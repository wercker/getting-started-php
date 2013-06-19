<?php
use \Httpful\Request;

class CitiesResponseTest extends PHPUnit_Framework_TestCase
{
  public function testCitiesListContainsAmsterdam()
  {
    $uri = "http://localhost:8000";
    $response = Request::get($uri)->send();

    $this->assertEquals("application/json", $response->headers["Content-Type"]);
    $this->assertContains("Amsterdam", $response->body);
  }
}
?>
