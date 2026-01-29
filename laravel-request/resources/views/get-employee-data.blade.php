<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Form</title>
</head>
<body>

<form name="employee-form" id="employee-form" method="post" action="{{ url('store-form') }}">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required="true">
    </div>

    <div class="form-group">
        <label for="surname">Surname</label>
        <input type="text" id="surname" name="surname" required="true">
    </div>

    <div class="form-group">
        <label for="position">Position</label>
        <input type="text" id="position" name="position" required="true">
    </div>

    <div class="form-group">
        <label for="address">Home Address</label>
        <input type="text" id="address" name="address" required="true">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required="true">
    </div>

    <div class="form-group">
        <label for="workData">Work Data</label>
        <textarea name="workData" required="true"></textarea>
    </div>

    <div class="form-group">
        <label for="jsonData">JSON Data</label>
        <textarea name="jsonData" required="true">
{
  "user": {
    "address": {
      "street": "Kulas Light",
      "suite": "Apt. 556",
      "city": "Gwenborough",
      "zipcode": "92998-3874",
      "geo": {
        "lat": "-37.3159",
        "lng": "81.1496"
      }
    }
  }
}
        </textarea>
    </div>

    <button type="submit">Submit</button>
</form>

</body>
</html>
