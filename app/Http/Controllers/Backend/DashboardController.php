<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CustomerOrder;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalOrders = CustomerOrder::all();
        $totalOrders = count($totalOrders);

        $thisMonth = Carbon::now()->format('m');
        $lastMonth = Carbon::now()->subMonth()->format('m');
        $ordersThisMonth = CustomerOrder::whereMonth('created_at', $thisMonth)->count();
        $ordersLastMonth = CustomerOrder::whereMonth('created_at', $lastMonth)->count();

        $incThisMonth = OrderItem::whereMonth('created_at', $thisMonth)->pluck('total');
        $incLastMonth = OrderItem::whereMonth('created_at', $lastMonth)->pluck('total');
        $incThisMonthTotal = $incThisMonth->sum();
        $incLastMonthTotal = $incLastMonth->sum();


        return view('backend.pages.management', compact(
            'totalOrders',
            'ordersThisMonth',
            'ordersLastMonth',
            'incThisMonthTotal',
            'incLastMonthTotal'
        ));
    }


    public function totalOrders()
    {


    }

}

