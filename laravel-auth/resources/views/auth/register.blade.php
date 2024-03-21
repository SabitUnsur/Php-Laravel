<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
</head>

<body>
    @if(session->has('register') && session('register') == 'fail')
        <p>Failed.</p>
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required>

        <button type="submit">Register</button>
    </form>
</body>

</html>
