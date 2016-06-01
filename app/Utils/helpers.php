<?php

function urlT($url) {
  $url = url($url);
  if (Auth::check()) {
    $url = $url.'?api_token='.encrypt(Auth::user()->api_token);
  }
  return $url;
}
