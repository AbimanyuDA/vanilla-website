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
                'images' => [
                    '/images/products/Vanilla Beans (27).png',
                    '/images/products/Buah Vanilla (4).png'
                ],
                'grade_descriptions' => [
                    'Gourmet Grade' => [
                        'mature' => 'Fully Mature (100%) – Harvested at 8–9 months for maximum aroma and vanillin content.',
                        'usage' => 'Best for premium applications, extract, and culinary use.',
                    ],
                    'Grade A' => [
                        'mature' => 'Fully Mature (95–100%) – Slightly lower moisture than Gourmet but still rich in aroma and quality.',
                        'usage' => 'Best for premium applications, extract, and culinary use.',
                    ],
                    'Grade B' => [
                        'mature' => 'Semi-Mature (85–95%) – Harvested slightly earlier or with natural imperfections.',
                        'usage' => 'Suitable for extraction and processing.',
                    ],
                    'Grade C' => [
                        'mature' => 'Partially Mature (70–85%) – Includes beans that may have dried naturally or broken during curing.',
                        'usage' => 'Best for bulk vanilla extract and industrial use.',
                    ],
                ],
                'highlight_specs' => ['Vanillin Content','Length','Aroma','Texture'],
                'features' => [
                    'HS Code: 0905.10.00',
                    'Gourmet Grade',
                    'Grade A',
                    'Grade B',
                    'Grade C',
                    'Aroma: Balsamic, sweet, warm, rich in vanillin',
                    'Flavor: Strong, classic vanilla, slightly bitter aftertaste',
                    'Vanillin Content: 2% – 4.3% (High)',
                    'Texture: Oily, chewy, slightly firmer',
                    'Color: Dark brown to black, glossy',
                    'Length: 13–21 cm (longer & slender)',
                    'Best Uses: Ideal for baking, ice cream, chocolate, vanilla extract',
                    'Origin: Indonesia'
                ]
            ],
            [
                'id' => 2,
                'name' => 'VANILLA TAHITENSIS',
                'scientific_name' => 'Vanilla Tahitensis J.W. Moore',
                'category' => 'vanilla-beans',
                'description' => 'Exotic Tahitian vanilla with floral and fruity notes. Perfect for premium desserts and beverages.',
                'image' => '/images/products/vanilla-tahitensis.jpg',
                'images' => [
                    '/images/products/Vanilla Beans (48).png',
                    '/images/products/Buah Vanilla.jpg'
                ],
                'grade_descriptions' => [
                    'Gourmet Grade' => [
                        'mature' => 'Fully Mature (100%) – Harvested at 8–9 months for maximum aroma and vanillin content.',
                        'usage' => 'Best for premium applications, extract, and culinary use.',
                    ],
                    'Grade A' => [
                        'mature' => 'Fully Mature (95–100%) – Slightly lower moisture than Gourmet but still rich in aroma and quality.',
                        'usage' => 'Best for premium applications, extract, and culinary use.',
                    ],
                    'Grade B' => [
                        'mature' => 'Semi-Mature (85–95%) – Harvested slightly earlier or with natural imperfections.',
                        'usage' => 'Suitable for extraction and processing.',
                    ],
                    'Grade C' => [
                        'mature' => 'Partially Mature (70–85%) – Includes beans that may have dried naturally or broken during curing.',
                        'usage' => 'Best for bulk vanilla extract and industrial use.',
                    ],
                ],
                'highlight_specs' => ['Vanillin Content','Length','Aroma','Texture'],
                'features' => [
                    'HS Code: 0905.10.00',
                    'Gourmet Grade',
                    'Grade A',
                    'Grade B',
                    'Grade C',
                    'Aroma: Floral, fruity, smooth, more complex',
                    'Flavor: Lighter, sweeter with floral & fruity notes',
                    'Vanillin Content: 1.0% – 1.5% (Lower)',
                    'Texture: Softer, more flexible, slightly moist',
                    'Color: Reddish-brown to deep purple',
                    'Length: 13–16 cm (shorter & plumper)',
                    'Best Uses: Commonly used in perfumes, gourmet desserts, and premium pastries',
                    'Origin: Indonesia (Papua)'
                ]
            ],
            [
                'id' => 3,
                'name' => 'VANILLA PASTE',
                'scientific_name' => 'Vanilla planifolia Andrews',
                'category' => 'derivatives',
                'description' => 'Premium vanilla paste with visible vanilla seeds. Intense, full-bodied vanilla flavor perfect for gelato, ice cream, and gourmet desserts.',
                'image' => '/images/products/vanilla-paste.jpg',
                'images' => [
                    '/images/products/Vanilla Paste.png',
                    '/images/products/Vanilla Paste (10).jpg'
                ],
                'highlight_specs' => ['Contains Seeds','Flavor Profile','Packaging','Texture'],
                'features' => [
                    'HS Code: 1302.19.90',
                    'Contains Seeds: ✔ Yes (visible vanilla specks)',
                    'Flavor Profile: 100% made from natural vanilla. Intense, full-bodied vanilla flavor with authentic bean notes, slightly sweet & creamy',
                    'Packaging: HDPE bottle – 1 liter',
                    'Texture: Thick paste-like consistency, smooth with visible seeds',
                    'Processing & Origin: Natural processed using food-grade ethanol and water in a controlled facility, high-quality vanilla extract blended with finely ground vanilla seeds',
                    'Color: Dark brown with dense vanilla seed specks',
                    'Condition: 100% Pure & Natural. Rich flavor with strong vanilla notes. No additives, no preservatives, no artificial flavors or colors. GMO-Free, Gluten-Free, Allergen-Free, Food-Grade',
                    'Best Use: Premium gelato, ice cream, pastry creams, gourmet desserts, chocolate & beverage flavoring'
                ]
            ],
            [
                'id' => 5,
                'name' => 'VANILLA EXTRACT NON-ALCOHOL',
                'scientific_name' => 'Vanilla planifolia Andrews',
                'category' => 'derivatives',
                'description' => 'Halal-certified vanilla extract without alcohol. Deep, rich, aromatic vanilla perfect for halal food production and premium applications.',
                'image' => '/images/products/vanilla-extract-non-alcohol.jpg',
                'images' => [
                    '/images/products/Vanilla Extract  (11).png',
                    '/images/products/Vanilla Extract  (6).png'
                ],
                'highlight_specs' => ['Contains Seeds','Flavor Profile','Packaging','Texture'],
                'features' => [
                    'HS Code: 1302.19.90',
                    'Contains Seeds: ❌ No',
                    'Flavor Profile: 100% made from natural vanilla, deep, rich, aromatic vanilla with enhanced sweetness',
                    'Packaging: HDPE bottle – 1 liter',
                    'Texture: Light liquid, syrupy consistency with concentrated vanilla flavor',
                    'Processing & Origin: Natural extracted from vanilla beans using water-based process in a controlled facility (No alcohol)',
                    'Color: Clear to light brown',
                    'Condition: 100% Pure & Natural. Halal Certified. No alcohol, no additives, no preservatives, no artificial colors/flavors. GMO-Free, Gluten-Free, Allergen-Free, Food-Grade',
                    'Best Use: Premium halal pastries, gourmet sauces, luxury gelato, high-end desserts, beverages, and halal food production'
                ]
            ],
            [
                'id' => 6,
                'name' => 'CRYSTALLIZED VANILLA',
                'scientific_name' => 'Vanilla planifolia Andrews',
                'category' => 'derivatives',
                'description' => 'Fully mature vanilla pods with natural vanillin crystallization. Perfect for gourmet pastry, chocolates, and premium culinary displays.',
                'image' => '/images/products/crystallized-vanilla.jpg',
                'images' => [
                    '/images/products/Crystallize Vanilla.png',
                    '/images/products/DSC07965.jpg'
                ],
                'highlight_specs' => ['Vanillin Content','Packaging','Texture','Color'],
                'features' => [
                    'HS Code: 2106.90.99',
                    'Vanillin Content: 2.5%',
                    'Packaging: Glass Tube',
                    'Texture: Firm and glossy, lightly frosted with natural vanillin',
                    'Color: Dark brown to black with visible white crystalline frost',
                    'Processing & Origin: Fully mature vanilla pods',
                    'Condition: 100% Pure and Natural, No additives, preservatives, or artificial flavorings, GMO-Free, Gluten-Free, Allergen-Free, Food-Grade',
                    'Best Use: Gourmet pastry and confectionery, chocolates and pralines, vanilla bean infusions, artisan desserts and premium bakery, specialty gift products, and culinary displays'
                ]
            ],
            [
                'id' => 7,
                'name' => 'VANILLA CAVIAR',
                'scientific_name' => 'Vanilla planifolia Andrews',
                'category' => 'derivatives',
                'description' => 'Premium vanilla caviar with intense aromatic flavor. Perfect for pastry toppings, ice cream decoration, and gourmet sauces.',
                'image' => '/images/products/vanilla-caviar.jpg',
                'images' => [
                    '/images/products/Vanilla Caviar (4).png',
                    '/images/products/Vanilla Caviar (5).jpg'
                ],
                'highlight_specs' => ['Vanillin Content','Moisture Content','Flavor Profile','Packaging'],
                'features' => [
                    'HS Code: 0905.20.00',
                    'Vanillin Content: 2%',
                    'Moisture Content: 30 – 35%',
                    'Flavor Profile: Intense, aromatic, naturally sweet vanilla taste',
                    'Packaging: Vacuum Plastic',
                    'Color: Deep black with a natural glossy sheen',
                    'Texture: Firm and glossy, lightly frosted with natural vanillin',
                    'Condition: 100% Pure and Natural, No additives, preservatives, or artificial flavorings, GMO-Free, Gluten-Free, Allergen-Free, Food-Grade',
                    'Best Use: Pastry toppings, ice cream, sauces, bakery decoration'
                ]
            ],
            [
                'id' => 8,
                'name' => 'VANILLA POWDER',
                'scientific_name' => 'Vanilla planifolia Andrews',
                'category' => 'derivatives',
                'description' => '100% natural vanilla powder with intense aromatic flavor. Perfect for baking, beverage mixes, and dry applications where liquid extract is not suitable.',
                'image' => '/images/products/vanilla-powder.jpg',
                'images' => [
                    '/images/products/Vanilla Powder (4).jpg',
                    '/images/products/Vanilla Powder (2).jpg'
                ],
                'highlight_specs' => ['Processing & Origin','Flavor Profile','Packaging','Color'],
                'features' => [
                    'HS Code: 0905.20.00',
                    'Processing & Origin: 100% made from natural vanilla',
                    'Flavor Profile: Intense, aromatic, and naturally sweet vanilla flavor with strong vanilla notes',
                    'Packaging: Vacuum Plastic',
                    'Color: Rich, natural brown with fine powder consistency',
                    'Condition: 100% Pure and Natural, No additives, preservatives, or artificial flavorings, GMO-Free, Gluten-Free, Allergen-Free, Food-Grade',
                    'Best Use: Ideal for baking, beverage mixes, premium desserts, sauces, spice blends, and dry rubs. Excellent for applications where liquid extract is not suitable'
                ]
            ],
            [
                'id' => 9,
                'name' => 'VANILLA ESSENCE',
                'scientific_name' => 'Vanilla planifolia Andrews',
                'category' => 'derivatives',
                    'description' => '100% pure and natural vanilla essence extracted from premium vanilla beans. Perfect for premium pastries, gourmet sauces, and luxury desserts.',
                'image' => '/images/products/vanilla-essence.jpg',
                'images' => [
                    '/images/products/Vanilla Extract .png',
                    '/images/products/Vanilla Extract  (8).png'
                ],
                    'highlight_specs' => ['Processing & Origin','Flavor Profile','Packaging','Certificate'],
                'features' => [
                    'HS Code: 2106.90.00',
                    'Processing & Origin: Manufactured flavoring product, formulated from pure vanilla blends in a certified facility',
                    'Contains Seeds: ❌ No',
                    'Color: Clear to light brown',
                    'Flavor Profile: Contains pure vanilla, sharp, deep, rich, aromatic vanilla with enhanced sweetness and a balanced profile',
                    'Texture: Light liquid, syrupy consistency with concentrated vanilla flavor',
                    'Packaging: HDPE bottle – 1 liter',
                    'Condition: Manufactured food-grade product. Stable shelf life, allergen-free, cost-effective, rich flavor, no additives, visual appeal with strong vanilla notes. GMO-Free, no artificial flavors or colors, preservatives-free, gluten-free, allergen-free.',
                    'Best Use: Mass-market cakes, cookies, beverages, confectionery, bakery where cost efficiency is key',
                    'Certificate: Halal Certified, PIRT, ISO 22000'
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
