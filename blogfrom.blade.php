<div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center;">Create a New Blog</h1>
    <form action="blog" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="title" style="font-weight: bold;">Title</label>
            <input type="text" name="title" id="title" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            <span style="color: red;">@error('title'){{ $message }}@enderror</span>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="content" style="font-weight: bold;">Content</label>
            <textarea name="content" id="content" rows="5" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
            <span style="color: red;">@error('content'){{ $message }}@enderror</span>
        </div>


        <div style="margin-bottom: 15px;">
            <label for="image" style="font-weight: bold;">Image (optional)</label>
            <input type="file" name="image" id="image" accept="image/*" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            <span style="color: red;">@error('image'){{ $message }}@enderror</span>
        </div>

        <button type="submit" style="width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Submit</button>
    </form>
</div>