<?php
/** @var Task $task ... */
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">
    <style>
        .sign-in-form {
            margin: auto;
        }
        .task {
            margin: auto;
            display: flex;
            gap: 10px;
            justify-content: space-between;
        }
        .w-75 {
            height: 100%;
            width: 30%;
        }
        a {
            color: #ffffff;
            text-decoration: none;
            margin-top: 4px;
        }
        .col-md-5 {
            width: auto;
        }
        .mt-1 {
            margin-top: 1rem !important;

        }
    .btn{
        width: 30% !important;
    }
    h3 {
        margin-bottom: 0;
        margin-top: 1rem !important;
    }

    </style>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
                <div class="task">
                    <h3>Список задач</h3>
                <div class="w-75 btn btn-lg btn-primary mt-1">
                    <a href="/?action=logout">Выход</a>
                </div>
                </div>


                <div class="task">
                <label for="task" class="visually-hidden">Задача</label>
                <input type="text" id="task" name="task" class="form-control mt-3" placeholder="Задача" required="" autofocus="">
                <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Добавить</button>
            </form>


        </div>
<?php
//$j = [
//        12, 43, 123, 534, 12, 43, 12
//];
//foreach ($j as $key => $value): {
//    echo '<div>';
//    echo $[$key];
//    echo '</div>';
//}
//    ?>


    </div>
</body>