<div class="container">
    <form action="/users/store" method="post">
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>

        <div class="mb-3 mt-3">
            <label for="role" class="form-label">Role:</label>
            <select name="role" id="role" class="form-control">
                <option value="" disabled selected>Select Role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
                <option value="guest">Guest</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/users" class="btn btn-secondary">Cancel</a>
    </form>
</div>