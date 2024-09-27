
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit User </h1>
    <hr />
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email Verified</label>
                <input type="text" name="email_verified_at" class="form-control" placeholder="Email Verify" value="{{ $user->email_verified_at }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Password</label>
                <textarea class="form-control" name="password" placeholder="Password" >{{ $user->password }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>

    <style>
   /* General Reset */
* {
    box-sizing: border-box;
}

body {
    font-family: 'Helvetica Neue', sans-serif; /* Modern font */
    margin: 0;
    padding: 0;
    background-color: #e7f1ff; /* Soft light blue background */
}

/* Header Styling */
h1 {
    color: #2c3e50; /* Darker shade for better contrast */
    margin-bottom: 1rem; /* Space below header */
}

/* Form Control Styling */
.form-label {
    font-weight: 600; /* Semi-bold labels */
    color: #34495e; /* Muted color for labels */
}

.form-control {
    padding: 0.75rem; /* Ample padding */
    border: 1px solid #bdc3c7; /* Light gray border */
    border-radius: 0.5rem; /* Rounded corners */
    transition: border-color 0.3s, box-shadow 0.3s; /* Smooth transition */
}

.form-control:focus {
    border-color: #393a3b; /* Bright blue on focus */
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5); /* Glow effect */
    outline: none; /* Remove default outline */
}

/* Button Styling */
.btn {
    padding: 0.6rem 1.2rem; /* Standard padding */
    background-color: #1c1e1f; /* Primary blue */
    color: white;
    border: none;
    border-radius: 0.5rem; /* Rounded corners */
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s; /* Smooth transitions */
    font-weight: bold; /* Bold text */
}

.btn:hover {
    background-color: #1e2020; /* Darker blue on hover */
    transform: translateY(-2px); /* Slight lift effect */
}

/* Row Styling */
.row {
    margin-bottom: 1.5rem; /* Space between rows */
}

.d-grid {
    display: grid;
    gap: 1rem; /* Space for button */
}
