<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Server & File Info</h1>
    <?php if($server): ?>
        <ul class='list-group'>
            <?php foreach($server as $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key ?></strong>
                    <?php echo $value?>
                </li>
            <?php endforeach; ?>

        </ul>
    <?php endif; ?>

    <h1>Client Info</h1>
    <?php if($client): ?>
        <ul class='list-group'>
            <?php foreach($client as $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key ?></strong>
                    <?php echo $value?>
                </li>
            <?php endforeach; ?>

        </ul>
    <?php endif; ?>
    </div>

</body>
</html>