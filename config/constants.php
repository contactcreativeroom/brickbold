<?php
return [
    'FRONT_PAGE_RECORDS' => 15,
    'ADMIN_PAGE_RECORDS' => 10,
    'ADMIN_PAGE_BOOKING_RECORDS' => 9,
    'ADMIN_RECORDS' => [
        'bookings' =>  3,
    ],
    'API_RECORDS' => [
        'banners' =>  5,
        'bookings' =>  5,
        'categories' =>  5,
        'services' =>  5,
        'ratings' =>  5
    ],
    'OTHER_PRODUCT' => 27,
    'STATUSES' => [
        1 =>  'Active',
        0 =>  'In-active'
    ],
    'IS_NEGOTIABLE' => [
        1 =>  'Negotiable',
        2 =>  'Fixed Price'
    ],
    'AVAILABILITY' => [
        1 =>  'Under Construction',
        2 =>  'Ready to move',
        3 =>  'Plot/Land'
    ],
    'OWNERSHIP' => [
        1 =>  'Free Hold',
        2 =>  'Lease Hold'
    ],
    'BUILD_YEAR' => [
        1 =>  'Plot/Land',
        2 =>  'Newly',
        3 =>  'Less Then 5 Years',
        4 =>  'Less Then 15 to 20 Years',
        5 =>  'Less Then 10 to 15 Years',
        6 =>  'Above 20 Years'
    ],  
    'IS_NEGOTIABLE' => [
        1 =>  'Fixed Price',
        2 =>  'Negotiable Price'
    ], 
    'TYPE' => [
        1 =>  'Apartment',
        2 =>  'Commercial',
        3 =>  'Residential'
    ],
    'FOR_TYPE' => [
        1 =>  'For Sell',
        2 =>  'For Rent'
    ],
    'PROPERTY_DETAIL' => [
        1 =>  'House',
        2 =>  'Villa',
        3 =>  'Flat',
        4 =>  'Plot/Land',
        5 =>  'PG'
    ], 
    'LOOP5' => ['1','2','3','4','5','5+'],
    'FACING' => ['East','North-East','North-West','South-East','South-West'],
    'FURNISHED_DETAIL' => [
        'Furnished',
        'UnFurnished',
        'Semi-Furnished'
    ],
    'APPROVED_BY' => [
        'Punjab Urban Development Authority(PUDA)',
        'Geater Ludhiana Area Development Authority(GLADA)', 
        'Geater Mohali Area Development Authority (GMADA)', 
        'RWA/Co-Operative Housing Society', 
        'City Municipal Corporation'
    ],
    'PROPERTY_STATUSES' => [
        1 =>  'Approved',
        2 =>  'Pending',
        3 =>  'Sold',
    ],
    'TICKET_STATUSES' => [
        'Assigned',
        'Waiting',
        'On Hold',
        'Feedback Waiting',
        'Resolved',
        'Closed',
    ],

    'ORDER_STATUSES' => [
        'Successful',
        'Shipped',
        'Delivered',
        'Pending',
        'Cancelled',
        'Payment Refunded',
        'Order Returned'
    ],

    'BUSINESS' => [
        'name' => 'TurQuoise'
    ],

    'CONTACT' => [
        'country_code' => '+0161',
        'phone' => '4048145',
        'email' => 'support@brickbold.com',
    ],    

    'SMS' => [
        'mobile' => '+96179100381',        
    ],
    
    // this array is for sending emails
    'EMAIL' => [
        'from' => 'contactcreativeroom@gmail.com',
        'contact' => 'contactcreativeroom@gmail.com',
        'send' => 'contactcreativeroom@gmail.com',
    ], 

    'CURRENCIES' => [
        'name' => "INR", 
        'symbol' => "₹"
    ],

    'DIR' => [
        'upload' => '/storage/'
    ],
    'PATH' => [
        'upload' => public_path('storage/')
    ],
    'STATUS' => [
        'inactive' => 0,
        'active' => 1,
    ],
    'DEFAULT_USER_IMG' => 'avtar.png',
    'USER_TYPE' => [
        'admin' => 0,

    ],
    'MEDIA_TYPE' => [
        'Product_thumbnail' => 1,
        'Product_images' => 2,
        'Admin_profile' => 3,
        'Product_brochure' => 4,
        'Product_gallery' => 5,
        'News_image' => 6,
        'Banner_image' => 7,
        'Category_image' => 8,
        'Sub_category_image' => 9,
        'Resume' => 10,
        'Resources_files' => 11,
        'dispute_image' => 12,

    ],
    'USER_TYPE' => [
        'admin' => 1,
        'user' => 2,
        'vendor' => 3,

    ],
    'PRODUCT_PROGRESS_STATUS' => [
        'Ongoing' => 1,
        'Completed' => 2,
        'Pending' => 3,
        // 'Delayed' => 4
    ],
    'CAREER_AREAS_OF_INTEREST' => [
        'Manager' => 1,
        'Other' => 2
    ],
    'META_RELATED_TYPE' => [
        'Product' => 1,
        'News' => 2,
        'Category' => 3,
        'SubCategory' => 4,
        'Static_page' => 5,

    ],
    'STATIC_PAGES' => [
        'Home' => 1,
        'About Us' => 2,
        'Service support' => 3,
        'Contact Us' => 4,
        'Career' => 5,
        'Privacy Policy' => 6,
        'Terms & Conditions' => 7,
        'FAQ' => 8,
        'Gallery' => 9,
    ],
    'GOOGLE_API_KEY' => 'AIzaSyBUkrIEQStEvADw3fBKMbeVNMjrAZdON4s'

];
