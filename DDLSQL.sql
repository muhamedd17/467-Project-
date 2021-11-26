DROP TABLE IF EXISTS Inventory;   -- Remove tables that's been already created

CREATE TABLE Inventory(PARTID INT NOT NULL AUTO_INCREMENT, NAME VARCHAR(20), PRICE FLOAT, STOCK INT, WEIGHT FLOAT, PRIMARY KEY (PARTID));

INSERT INTO Inventory(NAME, PRICE, STOCK, WEIGHT) VALUES('Brakes','54.99',1,40);
