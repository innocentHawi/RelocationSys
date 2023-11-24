<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Structure</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            display: flex;
            flex-direction: column-reverse; /* Reverse the order of the columns */
            gap: 20px; /* Added gap between columns */
        }

        .success-message {
            padding: 10px;
            background-color: #4CAF50; /* Green background color for success */
            color: white; /* White text color for better readability */
            border-radius: 10px; /* Added border-radius for rounded corners */
            margin-bottom: 20px; /* Added margin to the bottom of the success message */
        }

        .item-list, .explanation-list {
            flex: 1;
            padding: 20px;
            border: 1px solid #ddd; /* Added border for a stylish look */
            border-radius: 10px; /* Added border-radius for rounded corners */
        }

        .item-list h2, .explanation-list h2 {
            color: #333; /* Changed header color for better readability */
            margin-bottom: 10px; /* Added margin to the bottom of headers */
        }

        .item-list li {
            font-weight: bold; /* Make items before colon bold */
            margin-bottom: 8px; /* Added margin to the bottom of each list item */
            color: #007BFF; /* Blue text color for preferences */
        }

        .explanation-list p {
            margin-bottom: 8px; /* Added margin to the bottom of each explanation */
            color: #007BFF; /* Blue text color for preferences */
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Success Message -->
    <div class="success-message">
        <h2>Success!</h2>
        <p>Your quote have been submitted successfully.</p>
    </div>

    <!-- Left side: Item List -->
    @foreach($relocations as $relocation)
    <div class="item-list">
        <h2>Preferences</h2>
        <ul>
            <li>Address From: {{$relocation['addressfrom']}}</li>
            <li>Address To: {{$relocation['addressto']}}</li>
            <li>Appartment From: {{$relocation['appartment_from']}}</li>
            <li>Appartment To: {{$relocation['appartment_to']}}</li>
            <li>From Bedroom no: {{$relocation['bedroom_from']}}</li>
            <li>To Bedroom no: {{$relocation['bedroom_to']}}</li>
            <li>From Floor: {{$relocation['floor_from']}}</li>
            <li>To Floor: {{$relocation['floor_to']}}</li>
            <li>First Name: {{$relocation['Mfirst_name']}}</li>
            <li>Last Name: {{$relocation['Mlast_name']}}</li>
            <li>Email: {{$relocation['Memail']}}</li>
            <li>Phone: {{$relocation['Mphone']}}</li>
            <li>Service: {{ implode(', ', $relocation['checkboxes']) }}</li>
            <li>Date: {{$relocation['Mdate']}}</li>
            <li>Time: {{$relocation['Mtime']}}</li>
            <li>Additional Info.: {{$relocation['Mtextarea']}}</li>
        </ul>
    </div>
    @endforeach
</div>

</body>
</html>
