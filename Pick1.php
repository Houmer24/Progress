	<table border>
		<tr><th>Имя</th><th>Фамилия</th><th>Дата рождения</th><th>Почта</th><th>Группа</th><th>Семестр</th><th>Средний балл</th><th>Экзорцизм</th><th>Мифология</th><th>Некромантия</th><th>Характеристика<br>научного руководителя</th><th>Время регистрации</th><th>IP регистрации</th></tr>

<?php include_once ('db.php');
$q = $db->query('SELECT Name, Surname, Birth, Mail, Gruppa, Semest, Ball, Supervise, Exorcizm, Mithology, Necromancy, Zide, Aipi FROM Stud_list ORDER BY Semest, Surname');

	while ($row = $q->fetch()) {
		if ($row[Ball]>=2 && $row[Ball]<=3 && $row[Name]=='Чебурашка') {
		print "<tr><td> $row[Name] </td><td> $row[Surname] </td><td> $row[Birth] </td><td> $row[Mail] </td><td> $row[Gruppa]</td><td> $row[Semest] </td><td> $row[Ball] </td><td> $row[Exorcizm] </td><td> $row[Mithology] </td><td> $row[Necromancy] </td><td> $row[Supervise] </td><td> $row[Zide] </td><td> $row[Aipi] </td></tr>\n";
	}
}
?>
	</table>