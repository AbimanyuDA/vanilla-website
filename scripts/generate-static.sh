#!/bin/bash

# Generate static HTML from Laravel routes
echo "Generating static HTML files..."

# Create public/html directory if it doesn't exist
mkdir -p public/html

# Generate home page
php artisan tinker <<EOF
Route::get('/', function() {
    return view('home', [
        'products' => collect(json_decode(file_get_contents('database/data/products.json'), true)),
        'whyChooseUs' => collect(json_decode(file_get_contents('database/data/why-choose.json'), true))
    ]);
})->getName('home');
EOF

echo "HTML generation complete!"
