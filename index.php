<?php
require_once './order_functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chez Session | Order</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header>
        <h1>Chez Session</h1>
        <p>Build your perfect dessert and drink combination.</p>
    </header>

    <main>
        <h2>Place Your Order</h2>

        <form action="process_order.php" method="POST">

            <!-- Desserts -->
            <div class="form-group">
                <label for="dessert">🍰 Dessert</label>

                <select id="dessert" name="dessert">
                    <option value="none">Choose a dessert</option>
                    <option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?>>Cheesecake</option>
                    <option value="Chocolate Cake" <?= dessertSelected("Chocolate Cake"); ?>>Chocolate Cake</option>
                    <option value="Carrot Cake" <?= dessertSelected("Carrot Cake"); ?>>Carrot Cake</option>
                    <option value="Tiramisu" <?= dessertSelected("Tiramisu"); ?>>Tiramisu</option>
                </select>
            </div>

            <!-- Drinks -->
            <div class="form-group">
                <label for="drink">☕ Drink</label>

                <select id="drink" name="drink">
                    <option value="none">Choose a drink</option>
                    <option value="Coffee" <?= drinkSelected("Coffee"); ?>>Coffee</option>
                    <option value="Hot Chocolate" <?= drinkSelected("Hot Chocolate"); ?>>Hot Chocolate</option>
                    <option value="Root Beer" <?= drinkSelected("Root Beer"); ?>>Root Beer</option>
                    <option value="Tea" <?= drinkSelected("Tea"); ?>>Tea</option>
                    <option value="Milk" <?= drinkSelected("Milk"); ?>>Milk</option>
                </select>
            </div>

            <!-- Drink Sizes-->
             <fieldset class="form-group">
                <legend>🥤 Drink Size</legend>

                <label>
                    <input type="radio" name="drinkSize" value="Small"
                        <?= drinkSizeSelected("Small"); ?>
                    >
                    Small
                </label>

                <label>
                    <input type="radio" name="drinkSize" value="Medium"
                        <?= drinkSizeSelected("Medium"); ?>
                    >
                    Medium
                </label>

                <label>
                    <input type="radio" name="drinkSize" value="Large"
                        <?= drinkSizeSelected("Large"); ?>
                    >
                    Large
                </label>
            </fieldset>

            <div class="form-actions">
                <button type="submit" class="submit-btn">
                    Send to Kitchen 👨‍🍳
                </button>
            </div>
        </form>

        <!--Reset button-->
        <div class="form-actions">
            <a href="forget_order.php" class="reset-btn">
                Forget Order 🧹
            </a>
        </div>

        <section class="insight-card" aria-labelledby="guidance-heading">
            <h3 id="guidance-heading">Live Guidance</h3>

            <p>
                <?= htmlspecialchars(completionMessage()); ?>
            </p>

            <p class="insight-note">
                <?= htmlspecialchars(pairingSuggestion()); ?>
            </p>
        </section>

        <section class="insight-card pricing-grid" aria-label="Order pricing information">

            <div>
                <h3>Estimated Total</h3>
                <p class="price-figure">
                    <?= htmlspecialchars(formattedTotal()); ?>
                </p>
            </div>

            <div>
                <h3>Order Profile</h3>
                <p>
                    <?= htmlspecialchars(orderProfile()); ?>
                </p>
            </div>

            <p class="insight-note full-width-note">
                <?= htmlspecialchars(pricingNote()); ?>
            </p>

        </section>
    </main>

</body>
</html>