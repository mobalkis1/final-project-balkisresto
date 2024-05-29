
CREATE DATABASE IF NOT EXISTS food_orders;


USE food_orders;


CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    order_name VARCHAR(255) NOT NULL,
    additional_food VARCHAR(255),
    quantity INT NOT NULL,
    date_time DATETIME NOT NULL,
    address TEXT NOT NULL,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
