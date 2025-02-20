<div class="container">
<form action="/users/update/<?= $user['id'] ?>" method="post">
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?= $user['name'] ?>">
  </div>
  <div class="mb-3 mt-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= $user['email'] ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="role" class="form-label">Role:</label>
      <select name="role" id="role" class="form-control">
        <option value="" disabled selected>Select Role</option>
        <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
        <option value="user" <?= $user['role'] == 'user' ? 'selected' : '' ?>>User</option>
        <option value="guest" <?= $user['role'] == 'guest' ? 'selected' : '' ?>>Guest</option>
      </select>
    </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
<a href="/users" class="btn btn-secondary">Cancel</a>
</form>
</div>