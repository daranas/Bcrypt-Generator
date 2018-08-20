<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bcrypt Generator - Online Bcrypt Hash Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bcrypt Generator is a online tool to check Bcrypt hashes.">
    <style>
        *, ::after, ::before {
            box-sizing: border-box;
        }
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            font-weight: 100;
            font-family: 'Helvetica Neue';
        }
        .container {
            width: 600px;
            margin: 10% auto;
            text-align: center;
        }
        .title {
            font-size: 46px;
            font-weight: 100;
        }
        form {
            padding-bottom: 80px;
        }
        input {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            height: calc(2.25rem + 2px);
            padding: .1rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        input:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }
        button {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            display: inline-block;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .2rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .15rem;
            cursor: pointer;
        }
        .text-left {
            padding-top: 3px;
            padding-bottom: 5px;
            margin-bottom: 15px;
            text-align:left!important;
            border-top: 1px dotted #ced4da;
            border-bottom: 1px dotted #ced4da;
        }
        .text-left p {
            color: #444444;
            font-size: 14px;
            font-weight: 400;
        }
        .text-left span {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Bcrypt Generator</h1>
        <?php
            if (isset($_POST['submit'])) {
                echo "<div class='text-left'>";
                echo "<p>Your Hash: <span>".password_hash($_POST['input'], PASSWORD_DEFAULT)."</span></p>";
                echo "<p>Your String: ".($_POST['input'])."</p>";
                echo "</div>";
            }
        ?>
        <form method="post">
            <input type="text" name="input" placeholder="String" required>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>