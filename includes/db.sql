CREATE TABLE users (
id int(11) PRIMARY KEY AUTO_INCREMENT,
username varchar(55) NOT NULL,
email varchar(55) NOT NULL,
pwd varchar(255) NOT NULL,
created_at timestamp DEFAULT CURRENT_DATE
);