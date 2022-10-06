CREATE DATABASE movies
CREATE TABLE `films` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titel VARCHAR(100) NOT NULL,
    duur DECIMAL(2,1) NOT NULL,
    datum_van_uitkomst date,
    land_van_herkomst VARCHAR(100),
    omschrijving VARCHAR(100) NOT NULL,
    id_van_de_trailer_op_youtube VARCHAR(100) NOT NULL
    );
INSERT INTO `films` (titel, duur, datum_van_uitkomst, land_van_herkomst, omschrijving, id_van_de_trailer_op_youtube)
VALUES 
('Asddd', 2.4, '12-03-2022', 'NL', 'Prima film is om te zien', 'youtube.nl'),
('Bdfdf', 2.4, '12-03-2022', 'NL', 'Prima film is om te zien', 'youtube.nl'),
('Cdfsd', 2.4, '12-03-2022', 'NL', 'Prima film is om te zien', 'youtube.nl'),
('Dsdfsd', 2.4, '12-03-2022', 'NL', 'Prima film is om te zien', 'youtube.nl'),
('Edfdsf', 2.4, '12-03-2022', 'NL', 'Prima film is om te zien', 'youtube.nl');