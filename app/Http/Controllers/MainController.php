<?php

namespace App\Http\Controllers;

class MainController extends Controller {

  /**
   * Show the application dashboard to the user.
   *
   * @return Response
   */
  public function mainPage()
  {
    return view('welcome');
  }

}
