-- Active: 1699981791464@@127.0.0.1@3306@ifriend
CREATE TABLE users(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    name VARCHAR(255) NOT NULL,
    password VARCHAR(20),
    mail VARCHAR(50),
    create_at TIMESTAMP,
    update_at TIMESTAMP
) COMMENT '';