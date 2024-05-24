document.getElementById('createBtn').onclick = function () {
    document.getElementById('createModal').style.display = "block";
};

document.getElementById('createClose').onclick = function () {
    document.getElementById('createModal').style.display = "none";
};

var updateBtns = document.getElementsByClassName('updateBtn');
for (var i = 0; i < updateBtns.length; i++) {
    updateBtns[i].onclick = function () {
        document.getElementById('updateId').value = this.getAttribute('data-id');
        document.getElementById('updateName').value = this.getAttribute('data-name');
        document.getElementById('updateAttendee').value = this.getAttribute('data-attendee');
        document.getElementById('updateStart').value = this.getAttribute('data-start');
        document.getElementById('updateEnd').value = this.getAttribute('data-end');
        document.getElementById('updateDay').value = this.getAttribute('data-day');
        document.getElementById('updateBooked').value = this.getAttribute('data-booked');
        document.getElementById('updateStatus').value = this.getAttribute('data-status');
        document.getElementById('updateModal').style.display = "block";
    };
}

document.getElementById('updateClose').onclick = function () {
    document.getElementById('updateModal').style.display = "none";
};

var deleteBtns = document.getElementsByClassName('deleteBtn');
for (var i = 0; i < deleteBtns.length; i++) {
    deleteBtns[i].onclick = function () {
        document.getElementById('deleteId').value = this.getAttribute('data-id');
        document.getElementById('deleteModal').style.display = "block";
    };
}

document.getElementById('deleteClose').onclick = function () {
    document.getElementById('deleteModal').style.display = "none";
};

window.onclick = function (event) {
    if (event.target == document.getElementById('createModal')) {
        document.getElementById('createModal').style.display = "none";
    }
    if (event.target == document.getElementById('updateModal')) {
        document.getElementById('updateModal').style.display = "none";
    }
    if (event.target == document.getElementById('deleteModal')) {
        document.getElementById('deleteModal').style.display = "none";
    }
};