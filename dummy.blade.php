<style>
/* Form container styling */
form {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
}

/* Label styling */
form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

/* Input field styling */
form input[type="text"], form textarea, form input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
}

/* Textarea styling */
form textarea {
    height: 150px;
    resize: vertical;  /* Allow users to resize vertically */
}

/* Submit button styling */
form button {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #28a745;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #218838;
}
</style>

<form action="{{ url('update/' . $image->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $image->title }}" required>
    </div>

    <div>
        <label for="content">Content:</label>
        <textarea name="content" required>{{ $image->content }}</textarea>
    </div>

    <div>
        <label for="image">Change Image (optional):</label>
        <input type="file" name="image">
    </div>

    <button type="submit">Update</button>
</form>
