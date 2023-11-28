CREATE TABLE "Roles" (
	"id_role"	INTEGER NOT NULL UNIQUE,
	"role_nam"	TEXT
)

CREATE TABLE "Users" (
	"ID_Users"	INTEGER NOT NULL UNIQUE,
	"Name"	TEXT NOT NULL,
	"vorname"	TEXT NOT NULL,
	"email"	TEXT NOT NULL
)

CREATE TABLE "Groups" (
	"Id_Groups"	INTEGER NOT NULL UNIQUE,
	"Groups_name"	TEXT NOT NULL
)

CREATE TABLE "Events" (
	"Id_Events"	INTEGER NOT NULL UNIQUE,
	"Title"	TEXT NOT NULL
)

CREATE TABLE "Agenda" (
	"Id_Agenda"	INTEGER NOT NULL UNIQUE,
	"Agenda_Name"	TEXT NOT NULL
)