DROP TABLE inventory;
DROP TABLE ship;

CREATE TABLE inventory(partNumber INT NOT NULL, quantity INT, PRIMARY KEY (partNumber));
CREATE TABLE ship(bracket INT PRIMARY KEY, charges FLOAT);
