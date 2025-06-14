<?php
include_once('config.php');
if(isset($_POST['submit1'])){
    $id = $_POST['id'];
    $movie_name = $_POST['movie_name'];
    $movie_desc = $_POST['movie_desc'];
    $movie_quality = $_POST['movie_quality'];
    $movie_rating = $_POST['movie_rating'];

    $sql = "UPDATE movies SET id=:id, movie_name=:movie_name,
    movie_desc=:movie_desc, movie_quality=:movie_quality, movie_rating=:movie_rating WHERE id=:id";

    $prep = $conn->prepare($sql);

    $prep->bindparam(':id', $id);
    $prep->bindparam(':movie_name', $movie_name);
    $prep->bindparam(':movie_desc', $movie_desc);
    $prep->bindparam(':movie_quality', $movie_quality);
    $prep->bindparam(':movie_rating', $movie_rating);

    $prep->execute();
    header("Location: dashboard.php");
}
?>
