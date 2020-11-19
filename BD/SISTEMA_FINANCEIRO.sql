CREATE DATABASE SISTEMA_FINANCEIRO;
USE SISTEMA_FINANCEIRO;

-- DROP DATABASE SISTEMA_FINANCEIRO;

create table User(
id int unsigned auto_increment not null primary key,
name varchar(100) not null,
genre char(1) not null,
email varchar(100) not null,
address varchar(150) not null,
phone varchar(15) not null,
password varchar(100) not null,
expense double(9,2),
recipe double(9,2),
balance double(9,2)
)engine=innodb;

create table Category(
id int unsigned auto_increment not null primary key,
name varchar(100) not null,
type char(1) not null,
class varchar(20) not null,
User_id int unsigned not null,
foreign key (User_id) references User(id)
)engine=innodb;

create table Registration(
id int unsigned auto_increment not null primary key,
value double(9,2) unsigned not null,
data date not null,
User_id int unsigned not null,
Category_id int unsigned not null,
foreign key (Category_id) references Category(id),
foreign key (User_id) references User(id)
)engine=innodb;

-- select * from user;
-- delete from User where id = 5;
-- update User set nome = 'rafael' where id = 1;
-- insert into Registration(id,value,data,User_id,Category_id) values(null,4980,'2020-01-12',1,7);
-- select * from Registration;
-- select Category.name, Registration.data, Registration.value, Category.type, Category.class from Registration join Category on Category_id = Category.id and Registration.User_id = 1 where Category.type = 'D' and month(Registration.data) = 1;
