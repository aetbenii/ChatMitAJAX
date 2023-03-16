<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="ajax.js"></script>
    <title>Chat</title>
</head>
<body>
    <div id="chatBox" style="width: 300px; height: 400px; padding: 0.1rem 0.5rem 0rem 0.5rem; background-color: beige;">
    
    </div>
    <input type="text" id="username" name="username" placeholder="username" required></br>
    <textarea id="text" name="text" placeholder="Chatte" required></textarea>
    <button onclick="sende()">Senden</button>
    <!--
        <button onclick="getChats()">GET</button>
    -->
</body>
</html>