CREATE TABLE feedback(
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  body TEXT DEFAULT '',
  date DATETIME
);

INSERT INTO feedback(name, email, body, date) VALUES
('John', 'john@gmail.com', 'I like it', current_timestamp()),
('Raizo', 'Raizo@gmail.com', 'please add more video', current_timestamp()),
('Kaksashi', 'Kaksashi@gmail.com', 'let do new project', current_timestamp()),