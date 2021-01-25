<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <link rel="stylesheet" href="./bootstrap.min.css">

    <script>
        function showSuggestion(str) {
           console.log('showSuggestion', str);

            if (str.length == 0) {
                document.getElementById('output').innerHTML = "";
            } else {
        
                console.log('Send request')
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log('response', this.responseText)
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }

                xmlHttp.open("GET", "suggest.php?q=" + str, true);
                xmlHttp.send();
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Search Users</h1>
        <form action="">
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestion: <span id="output" style="font-weight:bold"></span></p>

        <form action="
    "></form>
    </div>

</body>

</html>