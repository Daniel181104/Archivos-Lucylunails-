use uñas;
select count(cliente_id) as cliente_cita from cliente_cita
where cliente_id <3;


select * from pago 
group by total;

delimiter $$
drop procedure if exists 'multitabla' $$
create procedure 'multitabla'(tabla varchar(50),campo varchar(20),condicion varchar(20))
begin
set $consulta = concat("select * from", tabla, "where")

end$$

delimiter ;





-- consulta multitablas
SELECT usuarios.*, servicio.*
FROM usuarios
INNER JOIN servicio ON servicio.precio = usuarios.nombre
LIMIT 0, 1000;



delimiter $$
create procedure usuarios_con_letra(in letra char)
begin 
select * 
from usuarios
where nombre like  concat ('%',letra,'%');
end 
delimiter $$


delimiter $$


call usuarios_con_letra('a');



use uñas

delimiter $$

drop procedure if exists insertprocedimiento$$
create procedure insertprocedure(in p_nombre varchar(30), in p_costo int, in opcion int)

begin
declare id varchar (20);
set id=(select uuid_short());	
if opcion = '1' then
INSERT INTO procedimiento (id_procedimiento,nombre,costo) values (p_nombre,p_costo);
end if ;
end $$

if opcion '2' then
select * from procedimiento ;
end if ;

delimiter $$
 
call insertprocedimiento ('uñas','150','1');
select * from procedimiento


USE `uñas`;
DROP procedure IF EXISTS `new_procedure`;

DELIMITER $$
USE `uñas`$$
CREATE PROCEDURE `new_procedure` (in apaterno varchar(50),
                                   in amaterno varchar(20),
                                   in nombrep varchar(20) )
BEGIN
     insert into t_persona (paterno,materno,nombre)
     values(apaterno,amaterno,nombrep);
END$$

DELIMITER ;new_procedure


use uñas 
delimiter $$
create procedure  sp_mostrarnombres()
begin
select * from  t_persona ;
end $$

delimiter $$

call sp_mostrarnombres;

use uñas 
delimiter $$
create procedure  eliminar_cliente(in id_cliente int)
begin
select * from  t_persona ;
end $$

delimiter $$

call sp_mostrarnombres;


CREATE PROCEDURE agregar_servicio(
    IN nombre_servicio VARCHAR(50),
    IN precio_servicio DECIMAL(10, 2),
    IN duracion_servicio INT
)
BEGIN
    INSERT INTO servicios (nombre, precio, duracion) VALUES (nombre_servicio, precio_servicio, duracion_servicio);
END;





use uñas 
delimiter $$
create procedure  actualizar_servicio(   IN id_servicio INT,
    IN nuevo_nombre_servicio VARCHAR(50),
    IN nuevo_precio_servicio DECIMAL(10, 2),
    IN nueva_duracion_servicio INT)
begin
select * from  t_persona ;
end $$

delimiter $$

call sp_mostrarnombres;



CREATE PROCEDURE actualizar_servicio(
    IN id_servicio INT,
    IN nuevo_nombre_servicio VARCHAR(50),
    IN nuevo_precio_servicio DECIMAL(10, 2),
    IN nueva_duracion_servicio INT
)
BEGIN
    UPDATE servicios SET nombre = nuevo_nombre_servicio, precio = nuevo_precio_servicio, duracion = nueva_duracion_servicio WHERE id = id_servicio;
END;


use uñas

delimiter $$

drop procedure if exists insertprocedimiento$$
create procedure insertprocedure(in p_nombre varchar(30), in p_costo int, in opcion int)

begin
declare id varchar (20);
set id=(select uuid_short());	
if opcion = '1' then
INSERT INTO procedimiento (id_procedimiento,nombre,costo) values (p_nombre,p_costo);
end if ;
end $$

if opcion '2' then
select * from procedimiento ;
end if ;

delimiter $$
 
call insertprocedimiento ('uñas','150','1');
select * from procedimiento


use  uñas

--multitabla 
SELECT descuento, procedimiento FROM  promociones  inner join categoria  on fecha 
CROSS JOIN ventas where cant_servicios=1



select from promociones  inner join  promocion_cita on cita_id
--Consulta para obtener el total de ventas por cliente:
SELECT c.nombre, c.apellido, s.nombre_servicio FROM clientes c JOIN ventas v ON c.id_cliente = v.id_cliente 
JOIN servicios s ON v.id_servicio = s.id_servicio;

SELECT c.nombre, c.apellido, SUM(s.precio) AS total_ventas
FROM clientes c
JOIN ventas v ON c.id_cliente = v.id_cliente
JOIN servicios s ON v.id_servicio = s.id_servicio
GROUP BY c.id_cliente, c.nombre, c.apellido;

--Supongamos que deseas generar un reporte que muestre las ventas realizadas en un 
--rango de fechas determinado y solo para una sucursal específica. Además, quieres incluir
 --el nombre del cliente, el servicio adquirido y el precio.
 
 SELECT c.nombre AS nombre_cliente, s.nombre_servicio, v.fecha, s.precio
FROM ventas v inner JOIN clientes c ON v.id_cliente = c.id_cliente inner JOIN servicios s ON v.id_servicio = s.id_servicio inner JOIN sucursales su ON v.id_sucursal = su.id_sucursal
WHERE v.fecha BETWEEN '2023-01-01' AND '2023-06-30' -- Rango de fechas deseado
AND su.nombre_sucursal = 'NombreSucursal'; -- Nombre de la sucursal deseada







--Consulta para obtener el nombre de los clientes y los servicios que han adquirido:
SELECT c.nombre, c.apellido, s.nombre_servicio FROM clientes c
  inner JOIN ventas v ON c.id_cliente = v.id_cliente inner JOIN servicios s ON v.id_servicio = s.id_servicio;



select *
from usuarios inner join roles  on usuarios.nombre = roles.nombre














-- administrar privilegios
use uñas
GRANT USAGE ON uñas.ventas TO gestor;
SET PASSWORD FOR gestor = '123456';




GRANT SELECT, INSERT, UPDATE, DELETE ON uñas.ventas TO gestor;


use mysql
select database ();
select current_user();
select * from user ; 
grant create on ventas.* to usr_ventas@localhost;
flush privileges ;
show grants for usr_ventas@localhost;




grant insert,update,delete,select on ventas.* to usr_ventas@localhost;

revoke inser on ventas.* from  usr_ventas@localhost;

select * from uñas.user;
 grant usage on uñas.ventas to gestor identified by '123456';
grant usage on db.  to nombre_usuario  by 'pass';
--dar permisos
grant permisos on base_datos.tabla from nombre_usuario;
--eliminar pe