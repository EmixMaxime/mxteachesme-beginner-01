CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  email VARCHAR(100) UNIQUE,
  first_name VARCHAR(55),
  last_name VARCHAR(55),
  password VARCHAR(60)
);
