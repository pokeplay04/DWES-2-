CREATE TABLE `tareas` (
  `id` int(5) PRIMARY KEY AUTO_INCREMENT,
  `nif_cif` varchar(50),
  `nombre` varchar(100),
  `telefono` varchar(15),
  `descripcion` text,
  `poblacion` varchar(100),
  `codigo_postal` varchar(10),
  `fecha_creacion` date,
  `fecha_realizacion` date,
  `provincia` varchar(100),
  `estado` INT(1),
  `anotaciones_anteriores` text,
  `anotaciones_posteriores` text
);

CREATE TABLE `usuario` (
  `id` int(5) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `tipo` int(1) NOT NULL
);

CREATE TABLE `clientes` (
    `id` INT AUTO_INCREMENT PRIMARY KEY, 
    `CIF` VARCHAR(20) NOT NULL,                 
    `nombre` VARCHAR(100) NOT NULL, 
    `telefono` VARCHAR(15),
    `correo` VARCHAR(100),  
    `cuenta_corriente` VARCHAR(34) NOT NULL,
    `id_pais` INT NOT NULL,          
    `moneda` ENUM('EUR', 'USD', 'LIB') VARCHAR(10) NOT NULL,
    `importe_cuota` DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_pais) REFERENCES paises(id_pais),
    FOREIGN KEY (id_administrador) REFERENCES empleados(id_empleado)
);

-- Tabla de cuotas
CREATE TABLE cuotas (
    `id_cuota` INT AUTO_INCREMENT PRIMARY KEY,
    `id_cliente` INT NOT NULL,
    `concepto` VARCHAR(255) NOT NULL,
    `fecha_emision` DATE NOT NULL,
    `importe` DECIMAL(10, 2) NOT NULL,
    `pagada` ENUM('S', 'N') DEFAULT 'N',
    `fecha_pago` DATE NULL,
    `notas` TEXT,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);


INSERT INTO `usuario` (`id`, `usuario`, `contrasena`, `tipo`) VALUES
(1, 'usuario', 'usuario', 1),
(2, 'admin', 'admin', 0);

---------------------

CREATE DATABASE db_proyecto;
USE db_proyecto;

-- Tabla de empleados
CREATE TABLE empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(9) UNIQUE NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    fecha_alta DATE NOT NULL,
    tipo ENUM('Operario', 'Administrador') NOT NULL
);

-- Tabla de clientes
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cif VARCHAR(9) UNIQUE NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    cuenta_corriente VARCHAR(50) NOT NULL,
    pais VARCHAR(50) NOT NULL,
    moneda VARCHAR(10) NOT NULL,
    importe_cuota_mensual DECIMAL(10,2) NOT NULL
);

-- Tabla de cuotas
CREATE TABLE cuotas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    concepto VARCHAR(255) NOT NULL,
    fecha_emision DATE NOT NULL,
    importe DECIMAL(10,2) NOT NULL,
    pagada ENUM('S', 'N') DEFAULT 'N',
    fecha_pago DATE NULL,
    notas TEXT,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE
);

-- Tabla de incidencias/tareas
CREATE TABLE tareas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    operario_id INT NULL,
    persona_contacto VARCHAR(100) NOT NULL,
    telefono_contacto VARCHAR(15) NOT NULL,
    correo_contacto VARCHAR(100) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    poblacion VARCHAR(100) NOT NULL,
    codigo_postal VARCHAR(5) NOT NULL,
    provincia VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    estado ENUM('Pendiente', 'Realizada', 'Cancelada') DEFAULT 'Pendiente',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_realizacion DATE NULL,
    anotaciones_anteriores TEXT NULL,
    anotaciones_posteriores TEXT NULL,
    fichero_resumen VARCHAR(255) NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE,
    FOREIGN KEY (operario_id) REFERENCES empleados(id) ON DELETE SET NULL
);