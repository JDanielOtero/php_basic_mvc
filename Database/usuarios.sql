CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertar dos registros de ejemplo
INSERT INTO usuarios (username, password, nombre) 
VALUES 
('usuario1', 'clave123', 'Juan Pérez'),
('usuario2', 'secreto456', 'María López');
