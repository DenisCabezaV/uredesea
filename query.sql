create database mmv;
use mmv;

create table mmv005(
	id INT(5) auto_increment,
    username varchar(20),
    usernamelowercase varchar(20),
    password varchar(60),
    PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO mmv005 (username, usernamelowercase, password)
VALUES ('denis@gmail.com', 'denis@gmail.com', '123456');