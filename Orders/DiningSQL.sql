CREATE TABLE Food (  
  id int(11) NOT NULL AUTO_INCREMENT,  
  name varchar(255) NOT NULL,  
  image varchar(255) NOT NULL,  
  price double(10,2) NOT NULL,  
  PRIMARY KEY (id)  
 ) ;
 
 INSERT INTO Food (id, name, image, price) VALUES  
 (1, 'Cheese Pizza', '1.jpg', 4.00),  
 (2, 'Chips', '2.jpg', 1.50),  
 (3, 'Lo Mein', '3.jpg', 7.00);
 
  INSERT INTO Food (id, name, image, price) VALUES  
 (4, 'Jacob Bluefinger', '4.jpg', 5.00),  
 (5, 'Boney Billy', '5.jpg', 5.00),  
 (6, 'Comet Morehouse', '6.jpg', 6.00),
 (7, 'Pepperoni Pizza', '7.jpg', 4.00),  
 (8, 'Sausage Pizza', '8.jpg', 5.00),  
 (9, 'Cheesy Breadsticks', '9.jpg', 3.50),
 (10, 'Bagel and Cream Cheese', '10.jpg', 2.00),  
 (11, 'Spinach Wrap', '11.jpg', 6.50),  
 (12, 'Water', '12.jpg', 1.99),
 (13, 'Side of Cream Cheese','13.jpg',0.75);
