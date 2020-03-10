*******************
Server Requirements
*******************

PHP version 7.2 is required.

*******************
Set-up
*******************

1. Ensure that you have Xampp installed running PHP version 7.2
2. Create a folder called "games-review" inside the htdocs folder of your xampp directory. E.g. C:\xampp\htdocs\games-review
3. Run Apache on port 82.
4. Go to http://localhost:82/phpmyadmin
5. Create a database called "gamereview"
6. Import the file "IMPORT.SQL" found in "games-review\application\SQL"
7. The default admin account is called "Lecturer" with the password "Example"
8. Site can be accessed from "http://localhost:82/games-review"

*******************
Chat-server
*******************

To enable, either:

- Run the script "Start server.bat" found in the root directory of the "games-review" folder or found in "games-review\application\scripts"
- Open Node.js command prompt, run the script "Server.js" found in "games-review\application\scripts", .ie. node Server.js