<?php
return [
    'PROPERTY_UID_FROM' => 123,
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
    'FOR_TYPE' => [
        'for-sell' =>  'For Sell',
        'for-rent' =>  'For Rent'
    ],

    'TYPE' => [
        'residential' =>  'Residential',
        'commercial' =>  'Commercial',
        'apartment' =>  'Apartment',
    ],
    

    'PROPERTY_DETAIL_ARRAY' => [
        'apartment' => [
            'studio' => 'Studio',
            'duplex' => 'Duplex',
            'triplex' => 'Triplex',
            'penthouses' => 'Penthouses',
        ], 
        'commercial' => [
            'shop-showroom' => 'Shop/Showroom',
            'commercial-land' => 'Commercial Land',
            'office' => 'Office',
            'warehouse-godown' => 'Warehouse/Godown',
            'industrial-building' => 'Industrial Building',
            'industrial-shed' => 'Industrial Shed',
            'shop-cum-office' => 'shop-cum-office',
            'shop-cum-flat' => 'Shop-Cum-Flat',
            'pg' => 'PG'
        ], 
        'residential' => [
            'house' => 'House',
            'villa' => 'Villa',
            'bungalow' => 'Bungalow',
            'flat' => 'Flat',
            'plot-land' => 'Plot/Land',
            'pg' => 'PG'
        ]
    ],

    'PROPERTY_DETAIL' => [
        'house' => 'House',
        'villa' => 'Villa',
        'bungalow' => 'Bungalow',
        'flat' => 'Flat',
        'plot-land' => 'Plot/Land',
        'pg' => 'PG',
        'studio' => 'Studio',
        'duplex' => 'Duplex',
        'triplex' => 'Triplex',
        'penthouses' => 'Penthouses',
        'shop-showroom' => 'Shop/Showroom',
        'commercial-land' => 'Commercial Land',
        'office' => 'Office',
        'warehouse-godown' => 'Warehouse/Godown',
        'industrial-building' => 'Industrial Building',
        'industrial-shed' => 'Industrial Shed',
        'shop-cum-office' => 'shop-cum-office',
        'shop-cum-flat' => 'Shop-Cum-Flat',
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
        'city-municipal-corporation' => 'City Municipal Corporation',
        'other' => 'Other',
        
    ],
    'PROPERTY_STATUSES' => [
        0 =>  'Declined',
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
        'country_code' => '91',
        'phone' => '9041132240',
        'email' => 'support@brickbold.com',
        'addresss' => 'SCO-18, 2nd Floor, Cabin No. 208, Feroze Gandhi Market, Ludhiana, Punjab, India, 141001',
        'gst_no' => '03AAHCV8378C1Z7',
        'HSN_Code' => '998319'

    ],    

    'CONFIG' => [
        'light_logo' => 'images/logo/logo-light.png',
        'dark_logo' => 'images/logo/logo-main.png',
        'favicon' => 'frontend/icons/favicon.svg',
        'seo_title' => 'Brickbold',
        'seo_keywords' => 'keywords here',
        'seo_description' => 'description here'
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
        'contact' => 'support@brickbold.com',
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
    'MOBILE_SMS' => [
        'USERNAME' => 'brickbold.com',
        'PASSWORD' => 'Brickbold@2025',
        'HEADER_NAME' => 'BRKBLD',
        'TEMPLATED_ID_OTP' => '1707172535624208538',
        'TEMPLATED_ID_PACKAGE_EXPIRED' => '1707174084375755433',
        'TEMPLATED_ID_PAYMENT' => '1707174081400232087',
        'TEMPLATED_ID_PAYMENT_FAIL' => '1707174081409438572',
        'TEMPLATED_ID_PROPERTY_LIVE' => '1707174084660240879',
        'TEMPLATED_ID_PROPERTY_INTEREST_BUY' => '1707174136106465148',
        'TEMPLATED_ID_PROPERTY_INTEREST_RENT' => '1707174132969347581',
    ],
    'GOOGLE_API_KEY' => 'AIzaSyBUkrIEQStEvADw3fBKMbeVNMjrAZdON4s',
    'MAP_TOKEN' => "pk.eyJ1IjoiaG9hbmdoYW5kbiIsImEiOiJjbHp3YnUyc2cwMTl3MmtweWo1MjU0cnQ3In0.kJvlxTy_K1nVvwR8y5O8xA",

    'MIN_PRICE_SELL' => [
        500000 => "₹5 Lac",
        //1000000 => "₹10 Lac",
        2500000 => "₹25 Lac",
        //3000000 => "₹30 Lac",
        //4000000 => "₹40 Lac",
        5000000 => "₹50 Lac",
        //6000000 => "₹60 Lac",
        //7000000 => "₹70 Lac",
        //8000000 => "₹80 Lac",
        //9000000 => "₹90 Lac",
        10000000 => "₹1 Cr",
        12500000 => "₹1.25 Cr",
        15000000 => "₹1.50 Cr",
        //16000000 => "₹1.6 Cr",
        //18000000 => "₹1.8 Cr",
        20000000 => "₹2 Cr",
        22500000 => "₹2.25 Cr",
        25000000 => "₹2.5 Cr",
        30000000 => "₹3 Cr",
        32500000 => "₹3.25 Cr",
        35000000 => "₹3.5 Cr",
        //40000000 => "₹4 Cr",
        //45000000 => "₹4.5 Cr",
        //50000000 => "₹5 Cr",
        //100000000 => "₹10 Cr",
        //200000000 => "₹20 Cr"
    ],
    'MIN_PRICE_RENT' => [
        5000 => "₹5000",
        10000 => "₹10000",
        15000 => "₹15000",
        20000 => "₹20000",
        25000 => "₹25000",
        30000 => "₹30000",
        35000 => "₹35000",
        40000 => "₹40000",
        50000 => "₹50000",
        60000 => "₹60000",
        85000 => "₹85000",
        100000 => "₹1 Lac",
        150000 => "₹1.5 Lac",
        200000 => "₹2 Lac",
        400000 => "₹4 Lac",
        700000 => "₹7 Lac",
        1000000 => "₹10 Lac"
    ]
];
