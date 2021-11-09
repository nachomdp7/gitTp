create database university;
use university;

CREATE TABLE students
(
    studentId INT NOT NULL  auto_increment,
    careerId INT NOT NULL,
    firstName VARCHAR(100) NOT NULL,
    lastName VARCHAR(100) NOT NULL,
    dni VARCHAR(15) NOT NULL,
    phoneNumber VARCHAR(15) NOT NULL,
    gender VARCHAR(100),
    birthDate DATE,
    email VARCHAR(50),
    passwordS varchar(10),
    roles varchar(10),
    activo VARCHAR(5),
    fileNumber VARCHAR(34) NOT NULL,
    CONSTRAINT pk_student PRIMARY KEY (email)

)Engine=InnoDB;


CREATE TABLE career(
careerId int not null auto_increment,
descriptionC varchar(1000),
activo varchar(10),
constraint pk_career primary key (careerId)
)Engine=InnoDB;

CREATE TABLE jobPosition(
jobPositionId int not null auto_increment,
descriptionJ varchar(1000),
careerIdJ int not null,
constraint pk_jobPosition primary key(jobPositionId),
constraint fk_jobPosition foreign key(careerIdJ) references career(careerId)
)Engine=InnoDB;

create table company(
idCompany int not null  auto_increment,
nameC varchar(15) not null,
email varchar(50),
passwordS varchar(20),
roles varchar(10),
constraint pk_company primary key(idCompany)
)Engine=InnoDB;

create table jobOffer(
idCompanyj int not null,
idJobOffer int not null  auto_increment,
jobPositionIdj int not null,
constraint pk_jobOffer primary key(idJobOffer),
constraint fk_JobOffer foreign key(jobPositionIdj)references jobPosition(jobPositionId),
constraint fkJobOffer2 foreign key (idCompanyj) references company(idCompany)
)Engine=InnoDB;

create table admin(
email varchar(50) not null,
passwordS varchar(20) not null,
idAdmin int not null  auto_increment,
nameA varchar(540) not null,
roles varchar(10),
constraint pkadmin primary key(idAdmin)
)Engine=InnoDB;


