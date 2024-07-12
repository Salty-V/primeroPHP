<!-- La vue : c'est l'affiche de la fête. Elle reprend la liste des invités avec les différentes infos qui ont été topées dans le controleur -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des commandes</title>
</head>
<body>
    <h1>Liste des commandes</h1>
    <table border="1">
        <tr>
            <th>Client</th>
            <th>Amount</th>
            <th>Products</th>
            <th>Date</th>
        </tr>
        <?php foreach ($orders as $order): ?>
        <tr>
            <td><?php echo $order['customer'];?></td>
            <td><?php echo $order['amount'];?></td>
            <td><?php echo implode(" , ", $order['products']);?></td>
            <td><?php echo $order['date'];?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>