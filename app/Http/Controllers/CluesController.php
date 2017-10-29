<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Clues;

class CluesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {

      return view('contest');
  }

  public function answer(Request $request){
    $ans = $request->input("answer");
    $lvl = $request->input("level");
    $result = false;


    switch ($lvl) {
      case 0:
        $result = $ans == "h2pxh";
        break;
      case 1:
        $result = $ans == "batke";
        break;
	  case 2:
        $result = $ans == "7xle9";
        break;
	  case 3:
        $result = $ans == "sh5bn";
        break;
	  case 4:
        $result = $ans == "t0hwo";
        break;
	  case 5:
        $result = $ans == "sh5bn";
        break;
      default:
        $result = false;
        break;
    }

    if($result && $lvl == Auth::user()->game_level){
      $clue = new Clues;
      $clue->user_id = Auth::user()->id;
      $clue->game_level = $lvl;
      $clue->save();
      Auth::user()->game_level = $lvl+1;
      Auth::user()->save();

    }

    return view('contest', ["result"=>$result]);
  }
}
