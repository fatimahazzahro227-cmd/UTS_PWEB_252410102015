<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
private function getProducts()
{
    return [
        [
        'category' => 'Storage',
        'name' => 'Wooden Shelf',
        'image' => 'images/lemari.jpg',
        'price' => 'Rp 700.000',
        'specification' => 'Natural wood',
        'dimension' => '80 × 40 × 100 cm',
        'colors' => 'Natural Teak, Warm Walnut',
        'stock' => 12
        ],
        [
        'category' => 'Clock',
        'name' => 'The Timeless',
        'image' => 'images/jam.jpg',
        'price' => 'Rp 349.000',
        'specification' => 'Wooden wall clock',
        'dimension' => 'Diameter 45 × Tebal 4 cm',
        'colors' => 'Natural Teak, Warm Walnut',
        'stock' => 8
        ],
        [
        'category' => 'Rack',
        'name' => 'Arbor Space',
        'image' => 'images/rak.jpg',
        'price' => 'Rp 680.000',
        'specification' => 'Natural wood',
        'dimension' => '60 × 20 × 80 cm',
        'colors' => 'Natural Teak, Warm Walnut',
        'stock' => 15
        ],
        [
        'category' => 'Lamp',
        'name' => 'Lumina Nord',
        'image' => 'images/lampu.jpeg',
        'price' => 'Rp 900.000',
        'specification' => 'Wooden decorative lamp',
        'dimension' => '25 × 25 × 120 cm',
        'colors' => 'Natural finish',
        'stock' => 10
        ],
        [
        'category' => 'Sofa',
        'name' => 'Kromo Suite',
        'image' => 'images/sofa.jpeg',
        'price' => 'Rp 2.500.000',
        'specification' => 'Modern wooden sofa',
        'dimension' => '180 × 80 × 85 cm',
        'colors' => 'Natural Teak, Warm Walnut',
        'stock' => 6
        ],
        [
        'category' => 'Remote Holder',
        'name' => 'Pod Lounger',
        'image' => 'images/remote_place.jpeg',
        'price' => 'Rp 225.000',
        'specification' => 'Wooden remote organizer',
        'dimension' => '20 × 12 × 10 cm',
        'colors' => 'Natural finish',
        'stock' => 20
        ],
        ];
    }

    public function login()
    {
        if (session()->has('username')) {
            return redirect()->route('dashboard', [
            'username' => session('username')
            ]);
        }

        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
        'username' => 'required|string|max:50'
        ]);

        session(['username' => $request->username]);

        return redirect()->route('dashboard', [
        'username' => $request->username
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Admin');
        $products = $this->getProducts();

        return view('dashboard', compact('username', 'products'));
    }

    public function pengelolaan()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $products = $this->getProducts();

        return view('pengelolaan', [
            'username' => session('username'),
            'products' => $products
        ]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Admin');

        $profile = [
            'email' => 'admin@modernwood.test',
            'role' => 'Administrator',
            'store' => 'MODERN WOOD',
            'status' => 'Active',
        ];

        return view('profile', compact('username', 'profile'));
    }

    public function logout()
    {
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('login');
    }
}