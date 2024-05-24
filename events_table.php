<table>
    <thead>
        <tr>
            <th>EVENT</th>
            <th>ATTENDEE TYPE</th>
            <th>EVENT START</th>
            <th>EVENT END</th>
            <th>DAY</th>
            <th>BOOKED</th>
            <th>STATUS</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($events as $event) : ?>
            <tr>
                <td><?php echo $event['event_name']; ?></td>
                <td><?php echo $event['attendee_type']; ?></td>
                <td><?php echo date('m/d/Y g:i A', strtotime($event['event_start'])); ?></td>
                <td><?php echo date('m/d/Y g:i A', strtotime($event['event_end'])); ?></td>
                <td><?php echo $event['day']; ?></td>
                <td><?php echo date('m/d/Y', strtotime($event['booked'])); ?></td>
                <td><span class="status <?php echo strtolower($event['status']); ?>"><?php echo $event['status']; ?></span></td>
                <td>
                    <button class="updateBtn" data-id="<?php echo $event['id']; ?>" data-name="<?php echo $event['event_name']; ?>"
                            data-attendee="<?php echo $event['attendee_type']; ?>" data-start="<?php echo $event['event_start']; ?>"
                            data-end="<?php echo $event['event_end']; ?>" data-day="<?php echo $event['day']; ?>"
                            data-booked="<?php echo $event['booked']; ?>" data-status="<?php echo $event['status']; ?>">Update</button>
                    <button class="deleteBtn" data-id="<?php echo $event['id']; ?>">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
