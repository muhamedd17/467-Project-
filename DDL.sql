DROP TABLE inventory;
DROP TABLE ship;
DROP TABLE orderIndex;
DROP TABLE orderDetail;

CREATE TABLE orderDetail(
    customerID INT NOT NULL AUTO_INCREMENT,
    name       VARCHAR(30) NOT NULL,
    address    VARCHAR(60) NOT NULL,
    email      VARCHAR(30) NOT NULL,
    cardNumber VARCHAR(16) NOT NULL,
    cardExpire DATE     NOT NULL,
    complete   INT     NOT NULL DEFAULT 0,
    weight     INT     NOT NULL DEFAULT 0,
    dateSubmit DATE    NOT NULL,
    total      DECIMAL(12,2) NOT NULL DEFAULT 0,
    
    PRIMARY KEY (customerID)
);

CREATE TABLE inventory(partNumber INT NOT NULL, quantity INT, PRIMARY KEY (partNumber));
CREATE TABLE ship(bracket INT PRIMARY KEY, charges FLOAT);
CREATE TABLE orderIndex(orderNumber INT NOT NULL, partNumber INT NOT NULL, quantity INT, PRIMARY KEY (orderNumber, partNumber), FOREIGN KEY (orderNumber) REFERENCES orderDetail(customerID));
