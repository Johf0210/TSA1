<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<p class="eyebrow">TASK LIST</p>
<h1>All tasks</h1>
<p class="lead">Every task in the system, ordered by scheduled date.</p>
<div class="table-wrap">
    <table>
        <thead><tr><th>Title</th><th>Status</th><th>Task date</th><th>Created</th></tr></thead>
        <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td><span class="status <?= esc($task['status']) ?>"><?= esc(ucfirst($task['status'])) ?></span></td>
                <td><?= esc($task['task_date']) ?></td>
                <td><?= esc($task['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
