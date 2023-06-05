<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/header-footer.css">
    <link rel="stylesheet" href="/styles/home.css">
    <link rel="stylesheet" href="/styles/card.css">
    <link rel="stylesheet" href="/styles/card2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/login.css" />
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar">
                <div class="navbar-logo">
                    <img src="/images/logo-header.png" alt="logo-header">
                </div>
                <div class="navbar-search">
                    <!-- <button><i class="fa fa-search"></i></button> -->
                    <input type="search" placeholder="Search...">
                </div>
                <div class="navbar-links">
                    <a href="#" class="navbar-link">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 17L1 21V5L8 1M8 17L15 21M8 17V1M15 21L21 17V1L15 5M15 21V5M15 5L8 1"
                                stroke="#FB6200" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Beranda</a>
                    <a href="#" class="navbar-link"><svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 21C16.5228 21 21 16.5228 21 11C21 5.47715 16.5228 1 11 1C5.47715 1 1 5.47715 1 11C1 16.5228 5.47715 21 11 21Z"
                                stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M13.7221 7.26596C14.2107 7.10312 14.4549 7.02169 14.6174 7.07962C14.7587 7.13003 14.87 7.24127 14.9204 7.38263C14.9783 7.54507 14.8969 7.78935 14.734 8.27789L13.2465 12.7405C13.2001 12.8797 13.1769 12.9492 13.1374 13.007C13.1024 13.0582 13.0582 13.1024 13.007 13.1374C12.9492 13.1769 12.8797 13.2001 12.7405 13.2465L8.27789 14.734C7.78935 14.8969 7.54507 14.9783 7.38263 14.9204C7.24127 14.87 7.13003 14.7587 7.07962 14.6174C7.02169 14.4549 7.10312 14.2107 7.26596 13.7221L8.75351 9.25947C8.79989 9.12033 8.82308 9.05076 8.8626 8.99299C8.8976 8.94182 8.94182 8.8976 8.99299 8.8626C9.05076 8.82308 9.12033 8.79989 9.25947 8.75351L13.7221 7.26596Z"
                                stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Explore</a>
                    <a href="#" class="navbar-link">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.00014 13H17.1359C18.1487 13 18.6551 13 19.0582 12.8112C19.4134 12.6448 19.7118 12.3777 19.9163 12.0432C20.1485 11.6633 20.2044 11.16 20.3163 10.1534L20.9013 4.88835C20.9355 4.58088 20.9525 4.42715 20.9031 4.30816C20.8597 4.20366 20.7821 4.11697 20.683 4.06228C20.5702 4 20.4155 4 20.1062 4H3.50014M1 1H2.24844C2.51306 1 2.64537 1 2.74889 1.05032C2.84002 1.09463 2.91554 1.16557 2.96544 1.25376C3.02212 1.35394 3.03037 1.48599 3.04688 1.7501L3.95312 16.2499C3.96963 16.514 3.97788 16.6461 4.03456 16.7462C4.08446 16.8344 4.15998 16.9054 4.25111 16.9497C4.35463 17 4.48694 17 4.75156 17H18M6.5 20.5H6.51M15.5 20.5H15.51M7 20.5C7 20.7761 6.77614 21 6.5 21C6.22386 21 6 20.7761 6 20.5C6 20.2239 6.22386 20 6.5 20C6.77614 20 7 20.2239 7 20.5ZM16 20.5C16 20.7761 15.7761 21 15.5 21C15.2239 21 15 20.7761 15 20.5C15 20.2239 15.2239 20 15.5 20C15.7761 20 16 20.2239 16 20.5Z"
                                stroke="#667085" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        History</a>
                </div>


       
                    <?= $this->include('layout/nav-guest'); ?>
            
                
                


            </nav>
        </div>
    </div>

    <!-- content isi -->
    <!-- content isi -->
    <!-- content isi -->
    <!-- content isi -->
    <!-- content isi -->
    <?= $this->renderSection('content'); ?>
    <!-- content isi -->
    <!-- content isi -->
    <!-- content isi -->
    <!-- content isi -->
    <!-- content isi -->
    
<footer>
        <div class="container">
            <div class="footer-content">
                <div class="top-section">
                    <div class="grid-item grid-item-left">
                        <img src="/images/logo-footer.png" alt="logo-footer">
                        <p class="">Hanya di QuTernak yang menyediakan berbagai Hewan Ternak & Kurban berkualitas
                            tinggi,
                            serta
                            menyediakan berbagai produk olahan hewan ternak.</p>
                    </div>
                    <div class="grid-item grid-item-right">
                        <ul>
                            <h3>Support</h3>
                            <li><a href="">Terms of Service</a></li>
                            <li><a href="">Support</a></li>
                            <li><a href="">FAQ</a></li>
                        </ul>
                        <ul>
                            <h3>Company</h3>
                            <li><a href="">About</a> Us</li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Livestock</a></li>
                        </ul>
                        <ul>
                            <h3>Contact</h3>
                            <li><a href="">Facebook</a></li>
                            <li><a href="">Twitter</a></li>
                            <li><a href="">Instagram</a></li>
                            <li><a href="">Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom-section">
                    <span>© 2023 QuTernak. All rights reserved</span>
                    <div class="right-side">
                        <span><a href="">Terms & Conditions</a></span>
                        <span><a href="">Privcy Policy</a></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>