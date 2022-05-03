<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/styles.css">
</head>

<body>

</body>

</html>

<h3 class="headerUser">Cadastro de Motoristas de: <?php echo $_SESSION['username'] ?></h3>

<div class="navigationMenu">
    <ul class="ulNavigation">
        <li class="liNavigation"><a href="/?f=mainHome">Home</a></li>
        <li class="liNavigation"><a href="/?f=userHomePage">Usuários</a></li>
        <li class="liNavigation"><a href="/?f=carsHomePage">Veículos</a></li>
        <li class="liNavigation"><a href="/?f=driversHomePage">Motoristas</a></li>
        <li class="liNavigation"><a href="/?f=logout">Logout</a></li>
    </ul>
</div>
<div class="sideBar">
    <ul class="sideUl">
        <li class="sideLi"><a href="/?f=driversHomePage">Listar</a></li>
        <li class="sideLi"><a href="/?f=driversCreatePage">Criar</a></li>
        <li class="sideLi"><a href="/?f=driversDetailsPage">Ver detalhes</a></li>

    </ul>

</div>

<div class="divMiddle">
    <form action="/?f=createDriver" method="POST">
        <div class="middlecontroller">
            <h2>Cadastro de novo Motorista:</h2>

            <div><label>Nome do novo Motorista:</label></div>
            <div><input type="text" class="inputMiddle" name="username"></div>

            <div><label>Idade do Motorista:</label></div>
            <div><input type="text" class="inputMiddle" name="age"></label></div>

            <div><label>Etnia do Motorista:</label></div>
            <div><input type="text" class="inputMiddle" name="type"></label></div>

            <div><label>CNH do Motorista:</label></div>
            <div><input type="text" class="inputMiddle" name="cnh"></label></div>

            <div><label>Sexo do Motorista:</label></div>
            <div><input type="text" class="inputMiddle" name="sex"></label></div>

            <div><input type="submit" class="buttonEntrar" value="Cadastrar"></div>
        </div>
    </form>
</div>
           