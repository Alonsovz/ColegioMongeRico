drop database if exists colegioMongeRico;
create database colegioMongeRico;

use colegioMongeRico;

create table rol(
codigoRol int primary key  auto_increment,
descRol varchar(50)
);

create table usuario (
    codigoUsuario int primary key  auto_increment,
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
idChequera int primary key  auto_increment,
chequera varchar(50),
numeroCuenta varchar(100),
monto double,
idEliminado int
);

create table cargosBancarios(
idCargo int primary key  auto_increment,
concepto varchar(500),
monto double,
fecha date,
mes varchar(10),
anio varchar(10),
idChequera int,
idEliminado int
);

create table remesas(
idRemesa int primary key  auto_increment,
concepto varchar(500),
monto double,
fecha date,
mes varchar(10),
anio varchar(10),
idChequera int,
idEliminado int
);

create table datosGrados(
idGrado int primary key  auto_increment,
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



create table inventarioUni(
id int primary key  auto_increment,
talla varchar(10),
existencia int,
idEliminado int
);

create table inventarioCal(
id int primary key  auto_increment,
talla varchar(10),
existencia int,
idEliminado int
);

create table maestros(
idMaestro int primary key  auto_increment,
nombre varchar(100),
apellido varchar(100),
fechaNacimiento date,
lugarNacimiento varchar(100),
sexo varchar(10),
direccionResidencia varchar(200),
telResidencia varchar(12),
telMovil varchar(12),
correo varchar(50),
dui varchar(12),
nit varchar(25),
nip varchar(15),
afp varchar(20),
numeroPartida varchar(30),
subnumero varchar(20),
nivelAcademico varchar(50),
nivel varchar(30),
especialidad varchar(20),
fechaIngreso date,
habilidades varchar(500),
tipoPago varchar(100),
sueldo double,
idEliminado int
);

create table titulosObtenidos(
idTitulo int primary key  auto_increment,
nombreTitulo varchar(40),
idMaestro int
);

create table capacitaciones(
idCapacitacion int primary key  auto_increment,
nombreCapacitacion varchar(40),
idMaestro int
);

create table experienciaLaboral(
id int primary key  auto_increment,
institucion varchar(50),
cargo varchar(50),
grado varchar(30),
asignaturas varchar(300),
desde date,
hasta date,
idMaestro int
);


create table planilla(
id int primary key  auto_increment,
idMaestro int,
diasT int,
sueldoM double,
sueldoD double,
vacacion double,
aguinaldo double,
afpEmV double,
afpEmC double,
isssE double,
renta double,
otros double,
totalDesM double,
totalP double,
mes varchar(20),
anio varchar(20)
);


create table fichaAlumno(
idAlumno int primary key  auto_increment,
nie varchar(50),
nombre varchar(100),
grado int,
sexo varchar(20),
repiteGrado varchar(50),
nuevoIngreso varchar(50),
reingreso varchar(30),
religion varchar(50),
insAnterior varchar(50),
fechaNac date,
departamentoNac varchar(20),
municipioNac varchar(30),
nacionalidad varchar(30),
naturalizado varchar(10),
discapacidad varchar(30),
expDiscapacidad varchar(100),
enfermedad varchar(20),
expEnfermedad varchar(100),
alergia varchar(20),
expAlergia varchar(100),
tipoSangre varchar(10),
direccionRes varchar(100),
medioTransporte varchar(100),
distancia varchar(20),
factoresRiesgo varchar(100),
ocupacion varchar(50),
trabaja varchar(10),
dependenciaEco varchar(100),
correo varchar(200),
telefono varchar(30),
viveCon varchar(50),
viveOtro varchar(100),
anio varchar(10),
fechaIngreso date,
idEliminado int
);

create table pagosAlumnos(
idAlumno int primary key,
talonario varchar(50),
e varchar(100),
f varchar(100),
m varchar(100),
a varchar(100),
ma varchar(100),
ju varchar(100),
jul varchar(100),
ago varchar(100),
sep varchar(100),
oc varchar(100),
nov varchar(100),
anio varchar(10),
estado int
);



create table datosPadre(
nombrePadre varchar(100),
lugarTrabajoP varchar(100),
telefonoPadre varchar(20),
nombreMadre varchar(100),
lugarTrabajoM varchar(100),
telefonoMadre varchar(20),
idAlumno int
);

create table datosResponsable(
nombre varchar(100),
tipoIden varchar(20),
numeroIden varchar(30),
familiar varchar(20),
parentesco varchar(20),
sexo varchar(10),
estadoFamiliar varchar(40),
fechaNac date,
departamentoNac varchar(20),
municipioNac varchar(100),
nacionalidad varchar(30),
profesion varchar(30),
escolaridad varchar(50),
lugarTrabajo varchar(50),
telTrabajo varchar(50),
discapcidad varchar(10),
expDiscapacidad varchar(100),
tipoSangre varchar(50),
direccionRes varchar(100),
telRes1 varchar(30),
telRes2 varchar(30),
correo varchar(50),
idAlumno int
);


create table otrosDatos(
emergencia1 varchar(100),
telEmergencia1 varchar(20),
emergencia2 varchar(100),
telEmergencia2 varchar(20),
retiro1 varchar(100),
parentesco1 varchar(100),
retiro2 varchar(100),
parentesco2 varchar(100),
viajaraSolo varchar(20),
microbusDe varchar(100),
telMicro varchar(20),
idAlumno int
);

create table hermanosAlum(
nombre varchar(100),
grado varchar(10),
idAlumno int
);
 


 insert into rol values(1,'Administrador/a');
insert into rol values(2,'Maestro/a');
insert into rol values(3,'Secretario/a');

insert into usuario values(null,'No','Asignado','no','no','no',sha1('123'),'7912-1241','09231341-1','1997-02-02',2,1);
insert into usuario values(null,'Fabio','Mejia','fabio','fabiomejiash@gmail.com','San Juan Opico',sha1('123'),'7121-1231','01211242-1','1999-12-02',1,1);
 
 
 insert into usuario values(null,'Juan','Perez','juan','juan@gmail.com','Santa Tecla',sha1('123'),'7912-7680','01234324-1','1980-09-04',2,1);
 insert into usuario values(null,'Alonso','Velasquez','alonso','mejiaFabio383@gmail.com','Santa Tecla',sha1('123'),'7912-1241','09237913-1','1997-02-02',2,1);

 insert into usuario values(null,'Juana','Lopez','juana','juan123@gmail.com','San Salvador',sha1('123'),'7912-1241','01234312-1','1997-02-02',3,1);
 
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

insert into inventarioUni values(null,'S',12,1);
insert into inventarioCal values(null,'12',10,1);

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



update maestros set tipoPago = 'Por honorarios' where idMaestro=1