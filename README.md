# PHP Procedural to OOP: Mise en situation


## Getting Started

Follow these steps to set up and run the project locally.


### Installation

Follow these steps to set up and run the project locally:

---

#### **1. Clone the Repository:**

Clone the project repository from the version control system (e.g., GitHub):

```bash
git clone https://github.com/Said-Aabilla/auth-php-procedural.git
```
Navigate to the project directory:

```bash
cd auth-php-procedural.git
```

#### **2. Install the Dependencies:**

Ensure you have Composer installed on your system. Run the following command to install the PHP dependencies required for the project:

```bash
composer install
```


### **3. Configure Environment Variables:**

Copy the example environment file and rename it to .env:

```bash
cp example.env .env
```

Open the .env file and update the database credentials and other configurations:

```bash
DB_HOST=localhost
DB_USER=root
DB_PASSWORD=
DB_NAME=situation
```

### **4. Initialize the Database:**

Run the SQL script located in `./app/config/script.sql` to create the database schema and populate it with initial data.

### **5. Migrate the Authentication Code from Procedural to OOP :**

Ensure the authentication logic is implemented correctly using OOP:

Login: Users must be authenticated using the credentials stored in the database. Passwords must be hashed and verified securely using password_hash and password_verify.

Register: Validate and store user data securely.

After successful login, users should be redirected to the appropriate page based on their roles:

```php
if ($role === 'admin') {P
    header('Location: /admin/dashboard.php');
} elseif ($role === 'moderator') {
    header('Location: /user/home.php');
} else {
    header('Location: /moderator/home.php');
}
exit();
```