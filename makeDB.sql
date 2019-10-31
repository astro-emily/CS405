
create table deceased_horses(name VARCHAR(50), breed VARCHAR(30), gender VARCHAR(30), dob DATE, UKYCase INT, RRCase INT PRIMARY KEY, trained VARCHAR(30), raceOutsideUSA VARCHAR(30), ageFirstRace DOUBLE);

create table living_horses(name VARCHAR(50), breed VARCHAR(30), gender VARCHAR(30), dob DATE, UKYCase INT PRIMARY KEY, trained VARCHAR(30), raceOutsideUSA VARCHAR(30), ageFirstRace DOUBLE);
