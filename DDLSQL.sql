DROP TABLE IF EXISTS Inventory;   -- Remove tables that's been already created
DROP TABLE IF EXISTS Ship;

CREATE TABLE Inventory( partNum INT NOT NULL, qty INT, PRIMARY KEY (partNum));
CREATE TABLE Ship(bracket INT PRIMARY KEY, price FLOAT);
