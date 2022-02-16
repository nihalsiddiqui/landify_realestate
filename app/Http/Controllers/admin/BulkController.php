<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BulkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(Request $request, $id)
    {

        if(status == 1) {
            DB::table('admins')
                ->where('id', $id)
                ->update(['status' => 0]);
        }
        elseif(status == 'deactivated'){
             DB::table('admins')
                ->where('id', $id )
                ->update(['status' => 0]);
        };
        }
}
