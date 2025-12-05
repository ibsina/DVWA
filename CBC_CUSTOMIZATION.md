# CBC - DVWA Demo Website Customization

This is a customized version of DVWA (Damn Vulnerable Web Application) with CBC branding and a blue color theme.

## Original Project
- **Original Repository**: https://github.com/digininja/DVWA
- **Original Author**: Robin Wood (digininja)

## Customizations Applied

### 1. Branding Changes
All references to "Damn Vulnerable Web Application (DVWA)" have been updated to "CBC - DVWA Demo website" in the following files:

- **dvwa/includes/dvwaPage.inc.php**: Updated page title, header, and footer
- **login.php**: Updated login page title and footer link
- **index.php**: Updated welcome page content and references
- **about.php**: Updated about page with acknowledgment to original DVWA project
- **security.php**: Updated page title
- Menu labels updated to be more concise

### 2. Color Scheme Changes - Blue Theme

#### Main CSS (dvwa/css/main.css)
- **Body background**: Changed from gray (#e7e7e7) to light blue (#dbeafe)
- **Container background**: Changed to light blue (#eff6ff)
- **Header**:
  - Background: Changed from dark gray (#2f2f2f) to dark blue (#1e3a8a)
  - Border: Changed from green (#A1CC33) to bright blue (#3b82f6)
- **Footer**:
  - Background: Changed to dark blue (#1e3a8a)
  - Border: Changed to bright blue (#3b82f6)
- **Menu items**:
  - Selected item background: Changed from green (#99cc33) to bright blue (#3b82f6)
  - Selected item border: Changed to bright blue (#3b82f6)
- **Links**: Changed from green (#99cc33) to blue (#2563eb)
- **Horizontal rules**: Changed to light blue (#93c5fd)
- **Popup buttons**: Hover color changed from green to bright blue (#3b82f6)
- **Main body and menu backgrounds**: Changed to light blue (#eff6ff)

#### Login CSS (dvwa/css/login.css)
- **Body background**: Changed from white (#fefffe) to light blue (#dbeafe)
- **Text color**: Changed from gray (#6b6b6b) to dark blue (#1e3a8a)

### 3. Color Palette Used

The blue color palette follows a modern, professional design:
- **Primary Dark Blue**: #1e3a8a (headers, footers)
- **Primary Bright Blue**: #3b82f6 (borders, highlights)
- **Secondary Blue**: #2563eb (links)
- **Light Blue Background**: #dbeafe (page background)
- **Very Light Blue**: #eff6ff (containers, panels)
- **Accent Blue**: #93c5fd (dividers)

## Installation & Setup

Follow the original DVWA setup instructions:
1. Configure database settings in `config/config.inc.php`
2. Run `setup.php` to initialize the database
3. Default credentials: admin/password

## License

This customized version maintains the original DVWA license (GNU GPL v3).
All credit for the original application goes to the DVWA project and its contributors.

## Disclaimer

CBC - DVWA Demo website is intentionally vulnerable. Do NOT deploy this on any production or internet-facing server. Use only in isolated, controlled environments for educational and testing purposes.

---

**Customization Date**: December 2025
**Based on**: DVWA (https://github.com/digininja/DVWA)
