<?php

namespace App\Http\Controllers;

use App\Imports\OrderDataImport;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        try {
            Excel::import(new OrderDataImport(), $request->file);
        } catch (\Exception $e) {
            Log::error($e);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Upload on going'
        ]);

    }

}
