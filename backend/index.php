<?php
$conn = new mysqli("db", "user", "password", "tech_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->query("
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price INT,
    image VARCHAR(255)
)");


$result = $conn->query("SELECT COUNT(*) as count FROM products");
$row = $result->fetch_assoc();

if ($row['count'] == 0) {
    $conn->query("
INSERT INTO products (name, price, image) VALUES
('iPhone 17 pro', 1500, '<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWhNGAIKL-F35Z0JsKfKXJldMUmaZd7OWB2w&s\">'),
('Apple Watch S10', 1300, '<img src=\"https://cdsassets.apple.com/live/7WUAS350/images/tech-specs/121202-apple-watch-series-10.png\">')
");
}

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tech Store</title>

    <style>
        body {
            font-family: Arial;
            background: #4d0044;
            margin: 0;
            text-align: center;
        }

        h1 {
            background: #e8ed84;
            color: black;
            padding: 20px;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 50px;
            flex-wrap: wrap;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 220px;
            box-shadow: 0 0 10px gray;
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            border-radius: 10px;
        }

        button {
            background: #e8ed84;
            color: black;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        button:hover {
            background: orange;
        }
    </style>
</head>
<body>

<h1>Tech Store</h1>

<div class="container">

<?php while($row = $result->fetch_assoc()): ?>
    <div class="card">
        <img src="<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
        <h2><?= $row['name'] ?></h2>
        <p><?= $row['price'] ?> euro</p>
        <button>Buy</button>
    </div>
<?php endwhile; ?>

</div>

</body>
</html>
