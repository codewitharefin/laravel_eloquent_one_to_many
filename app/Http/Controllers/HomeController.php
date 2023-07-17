<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class HomeController extends Controller
{
    public function index()
    {
        $data = Department::with('employee')->find(3);
        echo $data->name.'<br><br>';
        foreach($data->employee as $item) {
            echo $item->name.'<br>';
            echo $item->phone.'<br><br><br>';
        }
    }
}
