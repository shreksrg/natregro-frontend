<?php
if ($jobs) {
    foreach ($jobs as $job) {

        ?>
        <tr>
            <td><?= $job['position'] ?></td>
            <td><?= $job['department'] ?></td>
            <td><?= $job['location'] ?></td>
            <td><a href="<?= APP_URL ?>/invite/show?id=<?= $job['id'] ?>">立即申请</a></td>
        </tr>
    <?php
    }
} ?>