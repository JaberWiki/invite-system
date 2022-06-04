<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InviteCodeStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->user()->inviteCodes()->create([
            'code' => Str::random(8),
        ]);

        return back();
    }
}
