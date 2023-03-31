CREATE DATABASE login_page;

CREATE TABLE Users (
  userID int(11) NOT NULL AUTO_INCREMENT,
  firstname varchar(50) NOT NULL,
  lastname varchar(50) NOT NULL,
  userPass varchar(30) NOT NULL,
  PRIMARY KEY (userID)
);
