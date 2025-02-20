<?php
session_start(); 

// Check if the user is logged in
if (isset($_SESSION['user_name'])) :
?>
    <div class="container">
        <h1>Welcome to PHP</h1>
    </div>

<?php else: ?>
    <div class="container">
        <h1>Login</h1>
        <form action="/users/authenticate" method="post">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="/users" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
<?php endif; ?>


