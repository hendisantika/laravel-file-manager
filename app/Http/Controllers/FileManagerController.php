<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class FileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        return view('filemanager');
    }
}
