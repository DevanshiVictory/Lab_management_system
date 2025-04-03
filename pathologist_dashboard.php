<!DOCTYPE html>
<html>
<head>
    <title>Pathologist Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .search-bar {
            width: 90%;
            margin: 20px auto;
            text-align: center;
        }
        .search-bar input {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #007bff;
            color: white;
            margin-top: 20px;
        }
        @media (max-width: 600px) {
            table, .search-bar input {
                width: 100%;
            }
            .search-bar input {
                font-size: 14px;
            }
        }
    </style>
    <script>
        function searchTable() {
            let input = document.getElementById("search").value.toLowerCase();
            let table = document.getElementById("patientTable");
            let rows = table.getElementsByTagName("tr");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName("td");
                let match = false;
                for (let j = 0; j < cells.length; j++) {
                    if (cells[j].textContent.toLowerCase().includes(input)) {
                        match = true;
                        break;
                    }
                }
                rows[i].style.display = match ? "" : "none";
            }
        }
    </script>
</head>
<body>
    <header>Pathologist Dashboard</header>
    <div class="search-bar">
        <input type="text" id="search" onkeyup="searchTable()" placeholder="Search patients...">
    </div>
    <table id="patientTable">
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>Patient Name</th>
                <th>Diagnosis</th>
                <th>Report Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($patients)) : ?>
                <?php foreach ($patients as $patient) : ?>
                    <tr>
                        <td><?= $patient['id']; ?></td>
                        <td><?= $patient['name']; ?></td>
                        <td><?= $patient['diagnosis']; ?></td>
                        <td><?= $patient['report_date']; ?></td>
                        <td><button class="btn">View Report</button></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5">No data available</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <footer>&copy; <?= date("Y"); ?> Pathologist Dashboard</footer>
</body>
</html>
