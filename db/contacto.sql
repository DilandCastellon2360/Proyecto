CREATE DATABASE IF NOT EXISTS docker_db;
USE docker_db;


CREATE TABLE IF NOT EXISTS contacto (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  telefono VARCHAR(15)
);

INSERT INTO contacto (nombre, apellido, telefono) VALUES
  ('Juan', 'Perez', '123456789'),
  ('Maria', 'Lopez', '987654321'),
  ('Carlos', 'Garcia', '555555555'),
  ('Ana', 'Martinez', '444444444'),
  ('Luis', 'Rodriguez', '1111111');