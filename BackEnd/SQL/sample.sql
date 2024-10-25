--      DATABASE CREATE




CREATE DATABASE IF NOT EXISTS jobapplication;

USE jobapplication;





--      TABLE CREATE





CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(32) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS recruiters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(32) NOT NULL,
    last_name VARCHAR(32) NOT NULL,
    post VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS jobposting (
    author VARCHAR(64) NOT NULL,
    key_id VARCHAR (255) NOT NULL
);

CREATE TABLE IF NOT EXISTS jobdescriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    key_id VARCHAR(255) NOT NULL,
    status BOOLEAN NOT NULL,
    payout VARCHAR(32) NOT NULL
);

CREATE TABLE IF NOT EXISTS jobstatus (
    availability BOOLEAN NOT NULL,
    apply INT NOT NULL,
    slot INT NOT NULL
);

CREATE TABLE IF NOT EXISTS cv (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(32) NOT NULL,
    age INT(2) NOT NULL,
    contact VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    programming BOOLEAN NOT NULL,
    marketting BOOLEAN NOT NULL,
    accounting BOOLEAN NOT NULL,
    others VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS jobhunter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(32) NOT NULL,
    address VARCHAR(128) NOT NULL,
    applications VARCHAR(128) NOT NULL
);

CREATE TABLE IF NOT EXISTS recommendation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    job_id INT NOT NULL,
    date DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS application (
    id INT AUTO_INCREMENT PRIMARY KEY,
    app_no INT NOT NULL,
    file VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS appstatus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status BOOLEAN NOT NULL
);





--      EXAMPLE INSERTION





INSERT INTO users (username, password) VALUES ('admin', '5f4dcc3b5aa765d61d8327deb882cf99');

SELECT programming, marketting, accounting FROM skills;