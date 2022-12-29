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
    <main class="row align-items-center" style="height:100vh;">
        <div class="col-6 mx-auto">
        <?php if ($formReg): ?>
        <h1>Форма регистрации</h1>
        <? else: ?>
        <h1>Форма редактирования</h1>
        <? endif; ?>
            <form action="/controller/controllerTable.php" method="post">
                <div class="mb-3">
                    <input class="form-control" name="name" placeholder="Имя" <?php if (!$formReg): ?>value=<?php echo $studById["first_name"] ?><? endif; ?>>						
                </div>
                <div class="mb-2">
                    <input class="form-control" name="lastName" placeholder="Фамилия" <?php if (!$formReg): ?>value=<?php echo $studById["last_name"] ?><? endif; ?>>						
                </div>
                <div class="mb-3">
                    <label><input type="radio" name="gender" <?php if (!$formReg && $studById["gender"] == 0): ?>checked<? endif; ?> value="0">Мужской</label>
                    <label><input type="radio" name="gender" <?php if (!$formReg && $studById["gender"] == 1): ?>checked<? endif; ?> value="1">Женский</label>							
                </div>
                <div class="mb-3">
                    <input class="form-control" name="numberGroup" placeholder="Номер группы" <?php if (!$formReg): ?>value=<?php echo $studById["group_number"] ?><? endif; ?>>			
                </div>
                <div class="mb-3">
                    <input class="form-control" type="email" name="email" placeholder="e-mail" <?php if (!$formReg): ?>value=<?php echo $studById["email"] ?><? endif; ?>>		
                </div>
                <div class="mb-3">
                    <input class="form-control" type="number" name="ege" min="0" max="500" placeholder="Суммарное число баллов на ЕГЭ" <?php if (!$formReg): ?>value=<?php echo $studById["ege_points"] ?><? endif; ?>>	
                </div>
                <div class="mb-2">
                    <input class="form-control" type="number" name="yearBirthday" min="1900" placeholder="Год рождения" <?php if (!$formReg): ?>value=<?php echo $studById["year_birth"] ?><? endif; ?>>
                </div>
                <div class="mb-3">
                    <label><input type="radio" name="isLocal" <?php if (!$formReg && $studById["is_local"] == 0): ?>checked<? endif; ?> value="0">Местный</label>
                    <label><input type="radio" name="isLocal" <?php if (!$formReg && $studById["is_local"] == 1): ?>checked<? endif; ?> value="1">Иногородний</label>							
                </div>		
                <?php if ($formReg): ?>
                    <button class="btn btn-primary">Отправить</button>
                <? else: ?>
                    <button class="btn btn-primary">Редактировать</button>
                <? endif; ?>	
            </form>	
        </div>
    </main>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>