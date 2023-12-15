# ATIWeb Lecturer Portal

Welcome to the ATIWeb Lecturer Portal repository! This portal is designed for lecturers at ATI to manage their details and access relevant functionalities.

## Features

- Lecturer registration with details collection.
- Login functionality with sessions handling.
- Dashboard for lecturers to perform reserved functions.
- Logout functionality.

## Getting Started

### Prerequisites

- PHP installed on your server.
- MySQL database to store lecturer and course information.

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/ATIWeb-Lecturer-Portal.git
   ```

2. Create a MySQL database named `ATIWEB` and import the provided SQL script in the `database.sql` file.

3. Update the database connection details in `config.php`:

   ```php
   $host = "your_database_host";
   $username = "your_database_username";
   $password = "your_database_password";
   $database = "ATIWEB";
   ```

4. Ensure your web server is configured to serve PHP files.

5. Navigate to the project directory in your web browser.

## Usage

- Access the registration page at `http://your-domain/register.php` to register as a lecturer.
- Login with your credentials at `http://your-domain/login.php`.
- Explore the lecturer dashboard at `http://your-domain/dashboard.php`.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please create an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgments

- Thank you to SAFNI mj for developing this project.
