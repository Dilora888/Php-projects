<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Employee form</title>
</head>
<body>

<h2>Данные работника</h2>

<form action="{{ url('store-form') }}" method="POST">
    @csrf

    <label>
        Имя:
        <input type="text" name="name" required="true">
    </label>
    <br><br>

    <label>
        Email:
        <input type="email" name="email" required="true">
    </label>
    <br><br>

    <label>
        Фамилия:
        <input type="text" name="lastname" required="true">
    </label>
    <br><br>

    <label>
        Должность:
        <input type="text" name="position" required="true">
    </label>
    <br><br>

    <label>
        Адрес:
        <input type="text" name="address" required="true">
    </label>
    <br><br>

    <label>
        JSON данные:
        <textarea name="json_data" required="true">
{
    "age": 25,
    "salary": 1500,
    "department": "IT"
}
        </textarea>
    </label>
    <br><br>

    <button type="submit">Отправить</button>
</form>

</body>
</html>