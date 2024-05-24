<?php
include('header.php');
include('db.php');
include('event_operations.php');
include('calculate_stats.php');
?>

<div class="container">
    <div class="stats">
        <?php include('stats_display.php'); ?>
    </div>

    <button id="createBtn">Create Event</button>

    <?php include('create_modal.php'); ?>

    <h2>Events</h2>
    <?php include('events_table.php'); ?>

    <?php include('update_modal.php'); ?>

    <?php include('delete_modal.php'); ?>
</div>

<script src="script.js"></script>

<?php include('footer.php'); ?>
