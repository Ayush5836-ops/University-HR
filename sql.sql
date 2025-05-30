CREATE DATABASE IF NOT EXISTS university_hr;
USE university_hr;

CREATE TABLE IF NOT EXISTS attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    date DATE
);

CREATE TABLE IF NOT EXISTS recruitment (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    position VARCHAR(100),
    email VARCHAR(100)
);