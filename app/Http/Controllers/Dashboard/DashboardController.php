<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Title\Title;

class DashboardController extends Controller
{
    public function months()
    {
        $model = new Title();
        $result = $model->countTitles();
        return view('_dashboard._dashboard', compact('result'));
    }
}
