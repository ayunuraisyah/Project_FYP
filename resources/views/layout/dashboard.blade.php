<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | {{ $active }}</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <style>
      
      .sidebar {
            transition: transform 0.3s ease-in-out;
            z-index: 50; /* Ensure it appears above other content */
        }
        .sidebar-closed {
            transform: translateX(-100%);
        }
        .sidebar-open {
            transform: translateX(0);
        }
        /* Overlay to darken the rest of the page */
        .overlay {
            transition: opacity 0.3s ease-in-out;
            opacity: 0;
            visibility: hidden;
            z-index: 40;
        }
        .overlay-open {
            opacity: 0.5;
            visibility: visible;
        }
    
        .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide img {
        width: 100%;
        height: auto;
    }

    .swiper-pagination {
        position: absolute;
        right: 10px;
        bottom: 10px;
    }

    .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background-color: #fff;
        opacity: 0.5;
        transition: opacity 0.15s ease;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
    }

        .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide img {
        width: 100%;
        height: auto;
    }

    .swiper-pagination {
        position: absolute;
        right: 10px;
        bottom: 10px;
    }

    .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background-color: #fff;
        opacity: 0.5;
        transition: opacity 0.15s ease;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
    }
    </style>
</head>
<body class="overflow-x-hidden">

    <nav>
        @include('components.header')
    </nav>
     
    <div>
        @yield('content')
    </div>

    <footer>
        @include('components.footer')
    </footer>

    <script>
        feather.replace();

    //     const Navbar-Nav = document.querySelector('.Navbar-nav');
    // document.querySelector('#menu-toggle').onclick = () => {
    //     NavbarNav.classList.toggle('active');
    // };

        
          document.addEventListener('DOMContentLoaded', function () {

        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const closeSidebar = document.getElementById('close-sidebar');
        const overlay = document.getElementById('overlay');

        menuToggle.addEventListener('click', function () {
            sidebar.classList.toggle('sidebar-open');
            sidebar.classList.toggle('sidebar-closed');
            overlay.classList.toggle('overlay-open');
        });

        closeSidebar.addEventListener('click', function () {
            sidebar.classList.add('sidebar-closed');
            sidebar.classList.remove('sidebar-open');
            overlay.classList.remove('overlay-open');
        });

        overlay.addEventListener('click', function () {
            sidebar.classList.add('sidebar-closed');
            sidebar.classList.remove('sidebar-open');
            overlay.classList.remove('overlay-open');
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.slideshow-container img');
        const indicators = document.querySelectorAll('.indicator');
        let slideIndex = 0;

        function showSlide(index) {
            slides.forEach((slide) => {
                slide.classList.remove('active');
            });
            indicators.forEach((indicator) => {
                indicator.classList.remove('active');
            });

            slides[index].classList.add('active');
            indicators[index].classList.add('active');
        }

        function nextSlide() {
            slideIndex++;
            if (slideIndex >= slides.length) {
                slideIndex = 0;
            }
            showSlide(slideIndex);
        }

        setInterval(nextSlide, 5000); // Ganti slide setiap 3 detik

        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                slideIndex = index;
                showSlide(slideIndex);
            });
        });
    });

    var swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 3500, // 5 seconds
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
  
  
//         let slideIndex = 0;
// showSlides();

// function showSlides() {
//     let i;
//     let slides = document.getElementsByClassName("mySlides");
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";  
//     }
//     slideIndex++;
//     if (slideIndex > slides.length) {slideIndex = 1}    
//     slides[slideIndex-1].style.display = "block";  
//     setTimeout(showSlides, 3000); // Change image every 3 seconds
// }
    </script>
</body>
</html>