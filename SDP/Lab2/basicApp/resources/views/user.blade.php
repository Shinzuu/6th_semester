<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
</head>
<body>
    <H1>User Data</H1>
    <h2>User ID: {{$id}}</h2>
    @if ($name == !null)
        <h2>User Name: {{$name}}</h2>    
    @else
        <h2>User Name: No User Name Found</h2>
    @endif
    
</body>
</html>