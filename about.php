<?php
    require_once './order_functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chez Session | About</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header>
        <h1>Chez Session</h1>
        <p>Understanding how our PHP ordering system works.</p>

        <nav class="site-nav" aria-label="Main navigation">
            <a href="index.php">Order</a>
            <a href="about.php" aria-current="page">About</a>
        </nav>
    </header>

    <main>
        <h2>About Chez Session</h2>

        <section class="insight-card">
            <h3>What Is Chez Session?</h3>
            <p>
                Chez Session is a PHP-based dessert and drink ordering
                application. Customers can select a dessert, drink, and
                drink size, then submit their order to receive a receipt.
            </p>
            <p>
                The application uses PHP sessions to remember selections
                between pages and allows customers to restore or clear
                their saved orders.
            </p>
        </section>

        <section class="insight-card">
            <h3>How the Request Flow Works</h3>

            <ol>
                <li>
                    <strong>Build the order:</strong>
                    The customer selects a dessert, drink, and drink
                    size on index.php.
                </li>

                <li>
                    <strong>Submit the form:</strong>
                    The browser sends the selected values to
                    process_order.php using the POST method.
                </li>

                <li>
                    <strong>Store the selections:</strong>
                    The order() function reads the POST values and
                    saves them in the PHP session.
                </li>

                <li>
                    <strong>Display the receipt:</strong>
                    process_order.php displays the saved selections,
                    estimated total, and order feedback.
                </li>

                <li>
                    <strong>Restore the order:</strong>
                    Clicking Order Again returns to index.php, where
                    the restoration helpers reselect saved values.
                </li>

                <li>
                    <strong>Reset the order:</strong>
                    Clicking Forget Order runs forget_order.php,
                    clears the saved selections, destroys the session
                    data, and redirects to a fresh order form.
                </li>
            </ol>
        </section>

        <section class="insight-card">
            <h3>What Are PHP Sessions?</h3>

            <p>
                PHP sessions allow an application to store information
                on the server and associate it with a visitor across
                multiple HTTP requests.
            </p>

            <p>
                Chez Session uses three session variables:
            </p>

            <ul>
                <li><code>$_SESSION['dessert']</code></li>
                <li><code>$_SESSION['drink']</code></li>
                <li><code>$_SESSION['drinkSize']</code></li>
            </ul>

            <p>
                These variables allow the application to remember
                the customer's order even after navigating between
                the form and receipt pages.
            </p>
        </section>

        <section class="insight-card">
            <h3>Why Use Sessions?</h3>

            <p>
                HTTP requests are independent by default. Without
                a mechanism for preserving state, the application
                would not automatically remember selections from
                previous requests.
            </p>

            <p>
                PHP sessions provide server-side storage that makes
                order restoration, progress tracking, and resetting
                possible.
            </p>
        </section>

        <div class="form-actions">
            <a href="index.php" class="return-btn">
                Back to Order Form ↩️
            </a>
        </div>
    </main>

</body>
</html>