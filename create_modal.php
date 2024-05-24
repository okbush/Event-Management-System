<div id="createModal" class="modal">
    <div class="modal-content">
        <span class="close" id="createClose">&times;</span>
        <h2>Create Event</h2>
        <form method="POST" action="index.php">
            <input type="hidden" name="create" value="1">
            <label>Event Name: <input type="text" name="event_name" required></label><br>
            <label>Attendee Type: <input type="text" name="attendee_type" required></label><br>
            <label>Event Start: <input type="datetime-local" name="event_start" required></label><br>
            <label>Event End: <input type="datetime-local" name="event_end" required></label><br>
            <label>Day: <input type="text" name="day" required></label><br>
            <label>Booked: <input type="date" name="booked" required></label><br>
            <label>Status: 
                <select name="status" required>
                    <option value="Active">Active</option>
                    <option value="Archived">Archived</option>
                </select>
            </label><br>
            <button type="submit">Create Event</button>
        </form>
    </div>
</div>
