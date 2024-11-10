<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMM6w3TE3LgSh3gxZa6e4YZbk0m5z1vG0Q5c5Lf" crossorigin="anonymous">
</head>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f0f2f5;
}

.login-container {
    width: 350px;
    padding: 40px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.login-container h2 {
    font-size: 1.8rem;
    color: #34495e;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 20px;
    text-align: left;
}

.input-group label {
    display: block;
    font-size: 0.9rem;
    color: #34495e;
    margin-bottom: 5px;
}

.input-group input[type="email"],
.input-group input[type="password"] {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
    transition: border-color 0.3s;
}

.input-group input[type="email"]:focus,
.input-group input[type="password"]:focus {
    border-color: #3498db;
}

.remember-me {
    display: flex;
    align-items: center;
    font-size: 0.9rem;
    color: #34495e;
    margin-bottom: 20px;
}

.remember-me input {
    margin-right: 10px;
}

.login-btn {
    width: 100%;
    padding: 12px;
    font-size: 1rem;
    color: #ffffff;
    background-color: #3498db;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 10px;
}

.login-btn:hover {
    background-color: #2980b9;
}

.footer-links {
    margin-top: 20px;
    font-size: 0.9rem;
}

.footer-links a {
    color: #3498db;
    text-decoration: none;
    margin: 0 10px;
    transition: color 0.3s;
}

.footer-links a:hover {
    color: #2980b9;
}


.error-message {
    color: #e74c3c;
    font-size: 0.85rem;
    margin-top: 5px;
}
</style>

<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required value="{{ old('email') }}">
            <!-- Error message for email -->
            @error('email')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <!-- Error message for password -->
            @error('password')
            <div class="error-message">{{ $password }}</div>
            @enderror
        </div>
        <div class="remember-me">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember Me</label>
        </div>
        <button type="submit" class="login-btn">Login</button>
        <div class="footer-links">
            <a href="#"><i class="fas fa-unlock-alt"></i> Forgot Password?</a>
        </div>
    </form>
</div>

</body>
</html>
