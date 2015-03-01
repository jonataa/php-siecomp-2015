<?php

namespace App;

class FizzBuzz
{

  public function isFizzBuzz($numero)
  {
    return ($numero % 3 == 0) && ($numero % 5 == 0);
  }

  public function isFizz($numero)
  {
    return ($numero % 3 == 0) && ($numero % 5 != 0);
  }

  public function isBuzz($numero)
  {
    return ($numero % 5 == 0) && ($numero % 3 != 0);
  }

}