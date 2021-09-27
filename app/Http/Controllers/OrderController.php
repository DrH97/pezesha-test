<?php

namespace App\Http\Controllers;

use App\Imports\OrderDataImport;
use App\Models\Order;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fileUpload(Request $request)
    {
        //
        Excel::import(new OrderDataImport(), $request->file);

    }

}
