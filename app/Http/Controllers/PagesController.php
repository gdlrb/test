<?php namespace blogs\Http\Controllers;

use blogs\Http\Requests;
use blogs\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    /**
     * @return $this
     */
    public function about()
    {

        $people =[
           'Taylor Otwell', 'Dayle Rees', 'Eric Barnes'
        ];

        return view ('pages.about', compact('people'));
    }
    public function contact()
    {
        return view('pages.contact');
    }

}
