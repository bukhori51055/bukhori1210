SELECT products.id AS id_category,
  products.name,
  product_categories.name AS name_category
FROM product_categories
  INNER JOIN products ON product_categories.id = products.category_id
