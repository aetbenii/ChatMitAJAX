<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/IndexController/chatAktion.css">
    <script src="ajax.js"></script>
    <title>Chat</title>
</head>

<body>
    <div id="barFixed">
        <div id="title">Chat</div>
        <div id="mode"></div>
    </div>
    <div id="chatBox"></div>
    <input type="text" id="username" name="username" placeholder="Benutzername" required> </br>
    <textarea id="text" name="text" placeholder="Nachricht eingeben" required> </textarea>
    <button onclick="sende()">Senden</button>
</body>

</html>