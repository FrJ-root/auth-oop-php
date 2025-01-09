<?php include __DIR__.'/../layouts/header.php'; ?>
<?php include __DIR__.'/../../database/connection.php'; ?>

<h2>Admin Dashboard</h2>


<!-- Add User Button -->
<a href="./users/add.php" class="btn btn-primary mb-3">Add User</a>


<!-- TODO: Display a table of users with options to edit or delete -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // TODO: Fetch and display users in the table
        // while ($row = /* Fetch the next user */) {
        //     echo "<tr>";
        //     echo "<td>{$row['id']}</td>";
        //     echo "<td>{$row['username']}</td>";
        //     echo "<td>{$row['fullname']}</td>";
        //     echo "<td> Role </td>";
        //     echo "<td>";
        //     // TODO: Add edit and delete links with appropriate href values
        //     echo "<a href='#' class='btn btn-warning'>Edit</a> | <a href='#' class='btn btn-danger'>Delete</a>";
        //     echo "</td>";
        //     echo "</tr>";
        // }
        ?>
    </tbody>
</table>

<?php include __DIR__.'/../layouts/footer.php'; ?>
