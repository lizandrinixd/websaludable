CREATE DATABASE IF NOT EXISTS appnutritiva;
USE appnutritiva;

CREATE TABLE usuarios (
  id_usuario INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  contrasena VARCHAR(255) NOT NULL,
  tipo_usuario ENUM('admin','usuario') NOT NULL DEFAULT 'usuario'
);

CREATE TABLE alimentos (
  id_alimento INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  calorias INT DEFAULT 0,
  proteinas FLOAT DEFAULT 0,
  carbohidratos FLOAT DEFAULT 0,
  grasas FLOAT DEFAULT 0
);

CREATE TABLE registros (
  id_registro INT AUTO_INCREMENT PRIMARY KEY,
  id_usuario INT NOT NULL,
  id_alimento INT NOT NULL,
  fecha DATE NOT NULL,
  cantidad INT NOT NULL,
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE CASCADE,
  FOREIGN KEY (id_alimento) REFERENCES alimentos(id_alimento) ON DELETE CASCADE
);

INSERT INTO `usuarios` VALUES (1,'Admin Principal','admin@l.com','12345','admin'),(2,'Lizandro','lizandro@l.com','123456','usuario'),(3,'Roberto Rodríguez','chapucero@l.com','123456','usuario');
INSERT INTO `alimentos` VALUES (1,'pollo',40,207,40,40),(2,'pescado',60,390,25,30),(3,'hamburguesa',3000,260,650,600);