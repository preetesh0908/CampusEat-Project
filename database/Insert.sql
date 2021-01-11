INSERT INTO Location (LocationID, Name, Street, State, Zip, StudentID)
VALUES (1, ‘Luddy Hall’, ‘2020 Pajama street’, ‘IN’, ‘47474’),
(2, ‘Kelley Cafe’, ‘245 Murgi street, ‘IN’, ‘47666’),
(3, ‘Wells Library’, ‘2020 Maki street’, ‘IN’, ‘46656’),
(4, ‘Wright Quad’, ‘501 N Jordan Avenue’, ‘IN’, ‘47406’),
(5, ‘Forest Quad’, ‘1725 E 13th Street, ‘IN’, ‘47406’) 
;

INSERT INTO Meal (MealID, Name, Description, Allergens, Cost, StudentID, LocationID, Image)
VALUES (1, ‘Cheese Pizza’, ‘3 Blended cheeses come to life!’, ‘Contains dairy and gluten’, 4, 2000089791, 2,  ‘1.jpg’),
(2, ‘Chicken Tikka Masala’, ‘Feel soaked in Indian spices! Come with Rice.’, ‘Contains dairy’, 4, 2000082791, ‘2.jpg’),
(3, ‘Lo Mein’, ‘Feeling sweet? Try our spicy noodles!’, ‘Contains gluten’, 5, 2000482791, ‘3.jpg’),
(4, ‘Jacob Bluefinger’, ‘Save animals, be Vegetarian!’, ‘Contains gluten, dairy, egg and soy’, 5, 2000433791, ‘4.jpg’),
(5, ‘Narmer’, ‘For those who only love Turkey!’, ‘Contains gluten, dairy, egg and soy’, 5, 2300433791, ‘5.jpg’),
(6, ‘Grif’, ‘For those who only love Turkey, but like to go Ham too!’, ‘Contains gluten, dairy, egg and soy’, 6, 2300433791, ‘6.jpg’),
(7, ‘Boney Billy’, ‘Another Turkey special for you Turks!’, ‘Contains gluten, dairy, egg and soy’, 5, 2300437791, ‘7.jpg’),
(8, ‘Comet Morehouse’, ‘If you prefer just one kind of meat, GO HAM!’, ‘Contains gluten, dairy, egg and soy’, 5, 2300227791, ‘8.jpg’),
(9, ‘Pepperoni Pizza’, ‘The classic pizza with Pepperoni!’, ‘Contains dairy, gluten and pork’, 8, 2300432291, ‘9.jpg’),
(10, ‘Sausage Pizza’, ‘The classic pizza with Sausage!’, ‘Contains dairy, gluten and pork’, 8, 2300437091, ‘10.jpg’),
(11, ‘Hoosier Classic Pizza’, ‘The classic pizza with Sausage, Pepperoni and Bacon’, ‘Contains dairy, gluten and pork’, 10, 2300439791, ‘11.jpg’),
(12, ‘Cheesy Breadsticks, ‘The classic burst of cheese in breadsticks’, ‘Contains dairy and gluten’, 10, 2300430791, ‘12.jpg’),
(13, ‘Cinnamon Breadsticks’, ‘The classic burst of cinnamon in breadsticks’, ‘Contains dairy and gluten’, 10, 2300439991, ‘13.jpg’),
(14, ‘Bagel and Cream Cheese’, ‘The basic but best Bagel experience’, ‘Contains sesame and gluten’, 2, 2309437791, ‘14.jpg’),
(15, ‘Chips’, ‘Potato chips at its finest’, ‘Contains gluten’, 2, 2389437791, ‘15.jpg’),
(16, ‘Django Chicken’, ‘Classic yummy chicken sandwich’, ‘Contains gluten and dairy’, 7, 2300437791, ‘16.jpg’),
(17, ‘Spinach Wrap’, ‘Add the perfect ingredients to the perfect wrap’, ‘Contains gluten and dairy’, 6, 1230487791, ‘17.jpg’),
(18, ‘Chicken Caprese’, ‘Exactly what it sounds like - the perfect Caprese’, ‘Contains gluten and dairy’, 7, 2309877791, ‘18.jpg’) 
;

INSERT INTO MealPlan (id, name)
VALUES (111111111, ‘ppatodi’),
(123456789, ‘vkar’),
(222222222, ‘vkankari’),
(333333333, ‘smohta’) 
;

INSERT INTO Menu (MenuID, Dish, Ingredients, Price)
VALUES (1, ‘Beyond Burger’, ‘Beef, Gluten, Soy’, 5),
(2, ‘Grilled Cheese’, ‘Dairy, Gluten, Soy’, 6),
(3, ‘Chicken Tenders’, ‘Beef, Gluten, Soy’, 5),
(4, ‘Grilled Cheese with Meat’, ‘Gluten, Dairy, Soy, Pork’, 7)
;

INSERT INTO Payment (PaymentID, Type, CardDetails, StudentID)
VALUES (1, ‘Credit’, 2020474856759980, 2000090876),
(2, ‘Debit’, 2019415089324467, 2000089651),
(3, ‘Paypal’, victorissiters, 3000090209)
;

INSERT INTO Student (StudentID, FirstName, LastName, IUemail, Street, State, Zip, Phone, Birth, MealID)
VALUES (2000107755, ‘Vivek’, ‘Kankaria’, ‘vkankari@iu.edu’, ‘510 E Cottage Grove Ave’, ‘IN’, 47408, ‘8572065043’, ‘1998-04-02’, ‘NULL’)
(2000137456, ‘Suyash’, ‘Mohta’, ‘smohta@iu.edu’, ‘601 N Collage Ave’, ‘IN’, 47404, ‘8126867638’, ‘1997-04-23’, ‘NULL’),
(2147483647, ‘Preetesh’, ‘Patodi’, ‘ppatodi@iu.edu’, ‘601 N Woodlawn Ave’, ‘IN’, 47404, ‘8634767638’, ‘1997-07-26’, ‘NULL’)
;

 INSERT INTO Food (id, name, image, price, Location) 
 VALUES (14, 'Veggie Burger', '14.jpg', 6.00, Wells library),  
 (15, 'Cheese Hamburger', '15.jpg', 6.00, Wells Library),  
 (16, 'Chicken Caprese', '16.jpg', 5.00, Wright Quad),
 (17, 'Django Chicken', '17.jpg', 5.00, Wright Quad),  
 (18, 'BBQ Pizza', '18.jpg', 5.50, Wright Quad),  
 (19, 'Spinach Wrap', '19.jpg', 4.50, Wright Quad),
 (20, 'Chicken Panini', '20.jpg', 5.50, Wright Quad),  
 (21, 'Sprite', '21.jpg', 1.50, Forest Quad),  
 (22, 'Alfredo Pasta', '22.jpg', 5.00, Forest Quad),
 (23, 'Pesto Pasta','23.jpg',5.00, Forest Quad),
 (24, 'Omlette','24.jpg',4.50, Forest Quad),
 (25, 'Tofu Rice','25.jpg',6.00, Forest Quad) 
 ;
