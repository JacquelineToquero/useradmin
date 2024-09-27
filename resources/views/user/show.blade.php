
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">User Details</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email verified</label>
            <input type="text" name="email_verified_at" class="form-control" placeholder="" value="{{ $user->email_verified_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Password</label>
            <textarea class="form-control" name="password" placeholder="password" readonly>{{ $user->password }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $user->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $user->updated_at }}" readonly>
        </div>
    </div>

    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
}

h1 {
    margin-bottom: 20px;
    color: #007bff;
}

hr {
    margin-bottom: 20px;
    border: 1px solid #007bff;
}

.row {
    margin-bottom: 15px;
}

.form-label {
    font-weight: bold;
}

.form-control {
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    padding: 10px;
    background-color: #ffffff;
    transition: border-color 0.2s ease-in-out;
}

.form-control:focus {
    border-color: #80bdff;
    outline: none;
}

.col {
    display: flex;
    flex-direction: column;
}

.mb-3 {
    margin-bottom: 1rem;
}

    </style>