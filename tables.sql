DROP DATABASE Movie_Reviews;

CREATE DATABASE IF NOT EXISTS Movie_Reviews;

USE Movie_Reviews;

CREATE TABLE IF NOT EXISTS Movies (
    MovieID INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(250) NOT NULL,
    genre VARCHAR(250) NOT NULL,
    rating INT NOT NULL,
    datum DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS Reviews (
    ReviewID INT AUTO_INCREMENT PRIMARY KEY,
    movie_title VARCHAR(255),
    reviewer_name VARCHAR(255),
    review_text TEXT,
    rating DECIMAL(2,1),
    review_date DATE
);

CREATE TABLE IF NOT EXISTS Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    registration_date DATE
);




