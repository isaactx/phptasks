<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Insert Task</h1>
    <a href=""><p>Listar tarefas</p></a>
    <form method="post" action="main.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="details">Details:</label>
        <input type="text" name="details" id="details" required><br>

        <input type="submit" value="Enviar" name="btnSubmitInsertTaskForm">
    </form>
</div>

<style>
body{
color: white;
background-color: black;
}

div {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: purple;
    padding: 20px;
    border-radius: 50px;
    border-color: cyan;
    text-align: center;
}

p {
    color: white;
}

</style>
</body>
</html>