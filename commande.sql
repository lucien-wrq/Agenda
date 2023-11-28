CREATE TABLE Users(
   Id_Users INT,
   name VARCHAR(50) NOT NULL,
   vorname VARCHAR(50) NOT NULL,
   email VARCHAR(50) NOT NULL,
   PRIMARY KEY(Id_Users),
   UNIQUE(email)
);

CREATE TABLE Events(
   Id_Events INT,
   title VARCHAR(50) NOT NULL,
   description VARCHAR(500),
   PRIMARY KEY(Id_Events)
);

CREATE TABLE Groups(
   Id_group INT,
   group_name VARCHAR(50) NOT NULL,
   PRIMARY KEY(Id_group),
   UNIQUE(group_name)
);

CREATE TABLE Roles(
   Id_role INT,
   role_name VARCHAR(50) NOT NULL,
   PRIMARY KEY(Id_role),
   UNIQUE(role_name)
);

CREATE TABLE Possede(
   Id_Users INT,
   Id_role INT,
   PRIMARY KEY(Id_Users, Id_role),
   FOREIGN KEY(Id_Users) REFERENCES Users(Id_Users),
   FOREIGN KEY(Id_role) REFERENCES Roles(Id_role)
);

CREATE TABLE Appartenir(
   Id_Users INT,
   Id_group INT,
   PRIMARY KEY(Id_Users, Id_group),
   FOREIGN KEY(Id_Users) REFERENCES Users(Id_Users),
   FOREIGN KEY(Id_group) REFERENCES Groups(Id_group)
);

CREATE TABLE edit(
   Id_Users INT,
   Id_Events INT,
   Id_group INT,
   start_date DATETIME NOT NULL,
   end_date DATETIME NOT NULL,
   PRIMARY KEY(Id_Users, Id_Events, Id_group),
   FOREIGN KEY(Id_Users) REFERENCES Users(Id_Users),
   FOREIGN KEY(Id_Events) REFERENCES Events(Id_Events),
   FOREIGN KEY(Id_group) REFERENCES Groups(Id_group)
);
