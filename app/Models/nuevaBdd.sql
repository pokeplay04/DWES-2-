CREATE TABLE `tareas` (
  `id` int(5) PRIMARY KEY AUTO_INCREMENT,
  `nif_cif` varchar(50),
  `nombre` varchar(100),
  `apellidos` varchar(100),
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