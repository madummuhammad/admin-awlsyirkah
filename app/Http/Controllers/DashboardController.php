<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ExchangeRate;
use App\Models\TableData;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['totalUser'] = TableData::latest()->count();
        $data['goldExchange'] = ExchangeRate::where('code','emas')->limit(8)->orderBy('date','DESC')->get();
        $data['silverExchange'] = ExchangeRate::where('code','perak')->limit(8)->orderBy('date','DESC')->get();
        return view('dashboard', $data);
    }

    
}
