<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/eventOrganizer_reg.css">
    <title>Register as Event Organizer</title>
</head>
<body>
    <header>
        <h1>Register as Event Organizer</h1>
        <p>Join our platform to organize and manage events with ease.</p>
    </header>
    <main>
        <form action="../control/UserController.php" method="POST" class="form-container">
            <input type="hidden" name="action" value="register_event_organizer">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Create a password" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="specialization">Specialization:</label>
            <input type="text" id="specialization" name="specialization" placeholder="Enter your specialization" required>

            <button type="submit">Register</button>
        </form>
    </main>
</body>
</html>
