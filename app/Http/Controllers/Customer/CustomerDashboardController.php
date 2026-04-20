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
            'categories' => [
                ['label' => 'Mobiles', 'count' => '64,891 ads', 'icon' => 'mobile'],
                ['label' => 'Electronics', 'count' => '48,531 ads', 'icon' => 'monitor'],
                ['label' => 'Vehicles', 'count' => '29,384 ads', 'icon' => 'car'],
                ['label' => 'Property', 'count' => '15,352 ads', 'icon' => 'home'],
                ['label' => 'Home & Living', 'count' => '13,789 ads', 'icon' => 'sofa'],
                ['label' => 'Pets & Animals', 'count' => '11,250 ads', 'icon' => 'paw'],
                ['label' => "Men's Fashion & Grooming", 'count' => '6,253 ads', 'icon' => 'shirt'],
                ['label' => 'Hobbies, Sports & Kids', 'count' => '5,200 ads', 'icon' => 'ball'],
                ['label' => "Women's Fashion & Beauty", 'count' => '4,951 ads', 'icon' => 'dress'],
                ['label' => 'Business & Industry', 'count' => '3,772 ads', 'icon' => 'factory'],
                ['label' => 'Education', 'count' => '2,006 ads', 'icon' => 'cap'],
                ['label' => 'Essentials', 'count' => '1,417 ads', 'icon' => 'bag'],
                ['label' => 'Jobs', 'count' => '1,388 ads', 'icon' => 'briefcase'],
                ['label' => 'Services', 'count' => '592 ads', 'icon' => 'tools'],
                ['label' => 'Agriculture', 'count' => '421 ads', 'icon' => 'wheat'],
                ['label' => 'Overseas Jobs', 'count' => '65 ads', 'icon' => 'passport'],
            ],
            'featuredAds' => [
                [
                    'title' => 'HP Elitebook 840 G3 (8 GB DDR4 2133 MHz Ram)',
                    'location' => 'Khulna, Laptops',
                    'price' => 'Tk 20,500',
                    'thumbs' => [
                        'https://images.unsplash.com/photo-1517336714739-489689fd1ca8?auto=format&fit=crop&w=600&q=60',
                        'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=600&q=60',
                        'https://images.unsplash.com/photo-1518773553398-650c184e0bb3?auto=format&fit=crop&w=600&q=60',
                    ],
                ],
                [
                    'title' => 'Dji Neo Fly More Combo',
                    'location' => 'Khulna, Other Hobby, Sport & Kids items',
                    'price' => 'Tk 28,999',
                    'thumbs' => [
                        'https://images.unsplash.com/photo-1473968512647-3e447244af8f?auto=format&fit=crop&w=600&q=60',
                        'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?auto=format&fit=crop&w=600&q=60',
                        'https://images.unsplash.com/photo-1510127034890-ba27508e9f1c?auto=format&fit=crop&w=600&q=60',
                    ],
                ],
            ],
            'quickLinks' => [
                [
                    'title' => '48,531 ads in Electronics',
                    'items' => ['Desktop Computers', 'Laptops', 'TVs', 'Cameras, Camcorders & Accessories', 'Audio & Sound Systems'],
                ],
                [
                    'title' => '15,352 ads in Property',
                    'items' => ['Apartments For Sale', 'Land', 'Apartment Rentals', 'Commercial Property Rentals', 'Room Rentals'],
                ],
                [
                    'title' => '1,388 ads in Jobs',
                    'items' => ['Sales Executive', 'Marketing Executive', 'Delivery Rider', 'Customer Service Jobs', 'Supervisor'],
                ],
                [
                    'title' => '29,384 ads in Vehicles',
                    'items' => ['Cars', 'Motorbikes', 'Bicycles', 'Trucks', 'Auto Parts & Accessories'],
                ],
            ],
        ]);
    }
}
