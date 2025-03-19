<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Nuovo Messaggio dal Form di Contatto</title>
</head>

<body>
    <h1>Hai ricevuto un nuovo messaggio!</h1>
    <p><strong>Nome:</strong> {{ $user_data['name'] }}</p>
    <p><strong>Email:</strong> {{ $user_data['email'] }}</p>
    <p><strong>Messaggio:</strong> {{ $user_data['user_message'] }}</p>
</body>

</html>