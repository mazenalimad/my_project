CREATE DATABASE Book;

CREATE TABLE BookData (
	id int NOT NULL AUTO_INCREMENT,
    BookName varchar(255),
    Edition varchar(255),
    Author varchar(255),
    BookNo int,
    Year int,
    img longblob,
    PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE BookData AUTO_INCREMENT = 1;
