<h1>Courses</h1>

<?php if (!empty($params)): ?>
    <ul>
        <?php foreach ($courses as $course): ?>
            <li>
                <h2><?php echo htmlspecialchars($course['name']); ?></h2>
                <p><?php echo htmlspecialchars($course['description']); ?></p>
            </li>
        <?php endforeach; endif; ?>
    </ul>