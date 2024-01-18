<!-- File: app/Views/view_users_page.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users Page</title>
</head>
<body>
    <h1>View Users Page</h1>

    <?php if(count($users)  === 0 ):  ?>
        <h1>NO USERS FOUND</h1>
    <?php exit; endif; ?>

    <!-- Display users from $users array -->
    <?php foreach ($users as $user): ?>
        <?php var_dump($user) ?>
        <li><?= $user['surname'] ?> <?= $user['first_name'] ?> <?= $user['other_names'] ?></li>
    <?php endforeach; ?>
</body>
</html>
