drop schema if exists db_prototypes;
create schema db_prototypes;

use db_prototypes;

drop table if exists pets;
create table pets(
id int auto_increment primary key
,created_at datetime
,updated_at datetime
,status int
,pet_name varchar(255)
);

insert into pets(pet_name)
	values
	('pet1')
	,('pet2')
	,('pet3')
	;