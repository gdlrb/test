<?php namespace blogs\Http\Controllers;

use blogs\Http\Requests;
use blogs\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
    {
        return view ('pages.about');
    }

}
