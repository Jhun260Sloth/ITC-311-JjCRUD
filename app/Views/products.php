<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>

</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e0f2e9;
        /* Light green background */
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #219653;
        /* Green header background */
        color: #fff;
        text-align: center;
        padding: 20px;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
        margin-top: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #219653;
        /* Green table header background */
        color: #fff;
    }

    form {
        margin-top: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    input[type="submit"] {
        background-color: #219653;
        /* Green submit button background */
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 3px;
    }

    a {
        text-decoration: none;
        color: #219653;
        /* Green link color */
        margin-right: 10px;
    }

    .action-buttons {
        text-align: center;
    }
</style>

<body>
    <header>
        <h1>Student's Data</h1>
    </header>
    <div class="container">
        <form action="/save" method="post">
            <label for="IdNumber">ID Number:</label><br>
            <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
            <input type="text" name="IdNumber" placeholder="Enter ID Number"
                value="<?= isset($pro['IdNumber']) ? $pro['IdNumber'] : '' ?>"><br>

            <label for="fullName">Full Name:</label><br>
            <input type="text" name="fullName" placeholder="Enter Full Name"
                value="<?= isset($pro['fullName']) ? $pro['fullName'] : '' ?>"><br>

            <label for="Section">Section:</label><br>
            <input type="text" name="Section" placeholder="Enter Section"
                value="<?= isset($pro['Section']) ? $pro['Section'] : '' ?>"><br>

            <label for="email">Email:</label><br>
            <input type="text" name="email" placeholder="Enter Email"
                value="<?= isset($pro['email']) ? $pro['email'] : '' ?>"><br>

            <input type="submit" value="Save">
        </form>

        <h2>Product Listing</h2>
        <table>
            <tr>
                <th>ID Number</th>
                <th>Full Name</th>
                <th>Section</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php foreach ($product as $pr): ?>
                <tr>
                    <td>
                        <?= $pr['IdNumber'] ?>
                    </td>
                    <td>
                        <?= $pr['fullName'] ?>
                    </td>
                    <td>
                        <?= $pr['Section'] ?>
                    </td>
                    <td>
                        <?= $pr['email'] ?>
                    </td>
                    <td class="action-buttons">
                        <a href="/delete/<?= $pr['id'] ?>">Delete</a>
                        <a href="/edit/<?= $pr['id'] ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>