# Laravel Apollo HTML Bootstrap Template Generator

This script allows you to quickly generate Laravel Blade view pages using the **Apollo HTML Bootstrap** template as the foundation. It automates the creation of Blade view files and appends a new route to Laravel's `routes/web.php` based on the provided parameters.

## Key Features

- **Generate View Pages**: Choose between `app` or `guest` layout to generate ready-to-use Blade view files in the appropriate directory.
- **Automatic Route Registration**: Automatically appends a new route to `routes/web.php` for the generated page.
- **Title Slugification**: The provided page title is automatically converted into a URL-friendly slug.
- **Customizable Layouts**: Supports two layouts:  
  - `app` (main application pages)  
  - `guest` (public pages like login, register, etc.)

## How to Use

### 1. Clone the Repository

Clone this repository into your Laravel project directory:

```bash
git clone https://github.com/lukisanjaya/laravel-apollo-HTML-bootstrap.git
```

### 2. Install Dependencies

After cloning, install the PHP dependencies using Composer:

```bash
cd <your-project-folder>
composer install
```

### 3. Copy `.env` File

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

### 4. Generate Laravel Application Key

Generate your Laravel app key:

```bash
php artisan key:generate
```

### 5. Install NPM and Build the Project

Install the necessary JavaScript dependencies and build the frontend:

```bash
npm install
npm run build
```

### 6. Make the Script Executable

Give the script execution permission:

```bash
chmod +x generate_view.sh
```

### 7. Generate a View Page

To generate a view page, run:

```bash
./generate_view.sh -t "Page Title"
```

- Replace `"Page Title"` with your desired title.
- Select between the `app` or `guest` layout as needed.

### 8. Run Laravel Development Server

Start the Laravel dev server with:

```bash
php artisan serve
```

### 9. Check Generated Files

- Blade view file will be created in `resources/views/pages`.
- A new route will be added to `routes/web.php`.

## Example Usage

```bash
./generate_view.sh -t "Dashboard"
```

This will generate:
- Blade view file: `resources/views/pages/dashboard.blade.php`
- Route in `routes/web.php`:  
  ```php
  Route::view('/dashboard', 'pages.dashboard');
  ```

## Project Structure

This script works with Laravel's default folder structure:
- `resources/views/pages` – Where generated Blade files are stored.
- `routes/web.php` – Where new routes are registered.

## Credits

This project is based on the **Apollo HTML Bootstrap** template and uses the following open-source resources:

- [Bootstrap](https://getbootstrap.com/)
- [Chart.js](https://www.chartjs.org/)
- [Unsplash](https://unsplash.com/)
- [Pexels](https://www.pexels.com/)
- [Pixabay](https://pixabay.com/)
- [Simplebar.js](https://github.com/Grsmto/simplebar)
- [DataTables](https://datatables.net/) – jQuery plugin for interactive tables
- [Remix Icon](https://remixicon.com/) – Open-source icon set
- [jQuery](https://jquery.com/) – JavaScript library for DOM manipulation
- [unDraw](https://undraw.co/) – Open-source illustrations for your projects
