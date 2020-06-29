select upper(last_name) as "NAME", first_name, price from user_card
INNER JOIN subscription ON user_card.id_user = subscription.id_sub
WHERE subscription.price > 42
ORDER BY last_name, first_name ASC;