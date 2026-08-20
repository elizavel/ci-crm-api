<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #111827;
        }

        .dashboard {
            min-height: 100vh;
            display: flex;
        }

        /* Left Navigation */
        .sidebar {
            width: 240px;
            min-height: 100vh;
            background: #111827;
            color: #ffffff;
            padding: 24px 16px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
        }

        .logo {
            padding: 0 12px 28px;
            font-size: 22px;
            font-weight: 700;
        }

        .nav-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-menu li {
            margin-bottom: 6px;
        }

        .nav-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border-radius: 8px;
            color: #d1d5db;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.2s, color 0.2s;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            background: #1f2937;
            color: #ffffff;
        }

        .nav-icon {
            width: 20px;
            text-align: center;
            font-size: 17px;
        }

        /* Main Content */
        .main {
            flex: 1;
            margin-left: 240px;
            min-width: 0;
        }

        /* Top Bar */
        .topbar {
            height: 72px;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
        }

        .page-title {
            font-size: 20px;
            font-weight: 600;
        }

        .logout-btn {
            width: 42px;
            height: 42px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #374151;
            transition: background 0.2s, color 0.2s;
        }

        .logout-btn:hover {
            background: #f3f4f6;
            color: #dc2626;
        }

        .logout-icon {
            width: 20px;
            height: 20px;
        }

        /* Content */
        .content {
            padding: 28px;
        }

        .welcome {
            margin-bottom: 24px;
        }

        .welcome h1 {
            margin: 0 0 6px;
            font-size: 26px;
        }

        .welcome p {
            margin: 0;
            color: #6b7280;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 22px;
        }

        .card-title {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .card-value {
            font-size: 28px;
            font-weight: 700;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                padding: 20px 10px;
            }

            .logo {
                font-size: 0;
                text-align: center;
                padding: 0 0 28px;
            }

            .logo::before {
                content: "D";
                font-size: 22px;
            }

            .nav-menu a {
                justify-content: center;
                padding: 12px 8px;
            }

            .nav-menu span:not(.nav-icon) {
                display: none;
            }

            .main {
                margin-left: 70px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .topbar {
                padding: 0 18px;
            }

            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="dashboard">

    <!-- Left Navigation -->
    <aside class="sidebar">
        <div class="logo">Dashboard</div>

        <ul class="nav-menu">
            <li>
                <a href="#" class="active">
                    <span class="nav-icon">⌂</span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-icon">▣</span>
                    <span>Projects</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-icon">◉</span>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-icon">▤</span>
                    <span>Reports</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-icon">⚙</span>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Area -->
    <main class="main">

        <!-- Top Bar -->
        <header class="topbar">
            <div class="page-title">Dashboard</div>

            <!-- Logout icon button -->
            <button
                type="button"
                class="logout-btn"
                id="logoutBtn"
                title="Logout"
                aria-label="Logout"
            >
                <svg class="logout-icon" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10 17l5-5-5-5"></path>
                    <path d="M15 12H3"></path>
                    <path d="M21 19V5a2 2 0 0 0-2-2h-6"></path>
                </svg>
            </button>
        </header>

        <!-- Dashboard Content -->
        <section class="content">
            <div class="welcome">
                <h1>Welcome Back!</h1>
                <p>Here's an overview of your dashboard.</p>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="card-title">Total Users</div>
                    <div class="card-value">1,248</div>
                </div>

                <div class="card">
                    <div class="card-title">Projects</div>
                    <div class="card-value">36</div>
                </div>

                <div class="card">
                    <div class="card-title">Reports</div>
                    <div class="card-value">184</div>
                </div>
            </div>
        </section>

    </main>
</div>

<script>
    document.getElementById("logoutBtn").addEventListener("click", function () {
        // Replace this with your logout endpoint.
        // Example:
        // window.location.href = "/logout";

        if (confirm("Are you sure you want to logout?")) {
            window.location.href = "/logout";
        }
    });

    // Highlight active navigation item.
    document.querySelectorAll(".nav-menu a").forEach(function (link) {
        link.addEventListener("click", function (event) {
            event.preventDefault();

            document.querySelectorAll(".nav-menu a").forEach(function (item) {
                item.classList.remove("active");
            });

            this.classList.add("active");
        });
    });
</script>

</body>
</html>