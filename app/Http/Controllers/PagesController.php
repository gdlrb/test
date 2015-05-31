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
       //$name = 'Jeffrey <span style="color :red"> Way</span>';

        return view ('pages.about')->with([
            'first' => 'Jeffrey',
            'last' => 'Way'
        ]);
    }

}
