CREATE TABLE Student (
StudentID int NOT NULL,
FirstName varchar (50) NOT NULL,
LastName varchar (50) NOT NULL,
IU email varchar (50) NOT NULL,
Street varchar (200) NOT NULL,
State varchar (2) NOT NULL,
Zip int NOT NULL,
Phone varchar (15) NOT NULL,
Birth Date date NOT NULL,
PRIMARY KEY (StudentID),
FOREIGN KEY (MealID) REFERENCES Meal(MealID),
FOREIGN KEY (LocationID) REFERENCES Location(LocationID)
);

CREATE TABLE Meal (
MealID int NOT NULL,
Name varchar (30) NOT NULL,
Description varchar (200) NOT NULL,
Allergens varchar (200) NOT NULL,
Cost int NOT NULL,
StudentID int(11),
LocationID int(11),
PRIMARY KEY (MealID),
FOREIGN KEY (LocationID) REFERENCES Location(LocationID),
FOREIGN KEY (PaymentID) REFERENCES Payment(PaymentID),
FOREIGN KEY (StudentID) REFERENCES Student(StudentID)
);

CREATE TABLE Location (
LocationID int NOT NULL,
Name varchar (15) NOT NULL,
Street varchar (200) NOT NULL,
State varchar (2) NOT NULL,
Zip int NOT NULL,
StudentID int(11),
PRIMARY KEY (LocationID),
FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
FOREIGN KEY (MealID) REFERENCES Meal(MealID)
);

CREATE TABLE Payment (
PaymentID int NOT NULL AUTO_INCREMENT,
Type varchar (50) NOT NULL,
Card Details varchar (200) NOT NULL,
StudentID int(11),
PRIMARY KEY (PaymentID),
FOREIGN KEY (MealID) REFERENCES Meal(MealID)
);

CREATE TABLE Favorite (
FavoriteID int NOT NULL,
Name varchar (30) NOT NULL,
PRIMARY KEY (LocationID),
FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
FOREIGN KEY (LocationID) REFERENCES Location(LocationID),
FOREIGN KEY (MealID) REFERENCES Meal(MealID),
FOREIGN KEY (PaymentID) REFERENCES Payment(PaymentID)
);

CREATE TABLE MealPlan (
id int(9) NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
PRIMARY KEY (id)
) ;

CREATE TABLE Menu (
MenuID int(11) NOT NULL AUTO_INCREMENT,
Dish varchar(25) NOT NULL,
Ingredients varchar(500) NOT NULL,
Price int(11) NOT NULL,
PRIMARY KEY (MenuID)
) ;

CREATE TABLE Order_details (
id int(11) NOT NULL AUTO_INCREMENT,
name varchar(50),
price int(8),
PRIMARY KEY (id)
) ;

CREATE TABLE User (
FirstName varchar(30) NOT NULL,
LastName varchar(30) NOT NULL,
Gmail varchar(50),
reg_date timestamp NOT NULL
) ;
