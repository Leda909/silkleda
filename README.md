# silkleda
Online Shop to present my silkpaintings - http://www.silkleda.eu/

Build with Bootstrap 4 wireframe for responsiveness + PHP backend script + (SQL database, jQuery, OOP PHP, Json, Ajax)

1. The following Bootstrap4 templates/snippets has been used to the site:
    - Navigation bar comes from "Shop homepage navbar" combined with "Right-Aligned Navigation Bar" (https://www.w3schools.com/bootstrap/bootstrap_navbar.asp)
    - Home page = About page; carousel slideshow
    - Gallery page; "Isotope filter magical layouts" (https://bootsnipp.com/snippets/1dPDV)
    - Web shop page; "Shop-homepage bootstrap template" (https://startbootstrap.com/template/shop-homepage)
    - Contact page; (https://bootsnipp.com/snippets/35VBm)

External JavaScript files in Footer: (Links to them)
    
    src="https://code.jquery.com/jquery-3.5.1.js"
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.js"
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.js"
    
    For "Isotope filter magical layouts" filter on Gallery page:
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js
    scr="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"
    Also the bootsnippet JS added into custom_gallery.js

    Download pagination.js from http://pagination.js.org

2. SQL database

    5 tables; (product, gallery, cart, contact, user)
    
Adding database pagination to Gallery and Webshop pages

	-Create pagination_class.php for PHP class (OOP PHP) /Getters & Setters for $images, $sum_page $current_page/

	-Using Pagination class in get_all_products function for returning the results, 
  -Add new parameters $keyword, $page, to get_all_products function,

	-Using Pagination class in get_all_gallery function, 
  -Add new parameter $page to get_all_gallery function,
