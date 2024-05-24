Setting up the database instructions:

Notes:

1.) Start up Apache and MySQL on XAMPP
2.) Put the entire file onto htdocs of your XAMPP folder
3.) Go to browser and open http://localhost/phpmyadmin
4.) Make a new database, naming it 'event_management'
5.)Once ur done making the database, select it from the left sidebar
6.) Click the SQL tab at the top
7.) Copy paste this:

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    attendee_type VARCHAR(255) NOT NULL,
    event_start DATETIME NOT NULL,
    event_end DATETIME NOT NULL,
    day VARCHAR(50) NOT NULL,
    booked DATE NOT NULL,
    status VARCHAR(50) NOT NULL
);

8.) Click Go
9.) Type 'localhost/event_management' in ur browser search bar to view the event management system
