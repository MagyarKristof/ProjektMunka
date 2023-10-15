<?php
$navbar = array(
	"create_db" => array("file" => "create_db", "text" => "Adatbázis Létrehozása", "authorized" => false),
	"landing" => array("file" => "landing", "text" => "Kezdőlap", "authorized" => true),
	"landing2" => array("file" => "landing2", "text" => "Aloldal", "authorized" => true),
	"videos" => array("file" => "videos", "text" => "Videók", "authorized" => true),
	"gallery" => array("file" => "gallery", "text" => "Galéria", "authorized" => true),
	"upload" => array("file" => "upload", "text" => "Kép Feltöltése", "authorized" => false),
	"message" => array("file" => "message", "text" => "Üzenet Küldése", "authorized" => false),
	"disp_messages" => array("file" => "disp_messages", "text" => "Üzenetek megjelenítése", "authorized" => false),
	"login" => array("file" => "login", "text" => "Bejelentkezés", "authorized" => true)


);

if (isset($_SESSION['username'])) {
	$navbar["login"] = array("file" => "landing", "text" => $_SESSION['username']);
	$navbar["logout"] = array("file" => "logout", "text" => "Kijelentkezés");
}
