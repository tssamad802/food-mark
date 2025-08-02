CREATE TABLE users (
id int(11) PRIMARY KEY AUTO_INCREMENT,
username varchar(55) NOT NULL,
email varchar(55) NOT NULL,
pwd varchar(255) NOT NULL,
created_at timestamp DEFAULT CURRENT_DATE
);

CREATE TABLE admin (
id int(11) PRIMARY KEY AUTO_INCREMENT,
username varchar(25) NOT NULL,
pwd varchar(35) NOT NULL,
created_at timestamp DEFAULT CURRENT_DATE
);

INSERT INTO `admin`(`username`, `pwd`) VALUES ('admin','admin123');

CREATE TABLE products (
id int(11) PRIMARY KEY AUTO_INCREMENT,
image varchar(255) NOT NULL,
name varchar(55) NOT NULL,
descripton varchar(255) NOT NULL,
price int(55) NOT NULL,
category int(11) NOT NULL,
created_at timestamp DEFAULT CURRENT_DATE
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);


INSERT INTO `categories` (`name`) 
VALUES 
('Electronics'),
('Clothing'),
('Home & Kitchen'),
('Sports'),
('Beauty & Health');
