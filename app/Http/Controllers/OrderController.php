<?php

namespace App\Http\Controllers;

use App\Imports\OrderDataImport;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function fileUpload(Request $request)
    {
        //
        Excel::import(new OrderDataImport(), $request->file);

        return response()->json([
            'status' => 'success',
            'message' => 'Upload on going'
        ]);

    }

}
