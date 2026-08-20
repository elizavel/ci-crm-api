<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 32px;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin: 0 0 8px;
            text-align: center;
            font-size: 28px;
            color: #111827;
        }

        .subtitle {
            margin: 0 0 24px;
            text-align: center;
            color: #666;
        }

        label {
            display: block;
            margin: 14px 0 7px;
            font-weight: 600;
            color: #374151;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d5d9e2;
            border-radius: 8px;
            font-size: 15px;
        }

        input:focus {
            outline: none;
            border-color: #4285f4;
            box-shadow: 0 0 0 3px rgba(66, 133, 244, 0.12);
        }

        .login-btn {
            width: 100%;
            margin-top: 22px;
            padding: 13px;
            border: 0;
            border-radius: 8px;
            background: #111827;
            color: #ffffff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
        }

        .login-btn:hover {
            background: #1f2937;
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 24px 0;
            color: #888;
            font-size: 13px;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #e5e7eb;
        }

        .google-btn {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px;
            border: 1px solid #dadce0;
            border-radius: 8px;
            background: #ffffff;
            color: #3c4043;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
        }

        .google-btn:hover {
            background: #f8f9fa;
        }

        .google-icon {
            width: 20px;
            height: 20px;
        }

        .signup-link {
            margin-top: 22px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .signup-link a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h1>Welcome Back</h1>
    <p class="subtitle">Login to your account</p>

    <form id="loginForm">
        <label for="email">Email Address</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="you@example.com"
            autocomplete="email"
            required
        >

        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            autocomplete="current-password"
            required
        >

        <button type="submit" class="login-btn">
            Login
        </button>
    </form>

    <div class="divider">OR</div>

    <!--
        Google Login:
        Connect this button to your Google OAuth backend endpoint.
        Example:
        window.location.href = "/auth/google";
    -->
    <button type="button" class="google-btn" id="googleLoginBtn">
        <svg class="google-icon" viewBox="0 0 24 24" aria-hidden="true">
            <path fill="#4285F4" d="M21.35 12.23c0-.79-.07-1.55-.22-2.23H12v4.22h5.24a4.48 4.48 0 0 1-1.94 2.94v2.45h3.14c1.84-1.69 2.91-4.18 2.91-7.38z"/>
            <path fill="#34A853" d="M12 21.99c2.63 0 4.84-.87 6.45-2.38l-3.14-2.45c-.87.58-1.98.92-3.31.92-2.55 0-4.71-1.72-5.49-4.04H3.27v2.53A9.75 9.75 0 0 0 12 21.99z"/>
            <path fill="#FBBC05" d="M6.51 14.04a5.86 5.86 0 0 1 0-3.73V7.78H3.27a9.99 9.99 0 0 0 0 8.8l3.24-2.54z"/>
            <path fill="#EA4335" d="M12 6.27c1.43 0 2.71.49 3.72 1.46l2.79-2.79C16.84 3.25 14.63 2.01 12 2.01a9.75 9.75 0 0 0-8.73 5.77l3.24 2.53C7.29 7.99 9.45 6.27 12 6.27z"/>
        </svg>
        Continue with Google
    </button>

    <div class="signup-link">
        Don't have an account?
        <a href="/signup">Sign Up</a>
    </div>
</div>

<script>
    document.getElementById("loginForm").addEventListener("submit", function (event) {
        event.preventDefault();

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        // Send credentials to your backend/API.
        console.log("Login:", {
            email: email,
            password: password
        });

        window.location.href = "/dashboard";
    });

    document.getElementById("googleLoginBtn").addEventListener("click", function () {
        // Connect this to your Google OAuth backend.
        // Example:
        // window.location.href = "/auth/google";

        alert("Connect this button to your Google OAuth backend endpoint.");
    });
</script>

</body>
</html>