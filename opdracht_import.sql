CREATE DATABASE `opdracht`;
CREATE TABLE `leerlingen`(
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    leerl_num int NOT NULL,
    naam VARCHAR(255) NOT NULL,
    klas VARCHAR(255) NOT NULL,
    blok enum ('1', '2', '3', '4') NOT NULL,
    week enum ('1', '2', '3', '4') NOT NULL,
    keuze_vak enum ('Wiskunde', 'Frans', 'Nederlands', 'Geschiedenis', 'Aardrijskunde', 'Duits', 'Engels', 'NS', 'Biologie') NOT NULL

);

CREATE TABLE `docenten`(
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   
    naam VARCHAR(255) NOT NULL,

    blok enum ('1', '2', '3', '4') NOT NULL,
    week enum ('1', '2', '3', '4') NOT NULL,
    vak enum ('Wiskunde', 'Frans', 'Nederlands', 'Geschiedenis', 'Aardrijskunde', 'Duits', 'Engels', 'NS', 'Biologie') NOT NULL,
    type_aanbod enum ('Remedierend', 'Vakoverstijgend/ verdiepend', 'Zelfstudie') NOT NULL,
    type_onderwijs enum ('Regulier', 'TTO', 'Alle') NOT NULL,
    opmerkingen text not null


);


 