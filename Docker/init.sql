-- Crear usuario y base de datos
CREATE USER userlibreria WITH PASSWORD 'libreria';
CREATE DATABASE libreria OWNER userlibreria;
GRANT ALL PRIVILEGES ON DATABASE libreria TO userlibreria;

-- Esto es no seguro pero por motivos de testeo sirve
GRANT USAGE ON SCHEMA public TO userlibreria;
GRANT SELECT, INSERT, UPDATE, DELETE ON ALL TABLES IN SCHEMA public TO userlibreria;

-- Crear tabla libro
CREATE TABLE libro (
    id SERIAL PRIMARY KEY,
    titulo VARCHAR(120) NOT NULL,
    autor VARCHAR(120) NOT NULL,
    descr VARCHAR(240) DEFAULT '-',
    precio FLOAT NOT NULL DEFAULT 0.99,
    imagen VARCHAR(120)
);

-- Insertar datos de ejemplo
INSERT INTO libro (titulo, autor, precio, imagen) VALUES
('Dracula', 'Abraham Stoker', 9.99, '/assets/img/libro.jpg'),
('Farenheit 451', 'Ray Bradbury', 1500.99, '/assets/img/libro.jpg'),
('El hombre de la mascara de hierro', 'Alexander Dumas', 1600.99, '/assets/img/libro.jpg'),
('Orgullo y prejuicio', 'Jane Austen', 1700.99, '/assets/img/libro.jpg'),
('1984', 'George Orwell', 1800.99, '/assets/img/libro.jpg'),
('El señor de los Anillos', 'J.R.R. Tolkien', 1900.99, '/assets/img/libro.jpg'),
('Como matar a un ruiseñor', 'Harper Lee', 1000.99, '/assets/img/libro.jpg'),
('Rebelion en la Granja', 'George Orwell', 2000.99, '/assets/img/libro.jpg'),
('El moderno Prometeo', 'Mary Wollstonecraft Shelley', 3000.99, '/assets/img/libro.jpg'),
('Guia del viajero intergalactico', 'Douglas Adams', 4000.99, '/assets/img/libro.jpg'),
('El gran Gatsby', 'F. Scott Fitzgerald', 1500.99, '/assets/img/libro.jpg'),
('Un mundo feliz', 'Aldous Huxley', 1600.99, '/assets/img/libro.jpg'),
('El guardian entre el centeno', 'J.D. Salinger', 1700.99, '/assets/img/libro.jpg'),
('Dr. Jekyll y el Señor Hyde', 'Robert Louis Stevenson', 5000.99, '/assets/img/libro.jpg'),
('Alicia en el pais de las maravillas', 'Lewis Carroll', 6000.99, '/assets/img/libro.jpg'),
('El conde de montecristo', 'Alexander Dumas', 7000.99, '/assets/img/libro.jpg'),
('Jane Eyre', 'Charlotte Bronte', 2000.99, '/assets/img/libro.jpg'),
('Cumbres Borrascosas', 'Emily Bronte', 3500.99, '/assets/img/libro.jpg'),
('El señor de las moscas', 'William Golding', 8400.99, '/assets/img/libro.jpg'),
('La cepa de andromeda', 'Michael Criton', 2500.99, '/assets/img/libro.jpg'),
('La gran expectativa', 'Charles Dickens', 3400.99, '/assets/img/libro.jpg'),
('Trampa-22', 'Joseph Heller', 1700.99, '/assets/img/libro.jpg'),
('100 años de soledad', 'Gabriel Garcia Marquez', 7600.99, '/assets/img/libro.jpg'),
('El retrato de Dorian Grey', 'Oscar Wilde', 9500.99, '/assets/img/libro.jpg'),
('Don Quijote de la mancha', 'Miguel de Cervantes Saavedra', 1000.99, '/assets/img/libro.jpg'),
('Crime y castigo', 'Fyodor Dotoevsky', 1900.99, '/assets/img/libro.jpg'),
('Mujercitas', 'Louisa May Alcott', 2500, '/assets/img/libro.jpg'),
('El llamado de lo salvaje', 'Jack London', 1600.99, '/assets/img/libro.jpg'),
('El viento en los sauces', 'Kenneth Grahame', 8600.99, '/assets/img/libro.jpg'),
('La teleraña de Charlotte', 'E.B. White', 1600.99, '/assets/img/libro.jpg'),
('David Copperfield', 'Charles Dickens', 8800.99, '/assets/img/libro.jpg'),
('Los viajes de Gulliver', 'Jonathan Swift', 5500.99, '/assets/img/libro.jpg'),
('El club de la pelea', 'Chuck Palahniuk', 2800.99, '/assets/img/libro.jpg'),
('Watchmen', 'Alan Moore', 1600.99, '/assets/img/libro.jpg'),
('Moby-Dick', 'Herman Melville', 8400.99, '/assets/img/libro.jpg'),
('Las uvas de la ira', 'John Steinbeck', 8700.99, '/assets/img/libro.jpg'),
('La señora Dalloway', 'Virginia Woolf', 5400.99, '/assets/img/libro.jpg'),
('El alquemista', 'Paulo Coelho', 2300.99, '/assets/img/libro.jpg'),
('Lolita', 'Vladimir Nabokov', 5500.99, '/assets/img/libro.jpg'),
('La naranja mecanica', 'Antony Burgess', 6700.99, '/assets/img/libro.jpg'),
('Picnic Extraterrestre', 'Arkady and Boris Strugatsky', 8700.99, '/assets/img/libro.jpg'),
('Corazon delator', 'Edgar Allan Poe', 7400.99, '/assets/img/libro.jpg'),
('El hombre invisible', 'Ralph Ellison', 3200.99, '/assets/img/libro.jpg'),
('Hacia el faro', 'Virginia Woolf', 8700.99, '/assets/img/libro.jpg'),
('Ulysses', 'James Joyce', 5300.99, '/assets/img/libro.jpg'),
('Un mago en Terramar', 'Ursula K. Le guin', 3500.99, '/assets/img/libro.jpg'),
('El jardin secreto', 'Frances Hodgson Burnett', 1500.99, '/assets/img/libro.jpg'),
('Memorias de una Geisha', 'Arthur Golden', 3200.99, '/assets/img/libro.jpg');
