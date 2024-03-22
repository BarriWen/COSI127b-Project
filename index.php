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
        <h3 style="text-align:center">Project 1.3</h3><br>
        <h4 style="text-align:center">By Barry Wen and Yichun Huang</h4><br>
    </div>
    <div class="container">
        <form id="ratingLimitForm" method="post" action="index.php">
            <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit" name="viewAllTables" id="viewAllTables">View all
                Tables</button>
                <!-- Q1 -->
            <button class="btn btn-outline-secondary" type="submit" name="listAllTables" id="listAllTables">List all
                Tables</button>
            </div>

            <!-- Motion Pictures -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search by..." name="mpBy"
                    id="mpBy">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="searchMp" id="searchMp">Search Motion Pictures</button>
                </div>
            </div>
            <div class="form-check mb-3">
                <!-- Q2 -->
                <input class="form-check-input" type="checkbox" name="mpByName" id="mpByName">
                <label class="form-check-label" for="mpByName" style="margin-right: 30px;">
                    name
                </label>
                <!-- Q4 -->
                <input class="form-check-input" type="checkbox" name="mpByLoc" id="mpByLoc">
                <label class="form-check-label" for="mpByLoc" style="margin-right: 30px;">
                    shooting location (country)
                </label>
                <!-- Q13 -->
                <input class="form-check-input" type="checkbox" name="mpByHighCom" id="mpByHighCom">
                <label class="form-check-label" for="mpByHighCom" style="margin-right: 30px;">
                    high rated than comedy
                </label>
            </div>

            <!-- Movies -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search by...(X)" name="mBy"
                    id="mBy">
                    <input type="text" class="form-control" placeholder="Y..." name="mBy1"
                    id="mBy1">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="viewAllMovies" id="viewAllMovies">Search Movies</button>
                </div>
            </div>
            
            <div class="form-check mb-3">
                <!-- Q3 -->
                <input class="form-check-input" type="checkbox" name="mByEmail" id="mByEmail">
                <label class="form-check-label" for="mByEmail" style="margin-right: 30px;">
                    user likes (email)
                </label>
                <!-- Q10 -->
                <input class="form-check-input" type="checkbox" name="mByTop2T" id="mByTop2T">
                <label class="form-check-label" for="mByTop2T" style="margin-right: 30px;">
                    boston top 2 thriller
                </label>
                <!-- Q11 -->
                <input class="form-check-input" type="checkbox" name="mByAgeLike" id="mByAgeLike">
                <label class="form-check-label" for="mByAgeLike" style="margin-right: 30px;">
                    X+ likes by Y- ages
                </label>
                <!-- Q14 -->
                <input class="form-check-input" type="checkbox" name="mByTop5" id="mByTop5">
                <label class="form-check-label" for="mByTop5" style="margin-right: 30px;">
                    top 5 people count
                </label>
            </div>

            <!-- People -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search by (X)..." name="pBy"
                    id="pBy">
                    <input type="text" class="form-control" placeholder="Y..." name="pBy1"
                    id="pBy1">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="searchPeople" id="searchPeople">Search People</button>
                </div>
            </div>
            <!-- Select Roles -->
            <!-- <label class="role-label">
                    Role:
            </label> -->
            <div class="form-check mb-3">
                <!-- Q5 -->
                <input class="form-check-input" type="checkbox" name="pDir" id="pDir">
                <label class="form-check-label" for="pDir">
                    director
                </label>
            </div>
            <div class="form-check mb-3">
                <!-- Q5 -->
                <input class="form-check-input" type="checkbox" name="pByZip" id="pByZip">
                <label class="form-check-label" for="pByZip" style="margin-right: 30px;">
                    zip code
                </label>
                <!-- Q6 -->
                <input class="form-check-input" type="checkbox" name="pByAwardNum" id="pByAwardNum">
                <label class="form-check-label" for="pByAwardNum" style="margin-right: 30px;">
                    awards number
                </label>
                <!-- Q7 -->
                <input class="form-check-input" type="checkbox" name="pByYoungOld" id="pByYoungOld">
                <label class="form-check-label" for="pByYoungOld" style="margin-right: 30px;">
                    awarded youngest and oldest actors
                </label>
                <!-- Q8 -->
                <input class="form-check-input" type="checkbox" name="pByProdC" id="pByProdC">
                <label class="form-check-label" for="pByProdC" style="margin-right: 30px;">
                    U.S. producers with X(+) collection and Y(-) budget
                </label>
            </div>
            <div class="form-check mb-3"> 
                <!-- Q9 -->
                <input class="form-check-input" type="checkbox" name="pByMultiRole" id="pByMultiRole">
                <label class="form-check-label" for="pByMultiRole" style="margin-right: 30px;">
                    multi-roled in one X+ rating
                </label>
                <!-- Q12 -->
                <input class="form-check-input" type="checkbox" name="pByMW" id="pByMW">
                <label class="form-check-label" for="pByMW" style="margin-right: 30px;">
                    Marvel & Warner Bros actors
                </label>
                <!-- Q15 -->
                <input class="form-check-input" type="checkbox" name="pBySameDob" id="pBySameDob">
                <label class="form-check-label" for="pBySameDob" style="margin-right: 30px;">
                    same birthday actors
                </label>
            </div>


            <button class="btn btn-outline-secondary" type="submit" name="viewAllActors" id="viewAllActors">View all
                actors</button>
            <!-- <div class="form-check mb-3">
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
            </div> -->
        </form>
    </div>
    <div class="container">
        <?php
        // we want to check if the submit button has been clicked (in our case, it is named Query)
        // if (isset ($_POST['viewAllMovies'])) {
        //     $mLimit = $_POST["mBy"];
        // } else {
        //     $mLimit = 0;
        // }
        
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

            if (isset ($_POST['viewAllTables'])) {
                $stmt = $conn->query("SHOW TABLES");
                $tables = $stmt->fetchAll(PDO::FETCH_NUM);
                foreach ($tables as $table) {
                    echo "<h1>$table[0]</h1>";
                    $stmt2 = $conn->prepare("SELECT * FROM " . $table[0]);
                    $stmt2->execute();

                    // Get Column
                    $columns = array();
                    for ($i = 0; $i < $stmt2->columnCount(); $i++) {
                        $col = $stmt2->getColumnMeta($i);
                        $columns[] = $col['name'];
                    }

                    // Check if there's any data
                    if ($stmt2->rowCount() > 0) {
                        // Print Column Name
                        echo "<table  class='table table-bordered'>
                                <thead class='thead-dark'>
                                    <tr>";
                        foreach ($columns as $column) {
                            echo "<th>$column</th>";
                        }
                        echo "</tr></thead>";

                        // Print Row Name
                        while ($rowData = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            foreach ($columns as $column) {
                                echo "<td>" . $rowData[$column] . "</td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table><br>"; // Empty Row between Tables
                    } else {
                        echo "0 results<br><br>";
                    }
                }
                // Q1
            } else if (isset ($_POST['listAllTables'])) {
                $stmt = $conn->query("SHOW TABLES");
                echo "<h1>Tables</h1>";
                echo "<table class='table table-bordered'>
                        <thead class='thead-dark'>
                            <tr>
                                <th>Table Name</th>
                            </tr>
                        </thead>
                        <tbody>";

                while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
                    echo "<tr>
                            <td>{$row[0]}</td>
                        </tr>";
                }

                echo "</tbody></table>";
            } else if (isset ($_POST['viewAllMovies'])) {
                // $mLimit = $_POST["mBy"] ?: 0;
                $query = "
                    SELECT mp.id, mp.name, mp.rating, mp.production, mp.budget, m.boxoffice_collection
                    FROM Movie m
                    JOIN MotionPicture mp ON m.mpid = mp.id
                ";
                // $stmt->execute(['ratingLimit' => $mLimit]);
                $mLimit = $_POST["mBy"];
                $mLimit1 = $_POST["mBy1"];

                if (isset ($_POST['mByEmail'])) {
                    $query = "
                        SELECT name, rating, production, budget
                        FROM MotionPicture
                        WHERE id IN (SELECT mpid
                        FROM Movie
                        WHERE mpid in (SELECT mpid
                                        FROM Likes
                                        WHERE uemail = '$mLimit'))
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Movies</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Production</th>
                            <th>Budget</th>
                            <th>Like</th>
                        </tr>
                    </thead>
                    <tbody>";

                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['rating']}</td>
                        <td>{$row['production']}</td>
                        <td>{$row['budget']}</td>
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
                    // Q10
                } else if (isset ($_POST["mByTop2T"])) {
                    $query = "
                        SELECT mp.name AS movie_name, mp.rating
                        FROM Movie m
                        JOIN MotionPicture mp ON m.mpid = mp.id
                        JOIN Genre g ON m.mpid = g.mpid
                        JOIN Location l ON m.mpid = l.mpid
                        WHERE g.genre_name = 'Thriller'
                        AND l.city = 'Boston'
                        AND NOT EXISTS (
                            SELECT 1
                            FROM Location
                            WHERE mpid = m.mpid
                            AND city != 'Boston'
                        )
                        ORDER BY mp.rating DESC
                        LIMIT 2;
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Top 2 Thriller</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Movie Name</th>
                            <th>Rating</th>
                            <th>Like</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['movie_name']}</td>
                        <td>{$row['rating']}</td>
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
                    // Q11
                } else if (isset ($_POST["mByAgeLike"])) {
                    $query = "
                        SELECT mp.name, COUNT(l.uemail) AS count_like
                        FROM Likes l
                        RIGHT JOIN Movie m ON l.mpid = m.mpid
                        LEFT JOIN MotionPicture mp ON m.mpid = mp.id
                        LEFT JOIN User u on l.uemail = u.email
                        WHERE u.age < '$mLimit1'
                        GROUP BY mp.name
                        HAVING count_like > '$mLimit';
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Movies likes by age group</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Movie Name</th>
                            <th>Like Count</th>
                            <th>Like</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['count_like']}</td>
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
                    // Q14
                } else if (isset ($_POST["mByTop5"])) {
                    $query = "
                        SELECT mp.name, COUNT(DISTINCT r.pid) AS people_count, COUNT(r.role_name) AS role_count
                        FROM Role r
                        JOIN Movie m ON r.mpid = m.mpid
                        JOIN MotionPicture mp ON r.mpid = mp.id
                        GROUP BY mp.id, mp.name
                        ORDER BY people_count DESC, role_count DESC
                        LIMIT 5
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Movies</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Movie Name</th>
                            <th>People Count</th>
                            <th>Role Count</th>
                            <th>Like</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['people_count']}</td>
                        <td>{$row['role_count']}</td>
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
                } else {
                    $stmt = $conn->prepare($query);
                    $stmt->execute();

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
                }

            } elseif (isset ($_POST['viewAllActors'])) {
                $query = "
                    SELECT p.id, p.name, p.nationality, p.dob, p.gender, r.role_name
                    FROM People p
                    JOIN Role r ON p.id = r.pid
                    WHERE (r.role_name = 'Actor' OR r.role_name = 'Actress')
                ";
                if (isset ($_POST['bornIn60s'])) {
                    // Append the condition for actors born between 1960 and 1969
                    $query .= " AND p.dob BETWEEN '1960-01-01' AND '1969-12-31'";
                }

                if (isset ($_POST['groupById'])) {
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

            } else if (isset ($_POST['searchMp'])) {
                $query = "
                    SELECT *
                    FROM MotionPicture mp
                ";
                $mpLimit = $_POST["mpBy"];
                // Q2
                if (isset ($_POST['mpByName'])) {
                    $query = "
                        Select name, rating, production, budget
                        From MotionPicture
                        Where LOWER(name) LIKE LOWER('%" . $mpLimit . "%');
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();

                    echo "<h1>Motion Pictures</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Production</th>
                            <th>Budget</th>
                        </tr>
                    </thead>
                    <tbody>";

                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['rating']}</td>
                        <td>{$row['production']}</td>
                        <td>{$row['budget']}</td>
                    </tr>";
                    }

                    echo "</tbody></table>";
                    // Q4
                } else if (isset ($_POST['mpByLoc'])) {
                    $query = "
                        SELECT DISTINCT name
                        from MotionPicture
                        WHERE id IN (SELECT mpid
                                    FROM Location
                                    WHERE LOWER(Country) LIKE LOWER('$mpLimit'))
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Motion Pictures</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>";

                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['name']}</td>
                    </tr>";
                    }

                    echo "</tbody></table>";

                    // Q13
                } else if (isset ($_POST['mpByHighCom'])) {
                    $query = "
                        SELECT name, rating
                        FROM MotionPicture
                        WHERE rating > (
                            SELECT AVG(rating)
                            FROM MotionPicture mp
                            JOIN Genre g ON mp.id = g.mpid
                            WHERE g.genre_name = 'comedy'
                        )
                        ORDER BY rating DESC;
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Better Than Comedy</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Name</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>";

                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['rating']}</td>
                    </tr>";
                    }

                    echo "</tbody></table>";
                } else {
                    $stmt = $conn->prepare($query);
                    $stmt->execute();

                    echo "<h1>Motion Pictures</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Production</th>
                            <th>Budget</th>
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
                    </tr>";
                    }

                    echo "</tbody></table>";

                }
            } else if (isset ($_POST['searchPeople'])) {
                $query = "
                    SELECT *
                    FROM People
                ";
                $pLimit = $_POST["pBy"];
                $pLimit1 = $_POST["pBy1"];
                // Q5
                if (isset ($_POST["pDir"]) && isset ($_POST["pByZip"])) {
                    $query = "
                        SELECT DISTINCT People.name AS director_name, MotionPicture.name AS tv_series_name
                        FROM People
                        JOIN Role ON People.id = Role.pid
                        JOIN Location ON Role.mpid = Location.mpid
                        JOIN MotionPicture ON Location.mpid = MotionPicture.id
                        WHERE Location.zip = '$pLimit'
                        AND Role.role_name = 'Director'
                        AND Location.mpid IN (
                            SELECT mpid
                            FROM Series
                        );
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Directors</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Director Name</th>
                            <th>TV Series Name</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['director_name']}</td>
                        <td>{$row['tv_series_name']}</td>
                    </tr>";
                    }

                    echo "</tbody></table>";
                    // Q6
                } else if (isset ($_POST["pByAwardNum"])) {
                    $query = "
                        SELECT 
                            mp.name AS movie_name, 
                            p.name AS person_name, 
                            a.award_year AS award_year,
                            COUNT(a.award_name) AS award_count
                        FROM 
                            Award a
                        INNER JOIN 
                            MotionPicture mp ON a.mpid = mp.id
                        INNER JOIN 
                            People p ON a.pid = p.id
                        GROUP BY 
                            mp.id, p.id, a.award_year
                        HAVING 
                            award_count > '$pLimit';
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>People with k+ Awards</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>People Name</th>
                            <th>Motion Picture Name</th>
                            <th>Award Year</th>
                            <th>Award Count</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['person_name']}</td>
                        <td>{$row['movie_name']}</td>
                        <td>{$row['award_year']}</td>
                        <td>{$row['award_count']}</td>
                    </tr>";
                    }

                    echo "</tbody></table>";
                    // Q7
                } else if (isset ($_POST["pByYoungOld"])) {
                    $query = "
                        SELECT p.name, TIMESTAMPDIFF(YEAR, p.dob, STR_TO_DATE(CONCAT(a.award_year, '-01-01'), '%Y-%m-%d')) AS age_win
                        FROM People p
                        RIGHT JOIN Award a ON p.id = a.pid
                        JOIN Role r ON a.pid = r.pid
                        WHERE r.role_name = 'actor'
                        HAVING age_win = (
                            SELECT MAX(TIMESTAMPDIFF(YEAR, p.dob, STR_TO_DATE(CONCAT(a.award_year, '-01-01'), '%Y-%m-%d')))
                            FROM People p
                            RIGHT JOIN Award a ON p.id = a.pid
                            JOIN Role r ON a.pid = r.pid
                            WHERE r.role_name = 'actor'
                        )

                        UNION ALL

                        SELECT p.name, TIMESTAMPDIFF(YEAR, p.dob, STR_TO_DATE(CONCAT(a.award_year, '-01-01'), '%Y-%m-%d')) AS age_win
                        FROM People p
                        RIGHT JOIN Award a ON p.id = a.pid
                        JOIN Role r ON a.pid = r.pid
                        WHERE r.role_name = 'actor'
                        HAVING age_win = (
                            SELECT MIN(TIMESTAMPDIFF(YEAR, p.dob, STR_TO_DATE(CONCAT(a.award_year, '-01-01'), '%Y-%m-%d')))
                            FROM People p
                            RIGHT JOIN Award a ON p.id = a.pid
                            JOIN Role r ON a.pid = r.pid
                            WHERE r.role_name = 'actor'
                        );
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Youngest & Oldest Awarded Actors</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['age_win']}</td>
                    </tr>";
                    }

                    echo "</tbody></table>";
                    // Q8
                } else if (isset ($_POST["pByProdC"])) {
                    $query = "
                        SELECT p.name AS producer_name, mp.name AS movie_name, m.boxoffice_collection, mp.budget
                        FROM People p
                        JOIN Role r ON p.id = r.pid AND r.role_name = 'Producer'
                        JOIN Movie m ON r.mpid = m.mpid
                        JOIN MotionPicture mp ON m.mpid = mp.id
                        WHERE m.boxoffice_collection >= '$pLimit'
                            AND mp.budget <= '$pLimit1'
                            AND p.nationality = 'USA';
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Directors</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Producer Name</th>
                            <th>Movie Name</th>
                            <th>Box Office</th>
                            <th>Budget</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['producer_name']}</td>
                        <td>{$row['movie_name']}</td>
                        <td>{$row['boxoffice_collection']}</td>
                        <td>{$row['budget']}</td>
                    </tr>";
                    }

                    echo "</tbody></table>";
                    // Q9
                } else if (isset ($_POST["pByMultiRole"])) {
                    $query = "
                        SELECT p.name AS name1, mp.name AS name2, COUNT(role_name) AS role_count
                        FROM Role
                        LEFT JOIN People p on Role.pid = p.id
                        LEFT JOIN MotionPicture mp on Role.mpid = mp.id
                        WHERE mp.rating > '$pLimit'
                        GROUP BY mpid, pid
                        HAVING role_count > 1
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Multi-roled</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Producer Name</th>
                            <th>Motion Picture Name</th>
                            <th>Role Count</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['name1']}</td>
                        <td>{$row['name2']}</td>
                        <td>{$row['role_count']}</td>
                    </tr>";
                    }

                    echo "</tbody></table>";
                    // Q12
                } else if (isset ($_POST["pByMW"])) {
                    $query = "
                        SELECT DISTINCT p.name AS ActorName, mp1.name AS MarvelProduction, mp2.name AS WarnerBrosProduction
                        FROM Role r1
                        JOIN MotionPicture mp1 ON r1.mpid = mp1.id AND mp1.production = 'Marvel' AND r1.role_name = 'Actor'
                        JOIN Role r2 ON r1.pid = r2.pid AND r2.role_name = 'Actor'
                        JOIN MotionPicture mp2 ON r2.mpid = mp2.id AND mp2.production = 'Warner Bros'
                        JOIN People p ON r1.pid = p.id;
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Multi-roled</h1>";
                    echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Actor Name</th>
                            <th>Marvel Production</th>
                            <th>Warner BrosProduction</th>
                        </tr>
                    </thead>
                    <tbody>";
                    foreach ($stmt as $row) {
                        echo "<tr>
                        <td>{$row['ActorName']}</td>
                        <td>{$row['MarvelProduction']}</td>
                        <td>{$row['WarnerBrosProduction']}</td>
                    </tr>";
                    }

                    echo "</tbody></table>";
                } else if (isset ($_POST["pBySameDob"])) {
                    $query = "
                        SELECT DISTINCT p1.name AS actor1_name, p2.name AS actor2_name, p1.dob
                        FROM Role r1
                        JOIN Role r2 ON r1.pid < r2.pid
                        JOIN People p1 ON r1.pid = p1.id
                        JOIN People p2 ON r2.pid = p2.id AND p1.dob = p2.dob
                        WHERE r1.role_name = 'Actor' AND r2.role_name = 'Actor';
                    ";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    echo "<h1>Same Birthday Actors</h1>";
                    echo "<table class='table table-bordered'>
                            <thead class='thead-dark'>
                                <tr>
                                    <th>Actor1 Name</th>
                                    <th>Actor2 Name</th>
                                    <th>DOB</th>
                                </tr>
                            </thead>
                            <tbody>";
                    foreach ($stmt as $row) {
                        echo "<tr>
                                <td>{$row['actor1_name']}</td>
                                <td>{$row['actor2_name']}</td>
                                <td>{$row['dob']}</td>
                            </tr>";
                    }

                    echo "</tbody></table>";
                }
            }

            if (isset ($_POST['likeMovie'])) {
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