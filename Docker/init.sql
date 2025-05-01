CREATE USER userlibreria WITH PASSWORD 'libreria';
CREATE DATABASE libreria OWNER userlibreria;
GRANT ALL PRIVILEGES ON DATABASE libreria TO userlibreria;
