<div id="deleteModal" class="modal">
    <div class="modal-content">
        <span class="close" id="deleteClose">&times;</span>
        <h2>Delete Event</h2>
        <form method="POST" action="index.php">
            <input type="hidden" name="delete" value="1">
            <input type="hidden" name="id" id="deleteId">
            <p>Are you sure you want to delete this event?</p>
            <button type="submit">Delete</button>
        </form>
    </div>
</div>
