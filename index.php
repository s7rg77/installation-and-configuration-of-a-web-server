<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desarrollo web entorno servidor</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-color: black;
            color: #00FF00;
            font-family: monospace;
            font-size: 16px;
        }

        h1,
        h2 {
            margin-left: 10px;
            color: #FFFFFF;
            font-weight: normal;
        }

        #head {
            margin-top: 10px;
            margin-right: 10px;
            display: flex;
            justify-content: flex-end;
        }

        .home,
        .doc,
        .git {
            width: 100px;
        }

        p {
            margin-left: 10px;
        }

        button {
            margin-left: 10px;
            padding: 5px;
            border: 1px solid #006400;
            background-color: #006400;
            color: #00FF00;
            cursor: pointer;
        }

        footer {
            background-color: #006400;
            color: #00FF00;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <script>
        function goHome() {

            window.location.href = '/';

        }

        function goGit() {

            window.location.href = 'https://github.com/s7rg77/installation-and-configuration-of-a-web-server';

        }

        function goDoc() {

            window.location.href = '/doc';
            
        }
    </script>
</head>

<body>
    <div id="head">
        <button class="doc" onclick="goDoc()">doc</button>
        <button class="git" onclick="goGit()">git</button>
        <button class="home" onclick="goHome()">back</button>
    </div>
    <h1>installation and configuration of a web server</h1>
    <h2>sergio lópez</h2>
    <?php
    echo "<p>Servidor: " . $_SERVER["SERVER_SOFTWARE"] . "</p>";
    echo "<p>Raíz: " . $_SERVER["DOCUMENT_ROOT"] . "</p>";
    ?>
</body>

<footer>
    <h3>desarrollo web entorno servidor</h3>
</footer>

</html>