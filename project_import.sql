CREATE DATABASE `project`;
CREATE TABLE `project`(
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gebruikersnaam VARCHAR(255) NOT NULL,
    wachtwoord VARCHAR(100) NOT NULL
    );
INSERT INTO `project` (`gebruikersnaam`, `wachtwoord`) VALUES (
    'gebruiker1', 'wachtwoord1');