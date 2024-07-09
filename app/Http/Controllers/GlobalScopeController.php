<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Scopes\ActiveScope;
use DB;

class GlobalScopeController extends Controller
{
    /**
     * Get User.
     *
     * @return void
     */
    public function getUser()
    {
        echo User::select('*')->toRawSql() . PHP_EOL;
        echo User::select('*')->withoutGlobalScope(ActiveScope::class)->toRawSql() . PHP_EOL;
        echo User::select("*")->today()->toRawSql() . PHP_EOL;
    }
}
