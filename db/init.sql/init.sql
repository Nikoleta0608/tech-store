CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price INT,
    image VARCHAR(255)
);

INSERT INTO products (name, price, image) VALUES
('iPhone 17 pro', 1500, '<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWhNGAIKL-F35Z0JsKfKXJldMUmaZd7OWB2w&s\">'),
('Apple Watch S10', 1300, '<img src=\"https://cdsassets.apple.com/live/7WUAS350/images/tech-specs/121202-apple-watch-series-10.png\">');