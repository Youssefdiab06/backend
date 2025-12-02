<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Healthcare Services — Accordion</title>

    <!-- Optional: Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #ffffff;
            --primary: #1e66b3;
            --card: #39A9E6;
            --card-dark: #2b9bd6;
            --muted: #6b6b6b;
            --max-width: 820px;
        }

        * { box-sizing: border-box }

        body {
            margin: 0;
            background: var(--bg);
            font-family: 'Poppins', system-ui, sans-serif;
            color: #222;
        }

        /* ===========================
             HEADER
        ============================*/
        header.main-header {
            width: 100%;
            background: #fff;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header.main-header img.logo {
            width: 120px;
        }

        header.main-header nav ul {
            list-style: none; /* remove bullets */
            display: flex;
            gap: 25px;
            padding: 0;
            margin: 0;
        }

        header.main-header nav ul li a {
            text-decoration: none;
            color: #222;
            font-weight: 600;
            font-size: 16px;
            transition: .2s;
        }

        header.main-header nav ul li a:hover {
            color: var(--primary);
        }

        /* ===========================
             PAGE CONTENT
        ============================*/
        .page {
            max-width: var(--max-width);
            margin: 24px auto;
            padding: 20px;
        }

        header.page-head {
            text-align: center;
            padding-top: 10px;
        }

        .kicker {
            color: #6bb0db;
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 6px;
        }

        h1 {
            margin: 0 0 14px;
            font-size: 30px;
            color: var(--primary);
            font-weight: 700;
        }

        p.lead {
            max-width: 720px;
            margin: 0 auto 26px auto;
            color: var(--muted);
            line-height: 1.5;
            font-size: 15px;
            padding: 0 8px;
        }

        /* ===========================
             ACCORDION
        ============================*/
        .accordion {
            display: flex;
            flex-direction: column;
            gap: 18px;
            padding: 6px;
        }

        .card {
            background: var(--card);
            color: white;
            border-radius: 18px;
            padding: 14px 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            box-shadow: 0 6px 18px rgba(31,95,145,0.08);
            transition: transform .18s ease, box-shadow .18s ease;
        }

        .card-inner {
            display: flex;
            gap: 14px;
            align-items: center;
            flex: 1;
        }

        .icon {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            background: rgba(255,255,255,0.12);
            border-radius: 10px;
        }

        .label { font-size: 18px; font-weight: 600; }

        .chev {
            width: 28px;
            height: 28px;
            display: grid;
            place-items: center;
            opacity: 0.95;
            transition: transform .25s;
        }

        .panel {
            overflow: hidden;
            max-height: 0;
            transition: max-height .36s, padding .25s;
            background: rgba(255,255,255,0.05);
            border-radius: 12px;
            margin-top: 8px;
            padding: 0 12px;
        }

        .panel-content {
            padding: 12px 6px 16px;
            color: #f7fbff;
            font-size: 14px;
        }

        .card.active .chev { transform: rotate(180deg); }
        .card.active + .panel { padding: 10px 12px 16px; }

        /* ===========================
             FOOTER
        ============================*/
        footer.main-footer {
            margin-top: 50px;
            background: #1e66b3;
            color: #fff;
            text-align: center;
            padding: 22px 10px;
        }

        footer.main-footer p {
            margin: 5px 0;
            font-size: 15px;
        }

        @media (max-width:520px) {
            h1 { font-size: 26px; }
            .label { font-size: 16px; }
            .card { padding: 12px; }
            .icon { width: 40px; height: 40px; }
        }
    </style>
</head>

