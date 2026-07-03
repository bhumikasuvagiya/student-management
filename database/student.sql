CREATE DATABASE IF NOT EXISTS student_management;
USE student_management;
CREATE TABLE students(id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(100),email VARCHAR(150),course VARCHAR(100));
INSERT INTO students(name,email,course) VALUES ('John Doe','john@example.com','PHP');