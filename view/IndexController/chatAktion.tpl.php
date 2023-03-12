<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script>
        getChats();

        async function getChats(){
            let chats;
            fetch('AjaxController.php?data=notempty')
            .then(response => response.json())
            .then(data => {
                chats = data;
                console.log('Chats: ', data);
                createChats(data);
            });
        }
        
        function createChats(chats){
            let htmlChats = '';
            chats.forEach(chat => {
                htmlChats += "<p>"+chat.name+": "+chat.text+"</p>";
            });

            document.getElementById("chatBox").innerHTML = htmlChats;
        }

        // function test() {
        //     const xhttp = new XMLHttpRequest();
        //     xhttp.onload = function() {
        //         //document.getElementById("demo").innerHTML = this.responseText;
        //         console.log(this.responseText);
        //     }
        //     xhttp.open("GET","AjaxController.php?data=187", true);
        //     xhttp.send();
        // }
        setInterval(getChats, 400);
        

        function sende() {
            let username = document.getElementById("username").value;
            let chat = document.getElementById("text").value;
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                if(xhttp.status === 200){
                    console.log("Post successfully created!");
                    //document.getElementById("demo").innerHTML = this.responseText;
                    console.log(this.responseText);
                }
            }
            xhttp.open("POST","AjaxController.php");
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send("name="+username+"&text="+chat);
            //getChats();
        }
    </script>
</body>
</html>