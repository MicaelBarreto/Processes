drop database if exists job_db;

create database job_db;

use job_db;

create table job(
	id integer not null auto_increment,
    time integer not null,
    primary key(id)
    
);