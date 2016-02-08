-- Write and test some SQL to add two categories and 4 products (2 products in each category).

-- Save all the SQL under the repository under the directory "sql" in a file named "part1.sql".

insert into categories (category_name) values ('apparel'), ('accessories');

insert into products (category_id,product_name,price,quantity_remaining,description,image) values
  (1, 'Maraschino Silk Blouse',35,15,'Mix + Match this bold and sexy statement piece with anything in your wardrobe to create a stunning yet professional outfit.','blouse.jpg'),
  (1, 'Little Black Dress',35,15,'One is never over-dressed or under-dressed with a Little Black Dress.','dress.jpg'),
  (2, 'Zodiac Constellation Pendant',14,5,'Constellation Necklace with Zodiac signs for all twelve months. Matte plated silver pendants are approx 10- 26mm. Sparkling silver plated chain with a lobster clasp. You choose chain length and Zodiac sign.','zodiac.jpg'),
  (2, 'Stackable Bracelets Galaxy Space stacked Bangles',10,10,'When I look up at the night sky and I know that, yes - we are part of this universe, we are in this universe. But, perhaps more important than both of those facts, is that the universe is in us.','bracelet.jpg');
