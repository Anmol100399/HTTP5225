<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cards</title>
        <style>

            body {
                font-family: Arial, sans-serif;
                background-color: #444;
                width: 18rem;
            }
            li {
                background-color: grey;
                list-style: none;
                margin: 10px;
                padding: 10px;
                border-radius: 10px;
            }

        </style>
    </head>
    <body>

        <?php
        function getUsers() {
            $url = "https://jsonplaceholder.typicode.com/users";
            $data = file_get_contents($url);
            return json_decode($data, true);
        }

        $users = getUsers();

        for ($i = 0; $i < count($users); $i++) {
            echo "<li>
            <strong>Name:</strong> " . ($users[$i]['name']) . "<br>
            <strong>Email:</strong> " . ($users[$i]['email']) . "<br>
            <strong>Phone:</strong> " . ($users[$i]['phone']) . "<br>
            <strong>Website: </strong><a href='#" . ($users[$i]['website']) . "'>" . ($users[$i]['website']) . "</a><br>
            </li>";
        }
        ?>

    </body>
</html>