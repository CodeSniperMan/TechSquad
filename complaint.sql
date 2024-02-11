CREATE DATABASE complaints;

USE complaints;

CREATE TABLE complaint (
    id INT AUTO_INCREMENT PRIMARY KEY,
    issue VARCHAR(255) NOT NULL,
    branch VARCHAR(255) NOT NULL,
    problem TEXT NOT NULL,
    academicYear int(1) NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);