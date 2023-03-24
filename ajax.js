setInterval(getChats, 1000);

        function getChats(){
            let chats;
            fetch('index.php?controller=ajax&aktion=getChat')
            //fetch('index.php?controller')
            .then(response => response.json())
            .then(data => {
                chats = data;
                //console.log('Chats: ', data);
                createChats(data);
            });
        }
        
        function createChats(chats){
            let htmlChats = '';
            chats.forEach(chat => {
                htmlChats += "<p>"+chat.name+": "+chat.text.replace(/^\s+|\s+$/gm,'')+"<span>"+chat.datum+"</span></p>";
            });

            document.getElementById("chatBox").innerHTML = htmlChats;
        }


        function sende() {
            let username = document.getElementById("username").value;
            let chat = document.getElementById("text").value;
            //hier beginnt ajax.
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                if(xhttp.status === 200){
                    console.log("Post successfully created!");
                    //document.getElementById("demo").innerHTML = this.responseText;
                    console.log(this.responseText);
                }
            }
            xhttp.open("POST","index.php?controller=ajax&aktion=sendChat");
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send("name="+username+"&text="+chat);
        }