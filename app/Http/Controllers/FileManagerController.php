<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;

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
