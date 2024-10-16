<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Todo App</title>
    <link rel="stylesheet" href="{{ asset('css/Welcome.css') }}">
</head>
<body>
    <section>
        <div class="container">
            <h1>Welcome to Priority PRO</h1>
            <p class="description">Stay organized and boost your productivity with our simple and effective todo app.</p>
            <div class="features">
                <div class="feature">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Create and manage tasks easily</span>
                </div>
                <div class="feature">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Set due dates and reminders</span>
                </div>
                <div class="feature">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    <span>Organize tasks with categories</span>
                </div>
            </div>
            <div class="button-container">
                <a href="{{ route('login') }}" class="login-button">
                    Login / Register
                </a>
            </div>
        </div>
        <div class="air air1"></div>
        <div class="air air2"></div>
        <div class="air air3"></div>
        <div class="air air4"></div>
    </section>
</body>
</html>
