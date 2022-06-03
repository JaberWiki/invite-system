<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActiveStoreRequest;
use App\Models\InviteCode;
use Illuminate\Http\Request;
use App\Rules\InviteCodeHasQuantity;
use App\Rules\InviteCodeNotExpired;

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
    public function __invoke(ActiveStoreRequest $request)
    {
        return view('activate.index');
    }
}
