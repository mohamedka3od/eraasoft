<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center p-2 my-3">Hello, world!</h1>
    <table class="table table-bordered">
        <thead>
            <?php for($i=1;$i<=10;$i++): ?>
                <th><?=$i?></th>
            <?php endfor;?>
        </thead>
        <tbody>
        <?php for($i=1;$i<=10;$i++): ?>
                <tr>
                <?php for($j=1;$j<=10;$j++): ?>
                    <td class="<?php if(11-$i==$j): echo "bg-success"; endif; ?>">
                        <?=$i*$j?>
                    </td>
                <?php endfor;?>
                </tr>
        <?php endfor;?>

        </tbody>
    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
