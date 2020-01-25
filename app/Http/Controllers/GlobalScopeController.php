<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Scopes\ActiveScope;

class GlobalScopeController extends Controller
{
    /**
     * Get User.
     *
     * @return void
     */
    public function getUser()
    {
        DB::enableQueryLog();
        User::select('*')->get();
        User::select('*')->withoutGlobalScope(ActiveScope::class)->get();
		User::select("*")->today()->get();
        $quries = DB::getQueryLog();
        dd($quries);
    }
}
