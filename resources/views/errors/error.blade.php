<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 50px;
        }
    </style>
</head>

<body>
    <h1>Oops! Something went wrong.</h1>
    <p>We apologize for the inconvenience. Please try again later.</p>

    @if(!empty($exception))
    <div style="margin-top: 20px; padding: 10px; background-color: #FFCCCC; border: 1px solid #FF0000;">
        <strong>Error Message:</strong> {{ $exception->getMessage() }}
    </div>
    @endif
</body>

</html>