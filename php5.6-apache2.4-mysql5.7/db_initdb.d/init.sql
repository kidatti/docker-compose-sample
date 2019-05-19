DROP SCHEMA IF EXISTS test;
CREATE SCHEMA test;
USE test;

DROP TABLE IF EXISTS users;

CREATE TABLE users
(
    id   INT(8) AUTO_INCREMENT,
    name VARCHAR(100),
    primary key(id)
);

INSERT INTO users (name) VALUES ('aaa');
INSERT INTO users (name) VALUES ('bbb');
