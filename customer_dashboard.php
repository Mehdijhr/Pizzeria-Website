<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Order Form</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    background-image: url(/webdesignassignment/images/background.jpg);
    
}


    body { 
            margin: 0px;
        }
    header {
        background-color: #000000;
         color: #fff;
        padding: 20px;
        text-align: right;
        display: flex;
        justify-content: space-between; 
        align-items: center;
        }
        p {

        font-family: Lucida Handwriting,Cursive;
        text-align: left;
        text-decoration: none;
        color: white;
        margin: 0; 
        padding: 0; 
}

main {
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
}

fieldset {
    border: 1px solid #ccc;
    margin-top: 20px;
    padding: 10px;
}

legend {
    padding: 0 5px;
    font-weight: bold;
    color: #333;
}

label {
    margin-right: 10px;
}

select, input[type="text"], input[type="tel"] {
    padding: 8px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="checkbox"] {
    margin-right: 5px;
}

button {
    background-color: #0056b3;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 20px;
}

button:hover {
    background-color: #003580;
}

footer {
    text-align: center;
    padding: 10
}

</style>
</head>

<body>
<header>
    <p> DELICIOUS PIZZA </p>

</header>
    <main>
        <form action="submit_order.php" method="post">
            <fieldset>
                <legend>Choose Your Pizza or Pasta</legend>
                <label for="pizza-type">Pizza or Pasta Type:</label>
                <select id="pizza-type" name="pizza_type">
                    <option value="margherita">Pizza Margherita</option>
                    <option value="diavola">Pizza Diavola</option>
                    <option value="napoli"> Pizza Napoli</option>
                    <option value="americana">Pizza Americana</option>
                    <option value="Pinna-Gialla">Pizza Pinna-Gialla</option>
                    <option>-------------------------------------------</option>
                    <option value="Bolognese">Spaghetti ala Bolognese</option>
                    <option value="Ligure">Spaghetti ala Ligure</option>
                    <option value="Penne"> Penne Rustiche</option>
                    <option value="Adriatico">Risotto Adriatico</option>
                
                </select>

                <label for="size">Size:</label>
                <select id="size" name="size">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>

                <fieldset>
                    <legend>Additional Toppings (select multiple):</legend>
                    <input type="checkbox" id="mushrooms" name="toppings" value="mushrooms">
                    <label for="mushrooms">Mushrooms</label><br>
                    <input type="checkbox" id="peppers" name="toppings" value="peppers">
                    <label for="peppers">Peppers</label><br>
                    <input type="checkbox" id="onions" name="toppings" value="onions">
                    <label for="onions">Onions</label><br>
                    <input type="checkbox" id="extra-cheese" name="toppings" value="extra_cheese">
                    <label for="extra-cheese">Extra Cheese</label><br>
                    <input type="checkbox" id="none" name="none" value="none">
                    <label for="none">None</label><br>
                </fieldset>
            </fieldset>

            <fieldset>
                <legend>Your Information</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required><br>

                <label for="phone">Phone:</phone>
                <input type="tel" id="phone" name="phone" required>
            </fieldset>

            <button type="submit">Place Order</button>
        </form>
    </main>
    <footer>
        <p>Thank you for choosing Our Pizzeria!</p>
    </footer>
</body>
</html>
