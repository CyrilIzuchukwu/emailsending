<!DOCTYPE html>
<html>

<head>
    <title>Vacation Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }

        h1 {
            color: #333;
            font-size: 24px;
            text-align: center;
        }

        p {
            font-size: 14px;
            color: #666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f7f7f7;
            font-weight: bold;
            color: #555;
        }

        a.button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        a.button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Vacation Form Submission</h1>
        <p>Hello Admin,</p>
        <p>You have received a new vacation form submission. Below are the details:</p>
        <table>
            <tr>
                <th>Field</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>First Name: </td>
                <td>{{ $data['first_name'] }}</td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td>{{ $data['last_name'] }}</td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>{{ $data['email'] }}</td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td>{{ $data['gender'] }}</td>
            </tr>
            <tr>
                <td>Date of Birth: </td>
                <td>{{ \Carbon\Carbon::parse($data['date_of_birth'])->format('d M, Y') }}</td>
            </tr>
            <tr>
                <td>Marital Status: </td>
                <td>{{ $data['marital_status'] }}</td>
            </tr>
            <tr>
                <td>Country: </td>
                <td>{{ $data['country'] }}</td>
            </tr>
            <tr>
                <td>Airport: </td>
                <td>{{ $data['airport'] }}</td>
            </tr>
            <tr>
                <td>Meeting Point: </td>
                <td>{{ $data['meeting_point'] }}</td>
            </tr>
            <tr>
                <td>Vacation Date: </td>
                <td>{{ \Carbon\Carbon::parse($data['vacation_date'])->format('d M, Y') }}</td>
            </tr>
            <tr>
                <td>Mobile Number: </td>
                <td>{{ $data['mobile_number'] }}</td>
            </tr>
            <tr>
                <td>Address: </td>
                <td>{{ $data['address'] }}</td>
            </tr>
            <tr>
                <td>Employer: </td>
                <td>{{ $data['employer'] }}</td>
            </tr>
            <tr>
                <td>Occupation: </td>
                <td>{{ $data['occupation'] }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
