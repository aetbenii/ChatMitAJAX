setInterval(getChats, 150);
        //getChats();

        function getChats(){
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