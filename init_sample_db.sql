
-- mysql -u root -proot < init_sample_db.sql

use sample;

CREATE TABLE users (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(10),
  PRIMARY KEY (id)
);

INSERT INTO
  users(name)
VALUES
  ('Alice'),
  ('Bob'),
  ('Charlie'),
  ('Dave'),
  ('Eve'),
  ('Mallory'),
  ('Steve'),
  ('Trent')
;
