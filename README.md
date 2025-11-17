# 🌿 Indonesian Premium Vanilla Export Website

Website export untuk **Vanilla Beans** dan produk turunan vanilla premium dari Indonesia, dibangun dengan **Laravel Framework**.

## 🎯 Tentang Project

Website ini dirancang untuk bisnis export vanilla beans premium dari Indonesia ke pasar global. Menampilkan:

### **Produk Utama:**
- **Vanilla Planifolia** (Vanilla Planifolia Andrews)
- **Vanilla Tahitensis** (Vanilla Tahitensis J.W. Moore)

### **Produk Turunan (Vanilla Derivatives):**
- **Vanilla Paste** (Vanilla planifolia Andrews)
- **Vanilla Extract Alcohol** (Vanilla planifolia Andrews)  
- **Vanilla Extract Non-Alcohol** (Vanilla planifolia Andrews) - Halal Certified

## 🎨 Design & Features

- **Skema Warna:** Terinspirasi dari sample website dengan palet warna:
  - Primary: `#F29923` (Orange)
  - Secondary: `#41281B` (Brown)
  - Text Gold: `#FFDD79` (Gold)
  - Accent: `#FFFFFF` (White)

- **Responsive Design:** Fully responsive untuk desktop, tablet, dan mobile
- **Modern Layout:** Clean dan professional untuk B2B export business
- **SEO Friendly:** Struktur semantic HTML yang baik

## 📁 Struktur Project

```
Vanilla/
├── app/
│   └── Http/
│       └── Controllers/
│           └── HomeController.php      # Controller utama
├── public/
│   ├── css/
│   │   └── style.css                   # Custom CSS dengan theme vanilla
│   ├── js/
│   │   └── app.js                      # JavaScript interactions
│   └── images/                         # Folder gambar terorganisir
│       ├── logo/                       # Logo perusahaan
│       ├── hero/                       # Hero/banner images
│       ├── products/                   # Product images
│       └── gallery/                    # Gallery images
├── resources/
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php          # Master layout
│       │   └── partials/
│       │       ├── header.blade.php   # Header component
│       │       └── footer.blade.php   # Footer component
│       ├── home.blade.php             # Homepage
│       ├── about.blade.php            # About page
│       └── contact.blade.php          # Contact page
└── routes/
    └── web.php                         # Routes definition
```

## 🚀 Requirements

- **PHP** >= 8.2
- **Composer**
- **Laravel** 12.x
- **Node.js & NPM** (optional, untuk asset compilation)

## ⚙️ Installation

### 1. Clone Repository
```bash
git clone https://github.com/AbimanyuDA/vanilla-website.git
cd vanilla-website
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure Database (Optional)
Edit file `.env` untuk konfigurasi database jika diperlukan:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vanilla_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Run Migration (Jika ada)
```bash
php artisan migrate
```

## 🏃 Running the Application

### Development Server
```bash
php artisan serve
```

Aplikasi akan berjalan di: **http://localhost:8000**

### Alternative dengan PHP Built-in Server
```bash
php -S localhost:8000 -t public
```

## 📄 Pages & Routes

| Route | Page | Description |
|-------|------|-------------|
| `/` | Home | Homepage dengan hero, produk vanilla, dan CTA |
| `/about` | About Us | Halaman tentang perusahaan dan nilai-nilai |
| `/contact` | Contact | Halaman kontak dengan info bisnis |
| `/products/{id}` | Product Detail | Detail produk (coming soon) |

## 🎨 Customization

### Menambah Produk Baru
Edit file `app/Http/Controllers/HomeController.php` pada method `index()`:

```php
$products = [
    [
        'id' => 6,
        'name' => 'Nama Produk Baru',
        'scientific_name' => 'Scientific Name',
        'category' => 'vanilla-beans', // atau 'derivatives'
        'description' => 'Deskripsi produk...',
        'image' => '/images/products/your-image.jpg',
        'features' => [
            'Feature 1',
            'Feature 2',
        ]
    ],
];
```

### Mengubah Warna Theme
Edit file `public/css/style.css` pada bagian `:root` variables:

```css
:root {
    --color-primary: #F29923;    /* Orange */
    --color-secondary: #41281B;   /* Brown */
    --color-text-gold: #FFDD79;   /* Gold */
    --color-accent: #FFFFFF;      /* White */
}
```

## 📸 Upload Images

Upload gambar produk ke folder yang sesuai:

- **Logo:** `public/images/logo/`
- **Hero/Banner:** `public/images/hero/`
- **Products:** `public/images/products/`
- **Gallery:** `public/images/gallery/`

**Rekomendasi format:** JPG/PNG dengan ukuran optimized untuk web (max 500KB per image).

## 🔧 Development Notes

### Teknologi yang Digunakan:
- **Backend:** Laravel 12.x
- **Frontend:** Vanilla CSS (No framework)
- **Fonts:** Google Fonts (Montserrat, Roboto, Oswald, Open Sans, Poppins)
- **Icons:** Font Awesome 6

### Best Practices:
- ✅ Struktur folder terorganisir dengan baik
- ✅ Reusable components (header, footer)
- ✅ Responsive design dengan mobile-first approach
- ✅ Clean code dengan komentar yang jelas
- ✅ SEO-friendly URLs dan meta tags

## 🚀 Deployment

### Prerequisites untuk Production:
1. Server dengan PHP 8.2+ dan Composer
2. Web server (Apache/Nginx)
3. SSL Certificate (recommended untuk HTTPS)

### Deploy ke Production:
```bash
# Set environment to production
APP_ENV=production
APP_DEBUG=false

# Optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set proper permissions
chmod -R 755 storage bootstrap/cache
```

## 📝 TODO / Future Development

- [ ] Product detail pages
- [ ] Admin panel untuk manage products
- [ ] Contact form dengan email notification
- [ ] Multi-language support (EN/ID)
- [ ] Product catalog PDF download
- [ ] Gallery/portfolio section
- [ ] Blog/articles tentang vanilla
- [ ] Customer testimonials
- [ ] Integration dengan WhatsApp API

## 🤝 Contributing

Ini adalah private repository untuk bisnis export. Untuk kontribusi atau pertanyaan, silakan hubungi admin.

## 📧 Contact

- **Email:** export@vanillaindonesia.com
- **Phone:** +62 812 3456 7890
- **WhatsApp:** [Chat Now](https://wa.me/628123456789)

## 📄 License

© 2025 Indonesian Vanilla Export. All rights reserved.

---

**Built with ❤️ using Laravel Framework**
