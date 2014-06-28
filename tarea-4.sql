-- Database: "tarea-4"

-- DROP DATABASE "tarea-4";

CREATE DATABASE "tarea-4"
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Spanish_Chile.1252'
       LC_CTYPE = 'Spanish_Chile.1252'
       CONNECTION LIMIT = -1;

-- Table: bodega

-- DROP TABLE bodega;

CREATE TABLE bodega
(
  id serial NOT NULL,
  nombre_bodega character(255),
  codigo_bodega character(255),
  updated_at timestamp with time zone,
  created_at time with time zone,
  CONSTRAINT bodega_pkey PRIMARY KEY (id),
  CONSTRAINT bodega_nombre_bodega_codigo_bodega_key UNIQUE (nombre_bodega, codigo_bodega)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE bodega
  OWNER TO postgres;

-- Table: producto

-- DROP TABLE producto;

CREATE TABLE producto
(
  id serial NOT NULL,
  nombre_producto character(255),
  codigo_producto character(255),
  precio_neto character(255),
  fk_bodega_id serial NOT NULL,
  created_at timestamp with time zone,
  updated_at time with time zone,
  CONSTRAINT producto_pkey PRIMARY KEY (id),
  CONSTRAINT producto_fk_bodega_id_fkey FOREIGN KEY (fk_bodega_id)
      REFERENCES bodega (id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT producto_nombre_producto_codigo_producto_key UNIQUE (nombre_producto, codigo_producto)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE producto
  OWNER TO postgres;
