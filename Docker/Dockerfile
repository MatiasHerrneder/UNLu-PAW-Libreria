FROM postgres:alpine

# Variables de entorno por defecto (puedes cambiarlas al correr el contenedor)
ENV POSTGRES_USER=postgres
ENV POSTGRES_PASSWORD=postgres
ENV POSTGRES_DB=postgres

COPY init.sql /docker-entrypoint-initdb.d/

# Exponemos el puerto por defecto de PostgreSQL
EXPOSE 5432
