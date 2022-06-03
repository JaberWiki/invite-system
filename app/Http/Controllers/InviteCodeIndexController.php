<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InviteCodeIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('invites.index', [
            'inviteCodes' => $request->user()->inviteCodes
        ]);
    }
}
