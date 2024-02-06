<!DOCTYPE html>
<html>
<head>
    <title>PDF Template</title>
    <style>
        /* Add your custom CSS styles for the PDF here */
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>PDF Content</h1>

    <p>Hello, this is the content of your PDF. Below is the data received from the form:</p>

    <ul>
        <li><strong>Name:</strong> {{ $data['name'] }} {{$data['last_name']}}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Phone:</strong> {{ $data['phone'] }}</li>
        <li><strong>Address:</strong> {{ $data['address'] }}</li>
        <!-- Add more data fields as needed -->
    </ul>

    <!-- You can customize the PDF content further based on your requirements -->

</body>
</html>
