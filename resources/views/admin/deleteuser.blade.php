<!-- resources/views/admin/deleteuser.blade.php -->
<div>
<h1>Delete User: {{ $user->name }}</h1>

<p>Are you sure you want to delete this user?</p>

<form action="{{ route('user.delete', $user) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Delete User</button>
    <a href="{{ route('admin.userslist') }}" class="btn btn-secondary">Cancel</a>
   
</form>
</div>