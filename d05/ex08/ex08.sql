select last_name, first_name, birthdate from user_card
WHERE birthdate LIKE "%1989%"
ORDER BY last_name;