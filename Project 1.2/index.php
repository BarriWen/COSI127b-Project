<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap JS dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSI 127b</title>

    <!-- Textbox promt logic for Like button -->
    <script>
        function promptEmail(formElement) {
            var userEmail = prompt("Please enter your email:");
            if (userEmail) {
                formElement.email.value = userEmail;
                return true;
            }
            return false;
        }
    </script>
</head>

<body>
    <div class="container">
        <h1 style="text-align:center">COSI 127b</h1><br>
        <h3 style="text-align:center">Project 1.2</h3><br>
        <h4 style="text-align:center">By Barry Wen and Yichun Huang</h4><br>
    </div>
    <div class="container">
        <form id="ratingLimitForm" method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter minimum rating" name="inputRating"
                    id="inputRating">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="viewAllMovies" id="viewAllMovies">View
                        all movies</button>
                </div>
            </div>
            <button class="btn btn-outline-secondary" type="submit" name="viewAllActors" id="viewAllActors">View all
                actors</button>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="bornIn60s" id="bornIn60s">
                <label class="form-check-label" for="bornIn60s">
                    Born in the 60s
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="groupById" id="groupById">
                <label class="form-check-label" for="groupById">
                    Group By Id
                </label>
            </div>
        </form>
        </form>
    </div>
    <div class="container">
        <?php
        // we want to check if the submit button has been clicked (in our case, it is named Query)
        if (isset($_POST['viewAllMovies'])) {
            $ratingLimit = $_POST["inputRating"];
        } else {
            $ratingLimit = 0;
        }

        // generic table builder. It will automatically build table data rows irrespective of result
        class TableRows extends RecursiveIteratorIterator
        {
            function __construct($it)
            {
                parent::__construct($it, self::LEAVES_ONLY);
            }

            function current()
            {
                return "<td style='text-align:center'>" . parent::current() . "</td>";
            }

            function beginChildren()
            {
                echo "<tr>";
            }

            function endChildren()
            {
                echo "</tr>" . "\n";
            }
        }

        // SQL CONNECTIONS
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "COSI127b";

        // Attempt database connection
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (isset($_POST['viewAllMovies'])) {
                $ratingLimit = $_POST["inputRating"] ?: 0;
                $stmt = $conn->prepare("
                    SELECT mp.id, mp.name, mp.rating, mp.production, mp.budget, m.boxoffice_collection
                    FROM Movie m
                    JOIN MotionPicture mp ON m.mpid = mp.id
                    WHERE mp.rating >= :ratingLimit
                ");
                $stmt->execute(['ratingLimit' => $ratingLimit]);

                echo "<h1>Movies</h1>";
                echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Production</th>
                            <th>Budget</th>
                            <th>Box Collection</th>
                            <th>Like</th>
                        </tr>
                    </thead>
                    <tbody>";

                foreach ($stmt as $row) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['rating']}</td>
                        <td>{$row['production']}</td>
                        <td>{$row['budget']}</td>
                        <td>{$row['boxoffice_collection']}</td>
                        <td>
                            <form onsubmit='return promptEmail(this);' method='post'>
                                <input type='hidden' name='mpid' value='{$row['id']}'>
                                <input type='hidden' name='email' value=''> 
                                <button type='submit' name='likeMovie'>Like</button>
                            </form>
                        </td>
                    </tr>";
                }

                echo "</tbody></table>";
            } elseif (isset($_POST['viewAllActors'])) {
                $query = "
                    SELECT p.id, p.name, p.nationality, p.dob, p.gender, r.role_name
                    FROM People p
                    JOIN Role r ON p.id = r.pid
                    WHERE (r.role_name = 'Actor' OR r.role_name = 'Actress')
                ";
                if (isset($_POST['bornIn60s'])) {
                    // Append the condition for actors born between 1960 and 1969
                    $query .= " AND p.dob BETWEEN '1960-01-01' AND '1969-12-31'";
                }

                if (isset($_POST['groupById'])) {
                    // Append the condition for GROUP BY p.id
                    $query .= " GROUP BY p.id";
                }

                $stmt = $conn->prepare($query);
                $stmt->execute();

                echo "<h1>Actors</h1>";
                echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Nationality</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>";

                foreach ($stmt as $row) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['dob']}</td>
                        <td>{$row['nationality']}</td>
                        <td>{$row['role_name']}</td>
                    </tr>";
                }

                echo "</tbody></table>";

            }

            if (isset($_POST['likeMovie'])) {
                $mpid = $_POST['mpid'];
                $email = trim($_POST['email']);

                // Check if email exists in User table
                $userCheck = $conn->prepare("SELECT * FROM User WHERE email = :email");
                $userCheck->execute(['email' => $email]);
                if ($userCheck->rowCount() > 0) {
                    $likeCheck = $conn->prepare("SELECT * FROM Likes WHERE uemail = :email AND mpid = :mpid");
                    $likeCheck->execute(['email' => $email, 'mpid' => $mpid]);
                    if ($likeCheck->rowCount() == 0) {
                        // No existing like found, proceed to insert
                        $insertLike = $conn->prepare("INSERT INTO Likes (uemail, mpid) VALUES (:email, :mpid)");
                        $insertLike->execute(['email' => $email, 'mpid' => $mpid]);
                        echo "<script>alert('Action: Like successes!');</script>";
                    } else {
                        echo "<script>alert('You have already liked this movie.');</script>";
                    }
                } else {
                    echo "<script>alert('User email does not exist.');</script>";
                }
            }

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        echo "</table>";

        $conn = null;

        ?>

    </div>

</body>

</html>