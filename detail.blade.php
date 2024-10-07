<style>
    .details-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: center;
    }

    .details-container h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        margin: 10px auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 100%;  /* Full width of the container */
        max-width: 600px;  /* Restrict max width */
    }

    .card img {
        width: 100%;  /* Image will always be 100% of the card's width */
    height: 75%;  /* Height will adjust based on the image's aspect ratio */
    object-fit: contain;  /* Ensures the image fits without cutting off */
    border-radius: 5px;
    }

    .details-content {
        font-size: 18px;
        margin-top: 20px;
    }

    .back-button {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    .back-button:hover {
        background-color: #0056b3;
    }

</style>

<div class="details-container">
    <h1>{{ $img->title }}</h1>

    <!-- Card for the image -->
    <div class="card">
        <!-- Display the image -->
        <img src="{{ url('storage/public/' . $img->path) }}" alt="Image not found">

        <!-- Display the content -->
        <div class="details-content">
            <p>{{ $img->content }}</p>
        </div>
    </div>

    <!-- Back to home button -->
    <a href="{{ url('list') }}" class="back-button">Back to Home</a>
</div>
