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
            <div id="modeSwitch"></div>
        </div>

        <div id="chatBox"></div>
        <div id="inputField">
            <input type="text" id="username" name="username" placeholder="Benutzername" required>
            <div id="inputFieldMsg">
                <input type="text" id="text" name="text" placeholder="Nachricht eingeben" required>
                <button id="sendButton" onclick="sende()">Senden</button>
            </div>
        </div>
    </body>
</html>