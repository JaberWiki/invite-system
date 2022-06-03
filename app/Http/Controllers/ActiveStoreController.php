<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiveStoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'code' => [
                'required',
                'exists:invite_codes,code',
            ],
        ]);
    }
}
