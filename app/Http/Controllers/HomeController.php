<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage
     */
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'VANILLA PLANIFOLIA',
                'scientific_name' => 'Vanilla Planifolia Andrews',
                'category' => 'vanilla-beans',
                'description' => 'Premium vanilla beans sourced directly from Indonesia. Known for its rich, sweet and creamy flavor profile.',
                'image' => '/images/products/vanilla-planifolia.jpg',
                'features' => [
                    'Moisture Content: 25-35%',
                    'Length: 12-18 cm',
                    'Origin: Indonesia',
                    'Certification: Organic Available'
                ]
            ],
            [
                'id' => 2,
                'name' => 'VANILLA TAHITENSIS',
                'scientific_name' => 'Vanilla Tahitensis J.W. Moore',
                'category' => 'vanilla-beans',
                'description' => 'Exotic Tahitian vanilla with floral and fruity notes. Perfect for premium desserts and beverages.',
                'image' => '/images/products/vanilla-tahitensis.jpg',
                'features' => [
                    'Moisture Content: 35-45%',
                    'Length: 14-20 cm',
                    'Aromatic Profile: Floral & Fruity',
                    'Origin: Indonesia'
                ]
            ],
            [
                'id' => 3,
                'name' => 'VANILLA PASTE',
                'scientific_name' => 'Vanilla planifolia Andrews',
                'category' => 'derivatives',
                'description' => 'Pure vanilla paste made from premium vanilla beans. Convenient for baking and cooking applications.',
                'image' => '/images/products/vanilla-paste.jpg',
                'features' => [
                    'Pure vanilla bean seeds',
                    'No artificial flavors',
                    'Easy to use',
                    'Food grade packaging'
                ]
            ],
            [
                'id' => 4,
                'name' => 'VANILLA EXTRACT ALCOHOL',
                'scientific_name' => 'Vanilla planifolia Andrews',
                'category' => 'derivatives',
                'description' => 'Premium vanilla extract with alcohol base. Ideal for baking and culinary applications.',
                'image' => '/images/products/vanilla-extract-alcohol.jpg',
                'features' => [
                    'Alcohol base: 35%',
                    'Pure vanilla extract',
                    'Food grade quality',
                    'Various bottle sizes'
                ]
            ],
            [
                'id' => 5,
                'name' => 'VANILLA EXTRACT NON-ALCOHOL',
                'scientific_name' => 'Vanilla planifolia Andrews',
                'category' => 'derivatives',
                'description' => 'Halal-certified vanilla extract without alcohol. Perfect for halal food production.',
                'image' => '/images/products/vanilla-extract-non-alcohol.jpg',
                'features' => [
                    'Halal certified',
                    'No alcohol content',
                    'Pure vanilla flavor',
                    'Suitable for all food products'
                ]
            ]
        ];

        $whyChooseUs = [
            [
                'icon' => 'fa-certificate',
                'title' => 'Certified Quality',
                'description' => 'All our products are certified organic and meet international quality standards.'
            ],
            [
                'icon' => 'fa-leaf',
                'title' => 'Sustainable Sourcing',
                'description' => 'We work directly with local farmers to ensure sustainable and ethical vanilla production.'
            ],
            [
                'icon' => 'fa-shipping-fast',
                'title' => 'Global Shipping',
                'description' => 'Fast and reliable shipping to destinations worldwide with proper handling and packaging.'
            ],
            [
                'icon' => 'fa-handshake',
                'title' => 'B2B Partnership',
                'description' => 'We offer competitive wholesale prices and flexible terms for bulk orders.'
            ]
        ];

        return view('home', compact('products', 'whyChooseUs'));
    }

    /**
     * Display product detail page
     */
    public function productDetail($id)
    {
        // Logic untuk detail produk
        return view('products.detail', compact('id'));
    }

    /**
     * Display about page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display contact page
     */
    public function contact()
    {
        return view('contact');
    }
}
