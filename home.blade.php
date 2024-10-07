<style>
/* Container holding the cards, using flexbox */
.image-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

/* Card styling */
.card {
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
    margin: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 300px;
}

/* Image styling inside the card */
.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 5px;
}

/* Title of the card */
.card-title {
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
}

/* Content/description of the card */
.card-content {
    font-size: 14px;
    color: #666;
    margin-top: 5px;
}

/* Button styling for Edit, Delete, and Details */
.card-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

/* Individual button styling */
.card-buttons a, .card-buttons form button {
    padding: 8px 12px;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    display: inline-block;
}

/* Edit button */
.edit-button {
    background-color: #007bff;
}
.edit-button:hover {
    background-color: #0056b3;
}

/* Delete button */
.delete-button {
    background-color: #ff4d4d;
    border: none;
    cursor: pointer;
}
.delete-button:hover {
    background-color: #cc0000;
}

/* Details button */
.details-button {
    background-color: #28a745;
}
.details-button:hover {
    background-color: #218838;
}

/* Home page and welcome messages */
.home-header {
    text-align: center;
    color: #333;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}
.welcome-message {
    color: green;
    text-align: center;
    font-size: 20px;
    margin-bottom: 20px;
}

/* Login and Create Blog links */
.login-link, .create-blog-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin: 10px;
    text-align: center;
}
.login-link:hover, .create-blog-link:hover {
    background-color: #0056b3;
}

/* Header and Footer Styling */
.header, .footer {
    text-align: center;
    background-color: #f8f9fa;
    padding: 20px 0;
    font-size: 18px;
    color: #333;
    border-top: 1px solid #ddd;
}

/* Footer specific styling */
.footer {
    border-top: 2px solid #ddd;
    margin-top: 20px;
}
</style>

<!-- Header Section -->
<header class="header">
    <h1>Welcome to the Student Blog Page</h1>
</header>

<!-- Main Content -->
<h1 class="home-header">Home Page</h1>

@if(session('user'))
    <h1 class="welcome-message">Welcome, {{ session('user') }}</h1>
@else
    <h1 class="welcome-message">You are not logged in</h1>
@endif

<a href="login" class="login-link">Login</a>
<a href="blogfrom" class="create-blog-link">Create New Blog</a>

<div class="image-gallery">
    @foreach($imagdata as $img)
        <div class="card">
            <!-- Title -->
            <div class="card-title">{{ $img->title }}</div>

            <!-- Content -->
            <div class="card-content">{{ $img->content }}</div>

            <!-- Image -->
            <img src="{{ url('storage/public/' . $img->path) }}" alt="Image not found">

            <!-- Buttons (Edit, Delete, Details) -->
            <div class="card-buttons">
                <a href="{{ url('edit/' . $img->id) }}" class="edit-button">Edit</a>

                <!-- Delete Button -->
                <form action="{{ url('delete/' . $img->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Delete</button>
                </form>

                <!-- Details Button -->
                <a href="{{ url('details/' . $img->id) }}" class="details-button">Details</a>
            </div>
        </div>
    @endforeach
</div>

<!-- Footer Section -->
<footer class="footer">
    <p>&copy; 2024 Student Blog - All rights reserved</p>
</footer>
