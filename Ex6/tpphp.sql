create table tpphp.Section (
id int auto_increment primary key,
designation varchar(3),
description varchar(50)
);


INSERT INTO tpphp.Section (designation, description) VALUES 
('GL', 'Génie Logiciel'),
('IIA', 'Informatique industrielle et Automatique'),
('IMI', 'Instrumentation et Maitenance Industrielle'),
('RT', 'Réseau et Telecommunication'),
('CH', 'Chimie'),
('BIO', 'Biologie');

create table tpphp.User (
id int auto_increment primary key,
username varchar(20),
email varchar(30),
role varchar(20)
);
INSERT INTO tpphp.User(username, email, role) VALUES
('alice', 'alice@example.com', 'admin'),
('bob', 'bob@example.com', 'editor'),
('carol', 'carol@example.com', 'viewer'),
('dave', 'dave@example.com', 'editor'),
('eve', 'eve@example.com', 'admin');