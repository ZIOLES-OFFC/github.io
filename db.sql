CREATE DATABASE smm_panel;
USE smm_panel;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    saldo INT DEFAULT 0,
    role ENUM('user', 'admin') DEFAULT 'user'
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    layanan VARCHAR(100),
    jumlah INT,
    status ENUM('pending', 'proses', 'selesai') DEFAULT 'pending',
    FOREIGN KEY (user_id) REFERENCES users(id)
);
