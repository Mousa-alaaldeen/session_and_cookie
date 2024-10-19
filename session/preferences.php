<?php
session_start();


$theme = isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light'; 
$language = isset($_SESSION['language']) ? $_SESSION['language'] : 'en'; 


if ($theme == 'dark') {
    echo '<style>body { background-color: black; color: white; }</style>';
} else {
    echo '<style>body { background-color: white; color: black; }</style>';
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['theme'] = $_POST['theme'];
    $_SESSION['language'] = $_POST['language'];
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preferences</title>
</head>
<body>
    <h1><?php echo $language === 'en' ? 'User Preferences' : 'تفضيلات المستخدم'; ?></h1>

    <form method="POST" action="">
        <label for="theme"><?php echo $language === 'en' ? 'Select Theme:' : 'اختر السمة:'; ?></label>
        <select name="theme" id="theme">
            <option value="light" <?php echo $theme === 'light' ? 'selected' : ''; ?>><?php echo $language === 'en' ? 'Light' : 'فاتح'; ?></option>
            <option value="dark" <?php echo $theme === 'dark' ? 'selected' : ''; ?>><?php echo $language === 'en' ? 'Dark' : 'داكن'; ?></option>
        </select>

        <label for="language"><?php echo $language === 'en' ? 'Select Language:' : 'اختر اللغة:'; ?></label>
        <select name="language" id="language">
            <option value="en" <?php echo $language === 'en' ? 'selected' : ''; ?>>English</option>
            <option value="ar" <?php echo $language === 'ar' ? 'selected' : ''; ?>>العربية</option>
        </select>

        <button type="submit"><?php echo $language === 'en' ? 'Save Preferences' : 'احفظ التفضيلات'; ?></button>
    </form>
</body>
</html>
