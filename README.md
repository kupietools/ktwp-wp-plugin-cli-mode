# KupieTools CLI Mode

A WordPress plugin that adds a convenient terminal/command line interface icon to your website, allowing quick access to a command-line browser interface.

## Features

- Adds a terminal icon to the footer of your WordPress site
- Links to a command-line browser interface at `/cli.html`
- Simple, unobtrusive design that works with any theme
- Hover text clarifies the icon's purpose for users
- Accessible design with clear visual indicators
- Lightweight implementation with minimal impact on page load times

## Use Cases

- Provides developers quick access to command line tools
- Creates a retro/tech aesthetic for developer-focused websites
- Offers an alternative interface for specific website functions
- Perfect for tech blogs, developer portfolios, or sites with a technical audience

## Technical Details

- Adds a small SVG terminal icon to the site footer
- Implements clean CSS for styling
- Fully responsive - works on mobile and desktop browsers
- Unobtrusively positioned in the corner of the viewport

## Installation

1. Upload the plugin files to the `/wp-content/plugins/ktwp-cli-mode` directory
2. Activate the plugin through the WordPress admin interface
3. Ensure your site has a `/cli.html` file at the root level, or modify the plugin to point to your preferred CLI tool

## Customization

You can easily customize the appearance and behavior by editing the plugin file:
- Change the icon by modifying the SVG code
- Adjust positioning with CSS
- Change the target URL from `/cli.html` to any other command line interface

## License

This project is licensed under the GNU General Public License v3.0 - see the [LICENSE](LICENSE) file for details.
