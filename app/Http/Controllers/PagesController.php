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
        $first = 'Fox';
        $last = 'Mulder';
        return view ('pages.about', compact('first', 'last'));
    }

}
