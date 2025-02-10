<?php
$menuactive = basename($_SERVER['PHP_SELF']);

$pages = [
    "index.php" => [
        "title" => "Digital Marketing Services By FunnelRivers | Navi Mumbai",
        "description" => "FunnelRivers enhances your digital presence with web development, marketing, and growth-focused solutions for real results."
    ],
    "testimonial.php" => [
        "title" => "FunnelRivers Client Testimonials – Proven Results In Marketing",
        "description" => "Read how FunnelRivers has helped businesses achieve success with web development, marketing, and digital solutions."
    ],
    "our-clients.php" => [
        "title" => "FunnelRivers – Digital Success for Businesses of All Sizes",
        "description" => "From SMEs to enterprises, we deliver top-notch branding, digital marketing, web development, and e-commerce solutions for impactful results."
    ],
    "career.php" => [
        "title" => "FunnelRivers Careers – Where Talent Meets Opportunity",
        "description" => "Discover exciting roles in digital marketing, web development, and branding. Thrive in a dynamic environment dedicated to innovation and growth."
    ],
    "seo.php" => [
        "title" => "Expert SEO Services to Boost Your Online Visibility",
        "description" => "Boost your rankings and traffic with FunnelRivers' tailored SEO strategies for improved search performance."
    ],
    "smo.php" => [
        "title" => "FunnelRivers SMO | Enhance Your Social Media Presence",
        "description" => "Grow your social media following and engagement with FunnelRivers’ customized SMO services."
    ],
    "marketing-automation.php" => [
        "title" => "Marketing Automation by FunnelRivers – Transform Your Strategy",
        "description" => "Optimize workflows and drive conversions with FunnelRivers’ advanced marketing automation solutions."
    ],
    "google-ads.php" => [
        "title" => "Google Ads Services by FunnelRivers – Increase Sales & Leads",
        "description" => "Achieve higher conversion rates with FunnelRivers’ customized Google Ads campaigns. Drive traffic, boost sales, and track performance with precision."
    ],
    "facebook-ads.php" => [
        "title" => "Expert Facebook Ads Services for Your Business – FunnelRivers",
        "description" => "Reach the right audience and boost your digital marketing results with FunnelRivers’ targeted Facebook Ads strategies for improved ROI and engagement."
    ],
    "youtube-ads.php" => [
        "title" => "FunnelRivers YouTube Ads – Increase Engagement & Conversions",
        "description" => "Capture your audience’s attention with compelling YouTube Ads. FunnelRivers optimizes campaigns to drive traffic, generate leads, and improve ROI."
    ],
    "twitter-ads.php" => [
        "title" => "Maximize Engagement with FunnelRivers’ Twitter Ads Services",
        "description" => "Increase brand visibility and drive traffic with FunnelRivers’ expert Twitter Ads campaigns and social media strategies."
    ],
    "instagram-ads.php" => [
        "title" => "Boost Your Brand with FunnelRivers’ Instagram Ads Services",
        "description" => "Reach a larger audience and drive conversions with FunnelRivers’ expert Instagram Ads campaigns and social media marketing strategies."
    ],
    "content-writing.php" => [
        "title" => "High-Quality Content Writing Services by FunnelRivers",
        "description" => "Elevate your brand with compelling content. FunnelRivers delivers customized writing services that resonate with your audience and improve SEO."
    ],
    "website-development.php" => [
        "title" => "Website Development by FunnelRivers – Design, Build, Optimize",
        "description" => "FunnelRivers offers custom website development, e-commerce solutions, and mobile-friendly designs to enhance user experience and drive conversions."
    ],
    "graphic-video.php" => [
        "title" => "FunnelRivers Graphic Design & Video Services – Impactful Visuals",
        "description" => "Boost your marketing efforts with FunnelRivers’ professional graphic design and video services. Custom visuals and videos tailored to your brand’s message."
    ],
    "resume-making.php" => [
        "title" => "Professional Resume Making Services – FunnelRivers",
        "description" => "Increase your chances of landing your dream job with FunnelRivers’ resume making services. Professional resumes that showcase your experience and skills."
    ],
    "contact-us.php" => [
        "title" => "Contact Us | FunnelRivers | Start Your Digital Business Today",
        "description" => "Get in touch with FunnelRivers for expert digital marketing, web development, and more. Reach out today and start your journey to success."
    ],
    "crm.php" => [
        "title" => "Best CRM Solution | FunnelRivers - Digital Marketing Experts",
        "description" => "Boost sales & customer engagement with FunnelRivers' CRM solution. Automate tasks, manage leads & drive business growth in Navi Mumbai."
    ],
    "hrms.php" => [
        "title" => "HRMS Solutions in Navi Mumbai | FunnelRivers Digital Agency",
        "description" => "FunnelRivers' HRMS solutions automate tasks, enhance employee engagement, and boost productivity in Navi Mumbai. Contact us today!"
    ],
    "lms.php" => [
        "title" => "Top LMS Solution | FunnelRivers - eLearning Made Easy",
        "description" => "Enhance learning with FunnelRivers' LMS. Manage courses, track progress & boost engagement with our advanced eLearning platform in Navi Mumbai."
    ],
    "project-management.php" => [
        "title" => "Best Project Management Tool | FunnelRivers for Efficiency",
        "description" => "Manage tasks and improve team collaboration with FunnelRivers’ project management tool. Boost efficiency with smart solutions in Navi Mumbai."
    ],
    "saas-software.php" => [
        "title" => "SaaS-Based Software Solutions | FunnelRivers Navi Mumbai",
        "description" => "Scalable & secure SaaS solutions by FunnelRivers. Streamline operations, boost efficiency & grow your business with cloud-based software."
    ],
    "android-app-development.php" => [
        "title" => "Custom Android App Development | FunnelRivers Navi Mumbai",
        "description" => "Get custom Android apps with FunnelRivers. Scalable, high-performance solutions for your business."
    ],
    "ios-app-development.php" => [
        "title" => "Top iOS App Development | FunnelRivers Navi Mumbai",
        "description" => "Get custom iOS app solutions with FunnelRivers. Scalable, secure & user-friendly apps for your business. Elevate your digital presence today!"
    ],
    "ecommerce.php" => [
        "title" => "E-Commerce Solutions | FunnelRivers - Grow Your Online Store",
        "description" => "Boost sales with FunnelRivers' e-commerce solutions. Get seamless store setup, secure payments & marketing to scale your online business easily."
    ],
    "cms-website.php" => [
        "title" => "CMS Website Solutions | FunnelRivers - Build & Manage Easily",
        "description" => "Get a custom CMS website with FunnelRivers. Easily manage content, improve SEO, and grow your online presence with our expert solutions."
    ],
    "privacy-policy.php" => [
        "title" => "Privacy Policy | FunnelRivers - Your Data, Our Commitment",
        "description" => "Read FunnelRivers' Privacy Policy to learn how we collect, use & protect your data. Your privacy and security are our top priorities."
    ],
    "terms-condition.php" => [
        "title" => "Terms & Conditions | FunnelRivers - Policies & Guidelines",
        "description" => "Read FunnelRivers' terms & conditions to understand our policies, user rights, and service guidelines for a secure and transparent experience."
    ],
    "blogs.php" => [
        "title" => "Digital Marketing Blogs | FunnelRivers - Tips & Insights",
        "description" => "Explore FunnelRivers' blogs for the latest digital marketing trends, SEO tips, social media strategies, and growth hacks to boost your business."
    ]
];

$title = $pages[$menuactive]['title'] ?? "FunnelRivers - Digital Growth Experts";
$description = $pages[$menuactive]['description'] ?? "Your partner in digital marketing, web development, and business growth.";

?>
