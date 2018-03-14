CREATE TABLE friend
(
  id int not null autoincrement primary key,
  first_name varchar(50) not null,
  last_name varvhar(50) not null,
  telephone varchar(15) not null,
  address varchar(50) not null
);

INSERT INTO friend (first_name, last_name, telephone, address) VALUES ('Felipe', 'Ramirez', '3100005415', 'Diag 75 # 32 - 24');
INSERT INTO friend (first_name, last_name, telephone, address) VALUES ('Timo', 'Rodriuguez', '32150241656', 'Calle 41 # 45 - 54');
INSERT INTO friend (first_name, last_name, telephone, address) VALUES ('Diego', 'Lopez', '35465413', 'Calle 24 # 54- 25');
INSERT INTO friend (first_name, last_name, telephone, address) VALUES ('Luis', 'Noash', '35431321', 'Street as 541 424');
INSERT INTO friend (first_name, last_name, telephone, address) VALUES ('Luisa', 'Nasn', '354132154', 'Street 58 # 57 - 11');

SELECT * FROM friend;
