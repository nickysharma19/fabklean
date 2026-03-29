<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar">
    <ul class="list">
        <li class="<?php if($current_page=='laundry-service.php') echo 'active'; ?>">
            <a href="laundry-service.php">Laundry</a>
        </li>

        <li class="<?php if($current_page=='dry-cleaning-service.php') echo 'active'; ?>">
            <a href="dry-cleaning-service.php">Dry Cleaning</a>
        </li>

        <li class="<?php if($current_page=='shoe-cleaning-service.php') echo 'active'; ?>">
            <a href="shoe-cleaning-service.php">Shoe Cleaning</a>
        </li>

        <li class="<?php if($current_page=='carpet-dry-cleaning-service.php') echo 'active'; ?>">
            <a href="carpet-dry-cleaning-service.php">Carpet Dry Cleaning</a>
        </li>

        <li class="<?php if($current_page=='curtain-dry-cleaning-service.php') echo 'active'; ?>">
            <a href="curtain-dry-cleaning-service.php">Curtain Dry Cleaning</a>
        </li>

        <li class="<?php if($current_page=='leather-cleaning-service.php') echo 'active'; ?>">
            <a href="leather-cleaning-service.php">Leather Cleaning</a>
        </li>

        <li class="<?php if($current_page=='steam-ironing-service.php') echo 'active'; ?>">
            <a href="steam-ironing-service.php">Steam Ironing</a>
        </li>
    </ul>
</div>