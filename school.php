<html>
<head>
    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js.js"></script>
</head>
<body>
<form id="contact-form">
<table>
    <tr>
        <td>Имя:</td>
        <td><input type="text" name="name" id="name" /><td>
    </tr>
    <tr>
        <td>Адрес:</td>
        <td><input type="text" name="address" id="address" /><td>
    </tr>
    <tr>
        <td></td>
        <td><input type="button" name="submit" id="submit" value="Отправить" onClick = "getdetails()" /></td>
    </tr>
</table>
</form>
<div id="msg"></div>
</body>

</html>