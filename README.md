# Event-Management-System

How to use: <br>
1.) Start up Apache and MySQL on XAMPP <br>
2.) Put the entire file onto htdocs of your XAMPP folder <br>
3.) Go to browser and open http://localhost/phpmyadmin <br>
4.) Make a new database, naming it 'event_management' <br>
5.)Once ur done making the database, select it from the left sidebar <br>
6.) Click the SQL tab at the top <br>
7.) Copy paste this: <br>

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

8.) Click Go <br>
9.) Type 'localhost/event_management' in ur browser search bar to view the event management system <br>
