<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brwan Studio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* ======================================
           GLOBAL
        ====================================== */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        a {
            text-decoration: none;
        }

        /* ======================================
           HERO STYLE
        ====================================== */
        .hero {
            height: 90vh;
            width: 100%;
            background: url('/images/pt1.png') center center / cover no-repeat;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        /* ======================================
           TOP NAVIGATION (Fixed)
        ====================================== */
        .top-nav {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            padding: 25px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 9999;
            color: white;
            backdrop-filter: blur(5px);
        }

        .menu-btn {
            font-size: 28px;
            cursor: pointer;
            font-weight: 600;
        }

        /* ======================================
           MENU SLIDE DARI ATAS
        ====================================== */
        .top-menu {
            position: fixed;
            top: -100%;
            left: 0;
            width: 100%;
            height: 100vh;
            background: #327BFF;
            color: white;
            padding-top: 120px;
            text-align: center;
            transition: 0.45s ease-in-out;
            z-index: 99999;
        }

        .top-menu.active {
            top: 0;
        }

        .top-menu a {
            color: white;
            display: block;
            font-size: 32px;
            margin: 18px 0;
            font-weight: 700;
        }

        .close-btn {
            position: absolute;
            top: 30px;
            right: 40px;
            font-size: 48px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<!-- ======================================
     FIXED HEADER
====================================== -->
<div class="top-nav">
    <h2 class="fw-bold">Brwan Studio</h2>

    <div id="openMenu" class="menu-btn">
        ☰ Menu
    </div>
</div>

<!-- ======================================
     MENU DARI ATAS
====================================== -->
<div id="topMenu" class="top-menu">
    <div id="closeMenu" class="close-btn">×</div>

    <a href="#about-us" onclick="closeMenu()">Home</a>
    <a href="#our-work" onclick="closeMenu()">Our Work</a>
    <a href="#contact" onclick="closeMenu()">Contact</a>
</div>

<script>
    const topMenu = document.getElementById("topMenu");
    const openMenuBtn = document.getElementById("openMenu");
    const closeMenuBtn = document.getElementById("closeMenu");

    openMenuBtn.onclick = () => topMenu.classList.add("active");
    closeMenuBtn.onclick = () => topMenu.classList.remove("active");

    function closeMenu() {
        topMenu.classList.remove("active");
    }

    // Auto-close menu saat scroll
    window.addEventListener("scroll", () => {
        if (topMenu.classList.contains("active")) {
            topMenu.classList.remove("active");
        }
    });
</script>


<!-- ======================================
     HERO SECTION
====================================== -->
<section id="about-us" class="hero">
    <div class="hero-text">
        <h1>BRWAN STUDIO</h1>
        <p>NEXT YEAR IS OUR YEAR - ANOMALI</p>
    </div>
</section>



<!-- ======================================
     LOGO SCROLL
====================================== -->
<section id="logo-scroll" style="background: #ffffff; padding: 30px 0; overflow: hidden; white-space: nowrap;">
    <div style="display: inline-block; animation: scroll 22s linear infinite;">
        <img src="/path/to/walawili.jpg" style="height:200px; margin: 0 100px;">
        <img src="/path/to/puma.png" style="height:200px; margin: 0 100px;">
        <img src="/path/to/adidas.png" style="height:200px; margin: 0 100px;">
        <img src="/path/to/bbi.jpeg" style="height:200px; margin: 0 100px;">
        <img src="/path/to/logo5.png" style="height:200px; margin: 0 100px;">
    </div>
</section>

<style>
@keyframes scroll {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}
</style>



<!-- ======================================
     OUR WORK SECTION
====================================== -->
<section id="our-work" class="py-5" style="background-color: #8C0000;">
    <div class="container text-center">

        <h2 class="fw-bold mb-5" style="font-size: 2.5rem;">
            We're just getting started:
        </h2>

        <div class="row text-center mb-5 stats-row">
            <div class="col-md-3 mb-4">
                <h1 class="display-4 fw-bold">500+</h1>
                <p class="text-muted">Videos created</p>
            </div>

            <div class="col-md-3 mb-4">
                <h1 class="display-4 fw-bold">10K+</h1>
                <p class="text-muted">Video views</p>
            </div>

            <div class="col-md-3 mb-4">
                <h1 class="display-4 fw-bold">10+</h1>
                <p class="text-muted">Clients helped</p>
            </div>

            <div class="col-md-3 mb-4">
                <h1 class="display-4 fw-bold">7+</h1>
                <p class="text-muted">Month of expertise</p>
            </div>
        </div>

    </div>
</section>


<!-- ======================================
     ABOUT ME SECTION
====================================== -->
<section id="about-me" style="padding: 80px 0; background: #ffffff;">
    <div style="
        max-width: 1200px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 50px;
        flex-wrap: wrap;
    ">

        <div style="flex: 1; min-width: 300px;">
            <img src="/images/jj.png" alt="About Me" style="
                width: 100%;
                border-radius: 20px;
                object-fit: cover;
                box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            ">
        </div>

        <div style="flex: 1.2; min-width: 300px; position: relative;">

            <div style="
                font-size: 100px;
                font-weight: bold;
                color: #8C0000;
                line-height: 0.6;
                position: absolute;
                top: -40px;
                left: -20px;
            ">“</div>

            <h1 style="
                font-size: 32px;
                font-weight: 600;
                line-height: 1.4;
                margin-bottom: 20px;
            ">
                Brwan Studio helps brands grow through creative ideas and 
                meaningful digital storytelling. Authentic content is our priority.
            </h1>

            <p style="font-size: 18px; color: #555; margin-bottom: 25px;">
                From production to storytelling, we create impactful media that connects with your audience.
            </p>

            <hr style="margin: 25px 0; opacity: 0.3;">

            <div>
                <h4 style="margin: 0; font-weight: 700;">Brwan Studio</h4>
                <span style="color: #777;">Founder</span>
            </div>

        </div>

    </div>
</section>



<!-- ======================================
     CONTACT SECTION
====================================== -->
<section id="contact" style="
    width: 100%;
    background: #f5f5f5;
    padding: 100px 0;
">
    <div style="max-width: 1300px; margin: auto; padding: 0 40px;">

        <div style="
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-bottom: 80px;
        ">

            <div style="flex: 1; min-width: 250px;">
                <h1 style="font-size: 42px; font-weight: 700; margin-bottom: 20px;">
                    Brwan Studio
                </h1>
            </div>

            <div style="flex: 1; min-width: 250px; text-align: center;">
                <h2 style="font-size: 48px; font-weight: 700; margin-bottom: 10px;">Stay</h2>
                <h2 style="font-size: 48px; font-weight: 700; margin-top: -10px; margin-bottom: 40px;">connected</h2>

                <a href="#" style="
                    background: #327BFF;
                    padding: 18px 45px;
                    border-radius: 40px;
                    color: white;
                    text-decoration: none;
                    font-size: 18px;
                    font-weight: 600;
                    display: inline-block;
                    box-shadow: 0 4px 18px rgba(50, 123, 255, 0.3);
                ">
                    ↳ Book a call
                </a>
            </div>

            <div style="
                flex: 1;
                min-width: 250px;
                text-align: right;
                line-height: 1.9;
            ">
                <a href="#" style="text-decoration: none; color: black; font-size: 18px;">Twitter</a><br>
                <a href="#" style="text-decoration: none; color: black; font-size: 18px;">LinkedIn</a><br>
                <a href="#" style="text-decoration: none; color: black; font-size: 18px;">Newsletter</a><br><br>
                <a href="#" style="text-decoration: none; color: black; font-size: 18px;">Privacy Policy</a>
            </div>

        </div>

        <div style="
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-top: 20px;
        ">

            <div style="flex: 1; min-width: 300px; font-size: 22px; font-weight: 500;">
                juanbenedicthasiholan@gmail.com
            </div>

            <div style="
                flex: 1;
                min-width: 300px;
                font-size: 17px;
                color: #555;
                line-height: 1.7;
                text-align: right;
            ">
                Brwan Studio will help your brand excel in the next wave of media.
                From storytelling to production, we deliver unmatched results through
                impactful digital content.
            </div>

        </div>

    </div>
</section>



<!-- ======================================
     SUBMIT REVIEW
====================================== -->
<section id="client-review-form" class="p-5 bg-light">
    <div class="container">
        <h3 class="mb-4 fw-bold">Submit Your Review</h3>

        <form action="#" method="POST" class="p-4 rounded shadow-sm bg-white" style="max-width: 600px;">
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" placeholder="Contoh: Designer, Mahasiswa" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Review</label>
                <textarea name="review" rows="4" class="form-control" placeholder="Tulis review Anda..." required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Rating</label>
                <select name="rating" class="form-select" required>
                    <option value="">Pilih rating</option>
                    <option value="5">⭐⭐⭐⭐⭐ (5)</option>
                    <option value="4">⭐⭐⭐⭐ (4)</option>
                    <option value="3">⭐⭐⭐ (3)</option>
                    <option value="2">⭐⭐ (2)</option>
                    <option value="1">⭐ (1)</option>
                </select>
            </div>

            <button type="submit" class="btn btn-dark px-4">Submit Review</button>
        </form>
    </div>
</section>


<footer class="text-center p-3 bg-dark text-white">
    © 2025 Brwan Studio
</footer>

</body>
</html>
