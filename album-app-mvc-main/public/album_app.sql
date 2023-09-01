-- création de la BDD 
CREATE DATABASE album_app_mvc2
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

-- Création  de la table albums
use album_app_mvc2
CREATE TABLE albums (
    id INT(11) PRIMARY KEY AUTO_INCRENENT, 
    title VARCHAR(50) NOT NULL,
    artiste VARCHAR(50) NOT NULL,
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updat_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);