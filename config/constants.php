<?php
return [
    'FRONT_PAGE_RECORDS' => 10,
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
        'negotiable' =>  'Negotiable',
        'fixed-price' =>  'Fixed Price'
    ],
    'AVAILABILITY' => [
        'under-construction' => 'Under Construction',
        'ready-to-move' => 'Ready to move',
        'plot-land' => 'Plot/Land',
    ],
    'OWNERSHIP' => [
        'free-hold' =>  'Free Hold',
        'lease-hold' =>  'Lease Hold'
    ],
    'BUILD_YEAR' => [
        1 =>  'Newly',
        2 =>  'Less Then 5 Years',
        3 =>  'Less Then 5 to 10 Years',
        4 =>  'Above 10 Years'
    ], 
    'TYPE' => [
        'apartment' =>  'Apartment',
        'commercial' =>  'Commercial',
        'residential' =>  'Residential'
    ],
    'FOR_TYPE' => [
        'for-sell' =>  'For Sell',
        'for-rent' =>  'For Rent'
    ],

    'PROPERTY_DETAIL' => [
        'house' => 'House',
        'villa' => 'Villa',
        'flat' => 'Flat',
        'plot-land' => 'Plot/Land',
        'pg' => 'PG',
        'studio' => 'Studio',
        'office' => 'Office',
        'townhouse' => 'Townhouse',
        'bungalow' => 'Bungalow',
        'penthouses' => 'Penthouses',
    ],
    'LOOP5' => ['1','2','3','4','5','5+'],
    'FACING' => ['East','West','North','South','North-East','North-West','South-East','South-West'],
    'FURNISHED_DETAIL' => [
        'furnished' => 'Furnished',
        'un-furnished' => 'UnFurnished',
        'semi-furnished' => 'Semi-Furnished'
    ],
    'APPROVED_BY' => [ 
        'punjab-urban-development-authority' => 'Punjab Urban Development Authority(PUDA)',
        'greater-ludhiana-area-development-authority' => 'Greater Ludhiana Area Development Authority(GLADA)',
        'greater-mohali-area-development-authority' => 'Greater Mohali Area Development Authority(GMADA)',
        'rwa-cooperative-housing-society' => 'RWA/Co-Operative Housing Society',
        'city-municipal-corporation' => 'City Municipal Corporation'
    ],
    'PROPERTY_STATUSES' => [
        1 =>  'Approved',
        2 =>  'Pending',
        3 =>  'Sold',
    ],

    'IS_PREMIUM' => [
        0 =>  'No', 
        1 =>  'Yes',
    ],

    'IS_VERIFIED' => [
        0 =>  'No', 
        1 =>  'Yes',
    ],

    'PROPERTY_STATUSES' => [
        0 =>  'Inactive',
        1 =>  'Approved',
        2 =>  'Pending',
        3 =>  'Sold',
    ],
    'ADDITIONALS' => ['Puja Room', 'Study Room', 'Store Room', 'Servent Room', 'Gym Room', 'Theater Room'],
    'AMENITIES' =>['Air Conditioner', 'Security', 'Lift', 'Piped Gas', 'Power Backup', 'Ro Water System', 'Internet/Wifi Community', 'Extra pillows & blankets', 'Fingerprint access', 'TV with standard cable', 'Fire Alarm', 'Laundry Service', 'Microwave', 'Dishwasher', 'Rain Water Harvesting', 'Swimming Pool', 'Car Parking Facility', 'Visitors Parking'],
    'PLOT_TYPE' => ['SqFt', 'SqYd', 'SqMtr', 'Acre', 'Marla'],
    'PACKAGE_TYPE' => ['SELL', 'BUY', 'RENT'],
    'USER_ROLES' => [
        'INDIVIDUAL', 'OWNER', 'AGENT', 'BUILDER'
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
        'name' => 'Brickbold'
    ],

    'CONTACT' => [
        'country_code' => '0161',
        'phone' => '4048145',
        'email' => 'support@brickbold.com',
        'addresss' => 'SCO-18, 2nd Floor, Cabin No. 208, Feroze Gandhi Market, Ludhiana, Punjab, India, 141001',
    ],    

    'CONFIG' => [
        'light_logo' => 'images/logo/logo-light.png',
        'dark_logo' => 'images/logo/logo-main.png',
        'favicon' => 'frontend/icons/favicon.svg'
    ],    

    'SOCIAL' => [
        'facebook' => 'https://www.facebook.com/BrickBold2024/',
        'linkedin' => 'https://www.linkedin.com/in/brick-bold-209a5a31a/',
        'instagram' => 'https://www.instagram.com/official_brickbold/',
        'twitter' => 'https://x.com/BrickBold',
        'pinterest' => 'https://in.pinterest.com/brickbold2024/',
        'youtube' => 'https://www.youtube.com/channel/UCGsg-VpUgkGlCQbYh73bUrg',
    ], 

    'SMS' => [
        'mobile' => '+96179100381',        
    ],
    
    // this array is for sending emails
    'EMAIL' => [
        'from' => 'info@brickbold.com',
        'contact' => 'contactcreativeroom@gmail.com',
        'send' => 'info@brickbold.com',
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
        '1' => 'Active',
        '0'  =>'Inactive',
    ],
    'DEFAULT_USER_IMG' => 'avtar.png',
    
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
    'USER_TYPE' => ['Owner', 'Agent', 'Builder'],
    
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
    'OTP_LOGIN' => [
        'USERNAME' => 'brickbold.com',
        'PASSWORD' => 'Brickbold@2025',
        'HEADER_NAME' => 'BRKBLD',
        'TEMPLATED_ID' => '1707172535624208538',
    ],
    'GOOGLE_API_KEY' => 'AIzaSyBUkrIEQStEvADw3fBKMbeVNMjrAZdON4s',
    'MAP_TOKEN' => "pk.eyJ1IjoiaG9hbmdoYW5kbiIsImEiOiJjbHp3YnUyc2cwMTl3MmtweWo1MjU0cnQ3In0.kJvlxTy_K1nVvwR8y5O8xA"

];
