<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class DataController extends Controller
{
     static function getAllTeams()
    {
          $teammembers = Team::all();
          return $teammembers;
    }
}
