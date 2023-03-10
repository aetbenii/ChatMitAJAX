<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div id="demo">
        <h2>The XMLHttpRequest Object</h2>
        <button type="button" onclick="test2()">Change Content</button>
    </div>
        
    <script> 
        function testfunction() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        xhttp.open("GET","test2.php?data=187", true);
        xhttp.send();
        }
        
        let username = "kevin";
        let chat = "198ewr";
        
        // const url = "test2.php";
        //     const xhr = new XMLHttpRequest();
        // function test2(){
            
        //     xhr.open('POST', url);
        //     xhr.setRequestHeader('Content-type', 'application/json');
        //     xhr.addEventListener('load', function() {
        //         if(xhr.status === 201 && xhr.readyState === 4){
        //             const res = JSON.parse(xhr.responseText);
        //             console.log(xhr.data[0].id, xhr.data[0].email);
                    
        //         } else {
        //             throw new Error("Bad request");
        //         }
        //     });
        //     xhr.send(JSON.stringify(postObj));
        // }
        
        
        function test2() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                if(xhttp.status === 200){
                    console.log("Post successfully created!");
                    //document.getElementById("demo").innerHTML = this.responseText;
                    console.log(this.responseText);
                }
            }
            xhttp.open("POST","test2.php");
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send("name="+username+"&text="+chat+"&datum="+Date.now());
        }    
        
        // }
        // fetch("test2.php", {
        //     method: 'post',
        //     headers: {
        //         'Accept': 'application/json',
        //         'Content-Type': 'application/json'
        //     },
        //     body: JSON.stringify({
        //         username:"benny",
        //         chat:"hahsdhf"
        //     })
        // })
        // .then(res => res.json())
        // .then(data => console.log(data));
    </script>
</body>
</html>