CREATE DATABASE `quiz`

CREATE TABLE `users` (
	`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `login` VARCHAR (128) NOT NULL,
    `password` VARCHAR (128) NOT NULL,
    `sana_vaqt` DATETIME NULL
)

create table `questions` (
    `id` int not null primary key AUTO_INCREMENT,
	`savol` varchar(128) not null,
    `variant_a` varchar(128) not null,
    `variant_b` varchar(128) not null,
    `variant_c` varchar (128) not null,
    `javob` varchar(128) not null,
    `vaqt_va_sana` datetime
)

INSERT INTO QUESTIONS (`savol`, `variant_a`, `variant_b`, `variant_c`, `javob`, `vaqt_va_sana`)
	VALUES ('yol formulasi qaysi biri?', 's=v/t', 'a=v/t', 's=v*t','c', '2019-03-02 15:32:12'),
	('MYSQL nima bilan ishlaydi?', 'web sayt bilan', 'baza bilan', 'kampyuterni oorganadi', 'b', '2019-03-02 15:32:12'),
    ('vaqt formulasi qaysi biri?', 's=v/t', 'a=v/t', 't=s/v','c', '2019-03-02 15:32:13'),
    ('kinetik energiya formulasi qaysi biri?', 'A=mgh', 'A=m*v*v', 's=g*t*t/2','b', '2019-03-02 15:32:14'),
    ('potensial energiya formulasi qaysi biri?', 'A=mgh', 'A=m*v*v', 's=g*t*t/2','a', '2019-03-02 15:32:15'),
    ('om qonuni formulasi qaysi biri?', 'A=mgh', 'U=I*R', 'P=m*v','b', '2019-03-02 15:32:16'),
    ('Tarixning otasi kim?', 'Gerotod', 'kamfutsi', 'Hamid Olimjon','a', '2019-03-02 15:32:17'),
    ('Kuch formulasi qaysi biri?', 'A=mgh', 'F=m*g', 's=g*t*t/2','b', '2019-03-02 15:32:18'),
    ('Quvvat formulasi qaysi biri?', 'A=mgh', 'N=A/t', 'q=n*e','b', '2019-03-02 15:32:19'),
    ('konsentratsiya formulasi qaysi biri?', 'n=N/V', 'A=m*v*v', 'h=g*t*t/2','a', '2019-03-02 15:32:20')

NISERT INTO users (`login`, `password`, `sana_vaqt`)
	VALUES ('Islomkarimov@gmail.com' , '123' , '2019-03-03 10:44:15'),
	VALUES ('Sarvar@gmail.com' , '321' , '2019-03-03 22:45:10'),
	VALUES ('Muhtor@gmail.com' , '329' , '2019-03-03 22:45:11'),
	VALUES ('Shoxruh@gmail.com' , '789t' , '2019-03-03 22:45:12'),
	VALUES ('Rashid@gmail.com' , '468' , '2019-03-03 22:45:13'),
	VALUES ('Elyor@gmail.com' , '798' , '2019-03-03 22:45:14'),
	VALUES ('Muhammad@gmail.com' , '465' , '2019-03-03 22:45:15'),
	VALUES ('Dilnoza@gmail.com' , '132' , '2019-03-03 22:45:16'),
	VALUES ('Dilnura@gmail.com' , '143' , '2019-03-03 22:45:17'),
	VALUES ('Farhod@gmail.com' , '915' , '2019-03-03 22:45:18')
