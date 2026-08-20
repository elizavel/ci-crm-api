<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging You Out</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #111827;
        }

        .logout-card {
            width: 100%;
            max-width: 420px;
            padding: 40px 32px;
            text-align: center;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .spinner {
            width: 42px;
            height: 42px;
            margin: 0 auto 24px;
            border: 4px solid #e5e7eb;
            border-top-color: #111827;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        h1 {
            margin: 0 0 12px;
            font-size: 24px;
        }

        p {
            margin: 0;
            color: #6b7280;
            line-height: 1.6;
        }

        .countdown {
            margin-top: 20px;
            font-size: 14px;
            color: #9ca3af;
        }
    </style>
</head>
<body>

<div class="logout-card">
    <div class="spinner"></div>

    <h1>Logging you out...</h1>

    <p>
        Clearing cache and cookies.<br>
        Please wait while we securely log you out.
    </p>

    <div class="countdown">
        Redirecting to home page in <strong id="countdown">3</strong> seconds...
    </div>
</div>

<script>
    /*
     * IMPORTANT:
     * JavaScript running in a browser cannot reliably clear ALL browser
     * cache and cookies. It can clear cookies belonging to the current
     * website/domain and local browser storage.
     *
     * Your server should also invalidate the user's session/token.
     */

    function clearCookies() {
        const cookies = document.cookie.split(";");

        cookies.forEach(function(cookie) {
            const eqPos = cookie.indexOf("=");
            const name = eqPos > -1
                ? cookie.substring(0, eqPos).trim()
                : cookie.trim();

            // Current path
            document.cookie =
                name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";

            // Root path
            document.cookie =
                name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/;";
        });
    }

    function clearStorage() {
        try {
            localStorage.clear();
        } catch (e) {
            console.warn("Unable to clear localStorage:", e);
        }

        try {
            sessionStorage.clear();
        } catch (e) {
            console.warn("Unable to clear sessionStorage:", e);
        }
    }

    function logout() {
        // Clear client-side storage and accessible cookies.
        clearCookies();
        clearStorage();

        // IMPORTANT:
        // If your application uses a server-side session, JWT, or
        // authentication API, call your logout endpoint here.
        //
        // Example:
        // fetch("/api/logout", {
        //     method: "POST",
        //     credentials: "include"
        // });

        let seconds = 3;
        const countdown = document.getElementById("countdown");

        const timer = setInterval(function() {
            seconds--;
            countdown.textContent = seconds;

            if (seconds <= 0) {
                clearInterval(timer);

                // Change this to your actual home page.
                window.location.href = "/";
            }
        }, 1000);
    }

    logout();
</script>

</body>
</html>