<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href='style.css'>
</head>
<body>

<?php
$vacancies = [
    0 => ['id' => 1, 'title' => 'PHP Programmer', 'salary' => 2500, 'sector_id' => 1],
    1 => ['id' => 2, 'title' => 'Designer', 'salary' => 3000, 'sector_id' => 1],
    2 => ['id' => 3, 'title' => 'Finance Manager', 'salary' => 3500, 'sector_id' => 2],
    3 => ['id' => 4, 'title' => 'Finance Director', 'salary' => 3500, 'sector_id' => 2],
];

$sectors = [
    0 => ['id' => 1, 'title' => 'IT'],
    1 => ['id' => 2, 'title' => 'Finance']
];

$type_sector_id = [];
foreach ($vacancies as $type_vacancy) {

    foreach ($sectors as $type_sector) {

        if (($type_vacancy['sector_id'] === $type_sector['id'])) {
            $type_vacancy['sector_title'] = $type_sector['title'];
            unset($type_vacancy['sector_id']);
            $type_sector_id [] = $type_vacancy;

            continue 2;
        }
    }

}

?>
<table class="table">
    <tbody>
    <tr>
        <td>id</td>
        <td>title</td>
        <td>salary</td>
        <td>sector_title</td>
    </tr>
    <?php foreach ($type_sector_id as $row): ?>
        <tr>
            <?php foreach ($row as $cell): ?>
                <td><?php echo $cell; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
