<div id="updateModal" class="modal">
    <div class="modal-content">
        <span class="close" id="updateClose">&times;</span>
        <h2>Update Event</h2>
        <form method="POST" action="index.php">
            <input type="hidden" name="update" value="1">
            <input type="hidden" name="id" id="updateId">
            <label>Event Name: <input type="text" name="event_name" id="updateName" required></label><br>
            <label>Attendee Type: <input type="text" name="attendee_type" id="updateAttendee" required></label><br>
            <label>Event Start: <input type="datetime-local" name="event_start" id="updateStart" required></label><br>
            <label>Event End: <input type="datetime-local" name="event_end" id="updateEnd" required></label><br>
            <label>Day: <input type="text" name="day" id="updateDay" required></label><br>
            <label>Booked: <input type="date" name="booked" id="updateBooked" required></label><br>
            <label>Status: 
                <select name="status" id="updateStatus" required>
                    <option value="Active">Active</option>
                    <option value="Archived">Archived</option>
                </select>
            </label><br>
            <button type="submit">Update Event</button>
        </form>
    </div>
</div>
