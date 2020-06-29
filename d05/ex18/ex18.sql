SELECT name from distrib
WHERE id_distrib = 42 or
id_distrib BETWEEN 62 and 69 or
id_distrib = 71 or
id_distrib BETWEEN 88 and 90
OR LOWER(name) LIKE '%y%y%'
LIMIT 2, 5;