# EnvisionXperts

A modern, responsive web application built with PHP, Node.js, and Tailwind CSS. This project features a dark-themed UI with smooth animations powered by GSAP.

## 🚀 Features

- **Modern Dark Theme UI**: Beautiful dark-themed interface with smooth transitions
- **Responsive Design**: Mobile-first approach with a responsive navbar and mobile menu
- **Interactive Elements**: 
  - Smooth scroll animations
  - Custom cursor effects
  - Service cards with hover animations
  - Client marquee
  - Testimonial slider
  - Theme toggle functionality
- **Performance Optimized**: Built with modern web technologies and best practices
- **SEO Friendly**: Clean URLs with PHP routing and .htaccess configuration

## 🛠️ Technologies Used

- **Backend**: PHP with MVC architecture
- **Frontend**: 
  - Tailwind CSS for styling
  - GSAP for animations
  - Node.js for asset compilation
- **Development Tools**:
  - PostCSS for CSS processing
  - npm for package management

## 📋 Prerequisites

- PHP 7.4 or higher
- Node.js 14.x or higher
- XAMPP/Apache web server
- npm (Node Package Manager)

## 🔧 Installation

1. Clone the repository to your XAMPP's htdocs directory:
   ```bash
   cd /path/to/xampp/htdocs
   git clone [repository-url] envisionxperts.com
   ```

2. Install Node.js dependencies:
   ```bash
   cd envisionxperts.com
   npm install
   ```

3. Build the assets:
   ```bash
   npm run build
   ```

4. Configure your Apache virtual host (optional):
   ```apache
   <VirtualHost *:80>
       DocumentRoot "/path/to/xampp/htdocs/envisionxperts.com"
       ServerName envisionxperts.local
   </VirtualHost>
   ```

5. Access the website through your web browser:
   ```
   http://localhost/envisionxperts.com
   ```

## 📦 Project Structure

```
envisionxperts.com/
├── public/              # Public directory
│   ├── assets/         # Compiled assets
│   │   ├── css/       # Compiled CSS files
│   │   └── js/        # Compiled JavaScript files
│   └── index.php      # Main entry point
├── src/                # Source files
│   ├── css/           # CSS source files
│   └── js/            # JavaScript source files
├── config/            # Configuration files
├── vendor/            # Composer dependencies
├── node_modules/      # Node.js dependencies
├── .htaccess         # Apache configuration
├── package.json      # Node.js dependencies
└── composer.json     # PHP dependencies
```

## 🔄 Development Workflow

1. Start your XAMPP server (Apache)

2. Watch for CSS changes:
   ```bash
   npm run watch:css
   ```

3. For development with live reload:
   ```bash
   npm run dev
   ```

## 🛡️ Security Features

- Protected directory listings
- Secure routing through .htaccess
- Input validation and sanitization
- XSS protection
- CSRF protection

## 🎨 Customization

### Tailwind Configuration

The project uses a custom Tailwind configuration. Modify `tailwind.config.js` to customize:
- Colors
- Typography
- Spacing
- Breakpoints
- Animations

### Theme Toggle

The site includes a dark/light theme toggle. The theme preference is stored in localStorage for persistence.

## 📱 Responsive Design

The website is fully responsive with breakpoints at:
- Mobile: < 640px
- Tablet: 640px - 1024px
- Desktop: > 1024px

## 🚀 Performance Optimization

- Minified CSS and JavaScript
- Optimized asset loading
- Lazy loading images
- GSAP animations optimized for performance

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 👥 Authors

- EnvisionXperts Team

## 🙏 Acknowledgments

- GSAP for animations
- Tailwind CSS team
- Node.js community
- PHP community
