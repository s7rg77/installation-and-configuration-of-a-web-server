<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>installation and configuration of a web server</title>
    <style>
        html,
        body {
            margin: 0px;
            padding: 0px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        body {
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

        header {
            margin-top: 10px;
            margin-right: 10px;
            display: flex;
            justify-content: flex-end;
        }

        main {
            margin-bottom: 10px;
            flex: 1;
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
            border: none;
            background-color: #006400;
            color: #00FF00;
            cursor: pointer;
        }

        footer {
            width: 100%;
            background-color: #006400;
            color: #00FF00;
            text-align: center;
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
    <header>
        <button class="doc" onclick="goDoc()">doc</button>
        <button class="git" onclick="goGit()">git</button>
        <button class="home" onclick="goHome()">back</button>
    </header>

    <main>
        <h1>installation and configuration of a web server</h1>
        <h2>sergio lópez</h2>

        <?php
            echo "<p>Servidor: " . $_SERVER["SERVER_SOFTWARE"] . "</p>";
            echo "<p>Raíz: " . $_SERVER["DOCUMENT_ROOT"] . "</p>";
        ?>
    </main>

    <footer>
        <h3>desarrollo web entorno servidor</h3>
    </footer>

</body>

</html>