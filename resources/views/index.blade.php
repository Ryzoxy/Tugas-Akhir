<!DOCTYPE html>
<htm l lang="en">

    <head>
        <m a charset="u> <meta content=" width=device-width, initial-scale=1.0" <link href="assets/img/favicon.png"
            rel="icon">
            <link
                href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
                rel="stylesheet">
            <link href="assets/vendor/aos/aos.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
            <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
            <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
            <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
            <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
            <link href="assets/css/style.css" rel="stylesheet">

    </head>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            color: #444444;
        }

        a {
            color: #2487ce;
            text-decoration: none;
        }

        a:hover {
            color: #469fdf;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif;
        }


        .back-to-top {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 15px;
            bottom: 15px;
            z-index: 996;
            background: #2487ce;
            width: 40px;
            height: 40px;
            border-radius: 4px;
            transition: all 0.4s;
        }

        .back-to-top i {
            font-size: 28px;
            color: #fff;
            line-height: 0;
        }

        .back-to-top:hover {
            background: #3e9bdd;
            color: #fff;
        }

        .back-to-top.active {
            visibility: visible;
            opacity: 1;
        }



        @media screen and (max-width: 768px) {
            [data-aos-delay] {
                transition-delay: 0 !important;
            }
        }


        #header {
            transition: all 0.5s;
            background: #fff;
            z-index: 997;
            padding: 15px 0;
            border-bottom: 1px solid #e6f2fb;
        }

        #header.header-scrolled {
            border-color: #fff;
            box-shadow: 0px 2px 15px rgba(18, 66, 101, 0.08);
        }

        #header .logo {
            font-size: 28px;
            margin: 0;
            padding: 0;
            line-height: 1;
            font-weight: 300;
            letter-spacing: 0.5px;
            font-family: "Poppins", sans-serif;
        }

        #header .logo a {
            color: #16507b;
        }

        #header .logo img {
            max-height: 40px;
        }

        @media (max-width: 992px) {
            #header .logo {
                font-size: 28px;
            }
        }


        .navbar {
            padding: 0;
        }

        .navbar ul {
            margin: 0;
            padding: 0;
            display: flex;
            list-style: none;
            align-items: center;
        }

        .navbar li {
            position: relative;
        }

        .navbar a,
        .navbar a:focus {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0 10px 30px;
            font-size: 14px;
            color: #16507b;
            white-space: nowrap;
            transition: 0.3s;
        }

        .navbar a i,
        .navbar a:focus i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
        }

        .navbar a:hover,
        .navbar .active,
        .navbar .active:focus,
        .navbar li:hover>a {
            color: #2487ce;
        }

        .navbar .getstarted,
        .navbar .getstarted:focus {
            background: #2487ce;
            padding: 8px 20px;
            margin-left: 30px;
            border-radius: 4px;
            color: #fff;
        }

        .navbar .getstarted:hover,
        .navbar .getstarted:focus:hover {
            color: #fff;
            background: #3194db;
        }

        .navbar .dropdown ul {
            display: block;
            position: absolute;
            left: 14px;
            top: calc(100% + 30px);
            margin: 0;
            padding: 10px 0;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            background: #fff;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
            transition: 0.3s;
            border-radius: 4px;
        }

        .navbar .dropdown ul li {
            min-width: 200px;
        }

        .navbar .dropdown ul a {
            padding: 10px 20px;
            text-transform: none;
        }

        .navbar .dropdown ul a i {
            font-size: 12px;
        }

        .navbar .dropdown ul a:hover,
        .navbar .dropdown ul .active:hover,
        .navbar .dropdown ul li:hover>a {
            color: #2487ce;
        }

        .navbar .dropdown:hover>ul {
            opacity: 1;
            top: 100%;
            visibility: visible;
        }

        .navbar .dropdown .dropdown ul {
            top: 0;
            left: calc(100% - 30px);
            visibility: hidden;
        }

        .navbar .dropdown .dropdown:hover>ul {
            opacity: 1;
            top: 0;
            left: 100%;
            visibility: visible;
        }

        @media (max-width: 1366px) {
            .navbar .dropdown .dropdown ul {
                left: -90%;
            }

            .navbar .dropdown .dropdown:hover>ul {
                left: -100%;
            }
        }


        .mobile-nav-toggle {
            color: #124265;
            font-size: 28px;
            cursor: pointer;
            display: none;
            line-height: 0;
            transition: 0.5s;
        }

        .mobile-nav-toggle.bi-x {
            color: #fff;
        }

        @media (max-width: 991px) {
            .mobile-nav-toggle {
                display: block;
            }

            .navbar ul {
                display: none;
            }
        }

        .navbar-mobile {
            position: fixed;
            overflow: hidden;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: rgba(10, 38, 58, 0.9);
            transition: 0.3s;
            z-index: 999;
        }

        .navbar-mobile .mobile-nav-toggle {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .navbar-mobile ul {
            display: block;
            position: absolute;
            top: 55px;
            right: 15px;
            bottom: 15px;
            left: 15px;
            padding: 10px 0;
            background-color: #fff;
            overflow-y: auto;
            transition: 0.3s;
        }

        .navbar-mobile a,
        .navbar-mobile a:focus {
            padding: 10px 20px;
            font-size: 15px;
            color: #124265;
        }

        .navbar-mobile a:hover,
        .navbar-mobile .active,
        .navbar-mobile li:hover>a {
            color: #2487ce;
        }

        .navbar-mobile .getstarted,
        .navbar-mobile .getstarted:focus {
            margin: 15px;
        }

        .navbar-mobile .dropdown ul {
            position: static;
            display: none;
            margin: 10px 20px;
            padding: 10px 0;
            z-index: 99;
            opacity: 1;
            visibility: visible;
            background: #fff;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        }

        .navbar-mobile .dropdown ul li {
            min-width: 200px;
        }

        .navbar-mobile .dropdown ul a {
            padding: 10px 20px;
        }

        .navbar-mobile .dropdown ul a i {
            font-size: 12px;
        }

        .navbar-mobile .dropdown ul a:hover,
        .navbar-mobile .dropdown ul .active:hover,
        .navbar-mobile .dropdown ul li:hover>a {
            color: #2487ce;
        }

        .navbar-mobile .dropdown>.dropdown-active {
            display: block;
        }

        #hero {
            width: 100%;
            height: 100vh;
            position: relative;
            background-size: cover;
            position: relative;
        }

        #hero:before {
            content: "";
            background: rgba(255, 255, 255, 0.8);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }

        #hero .container {
            padding-top: 80px;
        }

        #hero h1 {
            margin: 0;
            font-size: 56px;
            font-weight: 700;
            line-height: 72px;
            color: #124265;
            font-family: "Poppins", sans-serif;
        }

        #hero h2 {
            color: #5e5e5e;
            margin: 10px 0 0 0;
            font-size: 22px;
        }

        #hero .btn-get-started {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 0.5px;
            display: inline-block;
            padding: 14px 50px;
            border-radius: 5px;
            transition: 0.5s;
            margin-top: 30px;
            color: #fff;
            background: #2487ce;
        }

        #hero .btn-get-started:hover {
            background: #3194db;
        }

        #hero .icon-boxes {
            margin-top: 100px;
        }

        #hero .icon-box {
            padding: 50px 30px;
            position: relative;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 0 29px 0 rgba(18, 66, 101, 0.08);
            transition: all 0.3s ease-in-out;
            border-radius: 8px;
            z-index: 1;
        }

        #hero .icon-box .title {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 18px;
        }

        #hero .icon-box .title a {
            color: #124265;
            transition: 0.3s;
        }

        #hero .icon-box .description {
            font-size: 15px;
            line-height: 28px;
            margin-bottom: 0;
        }

        #hero .icon-box .icon {
            margin-bottom: 20px;
            padding-top: 10px;
            display: inline-block;
            transition: all 0.3s ease-in-out;
            font-size: 36px;
            line-height: 1;
            color: #2487ce;
        }

        #hero .icon-box:hover {
            transform: scale(1.08);
        }

        #hero .icon-box:hover .title a {
            color: #2487ce;
        }

        @media (min-width: 1024px) {
            #hero {
                background-attachment: fixed;
            }
        }

        @media (max-height: 800px) {
            #hero {
                height: auto;
            }
        }

        @media (max-width: 992px) {
            #hero {
                height: auto;
            }

            #hero h1 {
                font-size: 28px;
                line-height: 36px;
            }

            #hero h2 {
                font-size: 18px;
                line-height: 24px;
            }
        }


        section {
            padding: 80px 0;
            overflow: hidden;
        }

        .section-bg {
            background-color: #f8fbfe;
        }

        .section-title {
            text-align: center;
            padding-bottom: 30px;
        }

        .section-title h2 {
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding-bottom: 0;
            color: #124265;
        }

        .section-title p {
            margin-bottom: 0;
            font-size: 14px;
            color: #919191;
        }


        .about .content h3 {
            font-weight: 600;
            font-size: 26px;
            background: cover;
        }

        .about .content ul {
            list-style: none;
            padding: 0;
        }

        .about .content ul li {
            padding-left: 28px;
            position: relative;
        }

        .about .content ul li+li {
            margin-top: 10px;
        }

        .about .content ul i {
            position: absolute;
            left: 0;
            top: 2px;
            font-size: 20px;
            color: #2487ce;
            line-height: 1;
        }

        .about .content p:last-child {
            margin-bottom: 0;
        }

        .about .content .btn-learn-more {
            font-family: "Raleway", sans-serif;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 32px;
            border-radius: 5px;
            transition: 0.3s;
            line-height: 1;
            color: #2487ce;
            animation-delay: 0.8s;
            margin-top: 6px;
            border: 2px solid #2487ce;
        }

        .about .content .btn-learn-more:hover {
            background: #2487ce;
            color: #fff;
            text-decoration: none;
        }


        .counts {
            padding: 60px 0;
        }

        .counts .count-box {
            width: 100%;
            text-align: center;
        }

        .counts .count-box span {
            font-size: 48px;
            line-height: 48px;
            display: block;
            font-weight: 700;
            color: #124265;
            margin-left: 80px;
            margin: auto;
        }

        .counts .count-box p {
            padding: 8px 0 0 0;
            font-family: "Raleway", sans-serif;
            font-weight: 600;
            font-size: 14px;
            color: #1e6ca6;
        }


        .clients {
            padding: 15px 0;
            text-align: center;
        }

        .clients img {
            max-width: 45%;
            transition: all 0.4s ease-in-out;
            display: inline-block;
            padding: 15px 0;
            filter: grayscale(100);
        }

        .clients img:hover {
            filter: none;
            transform: scale(1.15);
        }

        @media (max-width: 768px) {
            .clients img {
                max-width: 40%;
            }
        }


        .testimonials .testimonials-carousel,
        .testimonials .testimonials-slider {
            overflow: hidden;
        }

        .testimonials .testimonial-item {
            box-sizing: content-box;
            text-align: center;
            min-height: 320px;
        }

        .testimonials .testimonial-item .testimonial-img {
            width: 90px;
            border-radius: 50%;
            margin: 0 auto;
        }

        .testimonials .testimonial-item h3 {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0 5px 0;
            color: #111;
        }

        .testimonials .testimonial-item h4 {
            font-size: 14px;
            color: #999;
            margin: 0;
        }

        .testimonials .testimonial-item .quote-icon-left,
        .testimonials .testimonial-item .quote-icon-right {
            color: #c9e3f5;
            font-size: 26px;
        }

        .testimonials .testimonial-item .quote-icon-left {
            display: inline-block;
            left: -5px;
            position: relative;
        }

        .testimonials .testimonial-item .quote-icon-right {
            display: inline-block;
            right: -5px;
            position: relative;
            top: 10px;
        }

        .testimonials .testimonial-item p {
            font-style: italic;
            margin: 0 15px 15px 15px;
            padding: 20px;
            background: #f3f9fd;
            position: relative;
            margin-bottom: 35px;
            border-radius: 6px;
        }

        .testimonials .testimonial-item p::after {
            content: "";
            width: 0;
            height: 0;
            border-top: 20px solid #f3f9fd;
            border-right: 20px solid transparent;
            border-left: 20px solid transparent;
            position: absolute;
            bottom: -20px;
            left: calc(50% - 20px);
        }

        .testimonials .swiper-pagination {
            margin-top: 20px;
            position: relative;
        }

        .testimonials .swiper-pagination .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: #fff;
            opacity: 1;
            border: 1px solid #2487ce;
        }

        .testimonials .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #2487ce;
        }


        .services .icon-box {
            text-align: center;
            padding: 70px 20px 80px 20px;
            transition: all ease-in-out 0.3s;
            background: #fff;
            box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.05);
        }

        .services .icon-box .icon {
            margin: 0 auto;
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: ease-in-out 0.3s;
            position: relative;
        }

        .services .icon-box .icon i {
            font-size: 36px;
            transition: 0.5s;
            position: relative;
        }

        .services .icon-box .icon svg {
            position: absolute;
            top: 0;
            left: 0;
        }

        .services .icon-box .icon svg path {
            transition: 0.5s;
            fill: #f5f5f5;
        }

        .services .icon-box h4 {
            font-weight: 600;
            margin: 10px 0 15px 0;
            font-size: 22px;
        }

        .services .icon-box h4 a {
            color: #124265;
            transition: ease-in-out 0.3s;
        }

        .services .icon-box p {
            line-height: 24px;
            font-size: 14px;
            margin-bottom: 0;
        }

        .services .icon-box:hover {
            border-color: #fff;
            box-shadow: 0px 0 35px 0 rgba(0, 0, 0, 0.08);
        }

        .services .iconbox-blue i {
            color: #47aeff;
        }

        .services .iconbox-blue:hover .icon i {
            color: #fff;
        }

        .services .iconbox-blue:hover .icon path {
            fill: #47aeff;
        }

        .services .iconbox-orange i {
            color: #ffa76e;
        }

        .services .iconbox-orange:hover .icon i {
            color: #fff;
        }

        .services .iconbox-orange:hover .icon path {
            fill: #ffa76e;
        }

        .services .iconbox-pink i {
            color: #e80368;
        }

        .services .iconbox-pink:hover .icon i {
            color: #fff;
        }

        .services .iconbox-pink:hover .icon path {
            fill: #e80368;
        }

        .services .iconbox-yellow i {
            color: #ffbb2c;
        }

        .services .iconbox-yellow:hover .icon i {
            color: #fff;
        }

        .services .iconbox-yellow:hover .icon path {
            fill: #ffbb2c;
        }

        .services .iconbox-red i {
            color: #ff5828;
        }

        .services .iconbox-red:hover .icon i {
            color: #fff;
        }

        .services .iconbox-red:hover .icon path {
            fill: #ff5828;
        }

        .services .iconbox-teal i {
            color: #11dbcf;
        }

        .services .iconbox-teal:hover .icon i {
            color: #fff;
        }

        .services .iconbox-teal:hover .icon path {
            fill: #11dbcf;
        }


        .cta {
            background: #2487ce;
            background-size: cover;
            padding: 60px 0;
        }

        .cta h3 {
            color: #fff;
            font-size: 28px;
            font-weight: 700;
        }

        .cta p {
            color: #fff;
        }

        .cta .cta-btn {
            font-family: "Raleway", sans-serif;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 10px 35px;
            border-radius: 5px;
            transition: 0.5s;
            margin-top: 10px;
            border: 2px solid #fff;
            color: #fff;
        }

        .cta .cta-btn:hover {
            background: #fff;
            color: #2487ce;
        }


        .portfolio .portfolio-item {
            margin-bottom: 30px;
        }

        .portfolio #portfolio-flters {
            padding: 0;
            margin: 0 auto 35px auto;
            list-style: none;
            text-align: center;
            border-radius: 50px;
            padding: 2px 15px;
        }

        .portfolio #portfolio-flters li {
            cursor: pointer;
            display: inline-block;
            padding: 10px 15px 8px 15px;
            font-size: 14px;
            font-weight: 600;
            line-height: 1;
            text-transform: uppercase;
            color: #444444;
            margin-bottom: 5px;
            transition: all 0.3s ease-in-out;
        }

        .portfolio #portfolio-flters li:hover,
        .portfolio #portfolio-flters li.filter-active {
            color: #2487ce;
        }

        .portfolio #portfolio-flters li:last-child {
            margin-right: 0;
        }

        .portfolio .portfolio-wrap {
            transition: 0.3s;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .portfolio .portfolio-wrap::before {
            content: "";
            background: rgba(36, 135, 206, 0.6);
            position: absolute;
            left: 30px;
            right: 30px;
            top: 30px;
            bottom: 30px;
            transition: all ease-in-out 0.3s;
            z-index: 2;
            opacity: 0;
        }

        .portfolio .portfolio-wrap .portfolio-info {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            text-align: center;
            z-index: 3;
            transition: all ease-in-out 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .portfolio .portfolio-wrap .portfolio-info::before {
            display: block;
            content: "";
            width: 48px;
            height: 48px;
            position: absolute;
            top: 35px;
            left: 35px;
            border-top: 3px solid #fff;
            border-left: 3px solid #fff;
            transition: all 0.5s ease 0s;
            z-index: 9994;
        }

        .portfolio .portfolio-wrap .portfolio-info::after {
            display: block;
            content: "";
            width: 48px;
            height: 48px;
            position: absolute;
            bottom: 35px;
            right: 35px;
            border-bottom: 3px solid #fff;
            border-right: 3px solid #fff;
            transition: all 0.5s ease 0s;
            z-index: 9994;
        }

        .portfolio .portfolio-wrap .portfolio-info h4 {
            font-size: 20px;
            color: #fff;
            font-weight: 600;
        }

        .portfolio .portfolio-wrap .portfolio-info p {
            color: #ffffff;
            font-size: 14px;
            text-transform: uppercase;
            padding: 0;
            margin: 0;
        }

        .portfolio .portfolio-wrap .portfolio-links {
            text-align: center;
            z-index: 4;
        }

        .portfolio .portfolio-wrap .portfolio-links a {
            color: rgba(255, 255, 255, 0.6);
            margin: 0 2px;
            font-size: 28px;
            display: inline-block;
            transition: 0.3s;
        }

        .portfolio .portfolio-wrap .portfolio-links a:hover {
            color: #fff;
        }

        .portfolio .portfolio-wrap:hover::before {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 1;
        }

        .portfolio .portfolio-wrap:hover .portfolio-info {
            opacity: 1;
        }

        .portfolio .portfolio-wrap:hover .portfolio-info::before {
            top: 15px;
            left: 15px;
        }

        .portfolio .portfolio-wrap:hover .portfolio-info::after {
            bottom: 15px;
            right: 15px;
        }


        .portfolio-details {
            padding-top: 40px;
        }

        .portfolio-details .portfolio-details-slider img {
            width: 100%;
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination {
            margin-top: 20px;
            position: relative;
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: #fff;
            opacity: 1;
            border: 1px solid #2487ce;
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #2487ce;
        }

        .portfolio-details .portfolio-info {
            padding: 30px;
            box-shadow: 0px 0 30px rgba(18, 66, 101, 0.08);
        }

        .portfolio-details .portfolio-info h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .portfolio-details .portfolio-info ul {
            list-style: none;
            padding: 0;
            font-size: 15px;
        }

        .portfolio-details .portfolio-info ul li+li {
            margin-top: 10px;
        }

        .portfolio-details .portfolio-description {
            padding-top: 30px;
        }

        .portfolio-details .portfolio-description h2 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .portfolio-details .portfolio-description p {
            padding: 0;
        }


        .team .member {
            margin-bottom: 20px;
            overflow: hidden;
            text-align: center;
            border-radius: 4px;
            background: #fff;
            box-shadow: 0px 2px 15px rgba(18, 66, 101, 0.08);
        }

        .team .member .member-img {
            position: relative;
            overflow: hidden;
        }

        .team .member .social {
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            height: 40px;
            opacity: 0;
            transition: ease-in-out 0.3s;
            text-align: center;
            background: rgba(255, 255, 255, 0.85);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .team .member .social a {
            transition: color 0.3s;
            color: #124265;
            margin: 0 10px;
            display: inline-block;
        }

        .team .member .social a:hover {
            color: #2487ce;
        }

        .team .member .social i {
            font-size: 18px;
            margin: 0 2px;
            line-height: 0;
        }

        .team .member .member-info {
            padding: 25px 15px;
        }

        .team .member .member-info h4 {
            font-weight: 700;
            margin-bottom: 5px;
            font-size: 18px;
            color: #124265;
        }

        .team .member .member-info span {
            display: block;
            font-size: 13px;
            font-weight: 400;
            color: #aaaaaa;
        }

        .team .member .member-info p {
            font-style: italic;
            font-size: 14px;
            line-height: 26px;
            color: #777777;
        }

        .team .member:hover .social {
            opacity: 1;
        }


        .pricing .box {
            padding: 40px 20px;
            text-align: center;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            background: #fefefe;
            box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
        }

        .pricing .box h3 {
            font-weight: 400;
            padding: 15px;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 600;
            color: #124265;
        }

        .pricing .box h4 {
            font-size: 42px;
            color: #2487ce;
            font-weight: 500;
            font-family: "Open Sans", sans-serif;
            margin-bottom: 20px;
        }

        .pricing .box h4 sup {
            font-size: 20px;
            top: -15px;
            left: -3px;
        }

        .pricing .box h4 span {
            color: #bababa;
            font-size: 16px;
            font-weight: 300;
        }

        .pricing .box ul {
            padding: 0;
            list-style: none;
            color: #124265;
            text-align: center;
            line-height: 20px;
            font-size: 14px;
        }

        .pricing .box ul li {
            padding-bottom: 16px;
        }

        .pricing .box ul .na {
            color: #ccc;
            text-decoration: line-through;
        }

        .pricing .box .btn-wrap {
            padding: 15px;
            text-align: center;
        }

        .pricing .box .btn-buy {
            display: inline-block;
            padding: 10px 40px;
            border-radius: 4px;
            color: #2487ce;
            transition: none;
            font-size: 14px;
            font-weight: 400;
            font-family: "Raleway", sans-serif;
            font-weight: 600;
            transition: 0.3s;
            border: 2px solid #2487ce;
        }

        .pricing .box .btn-buy:hover {
            background: #2487ce;
            color: #fff;
        }

        .pricing .featured {
            background: #2487ce;
        }

        .pricing .featured h3,
        .pricing .featured h4,
        .pricing .featured h4 span,
        .pricing .featured ul,
        .pricing .featured ul .na {
            color: #fff;
        }

        .pricing .featured .btn-wrap {
            padding: 15px;
            text-align: center;
        }

        .pricing .featured .btn-buy {
            color: #fff;
            border: 2px solid #fff;
        }

        .pricing .featured .btn-buy:hover {
            background: #fff;
            color: #2487ce;
        }


        .faq .faq-list {
            padding: 0 100px;
        }

        .faq .faq-list ul {
            padding: 0;
            list-style: none;
        }

        .faq .faq-list li+li {
            margin-top: 15px;
        }

        .faq .faq-list li {
            padding: 20px;
            background: #fff;
            border-radius: 4px;
            position: relative;
        }

        .faq .faq-list a {
            display: block;
            position: relative;
            font-family: "Poppins", sans-serif;
            font-size: 16px;
            line-height: 24px;
            font-weight: 500;
            padding: 0 30px;
            outline: none;
            cursor: pointer;
        }

        .faq .faq-list .icon-help {
            font-size: 24px;
            position: absolute;
            right: 0;
            left: 20px;
            color: #87c1ea;
        }

        .faq .faq-list .icon-show,
        .faq .faq-list .icon-close {
            font-size: 24px;
            position: absolute;
            right: 0;
            top: 0;
        }

        .faq .faq-list p {
            margin-bottom: 0;
            padding: 10px 0 0 0;
        }

        .faq .faq-list .icon-show {
            display: none;
        }

        .faq .faq-list a.collapsed {
            color: #343a40;
        }

        .faq .faq-list a.collapsed:hover {
            color: #2487ce;
        }

        .faq .faq-list a.collapsed .icon-show {
            display: inline-block;
        }

        .faq .faq-list a.collapsed .icon-close {
            display: none;
        }

        @media (max-width: 1200px) {
            .faq .faq-list {
                padding: 0;
            }
        }


        .contact .info {
            width: 100%;
            background: #fff;
        }

        .contact .info i {
            font-size: 20px;
            color: #2487ce;
            float: left;
            width: 44px;
            height: 44px;
            background: #e3f0fa;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .contact .info h4 {
            padding: 0 0 0 60px;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #124265;
        }

        .contact .info p {
            padding: 0 0 0 60px;
            margin-bottom: 0;
            font-size: 14px;
            color: #217bbc;
        }

        .contact .info .email,
        .contact .info .phone {
            margin-top: 40px;
        }

        .contact .info .email:hover i,
        .contact .info .address:hover i,
        .contact .info .phone:hover i {
            background: #2487ce;
            color: #fff;
        }

        .contact .php-email-form {
            width: 100%;
            background: #fff;
        }

        .contact .php-email-form .form-group {
            padding-bottom: 8px;
        }

        .contact .php-email-form .error-message {
            display: none;
            color: #fff;
            background: #ed3c0d;
            text-align: left;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .error-message br+br {
            margin-top: 25px;
        }

        .contact .php-email-form .sent-message {
            display: none;
            color: #fff;
            background: #18d26e;
            text-align: center;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
        }

        .contact .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #18d26e;
            border-top-color: #eee;
            animation: animate-loading 1s linear infinite;
        }

        .contact .php-email-form input,
        .contact .php-email-form textarea {
            border-radius: 0;
            box-shadow: none;
            font-size: 14px;
            border-radius: 4px;
        }

        .contact .php-email-form input:focus,
        .contact .php-email-form textarea:focus {
            border-color: #2487ce;
        }

        .contact .php-email-form input {
            height: 44px;
        }

        .contact .php-email-form textarea {
            padding: 10px 12px;
        }

        .contact .php-email-form button[type=submit] {
            background: #2487ce;
            border: 0;
            padding: 10px 30px;
            color: #fff;
            transition: 0.4s;
            border-radius: 4px;
        }

        .contact .php-email-form button[type=submit]:hover {
            background: #3194db;
        }

        @keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }


        .breadcrumbs {
            padding: 15px 0;
            background: #f8fbfe;
            min-height: 40px;
            margin-top: 72px;
        }

        @media (max-width: 992px) {
            .breadcrumbs {
                margin-top: 58px;
            }
        }

        .breadcrumbs h2 {
            font-size: 24px;
            font-weight: 300;
        }

        .breadcrumbs ol {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            margin: 0;
            font-size: 14px;
        }

        .breadcrumbs ol li+li {
            padding-left: 10px;
        }

        .breadcrumbs ol li+li::before {
            display: inline-block;
            padding-right: 10px;
            color: #1a5e90;
            content: "/";
        }

        @media (max-width: 768px) {
            .breadcrumbs .d-flex {
                display: block !important;
            }

            .breadcrumbs ol {
                display: block;
            }

            .breadcrumbs ol li {
                display: inline-block;
            }
        }


        #footer {
            color: #444444;
            font-size: 14px;
            background: #f8fbfe;
            box-shadow: 0px 2px 15px rgba(18, 66, 101, 0.08);
        }

        #footer .footer-top {
            padding: 60px 0 30px 0;
            background: #fff;
        }

        #footer .footer-top .footer-contact {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-contact h3 {
            font-size: 26px;
            margin: 0 0 10px 0;
            padding: 2px 0 2px 0;
            line-height: 1;
            font-weight: 300;
        }

        #footer .footer-top .footer-contact p {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            font-family: "Raleway", sans-serif;
            color: #777777;
        }

        #footer .footer-top h4 {
            font-size: 16px;
            font-weight: bold;
            color: #124265;
            position: relative;
            padding-bottom: 12px;
        }

        #footer .footer-top .footer-links {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #footer .footer-top .footer-links ul i {
            padding-right: 2px;
            color: #2487ce;
            font-size: 18px;
            line-height: 1;
        }

        #footer .footer-top .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        #footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }

        #footer .footer-top .footer-links ul a {
            color: #777777;
            transition: 0.3s;
            display: inline-block;
            line-height: 1;
        }

        #footer .footer-top .footer-links ul a:hover {
            text-decoration: none;
            color: #2487ce;
        }

        #footer .footer-newsletter {
            font-size: 15px;
        }

        #footer .footer-newsletter h4 {
            font-size: 16px;
            font-weight: bold;
            color: #444444;
            position: relative;
            padding-bottom: 12px;
        }

        #footer .footer-newsletter form {
            margin-top: 30px;
            background: #fff;
            padding: 6px 10px;
            position: relative;
            border-radius: 5px;
            text-align: left;
            border: 1px solid #cde5f6;
        }

        #footer .footer-newsletter form input[type=email] {
            border: 0;
            padding: 4px 8px;
            width: calc(100% - 100px);
        }

        #footer .footer-newsletter form input[type=submit] {
            position: absolute;
            top: -1px;
            right: -2px;
            bottom: -1px;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 20px 2px 20px;
            background: #2487ce;
            color: #fff;
            transition: 0.3s;
            border-radius: 0 5px 5px 0;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        }

        #footer .footer-newsletter form input[type=submit]:hover {
            background: #3194db;
        }

        #footer .credits {
            padding-top: 5px;
            font-size: 13px;
            color: #444444;
        }

        #footer .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #2487ce;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 5px;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }

        #footer .social-links a:hover {
            background: #3194db;
            color: #fff;
            text-decoration: none;
        }
    </style>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-between">
                <h1 class="logo"><a href="index.html">ClipCode</a></h1>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#about">About</a></li>
                        <li><a class="nav-link scrollto" href="#blog">Blog</a></li>
                        <li class="dropdown"><a href="#"><span>Kategory</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Html</a></li>
                                <li><a href="#">Java Script</a></li>
                                <li><a href="#">Python</a></li>
                                <li><a href="#">Java</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                        <li><a class="getstarted scrollto" href="#hero">Get Started</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 text-center">
                        <h1>Clip Code Adalah Website Coding</h1>
                        <h2>Dengan bahasa pemograman yang lengkap</h2>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
                <div class="row icon-boxes">
                    @forelse ($posts as $post)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="margin-top: 60px;"
                        data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{asset('/storage/posts/'.$post->image) }}" class="rounded"
                                    style="width: 16rem">
                            </div>
                            <h4 class="title"><a href="">{{ $post->title }}</a></h4>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-danger">SHOW</a>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
        <!-- End Hero -->
        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>About Us</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                        </p>
                    </div>

                    <div class="row content">
                        <div class="col-lg-6">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat</li>
                                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit</li>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0">
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in
                                voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt
                                in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <a href="#" class="btn-learn-more">Learn More</a>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= About Video Section ======= -->
            <section id="about-video" class="about-video">
                <div class="container" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                            <img src="assets/img/about-video.jpg" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"
                                data-vbtype="video" data-autoplay="true"></a>
                        </div>

                        <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="bx bx-check-double"></i> Voluptate repellendus pariatur reprehenderit
                                    corporis sint.</li>
                                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore
                                    eu fugiat nulla
                                    pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in
                                voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt
                                in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>

                    </div>

                </div>
            </section>
            <!-- End About Video Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                            Sit sint
                            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                            Quia fugiat
                            sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div>
                        <iframe style="border:0; width: 100%; height: 270px;"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="row mt-5">

                        <div class="col-lg-4">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>Pule Trenggalek, Jawa Timur</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>adityagmg3@gmail.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+62 822 4486 3629 </p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0">

                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row gy-2 gx-md-3">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject" required>
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                            required></textarea>
                                    </div>
                                    <div class="my-3 col-12">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center col-12"><button type="submit">Send Message</button></div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </section>
            <!-- End Contact Section -->
        </main>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h3>ClipCode</h3>
                            <p>
                                Pule Trenggalek<br>
                                United States <br><br>
                                <strong>Phone:</strong> +62 822 4486 3629<br>
                                <strong>Email:</strong> adityagmg3@gmail.com<br>
                            </p>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Join Our Newsletter</h4>
                            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                            <form action="" method="post">
                                <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container d-md-flex py-4">

                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>ClipCode</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="#">Aditya Dwi Purnomo</a>
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>

    </html>