<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virat Kohli - King of Cricket</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Rajdhani', sans-serif;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a0000 100%);
            color: #fff;
            overflow-x: hidden;
        }

        /* Navigation */
        nav {
            position: fixed;
            width: 100%;
            background: rgba(0, 0, 0, 0.95);
            padding: 20px 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(255, 0, 0, 0.3);
            border-bottom: 2px solid #ff0000;
        }

        nav ul {
            display: flex;
            justify-content: center;
            gap: 50px;
            list-style: none;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            transition: all 0.3s;
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #ff0000;
            transition: width 0.3s;
        }

        nav a:hover::after {
            width: 100%;
        }

        nav a:hover {
            color: #ff0000;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1531415074968-036ba1b575da?w=1200') center/cover;
            filter: brightness(0.3);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 20px;
        }

        .hero h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: 80px;
            font-weight: 900;
            background: linear-gradient(45deg, #ff0000, #ff6666);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 30px rgba(255, 0, 0, 0.5);
            margin-bottom: 20px;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                filter: drop-shadow(0 0 20px #ff0000);
            }
            to {
                filter: drop-shadow(0 0 40px #ff0000);
            }
        }

        .hero p {
            font-size: 28px;
            color: #ccc;
            margin-bottom: 30px;
        }

        .stats-preview {
            display: flex;
            gap: 40px;
            justify-content: center;
            margin-top: 40px;
        }

        .stat-box {
            background: rgba(255, 0, 0, 0.1);
            border: 2px solid #ff0000;
            padding: 20px 40px;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .stat-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 40px rgba(255, 0, 0, 0.5);
        }

        .stat-number {
            font-size: 48px;
            font-weight: 700;
            color: #ff0000;
        }

        .stat-label {
            font-size: 16px;
            color: #999;
        }

        /* About Section */
        .about {
            padding: 100px 50px;
            background: linear-gradient(180deg, #000 0%, #1a0000 100%);
        }

        .section-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 48px;
            text-align: center;
            margin-bottom: 60px;
            color: #ff0000;
            text-transform: uppercase;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-image {
            position: relative;
        }

        .about-image img {
            width: 100%;
            border-radius: 20px;
            border: 3px solid #ff0000;
            box-shadow: 0 20px 60px rgba(255, 0, 0, 0.3);
            transition: transform 0.3s;
        }

        .about-image img:hover {
            transform: scale(1.05);
        }

        .about-text p {
            font-size: 18px;
            line-height: 1.8;
            color: #ccc;
            margin-bottom: 20px;
        }

        /* Stats Section */
        .stats {
            padding: 100px 50px;
            background: #000;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .stat-card {
            background: linear-gradient(135deg, #1a0000 0%, #330000 100%);
            padding: 40px;
            border-radius: 15px;
            border: 2px solid #ff0000;
            text-align: center;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 0, 0, 0.1) 0%, transparent 70%);
            animation: rotate 10s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .stat-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 20px 60px rgba(255, 0, 0, 0.5);
        }

        .stat-card h3 {
            font-size: 48px;
            color: #ff0000;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .stat-card p {
            font-size: 18px;
            color: #999;
            position: relative;
            z-index: 1;
        }

        /* Gallery Section */
        .gallery {
            padding: 100px 50px;
            background: linear-gradient(180deg, #000 0%, #0a0000 100%);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            border: 2px solid #ff0000;
            cursor: pointer;
            height: 300px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .gallery-item:hover img {
            transform: scale(1.2);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(255, 0, 0, 0.9), transparent);
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        /* Achievements Section */
        .achievements {
            padding: 100px 50px;
            background: #000;
        }

        .achievement-list {
            max-width: 1000px;
            margin: 0 auto;
        }

        .achievement-item {
            background: linear-gradient(90deg, rgba(255, 0, 0, 0.1) 0%, transparent 100%);
            border-left: 4px solid #ff0000;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 0 10px 10px 0;
            transition: all 0.3s;
        }

        .achievement-item:hover {
            background: linear-gradient(90deg, rgba(255, 0, 0, 0.2) 0%, transparent 100%);
            transform: translateX(10px);
        }

        .achievement-item h3 {
            font-size: 24px;
            color: #ff0000;
            margin-bottom: 10px;
        }

        .achievement-item p {
            font-size: 16px;
            color: #ccc;
        }

        /* Footer */
        footer {
            background: #000;
            padding: 40px 20px;
            text-align: center;
            border-top: 2px solid #ff0000;
        }

        footer p {
            color: #999;
            font-size: 16px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
        }

        .social-links a {
            color: #fff;
            font-size: 24px;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #ff0000;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 48px;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .stats-preview {
                flex-direction: column;
                gap: 20px;
            }

            nav ul {
                flex-wrap: wrap;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#stats">STATS</a></li>
            <li><a href="#gallery">GALLERY</a></li>
            <li><a href="#achievements">ACHIEVEMENTS</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>VIRAT KOHLI</h1>
            <p>KING OF CRICKET</p>
            <div class="stats-preview">
                <div class="stat-box">
                    <div class="stat-number">80+</div>
                    <div class="stat-label">International Centuries</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">27000+</div>
                    <div class="stat-label">International Runs</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">18</div>
                    <div class="stat-label">Kohli Foundation</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h2 class="section-title">ABOUT THE LEGEND</h2>
        <div class="about-content">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1624526267942-ab0ff8a3e972?w=600" alt="Virat Kohli">
            </div>
            <div class="about-text">
                <p>Virat Kohli, born on November 5, 1988, in Delhi, India, is widely regarded as one of the greatest cricketers of all time. Known for his aggressive batting style, exceptional fitness, and unwavering dedication, Kohli has redefined modern cricket.</p>
                <p>As the former captain of the Indian cricket team, he led India to numerous victories and inspired a generation of cricketers. His consistency across all formats of the game is unparalleled, and his records speak volumes about his greatness.</p>
                <p>Off the field, Virat is known for his philanthropic work through the Virat Kohli Foundation and his passion for fitness and health. He continues to be an inspiration to millions around the world.</p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="stats">
        <h2 class="section-title">CAREER STATISTICS</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <h3>113</h3>
                <p>Test Matches</p>
            </div>
            <div class="stat-card">
                <h3>295</h3>
                <p>ODI Matches</p>
            </div>
            <div class="stat-card">
                <h3>125</h3>
                <p>T20I Matches</p>
            </div>
            <div class="stat-card">
                <h3>50.5</h3>
                <p>Test Average</p>
            </div>
            <div class="stat-card">
                <h3>58.1</h3>
                <p>ODI Average</p>
            </div>
            <div class="stat-card">
                <h3>52.7</h3>
                <p>T20I Average</p>
            </div>
            <div class="stat-card">
                <h3>80+</h3>
                <p>International Centuries</p>
            </div>
            <div class="stat-card">
                <h3>27000+</h3>
                <p>International Runs</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <h2 class="section-title">GALLERY</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1540747913346-19e32dc3e97e?w=400" alt="Virat Kohli">
                <div class="gallery-overlay">
                    <h4>The Champion</h4>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1531415074968-036ba1b575da?w=400" alt="Cricket Action">
                <div class="gallery-overlay">
                    <h4>In Action</h4>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1614632537423-1e6c2e7e0aae?w=400" alt="Victory">
                <div class="gallery-overlay">
                    <h4>Victory Moment</h4>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1624526267942-ab0ff8a3e972?w=400" alt="Celebration">
                <div class="gallery-overlay">
                    <h4>Celebration</h4>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1593766827228-8737b4534aa6?w=400" alt="Team India">
                <div class="gallery-overlay">
                    <h4>Team India</h4>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1626224583764-f87db24ac4ea?w=400" alt="Stadium">
                <div class="gallery-overlay">
                    <h4>The Arena</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section id="achievements" class="achievements">
        <h2 class="section-title">MAJOR ACHIEVEMENTS</h2>
        <div class="achievement-list">
            <div class="achievement-item">
                <h3>ICC ODI Player of the Year</h3>
                <p>Won this prestigious award three times (2012, 2017, 2018)</p>
            </div>
            <div class="achievement-item">
                <h3>Sir Garfield Sobers Trophy</h3>
                <p>ICC Cricketer of the Year (2017, 2018)</p>
            </div>
            <div class="achievement-item">
                <h3>Rajiv Gandhi Khel Ratna</h3>
                <p>India's highest sporting honor (2018)</p>
            </div>
            <div class="achievement-item">
                <h3>Padma Shri</h3>
                <p>India's fourth-highest civilian award (2017)</p>
            </div>
            <div class="achievement-item">
                <h3>Most Runs in T20 World Cup History</h3>
                <p>Leading run-scorer across all T20 World Cup editions</p>
            </div>
            <div class="achievement-item">
                <h3>Fastest to 8,000, 9,000, 10,000, 11,000, and 12,000 ODI Runs</h3>
                <p>Multiple records for fastest to reach milestones in ODI cricket</p>
            </div>
            <div class="achievement-item">
                <h3>Most Double Centuries as Captain</h3>
                <p>Holds the record for most double hundreds as Test captain</p>
            </div>
            <div class="achievement-item">
                <h3>Most Centuries in Run Chases</h3>
                <p>Unmatched record in successful run chases in ODI cricket</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Virat Kohli - King of Cricket. All Rights Reserved.</p>
        <div class="social-links">
            <a href="#" title="Instagram">📷</a>
            <a href="#" title="Twitter">🐦</a>
            <a href="#" title="Facebook">👍</a>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Parallax effect for hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero::before');
            if (hero) {
                document.querySelector('.hero').style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Animate stats on scroll
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.stat-card, .achievement-item').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(50px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    </script>
</body>
</html>
