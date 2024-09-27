

@section('title', 'Home Product')

@section('contents')
    <div class="header-container">
        <h1 class="header-title">Users List</h1>
        <a href="{{ route('register') }}" class="add-product-btn">Add a User</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert success-alert" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="custom-table">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>email_verified_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($users->count() > 0)
                @foreach($users as $rs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rs->name }}</td>
                        <td>{{ $rs->email }}</td>
                        <td>{{ $rs->password }}</td>
                        <td>{{ $rs->email_verified_at }}</td>
                        <td>
                            <div class="action-btn-group">
                                <a href="{{ route('user.show', $rs->id) }}" class="btn secondary-btn">Detail</a>
                                <a href="{{ route('user.edit', $rs->id)}}" class="btn warning-btn">Edit</a>
                                <form action="{{ route('user.destroy', $rs->id) }}" method="POST" class="delete-form" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn danger-btn">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="no-product-msg">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>


<style>
/* General Reset */
* {
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif; /* Clean, modern font */
    margin: 0;
    padding: 0;
    background-color: #f0f4f8; /* Soft light background */
}

/* Header Styling */
.header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 2rem; /* Increased margin for more space */
    padding: 1rem; /* Padding around header */
    background-color: #2e3035; /* Deep blue background */
    color: white; /* White text for contrast */
}

.header-title {
    margin: 0;
    font-size: 2rem; /* Larger font for title */
}

/* Button Styling */
.add-product-btn {
    background-color: #3b82f6; /* Bright blue */
    color: white;
    padding: 0.75rem 1.5rem; /* Increased padding */
    border-radius: 0.5rem; /* Rounded corners */
    transition: background-color 0.3s, transform 0.2s; /* Smooth transitions */
    text-align: center;
    font-weight: bold; /* Bold text */
}

.add-product-btn:hover {
    background-color: #2563eb; /* Darker blue on hover */
    transform: scale(1.05); /* Slight grow effect */
}

/* Alert Styling */
.success-alert {
    background-color: #d1fae5; /* Soft green background */
    color: #065f46; /* Dark green text */
    padding: 0.75rem;
    margin-bottom: 1rem;
    border-radius: 0.5rem; /* Rounded corners */
}

/* Table Styling */
.custom-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
}

.custom-table th, .custom-table td {
    border: 1px solid #e2e8f0; /* Light border */
    padding: 1rem; 
    text-align: left;
}

.custom-table thead th {
    background-color: #2c2e35; /* Dark blue */
    color: white;
    font-weight: bold; /* Bold text */
}

.custom-table tbody tr:nth-child(even) {
    background-color: #f1f5f9; /* Light gray for even rows */
}

.custom-table tbody tr:hover {
    background-color: #e2e8f0; /* Light gray hover effect */
}

/* Action Buttons Styling */
.action-btn-group {
    display: flex;
    gap: 0.75rem; /* Increased spacing */
}

.btn {
    padding: 0.5rem 1rem; 
    text-decoration: none;
    border: none;
    border-radius: 0.5rem; /* Rounded corners */
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s; /* Smooth transitions */
}

.secondary-btn {
    background-color: #4b5563; /* Gray */
    color: white;
}

.secondary-btn:hover {
    background-color: #374151; /* Darker gray on hover */
}

.warning-btn {
    background-color: #fbbf24; /* Yellow */
    color: black;
}

.warning-btn:hover {
    background-color: #f59e0b; /* Darker yellow on hover */
}

.danger-btn {
    background-color: #ef4444; /* Red */
    color: white;
}

.danger-btn:hover {
    background-color: #dc2626; /* Darker red on hover */
}

/* Empty Table Row Styling */
.no-product-msg {
    text-align: center;
    padding: 1rem; 
    color: #6b7280; /* Gray for no product message */
    font-size: 1rem; 
}
