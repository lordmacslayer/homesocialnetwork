<html><head><title>Setting up database</title></head><body>

<h3>Setting up...</h3>

<?php // setup.php

include_once 'functions.php';

createTable('members', 'user VARCHAR(100), pass VARCHAR(20), INDEX(user(6))');
createTable('messages',
		'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		auth VARCHAR(100),
		recip VARCHAR(100),
		pm CHAR(1),
		time INT UNSIGNED,
		message VARCHAR(4096),
		INDEX(auth(6)),
		INDEX(recip(6))');

createTable('friends',
		'user VARCHAR(100),
		friend VARCHAR(100),
		INDEX(user(6)),
		INDEX(friend(6))');

createTable('profiles',
		'user VARCHAR(100),
		text VARCHAR(4096),
		INDEX(user(6))');
?>

<br .\/>...done.
</body></html>
