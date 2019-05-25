drop database if exists colegioMongeRico;
create database colegioMongeRico;

use colegioMongeRico;

create table rol(
codigoRol int primary key unique auto_increment,
descRol varchar(50)
);

create table usuario (
    codigoUsuario int primary key unique auto_increment,
    nombre varchar(50),
    apellido varchar(50),
    nomUsuario varchar(75),
    email varchar(100),
    direccion varchar(500),
    pass varchar(75),
    telefono varchar(50),
    dui varchar(10),
    fechaNac date,
    codigoRol int,
    idEliminado int
);

create table chequeras(
idChequera int primary key unique auto_increment,
chequera varchar(50),
numeroCuenta varchar(100),
monto double,
idEliminado int
);

create table cargosBancarios(
idCargo int primary key unique auto_increment,
concepto varchar(500),
monto double,
fecha date,
mes varchar(10),
anio varchar(10),
idChequera int,
idEliminado int
);

create table remesas(
idRemesa int primary key unique auto_increment,
concepto varchar(500),
monto double,
fecha date,
mes varchar(10),
anio varchar(10),
idChequera int,
idEliminado int
);

create table datosGrados(
idGrado int primary key unique auto_increment,
orientador int,
orientadorMate int,
orientadorSoc int,
orientadorCien int,
orientadorLen int,
orientadorIng int,
orientadorArt int,
orientadorMo int,
orientadorInfo int,
orientadorFis int,
aula varchar(20)
);
 
alter table usuario add constraint fk_usuario_rol foreign key (codigoRol) references rol(codigoRol);

alter table cargosBancarios add constraint fk_cargosBancarios_chequeras foreign key (idChequera) references chequeras(idChequera);

alter table remesas add constraint fk_remesas_chequeras foreign key (idChequera) references chequeras(idChequera);

 insert into rol values(1,'Administrador/a');
insert into rol values(2,'Maestro/a');
insert into rol values(3,'Secretario/a');

insert into usuario values(null,'No','Asignado','no','no','no',sha1('123'),'7912-1241','09237913-1','1997-02-02',2,1);
insert into usuario values(null,'Fabio','Mejia','fabio','fabiomejiash@gmail.com','San Juan Opico',sha1('123'),'7121-1231','01211242-1','1999-12-02',1,1);
 
 
 insert into usuario values(null,'Juan','Perez','juan','juan@gmail.com','Santa Tecla',sha1('123'),'7912-7680','01234324-1','1980-09-04',2,1);
 insert into usuario values(null,'Alonso','Velasquez','alonso','mejiaFabio383@gmail.com','Santa Tecla',sha1('123'),'7912-1241','09237913-1','1997-02-02',2,1);

 insert into usuario values(null,'Juana','Lopez','juana','juan123@gmail.com','San Salvador',sha1('123'),'7912-1241','09237913-1','1997-02-02',3,1);
 
 insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
insert into datosGrados values(null,1,1,1,1,1,1,1,1,1,1,'1');
 delimiter $$
create procedure login(
	in user varchar(50),
    in contra varchar(75)
)
begin
	select u.*, r.descRol
	from usuario u
	inner join rol r on r.codigoRol = u.codigoRol
    where u.nomUsuario = user and u.pass = contra and u.idEliminado=1;
end	
$$

delimiter $$
create procedure mostrarUsuarios()
begin
	select u.*, r.descRol
	from usuario u
	inner join rol r on r.codigoRol = u.codigoRol
    where u.idEliminado=1 and u.codigoUsuario>1;
end
$$

delimiter $$
create procedure datosNomUsuario(
	in nom varchar(50)
)
begin
	select u.*, r.descRol
    from usuario u
    inner join rol r on r.codigoRol = u.codigoRol
    where u.nomUsuario = nom;
end
$$


select d.idGrado as grado, d.orientador as orientador from datosGrados  d
inner join usuario u on u.codigoUsuario 
and (d.orientador = u.codigoUsuario)
where u.nomUsuario = 'alonso' and u.pass=sha1('123') and d.idGrado=1;


select * from datosGrados