<?php

use App\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

  protected $fizzBuzz;

  public function setUp()
  {
    $this->fizzBuzz = new FizzBuzz;
  }

  public function testIsFizzBuzz()
  {
    $this->assertTrue($this->fizzBuzz->isFizzBuzz(15));
    $this->assertTrue($this->fizzBuzz->isFizzBuzz(30));
    $this->assertTrue($this->fizzBuzz->isFizzBuzz(60));
    $this->assertFalse($this->fizzBuzz->isFizzBuzz(3));
    $this->assertFalse($this->fizzBuzz->isFizzBuzz(5));
    $this->assertFalse($this->fizzBuzz->isFizzBuzz(10));
  }

  public function testIsFizz()
  {
    $this->assertTrue($this->fizzBuzz->isFizz(3));
    $this->assertTrue($this->fizzBuzz->isFizz(9));
    $this->assertTrue($this->fizzBuzz->isFizz(12));
    $this->assertFalse($this->fizzBuzz->isFizz(15));
    $this->assertFalse($this->fizzBuzz->isFizz(5));
    $this->assertFalse($this->fizzBuzz->isFizz(10));
  }

  public function testIsBuzz()
  {
    $this->assertTrue($this->fizzBuzz->isBuzz(5));
    $this->assertTrue($this->fizzBuzz->isBuzz(10));
    $this->assertTrue($this->fizzBuzz->isBuzz(20));
    $this->assertFalse($this->fizzBuzz->isBuzz(15));
    $this->assertFalse($this->fizzBuzz->isBuzz(3));
    $this->assertFalse($this->fizzBuzz->isBuzz(9));
  }

}