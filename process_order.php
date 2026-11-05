<?php
    require_once './order_functions.php';
    $orderSummary = order();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chez Session | Order Receipt</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header>
        <h1>Chez Session</h1>
        <p>Your order has been sent to the kitchen!</p>
    </header>

    <main>
        <h2>Your Receipt</h2>

        <section class="receipt-card" aria-labelledby="receipt-heading">

            <div class="receipt-heading">
                <h3 id="receipt-heading">🧾 Order Summary</h3>
                <p>Your selections, saved for this session.</p>
            </div>

            <div class="receipt-details">
                <?= $orderSummary; ?>
            </div>

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

        <section class="insight-card" aria-labelledby="feedback-heading">
            <h3 id="feedback-heading">Order Feedback</h3>

            <p>
                <?= htmlspecialchars(completionMessage()); ?>
            </p>

            <p class="insight-note">
                <?= htmlspecialchars(pairingSuggestion()); ?>
            </p>
        </section>

        <div class="form-actions">
            <a href="index.php" class="return-btn">
                Order Again 🔄
            </a>
        </div>
    </main>

</body>
</html>