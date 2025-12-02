<!DOCTYPE html>
<html>
<head>
    <title>Admin Access</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }
        .box {
            width: 350px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        input[type=password] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 15px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="box">
    <h3>Enter Admin Password</h3>

    @if($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('admin.access.submit') }}">
        @csrf
        <input type="password" name="password" placeholder="Admin Password" required>
        <button type="submit">Enter</button>
    </form>
</div>

</body>
</html>