create table tpphp.Etudiant (
id int auto_increment primary key,
name varchar(20),
birthday date,
image_url varchar(200),
section varchar(3)
);

INSERT INTO tpphp.Etudiant (name, birthday, image_url, section)
VALUES 
('Alice Dupont', '2002-04-15', 'https://randomuser.me/api/portraits/women/1.jpg', 'GL'),
('Mehdi Rami', '2001-12-02', 'https://randomuser.me/api/portraits/men/2.jpg', 'IMI'),
('Fatima Benali', '2003-08-23', 'https://randomuser.me/api/portraits/women/3.jpg', 'GL'),
('Yassine Karim', '2000-01-10', 'https://randomuser.me/api/portraits/men/4.jpg', 'RT'),
('Sofia Marouane', '2002-11-05', 'https://randomuser.me/api/portraits/women/5.jpg', 'GL'),
('Karim Louafi', '2001-06-30', 'https://randomuser.me/api/portraits/men/6.jpg', 'IMI'),
('Lina Othmani', '2002-09-14', 'https://randomuser.me/api/portraits/women/7.jpg', 'RT'),
('Hicham Zeroual', '2003-02-19', 'https://randomuser.me/api/portraits/men/8.jpg', 'GL');
 

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

create table tpphp.Utilisateur (
id int auto_increment primary key,
username varchar(20),
email varchar(30),
role varchar(20)
);