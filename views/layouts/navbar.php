<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/users">Users</a>
                <?php if (isset($_SESSION['user_name'])) : ?>
                    <!-- Show Logout link when logged in -->
                    <a class="nav-link" href="/users/logout">Logout</a>
                <?php else : ?>
                <!-- Show Login link when not logged in -->
                <a class="nav-link" href="/users/login">Login</a>
                <?php endif; ?>
            </div>
            <div class="navbar-nav ms-auto">
                <?php session_start(); // Ensure session is active ?>
                <?php if (isset($_SESSION['user_role'])) : ?>
                    <span class="navbar-text text-white">
                        <?= ucfirst(htmlspecialchars($_SESSION['user_role'])) ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>