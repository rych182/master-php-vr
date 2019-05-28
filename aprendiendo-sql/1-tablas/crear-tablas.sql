/*
Al crear una columna le debes de poner el tipo de dato
int(num de caracteres) ENTERO
integer(num de caracteres) ENTERO
varchar(num de caracteres) STRING(máximo 255 caracteres)
char (num de caracteres) STRING
flotat(num de decimales) decimal/flotante
date, time, timestamp(para fechas)

//Strings mas grandes

TEXT(nos permite almacenar 65535 caracteres)
MEDIUMTEXT(nos permite almacenar 16millones caracteres)
LONGTEXT(nos permite almacenar 4billones caracteres)

*/

CREATE TABLE usuarios(
id			int(11)	auto_increment not null,
nombre		varchar(100) not null,
apellidos	varchar(255) default 'Garcia',
email		varchar(100) not null,
password	varchar(255) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

/*
drop table "nombretabla"; //Borra la tabla
desc "nombre de la tabla"; //te describe como esta constituida la tabla
not null: significa que no puede quedar vacío, siempre debe de haber algo en ese campo
*/
