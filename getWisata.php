<?php
// Connect to the database
$connect = mysqli_connect("localhost", "root", "", "json");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to select all rows from the 'wisata' table
$sql = "SELECT * FROM wisata";
$result = mysqli_query($connect, $sql);

// Check if there are results
if (mysqli_num_rows($result) > 0) {
    // Start the table
    echo "<table border='1'>
            <tr>
                <th>id_wisata</th>
                <th>kota</th>
                <th>Landmark</th>
                <th>Tarif</th>
                <!-- Add more columns as per your table structure -->
            </tr>";

    // Fetch rows and display them inside the table
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['id_wisata'] . "</td>
                <td>" . $row['kota'] . "</td>
                <td>" . $row['Landmark'] . "</td>
                <td>" . $row['Tarif'] . "</td>
              </tr>";
    }

    // End the table
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the database connection
mysqli_close($connect);
?>
