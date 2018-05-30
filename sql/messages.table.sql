CREATE TABLE messages (
  id SERIAL PRIMARY KEY,
  user_id int FOREIGN KEY REFERENCES users(id),
  message VARCHAR(250),
  date timestamp
);
