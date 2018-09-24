<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br>
    <h1>Send A Mail </h1>
    <form action="send" method="post">
        {{csrf_field()}}
        To: <input type="text" name="to">
        Message: <textarea type="text" name="message" cols="30" rows="10"></textarea>
        <input type="submit" value="Send">
</body>
</html>