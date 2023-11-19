<div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Pangkat</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php $number = 1 ?>
            <?php foreach($user as $rowUser): ?>
            <tr>
                <th scope="row"><?php echo $number++ ?></th>
                <td><?php echo $rowUser['username'] ?></td>
                <td><?php echo $rowUser['level'] ?></td>
                <td><?php echo $rowUser['email'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>