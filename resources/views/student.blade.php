<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>This is STudent Page</h1>

    @foreach ($students as $stu)
    {{$stu->name}}
    {{$stu->email}}
    {{$stu->city}}
    <br>
        
    @endforeach
    
</body>
</html>