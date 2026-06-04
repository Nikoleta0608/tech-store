<?php
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<title>Tech Store</title>";

echo "<style>
body {
    margin: 0;
    font-family: Arial;
    background: linear-gradient(to right, #6dd5ed, #2193b0);
}

h1 {
    text-align: center;
    padding: 20px;
    color: white;
    font-size: 40px;
}

.container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
    padding: 40px;
}

.product {
    background: white;
    width: 220px;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
    transition: 0.3s;
}

.product:hover {
    transform: scale(1.1);
}

.product h3 {
    margin-bottom: 10px;
}

.price {
    font-size: 18px;
    font-weight: bold;
    color: #2193b0;
}

button {
    margin-top: 10px;
    padding: 10px;
    border: none;
    background: #2193b0;
    color: white;
    border-radius: 8px;
    cursor: pointer;
}

button:hover {
    background: #176d8c;
}
</style>";

echo "</head>";
echo "<body>";

echo "<h1>Tech Store</h1>";

echo "<div class='container'>";

echo "<div class='product'>";
echo "<h3>iPhone 14</h3>";
echo "<p class='price'>1500 euro</p>";
echo "<button>Buy</button>";
echo "</div>";

echo "<div class='product'>";
echo "<h3>Samsung Galaxy S23</h3>";
echo "<p class='price'>1300 euro</p>";
echo "<button>Buy</button>";
echo "</div>";

echo "<div class='product'>";
echo "<h3>Apple Watch</h3>";
echo "<p class='price'>800 euro</p>";
echo "<button>Buy</button>";
echo "</div>";

echo "<div class='product'>";
echo "<h3>Samsung Watch</h3>";
echo "<p class='price'>600 euro</p>";
echo "<button>Buy</button>";
echo "</div>";

echo "</div>";

echo "</body>";
echo "</html>";
?>