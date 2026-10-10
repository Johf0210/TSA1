<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="<?= site_url('/') ?>">Tasks for Today</a>
            <nav aria-label="Main navigation">
                <a href="<?= site_url('/') ?>">Today</a>
                <a href="<?= site_url('tasks') ?>">All Tasks</a>
                <a href="<?= site_url('profile') ?>">Profile</a>
                <a href="<?= site_url('about') ?>">About</a>
            </nav>
        </div>
    </header>
    <main class="container page-content">
        <?= $this->renderSection('content') ?>
    </main>
    <footer class="site-footer">
        <div class="container">IT0049 · Tasks for Today Management System</div>
    </footer>
</body>
</html>
