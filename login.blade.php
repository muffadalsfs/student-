<div style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center;">login page</h1>
    <form action="list" method="post">
        @csrf  
        <div style="margin-bottom: 15px;">
            <input type="text" name='user' placeholder='Enter username' style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            <span style="color: red;">@error('username'){{ $message }}@enderror</span>
        </div>
        
        <div style="margin-bottom: 15px;">
            <input type="password" name='password' placeholder='Enter password' style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            <span style="color: red;">@error('password'){{ $message }}@enderror</span>
        </div>

        @if ($errors->has('login_error'))
            <div style="color: red; text-align: center; margin-bottom: 15px;">{{ $errors->first('login_error') }}</div>
        @endif

        <button type="submit" style="width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Submit</button>
    </form>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>
