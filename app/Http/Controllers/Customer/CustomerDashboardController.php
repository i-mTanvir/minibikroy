<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CustomerDashboardController extends Controller
{
    public function index(): View
    {
        return view('customer.screens.customer_dashboard.dashboard', [
            'title' => 'Customer Dashboard',
            'customerName' => 'Rahim Uddin',
            'stats' => [
                ['label' => 'Active Orders', 'value' => 3],
                ['label' => 'Completed Orders', 'value' => 24],
                ['label' => 'Saved Listings', 'value' => 11],
                ['label' => 'Pending Reviews', 'value' => 2],
            ],
            'recentOrders' => [
                [
                    'order_no' => 'MBK-2026-1044',
                    'item' => 'Used Yamaha FZ V3',
                    'date' => '20 Apr 2026',
                    'amount' => '৳230,000',
                    'status' => 'Processing',
                ],
                [
                    'order_no' => 'MBK-2026-1037',
                    'item' => 'Helmet - LS2 FF320',
                    'date' => '17 Apr 2026',
                    'amount' => '৳8,500',
                    'status' => 'Delivered',
                ],
                [
                    'order_no' => 'MBK-2026-1029',
                    'item' => 'Engine Oil 10W40',
                    'date' => '12 Apr 2026',
                    'amount' => '৳1,350',
                    'status' => 'Delivered',
                ],
            ],
            'quickActions' => [
                ['label' => 'Order History', 'href' => '#'],
                ['label' => 'Profile', 'href' => '#'],
                ['label' => 'Address Book', 'href' => '#'],
                ['label' => 'Support', 'href' => '#'],
            ],
        ]);
    }
}
