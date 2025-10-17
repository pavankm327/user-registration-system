PREPARE stmt from 'SELECT orders.customer_id, name, email, sum(amount) as total_spent from orders inner join customers on customers.customer_id = orders.customer_id WHERE order_date BETWEEN ? AND ?  GROUP BY orders.customer_id order by total_spent DESC LIMIT 5';

SET @start_date = '2023-07-01';
SET @to_date = '2024-07-01';

EXECUTE stmt USING @start_date, @to_date;