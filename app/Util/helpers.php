<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

function getUser(){
  $user = Auth::guard('web')->user();
  return $user;
}