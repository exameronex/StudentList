<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список студентов</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="container">
    <main>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Пол</th>
                <th scope="col">Номер группы</th>
                <th scope="col">Почта</th>
                <th scope="col">Баллы</th>
                <th scope="col">Год рождения</th>
                <th scope="col">Локация</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $arrStud->fetch_array()) : ?>
                    <tr>                    
                        <th scope="row"><?=$row["id_student"];?></th>
                        <td><?=$row["first_name"];?></td>
                        <td><?=$row["last_name"];?></td>
                        <td><?=$row["gender"];?></td>
                        <td><?=$row["group_number"];?></td>
                        <td><?=$row["email"];?></td>
                        <td><?=$row["ege_points"];?></td>
                        <td><?=$row["year_birth"];?></td>
                        <td><?=$row["is_local"];?></td>                    
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>