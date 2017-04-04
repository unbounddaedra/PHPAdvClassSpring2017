
<?php if (is_array($addresses) && count($addresses) > 0) : ?>
    <div class="row">
        <h1>Address List </h1><br />
        <table class="table">

            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Address Line</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>Birthday</th>
            </tr>
            <?php foreach ($addresses as $row): ?>
                <tr>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['addressline1']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['zip']; ?></td>
                    <td><?php echo date("F j, y", strtotime($row['birthday'])); ?></td>

                </tr>
            <?php endforeach; ?>

        </table>

    <?php endif; ?>
</div>