<body>

    <!-- ===========================
           HEADER
    ============================-->
    <header class="main-header">
        <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">

        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/services">E-Services</a></li>
                <li><a href="/care">Care Centers</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>



    <!-- ===========================
           MAIN PAGE CONTENT
    ============================-->
    <div class="page" role="main">
        <header class="page-head">
            <div class="kicker">Healthcare Services</div>
            <h1>Healthcare Services Provided in the Clusters</h1>
            <p class="lead">
                The health clusters offer a comprehensive range of healthcare services through an integrated network of central and general hospitals, as well as specialized centers.
            </p>
        </header>

        <section class="accordion">


            <!-- CARD 1 -->
            <button class="card" data-target="p1">
                <div class="card-inner">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M3 11.5L12 4l9 7.5" stroke="#fff" stroke-width="1.6" />
                            <path d="M5 21V11h14v10" stroke="#fff" stroke-width="1.6" />
                        </svg>
                    </span>
                    <span class="label">Home Care</span>
                </div>
                <span class="chev">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M6 9l6 6 6-6" stroke="#fff" stroke-width="2" />
                    </svg>
                </span>
            </button>
            <div id="p1" class="panel">
                <div class="panel-content">
                    Home-based medical services including nursing visits, medication management, follow-up, and palliative care.
                </div>
            </div>


            <!-- CARD 2 -->
            <button class="card" data-target="p2">
                <div class="card-inner">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M12 12a3 3 0 100-6 3 3 0 000 6z" stroke="#fff" stroke-width="1.5"/>
                            <path d="M4 20v-1a4 4 0 014-4h8a4 4 0 014 4v1" stroke="#fff" stroke-width="1.5"/>
                        </svg>
                    </span>
                    <span class="label">Primary Health Care</span>
                </div>
                <span class="chev">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M6 9l6 6 6-6" stroke="#fff" stroke-width="2" />
                    </svg>
                </span>
            </button>
            <div id="p2" class="panel">
                <div class="panel-content">
                    Preventive and curative services including immunizations, routine consultations, maternal and child health.
                </div>
            </div>


            <!-- CARD 3 -->
            <button class="card" data-target="p3">
                <div class="card-inner">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M3 12h18v7a1 1 0 01-1 1H4a1 1 0 01-1-1v-7z" stroke="#fff" stroke-width="1.5" />
                            <path d="M7 12V9a3 3 0 016 0v3" stroke="#fff" stroke-width="1.5" />
                        </svg>
                    </span>
                    <span class="label">Specialty Care</span>
                </div>
                <span class="chev">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M6 9l6 6 6-6" stroke="#fff" stroke-width="2" />
                    </svg>
                </span>
            </button>
            <div id="p3" class="panel">
                <div class="panel-content">
                    Specialized medical services such as surgery, emergency care, ICU support, and medical subspecialties.
                </div>
            </div>


            <!-- CARD 4 -->
            <button class="card" data-target="p4">
                <div class="card-inner">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M3 11a9 9 0 0118 0v5a3 3 0 01-3 3H6a3 3 0 01-3-3v-5z" stroke="#fff" stroke-width="1.5"/>
                            <path d="M12 14v2" stroke="#fff" stroke-width="1.6"/>
                        </svg>
                    </span>
                    <span class="label">Virtual Care</span>
                </div>
                <span class="chev">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M6 9l6 6 6-6" stroke="#fff" stroke-width="2" />
                    </svg>
                </span>
            </button>
            <div id="p4" class="panel">
                <div class="panel-content">
                    Telemedicine consultations, online follow-ups, counselling, and remote triage.
                </div>
            </div>

        </section>
    </div>



    <!-- ===========================
           FOOTER
    ============================-->
    <footer class="main-footer">
        <p>© 2025 Healthcare System</p>
        <p>All Rights Reserved</p>
    </footer>



    <script>
    // Accordion behavior
    document.querySelectorAll('.card').forEach(card => {
        const id = card.dataset.target;
        const panel = document.getElementById(id);

        card.addEventListener('click', () => {
            const active = card.classList.contains('active');

            document.querySelectorAll('.card').forEach(c => {
                c.classList.remove('active');
                const p = document.getElementById(c.dataset.target);
                p.style.maxHeight = null;
            });

            if (!active) {
                card.classList.add('active');
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    });
    </script>

</body>
</html>