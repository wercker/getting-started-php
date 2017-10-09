<?php
use PHPUnit\Framework\TestCase;
use \Httpful\Request;

class CitiesResponseTest extends TestCase
{
  public function testCitiesListContainsAmsterdam()
  {
    $uri = "http://localhost:8080";
    $response = Request::get($uri)->send();

    $this->assertEquals("application/json", $response->headers["Content-Type"]);
    $this->assertContains("Amsterdam", $response->body);
  }
}
?>
