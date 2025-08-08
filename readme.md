# EnvisionXperts - Professional Web Development Company Website

A stunning, industry-standard website built with core PHP, featuring modern design, interactive animations, and comprehensive service offerings.

## 🚀 Features

### Design & User Experience
- **Modern & Professional Design** - Royal blue and black theme with gradient effects
- **Responsive Layout** - Fully responsive design that works on all devices
- **Interactive Animations** - Smooth scroll animations, floating elements, and hover effects
- **Mega Menu Navigation** - Comprehensive services dropdown with organized categories
- **Search Functionality** - Integrated search bar in navigation
- **Back to Top Button** - Smooth scroll to top functionality

### Technical Features
- **Core PHP** - Built with pure PHP for optimal performance
- **Bootstrap 5** - Modern CSS framework for responsive design
- **Font Awesome Icons** - Professional iconography throughout
- **AOS Animations** - Animate On Scroll library for smooth animations
- **jQuery** - Enhanced interactivity and DOM manipulation
- **Form Validation** - Client and server-side validation
- **Email Integration** - Contact form with email processing

### Content Sections
- **Hero Section** - Eye-catching landing area with animated elements
- **Services Overview** - 6 main service categories with detailed descriptions
- **About Section** - Company information with animated statistics
- **Contact Form** - Professional contact form with validation
- **Footer** - Comprehensive footer with links, social media, and newsletter

## 📁 Project Structure

```
envisionxperts.com/
├── index.php                 # Main homepage
├── includes/
│   ├── header.php           # Navigation and mega menu
│   └── footer.php           # Footer with links and contact info
├── assets/
│   ├── css/
│   │   └── style.css        # Main stylesheet with animations
│   └── js/
│       └── main.js          # JavaScript functionality
├── process/
│   └── contact.php          # Contact form processing
├── logo/
│   └── envision-expert-logo-dark (1).png
└── README.md
```

## 🛠️ Setup Instructions

### Prerequisites
- PHP 7.4 or higher
- Web server (Apache/Nginx)
- SMTP server for email functionality (optional)

### Installation

1. **Clone or Download the Project**
   ```bash
   # If using Git
   git clone [repository-url]
   
   # Or download and extract the ZIP file
   ```

2. **Upload to Web Server**
   - Upload all files to your web server directory
   - Ensure the `logo/` folder and its contents are included

3. **Configure Web Server**
   - Ensure PHP is enabled on your server
   - Set up proper file permissions (755 for directories, 644 for files)

4. **Email Configuration (Optional)**
   - Edit `process/contact.php` and update the email address:
   ```php
   $to = 'your-email@domain.com'; // Change this to your email
   ```

5. **Test the Website**
   - Open your domain in a web browser
   - Test the contact form functionality
   - Verify all animations and interactions work properly

### File Permissions
```bash
# Set proper permissions
chmod 755 includes/
chmod 755 assets/
chmod 755 process/
chmod 644 *.php
chmod 644 assets/css/*.css
chmod 644 assets/js/*.js
```

## 🎨 Customization

### Colors
The website uses CSS variables for easy color customization. Edit `assets/css/style.css`:

```css
:root {
    --primary-color: #1e3a8a;    /* Royal Blue */
    --primary-dark: #1e40af;     /* Darker Blue */
    --primary-light: #3b82f6;    /* Light Blue */
    --secondary-color: #111827;  /* Black */
    /* ... other variables */
}
```

### Content
- **Company Information**: Update contact details in `includes/footer.php`
- **Services**: Modify service descriptions in `index.php`
- **Logo**: Replace the logo file in the `logo/` folder
- **Contact Email**: Update email address in `process/contact.php`

### Animations
- **AOS Settings**: Modify animation settings in `assets/js/main.js`
- **Custom Animations**: Add new animations in `assets/css/style.css`

## 📧 Contact Form Setup

The contact form is fully functional and includes:

- **Client-side Validation** - Real-time form validation
- **Server-side Validation** - PHP validation for security
- **Email Processing** - Automatic email sending
- **Success/Error Handling** - User feedback for form submission

### Email Configuration
1. Ensure your server has mail() function enabled
2. Update the recipient email in `process/contact.php`
3. Test the form to ensure emails are being sent

## 🔧 Browser Support

- **Chrome** 90+
- **Firefox** 88+
- **Safari** 14+
- **Edge** 90+
- **Mobile browsers** (iOS Safari, Chrome Mobile)

## 📱 Responsive Design

The website is fully responsive and optimized for:
- **Desktop** (1200px+)
- **Tablet** (768px - 1199px)
- **Mobile** (320px - 767px)

## 🚀 Performance Features

- **Optimized Images** - Compressed logo and optimized assets
- **Minified CSS/JS** - Production-ready code
- **Lazy Loading** - Images load as needed
- **Smooth Animations** - Hardware-accelerated CSS animations
- **Efficient Code** - Clean, well-structured PHP and JavaScript

## 🔒 Security Features

- **Input Validation** - Both client and server-side validation
- **XSS Protection** - HTML escaping for user inputs
- **CSRF Protection** - Form token validation (can be added)
- **Email Sanitization** - Proper email validation and sanitization

## 📈 SEO Features

- **Meta Tags** - Proper title, description, and keywords
- **Semantic HTML** - Proper heading structure and semantic elements
- **Alt Tags** - Descriptive alt text for images
- **Structured Data** - Ready for schema markup implementation
- **Fast Loading** - Optimized for search engine rankings

## 🎯 Future Enhancements

The website is designed to be easily extensible for:
- **Additional Pages** - About, Services, Portfolio, Blog
- **CMS Integration** - Can be converted to use a content management system
- **Database Integration** - Can add MySQL/PostgreSQL for dynamic content
- **Advanced Features** - Live chat, appointment booking, project management

## 📞 Support

For technical support or customization requests:
- **Email**: info@envisionxperts.com
- **Website**: envisionxperts.com

## 📄 License

This project is proprietary software developed for EnvisionXperts. All rights reserved.

---

**Built with ❤️ by EnvisionXperts Team**

*Transforming Ideas Into Digital Excellence* 