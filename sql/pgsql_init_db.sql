
-- psql -U postgres < $file

create database sample;

\c sample;

CREATE TABLE users (
  id int NOT NULL,
  name varchar(10),
  password varchar(100),
  PRIMARY KEY (id)
);

INSERT INTO
  users(id, name, password)
VALUES
  (0, 'pgsql', '145f72d28c8de8cd4ed7e343aa4589be'),
  (1, 'Alice', 'd8e8fca2dc0f896fd7cb4cb0031ba249'),
  (2, 'Bob', '8eec1e97ac602d3228bad33b61efeaae'),
  (3, 'Charlie', 'a86850deb2742ec3cb41518e26aa2d89'),
  (4, 'Dave', '12d3a1c72c28845a163703171f7f4ac1')
;
