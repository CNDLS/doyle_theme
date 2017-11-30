

# Doyle Website Updates


## Overview: 
This documentation contains an overview of all updates made to the Doyle website. The Doyle website is a Wordpress site (version 4.8) that uses the underscores starter theme: http://underscores.me/. Github: https://github.com/Automattic/_s

## JS Frameworks
Bootstrap, JQuery libraries.

## CSS Frameworks
Bootstrap

## Plugins
Advanced Custom Fields
Post Types Order (for drag ordering posts)
Featured Video Plus (ability to use a youtube/vimeo video as a featured image). 

## Global Elements 
1. Navbar has been revamped to allow for dropdowns and hover submenu dropdowns. The menu relies on Bootstrap’s dropdown functionality and a custom file- dropdown.js. 
2. Added new Templates for Pages and reworked the template for the homepage and posts so they render appropriately. 
3. Added theme menu register hooks to the header and to the footer. 
4. Hooked up the site’s logo to Customizer (could look into expanding this functionality in the future). 

## Pages Templates: 

* Two new templates: Side image, and banner image. 
* Modified the posts template
* Modified the 404 template
* Added a post loop template (we could add more if needed). 


## Template Partials: 
* The Doyle site now makes use of template partials. These include: 
* Template for Loop content
* Template for Front Page
* Template for Carousel
* Template for Single Posts (redundant)
* Template for Page (redundant)



## Post Loops: 
Users now have the ability to create post loops based on post categories. These use ACF fields, and template.php function to generate the wp_query and arguments. 

Ordering of loop items is based on the order of the posts in the admin interface. Ordering can be adjusted via an ajaxified drag and drop ordering functionality- introduced via a plugin. 


## Carousel 
The homepage now contains a Bootstrap Carousel that utilizes ACF group fields to generate the image, caption, title, and link for each Slide. Carousel JS arguments can be found under js/custom.js. 

  
## Advanced Custom Fields
Advanced Custom Fields is a popular and well maintained plugin for creating custom fields. Instead of using the admin, all ACF fields used on the site are stored in the following file in the template dir: inc/acf-fields.php. An inc function is used in the functions.php file to instantiate. 

Link to documentation: https://www.advancedcustomfields.com/resources/

## Customizer: 
Customizer functions has been updated to include the ability to modify the nav, footer content, and header tagline. These new options can be managed here: inc/wp-customizer.php. 

Link to documentation: https://developer.wordpress.org/themes/customize-api/

