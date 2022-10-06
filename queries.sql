SELECT * FROM series
WHERE has_won_awards = 1;

SELECT * FROM series 
WHERE rating > 2.5;

SELECT * FROM series
WHERE country = 'NL' AND language = 'NL';

SELECT MAX(seasons) FROM series;

SELECT * FROM series
WHERE seasons <> 3;

SELECT * FROM series
WHERE seasons < 5;

SELECT * FROM series
WHERE seasons < 3 OR seasons > 20;

SELECT * FROM series
WHERE title LIKE 'th%';

SELECT * FROM series
WHERE rating > 2.5
ORDER BY rating DESC;

SELECT * FROM series
WHERE seasons < 5
ORDER BY seasons ASC;

SELECT * FROM series
WHERE seasons < 3 OR seasons > 20
ORDER BY seasons AND country ASC;