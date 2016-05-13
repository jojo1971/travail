<?php
$dbname='base';
$mytable ="tablename";

if(!class_exists('SQLite3'))
  die("SQLite 3 NOT supported.");

$base=new SQLite3($dbname, 0666);

$query = "CREATE TABLE $mytable(
            ID bigint(20) NOT NULL PRIMARY KEY,
            post_author bigint(20) NOT NULL,
            post_date datetime,
            post_content longtext,
            post_title text,
            guid VARCHAR(255)
            )";

$results = $base->exec($query);
$number = 1;
$title="Mon dernier billet";
$content="Le texte de mon article...";
$date = strftime( "%b %d %Y %H:%M", time());
$author=1;
$url = "http://www.scriptol.fr/sql/tutoriel-sqlite.php";

$query = "INSERT INTO $mytable(ID, post_title, post_content, post_author, post_date, guid)
                VALUES ('$number', '$title', '$content', '$author', '$date', '$url')";
$results = $base->exec($query);

$query = "SELECT post_title, post_content, post_author, post_date, guid FROM $mytable";
$results = $base->query($query);
$row = $results->fetchArray();
print_r($row);
if(count($row)>0)
{
   $title = $row['post_title'];
   $content = $row['post_content'];
   $user = $row['post_author'];
   $date = $row['post_date'];
   $url = $row['guid'];
}

?>