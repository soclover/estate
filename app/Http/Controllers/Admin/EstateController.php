<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    // 以下を追記
    public function add()
    {
        return view('admin.estate.create');
    }

    public function create()
    {
        return redirect('admin/estate/create');
    }

    public function edit()
    {
        return view('admin.estate.edit');
    }

    public function update()
    {
        return redirect('admin/estate/edit');
    }
}
