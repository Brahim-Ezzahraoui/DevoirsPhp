<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<style type="text/css">
	label {
    display: block;
    font: .9rem 'Fira Sans', sans-serif;
}

input[type='submit'],
label {
    margin-top: 1rem;
}
</style>
<body>
<form action="authentification.php" method="post">
<div>
    <label for="username">Email:</label>
    <input type="text" id="username" name="mail">
</div>

<div>
    <label for="pass">Password (8 characters minimum):</label>
    <input type="password" id="pass" name="password" minlength="8" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required>
</div>

<input type="submit" value="Sign in" name="Login">
</form>
</body>
</html>