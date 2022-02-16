<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function company()
    {
        $company  = Company::latest()->take(10)->get();
        return response()->json([
            'company' => $company
        ]);
    }

    public function getCompany($id)
    {
        $company = Company::find($id);
        return response()->json([
            'company' => $company
        ]);
    }
}
