TODO WRITE THIS

This page should help a new developer to continue developing your theme. Includerelevant information about what 
features your theme has, files that would need editing, designdecisions, colours, etc. You do not need to produce a 
serious design document or reproduce basicdetails about WordPress theme development, only what is specific to your theme.
# Country Music Theme Documentation
## General
This documentation will guide you through various aspects of the theme, including its structure, customization options, and functionality.

## Theme Structure
The styling of this theme is primarily handled by the style.css stylesheet. This file contains the CSS rules that define the visual appearance of the theme's elements. To customize the styling, you can modify or create classes within the style.css file. It is organized into sections detailed in the table of contents located at the top of the file, making it easier to locate and modify specific classes. The PHP files within this theme dictate the structure and content of the pages, these can be modified at your discretion using the appropriate template parts.

## Developed Template Parts
Although not all available template parts for this theme have been extensively developed, we have created a few essential components to provide complete freedom when customizing the theme. These template parts include the footer, header, and functions PHP files.

### Footer Modification
To modify the footer, navigate to the footer.php file within the theme. This file determines the structure and content of the footer. The current version of the footer consists of three <div> elements that contain dynamic sidebar widgets (e.g., "footer-section1") created specifically for this theme. The color, fonts, and layout of the footer are handled in the style.css file. You can modify these aspects at your discretion by locating the relevant classes under the "Footer" section of the stylesheet.

### Header Modification
To modify the header, navigate to the header.php file within the theme. This file determines the structure and content of the header. The current version of the header consists the logo, site title and primary menu one again dynamically pulled from the site. The color, fonts, and layout of the footer are handled in the style.css file. You can modify these aspects at your discretion by locating the relevant classes under the "Header" section of the stylesheet.

## Custom Widgets
Custom widgets can be created or modified in the Functions.php.