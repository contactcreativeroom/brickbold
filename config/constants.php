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
        'country_code' => '+966',
        'phone' => '570198911',
        'email' => 'contactcreativeroom@gmail.com',
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
        'name' => "USD", 
        'symbol' => "$"
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
    'DURATIONS' => [
        15 =>  '15 minutes',
        30 =>  '30 minutes',
        45 =>  '45 minutes',
        60 =>  '1 hour',
        75 =>  '1 hour 15 minutes',
        90 =>  '1 hour 30 minutes',
        105 =>  '1 hour 45 minutes',
        120 =>  '2 hours',
        135 =>  '2 hours 15 minutes',
        150 =>  '2 hours 30 minutes',
        165 =>  '2 hours 45 minutes',
        180 =>  '3 hours',
        195 =>  '3 hours 15 minutes',
        210 =>  '3 hours 30 minutes',
        225 =>  '3 hours 45 minutes',
        240 =>  '4 hours',
        255 =>  '4 hours 15 minutes',
        270 =>  '4 hours 30 minutes',
        285 =>  '4 hours 45 minutes',
        300 =>  '5 hours',
    ],
    'BOOKING_SLOTS' => 1,
    'BOOKING_MAXIMUM_TIME_SLOTS_PER_DAY_OF_WEEK' => 2,
    'BOOKING_SLOT_DURATION' => 30,
    'BOOKING_SLOT_BUFFER_START_DAYS' => 0,
    'BOOKING_SLOT_DAYS' => 30,
    'TAX_PER' => 20,
    'GOOGLE_API_KEY' => 'AIzaSyBUkrIEQStEvADw3fBKMbeVNMjrAZdON4s'

];
