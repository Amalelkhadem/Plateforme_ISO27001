<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Mesure</th>
            <th>Evaluation</th>
        </tr>
<tbody>
    @foreach ($uncheckedCategories as $category)
        <tr>
            <td>{{ $category['phrase_evalue'] }}</td>
            <td>{{ $category['category_label'] }}</td>
        </tr>
    @endforeach
</tbody>
    </table>
</body>
</html>