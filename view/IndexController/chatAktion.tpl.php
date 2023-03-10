<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>
<body>
    
    <button onclick="test2()">POST</button>
    <button onclick="test()">GET</button>

    <script>
            let username = "benjamin";
            let chat = "halsdf";
        let chats;

        // function test() {
        //     const xhttp = new XMLHttpRequest();
        //     xhttp.onload = function() {
        //         //document.getElementById("demo").innerHTML = this.responseText;
        //         console.log(this.responseText);
        //     }
        //     xhttp.open("GET","AjaxController.php?data=187", true);
        //     xhttp.send();
        // }
        //setInterval(test, 1300);
        function test(){
            fetch('AjaxController.php?data=notempty')
            .then(response => response.json())
            .then(data => {
                chats = data;
                console.log('Chats: ', data);
            })
        }


        function test2() {
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
            xhttp.send("name="+username+"&text="+chat+"&datum="+Date.now());
        }
    </script>
</body>
</html>