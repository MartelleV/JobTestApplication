--      DATABASE CREATE




--check if db exist, if not, create one
CREATE DATABASE IF NOT EXISTS jobapplication;

--select datasbase
USE jobapplication;

--create users table if not exist
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(32) NOT NULL,
    password VARCHAR(255) NOT NULL,
);





--      TABLE CREATE





--create recruiter table if not exist
CREATE TABLE IF NOT EXISTS recruiters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(32) NOT NULL,
    last_name VARCHAR(32) NOT NULL,
    post VARCHAR(255) NOT NULL,
);

--create job posting table
CREATE TABLE IF NOT EXISTS jobposting (
    author VARCHAR(64) NOT NULL,
    key VARCHAR (255) NOT NULL,
);

--create jobdesc table
CREATE TABLE IF NOT EXISTS jobdescriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    key VARCHAR(255) NOT NULL,
    status BOOLEAN NOT NULL,
    payout VARCHAR(32) NOT NULL,
);

--create job status
CREATE TABLE IF NOT EXISTS jobstatus (
    availability BOOLEAN NOT NULL,
    apply INT NOT NULL,
    slot INT NOT NULL,
);

--create CV builder
CREATE TABLE IF NOT EXISTS cv (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(32) NOT NULL,
    age INT(2) NOT NULL,
    contact VARCHAR(255) NOT NULL,
);

--create skills
CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    programming BOOLEAN NOT NULL,
    marketting BOOLEAN NOT NULL,
    accounting BOOLEAN NOT NULL,
    others VARCHAR(255) NOT NULL,
);

--create job hunter
CREATE TABLE IF NOT EXISTS jobhunter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(32) NOT NULL,
    address VARCHAR(128) NOT NULL,
    applications VARCHAR(128) NOT NULL,
);

--create recommend
CREATE TABLE IF NOT EXISTS recommendation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    job_id INT NOT NULL,
    date DATE NOT NULL,
)

--create application
CREATE TABLE IF NOT EXISTS application (
    id INT AUTO_INCREMENT PRIMARY KEY,
    app_no INT NOT NULL,
    file VARCHAR(255) NOT NULL,
);

--create app status
CREATE TABLE IF NOT EXISTS appstatus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status BOOLEAN NOT NULL,
)





--      EXAMPLE INSERTION




INSERT INTO users (id, username, password) VALUES ();