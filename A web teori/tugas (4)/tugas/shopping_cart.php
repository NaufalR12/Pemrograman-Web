<?php
session_start();

// Fungsi untuk menambah produk ke keranjang belanja
function addToCart($productID, $productName, $unitPrice, $quantity) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Cek apakah produk sudah ada di keranjang
    $found = false;
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['productID'] == $productID) {
            $_SESSION['cart'][$key]['quantity'] += $quantity;
            $found = true;
            break;
        }
    }

    // Jika produk belum ada di keranjang, tambahkan ke keranjang
    if (!$found) {
        $item = array(
            'productID' => $productID,
            'productName' => $productName,
            'unitPrice' => $unitPrice,
            'quantity' => $quantity
        );
        $_SESSION['cart'][] = $item;
    }

    // Redirect to prevent form resubmission
    header("Location: ".$_SERVER['REQUEST_URI']);
    exit();
}

// Fungsi untuk menghapus produk dari keranjang belanja
function removeFromCart($productID) {
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['productID'] == $productID) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }
}

// Fungsi untuk memperbarui quantity produk di keranjang belanja
function updateQuantity($productID, $newQuantity) {
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['productID'] == $productID) {
                $_SESSION['cart'][$key]['quantity'] = $newQuantity;
                break;
            }
        }
    }
}

// Ambil data dari form pembelian atau penghapusan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add-to-cart'])) {
        $productID = $_POST['productID'];
        $productName = $_POST['productName'];
        $unitPrice = $_POST['unitPrice'];
        $quantity = $_POST['quantity'];

        // Tambahkan produk ke keranjang belanja
        addToCart($productID, $productName, $unitPrice, $quantity);
    } elseif (isset($_POST['remove-from-cart'])) {
        $productID = $_POST['remove-from-cart'];

        // Hapus produk dari keranjang belanja
        removeFromCart($productID);
    } elseif (isset($_POST['update-quantity'])) {
        foreach ($_POST['newQuantity'] as $productID => $newQuantity) {
            // Perbarui quantity produk di keranjang belanja
            updateQuantity($productID, $newQuantity);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>

<body>
    <h1>Shopping Cart</h1>

    <?php
    // Tampilkan produk dalam keranjang belanja
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        echo "<form method='post'>";
        echo "<table border='1'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Product Name</th>";
        echo "<th>Quantity</th>";
        echo "<th>Unit Price</th>";
        echo "<th>Subtotal</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($_SESSION['cart'] as $item) {
            $subtotal = $item['unitPrice'] * $item['quantity'];
            echo "<tr>";
            echo "<td>{$item['productName']}</td>";
            echo "<td>
                    <input type='number' name='newQuantity[{$item['productID']}]' value='{$item['quantity']}' min='1' required>
                    <input type='hidden' name='productID' value='{$item['productID']}'>
                    <button type='submit' name='update-quantity'>Update</button>
                </td>";
            echo "<td>\${$item['unitPrice']}</td>";
            echo "<td>\${$subtotal}</td>";
            echo "<td>
                    <button type='submit' name='remove-from-cart' value='{$item['productID']}'>Remove</button>
                  </td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "<tfoot>";
        $totalPrice = array_sum(array_map(function ($item) {
            return $item['unitPrice'] * $item['quantity'];
        }, $_SESSION['cart']));
        echo "<tr>";
        echo "<td colspan='3'><strong>Total Price:</strong></td>";
        echo "<td colspan='2'>\${$totalPrice}</td>";
        echo "</tr>";
        echo "</tfoot>";
        echo "</table>";
        echo "</form>";

    } else {
        echo "<p>Your shopping cart is empty.</p>";
    }
    ?>

    <p><a href="index.php">Back to Category List</a></p>
</body>

</html>