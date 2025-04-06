create table tpphp.Etudiant (
id int auto_increment primary key,
name varchar(20),
birthday date,
image_url varchar(200),
section varchar(3)
);

create table tpphp.Section (
id int auto_increment primary key,
designation varchar(3),
description varchar(50)
);

create table tpphp.Utilisateur (
id int auto_increment primary key,
username varchar(20),
email varchar(30),
role varchar(20)
);