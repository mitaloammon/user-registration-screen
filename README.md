### User Registration Screen

Welcome to the User Registration Screen project repository! This project is developed for learning purposes, aiming to provide a basic user interface for user registration, login, update, and authentication. It utilizes PHP for backend logic, HTML5 for structuring the web pages, CSS for styling, and JavaScript for client-side interactivity.

#### Database Structure:
For this project, the following MySQL table was created to interact with the database:

**Database Name:** `login-cadaster`

**Table Name:** `users`

| Field     | Type          | 
|-----------|---------------|
| id        | int(11)       | 
| username  | varchar(200)  |
| email     | varchar(200)  |
| age       | int(11)       |
| password  | varchar(200)  |

#### Features:
- **User Registration**: Users can sign up by providing necessary details.
- **User Login**: Existing users can securely log in to access their accounts.
- **User Update**: Functionality for users to update their account information.
- **Authentication**: Implements secure authentication mechanisms to protect user accounts.

#### Technologies Used:
- **PHP**: Backend server-side logic and database interaction.
- **HTML5**: Structure of web pages.
- **CSS**: Styling the user interface.
- **JavaScript**: Client-side scripting for interactivity.

#### How to Use:
1. Clone the repository to your local machine.
   ```
   git clone https://github.com/mitaloammon/user-registration-screen.git
   ```
2. Set up a local server environment to run PHP scripts (e.g., XAMPP, WAMP, or MAMP).
3. Create a MySQL database named `login-cadaster`.
4. Import the provided SQL file to set up the `users` table.
5. Configure the database connection settings in the PHP files as per your local setup.
6. Access the project through your web browser and explore the various functionalities.

#### Note:
This project is intended for educational purposes to demonstrate basic user authentication concepts using PHP, HTML5, CSS, and JavaScript. It may lack certain security features or optimizations typically found in production-level systems. Use it as a learning resource and exercise caution when deploying similar systems in real-world scenarios.

#### License:
This project is licensed under the [MIT License](LICENSE).

#### Contributors:
- [Mitalo Ammon](https://github.com/mitaloammon)

Feel free to contribute to the project by forking it and creating pull requests with improvements or additional features! If you encounter any issues or have suggestions, please open an issue on GitHub. Thank you for your interest and happy coding!
