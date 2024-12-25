<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>login</h1>
    <form action="{{ route('productorder') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" name="description" id="name" required>
        </div>

        <div>
            <label for="descr">Password:</label>
            <input type="text" name="quantity" id="password" required>
        </div>
            <label for="image">Name:</label>
            <input type="text" name="imgpath" id="name" required>
        </div>
        </div>
            <label for="image">Name:</label>
            <input type="text" name="phone" id="name" required>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>