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