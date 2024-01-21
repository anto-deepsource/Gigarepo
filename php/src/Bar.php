<?php

function getSlug(string $title): string
{
  $array = explode(' ', strtolower($title));
  return implode('-', $array);
  unset($array); // invalid: this code will never executed
}
