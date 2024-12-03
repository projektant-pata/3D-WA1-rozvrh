<?php
spl_autoload_register(function ($className) {
  require_once "{$className}.class.php";
});
$schedule = new Schedule();
//Pondělí
//S1
$hour = new Hour(1, 1, "S1", "KAS", "WP", "B104");
$schedule->addHour($hour);
$hour = new Hour(1, 2, "S1", "KAS", "WP", "B104");
$schedule->addHour($hour);
$hour = new Hour(1, 3, "S1", "POS", "AJ", "B401");
$schedule->addHour($hour);
$hour = new Hour(1, 4, "S1", "PAN", "OS", "C217");
$schedule->addHour($hour);
$hour = new Hour(1, 5, "S1", "PAN", "OS", "C217");
$schedule->addHour($hour);
$hour = new Hour(1, 6, "S1", "PAN", "OS", "C217");
$schedule->addHour($hour);
//S2
$hour = new Hour(1, 1, "S2", "FIS", "PG", "D363");
$schedule->addHour($hour);
$hour = new Hour(1, 2, "S2", "FIS", "PG", "D363");
$schedule->addHour($hour);
$hour = new Hour(1, 3, "S2", "FIS", "PG", "D363");
$schedule->addHour($hour);
$hour = new Hour(1, 4, "S2", "DUS", "IN", "D055");
$schedule->addHour($hour);
$hour = new Hour(1, 5, "S2", "DUS", "IN", "D055");
$schedule->addHour($hour);
$hour = new Hour(1, 6, "S2", "TRB", "AJ", "B304");
$schedule->addHour($hour);

//Úterý
//SPOL
$hour = new Hour(2, 2, "", "BED", "CJ", "B203");
$schedule->addHour($hour);
$hour = new Hour(2, 3, "", "BED", "CJ", "B203");
$schedule->addHour($hour);
$hour = new Hour(2, 4, "", "SVC", "TV", "TV");
$schedule->addHour($hour);
$hour = new Hour(2, 5, "", "BUA", "MA", "B125");
//S1
$schedule->addHour($hour);
$hour = new Hour(2, 7, "S1", "BAJ", "WA", "D263");
$schedule->addHour($hour);
$hour = new Hour(2, 8, "S1", "BAJ", "WA", "D263");
$schedule->addHour($hour);
//S2
$hour = new Hour(2, 7, "S2", "KAS", "WA", "D363");
$schedule->addHour($hour);
$hour = new Hour(2, 8, "S2", "KAS", "WA", "D363");
$schedule->addHour($hour);
//SPOL
$hour = new Hour(2, 9, "", "BED", "SV", "B321");
$schedule->addHour($hour);

//Středa
$hour = new Hour(3, 1, "", "BOU", "EN", "D252");
$schedule->addHour($hour);
$hour = new Hour(3, 2, "", "BED", "SV", "D252");
$schedule->addHour($hour);
$hour = new Hour(3, 3, "", "BED", "CJ", "B101");
$schedule->addHour($hour);
$hour = new Hour(3, 4, "", "BUA", "MA", "B103");
$schedule->addHour($hour);
$hour = new Hour(3, 5, "", "BUA", "MA", "B103");
$schedule->addHour($hour);
$hour = new Hour(3, 6, "S1", "POS", "AJ", "B130");
$schedule->addHour($hour);
$hour = new Hour(3, 6, "S2", "TRB", "AJ", "B303");
$schedule->addHour($hour);

//Čtvrtek
//PX1
$hour = new Hour(4, 1, "PX1", "PET", "PX", "B003");
$schedule->addHour($hour);
$hour = new Hour(4, 2, "PX1", "PET", "PX", "B003");
$schedule->addHour($hour);
$hour = new Hour(4, 3, "PX1", "PET", "PX", "B003");
$schedule->addHour($hour);
//PX2
$hour = new Hour(4, 1, "PX2", "JND", "PX", "B009");
$schedule->addHour($hour);
$hour = new Hour(4, 2, "PX2", "JND", "PX", "B009");
$schedule->addHour($hour);
$hour = new Hour(4, 3, "PX2", "JND", "PX", "B009");
$schedule->addHour($hour);
//PX3
$hour = new Hour(4, 1, "PX3", "JEL", "PX", "D251");
$schedule->addHour($hour);
$hour = new Hour(4, 2, "PX3", "JEL", "PX", "D251");
$schedule->addHour($hour);
$hour = new Hour(4, 3, "PX3", "JEL", "PX", "D251");
$schedule->addHour($hour);
//SPOL
$hour = new Hour(4, 4, "", "BUA", "MA", "B203");
$schedule->addHour($hour);
$hour = new Hour(4, 5, "", "SVC", "TV", "TV");
$schedule->addHour($hour);
//S1
$hour = new Hour(4, 7, "S1", "SED", "PS", "A005");
$schedule->addHour($hour);
$hour = new Hour(4, 8, "S1", "SED", "PS", "A005");
$schedule->addHour($hour);
//S2
$hour = new Hour(4, 7, "S2", "KAS", "WP", "D263");
$schedule->addHour($hour);
$hour = new Hour(4, 8, "S2", "KAS", "WP", "D263");
$schedule->addHour($hour);

//S1
$hour = new Hour(5, 1, "S1", "BAJ", "PG", "D263");
$schedule->addHour($hour);
$hour = new Hour(5, 2, "S1", "BAJ", "PG", "D263");
$schedule->addHour($hour);
$hour = new Hour(5, 3, "S1", "BAJ", "PG", "D263");
$schedule->addHour($hour);
$hour = new Hour(5, 4, "S1", "DUS", "IN", "D055");
$schedule->addHour($hour);
$hour = new Hour(5, 5, "S1", "DUS", "IN", "D055");
$schedule->addHour($hour);
$hour = new Hour(5, 6, "S1", "POS", "AJ", "D351");
$schedule->addHour($hour);
//S2
$hour = new Hour(5, 1, "S2", "NSK", "PS", "A005");
$schedule->addHour($hour);
$hour = new Hour(5, 2, "S2", "NSK", "PS", "A005");
$schedule->addHour($hour);
$hour = new Hour(5, 3, "S2", "TRB", "AJ", "B305");
$schedule->addHour($hour);
$hour = new Hour(5, 4, "S2", "SED", "OS", "D353");
$schedule->addHour($hour);
$hour = new Hour(5, 5, "S2", "SED", "OS", "D353");
$schedule->addHour($hour);
$hour = new Hour(5, 6, "S2", "SED", "OS", "D353");
$schedule->addHour($hour);
echo '<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozvrh hodin</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            width: 100px;
            height: 60px;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
        td {
          
        }
        p {
            margin: 0;
            font-size: 14px;
        }
        .partOfHour{
          position: relative;
          display: flex;
          flex: 1;
          justify-content: center;
          align-items: center;
          height: 100%;
        }
        .group{
          position: absolute;
          top: 2px;
          left: 2px;
          font-size: 10px;
        }
        .classroom{
          position: absolute;
          top: 2px;
          right: 2px;
          font-size: 10px;
        }
        .name{
          font-size: 18px;

        }
        .teacher{
          position: absolute;
          bottom: 2px;
          font-size: 10px;
          left: 50%;
          transform: translate(-50%, 0); 
        }
    </style>
</head>
<body>';

// Zde pokračuje tvůj generovaný rozvrh
echo '<table>
      <thead>
        <tr>
          <th>Den</th>
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>4</th>
          <th>5</th>
          <th>6</th>
          <th>7</th>
          <th>8</th>
          <th>9</th>
        </tr>
      </thead>
      <tbody>';

for ($d = 1; $d <= 5; $d++) {
  echo '<tr>
          <th>' . $d . '</th>';
  for ($r = 1; $r <= 9; $r++) {
    $class = $schedule->getClass($d, $r);
    if ($class == null) {
      echo '<td></td>';
    } else {
      echo '<td>';
      foreach ($class as $partOfClass) {
        echo '<div class="partOfHour">
                  <p class="group">' . $partOfClass->group . '</p>
                  <p class="classroom">' . $partOfClass->classroom . '</p>
                  <p class="name">' . $partOfClass->name . '</p>
                  <p class="teacher">' . $partOfClass->teacher . '</p>
              </div>';
      }
      echo '</td>';
    }
  }
  echo '</tr>';
}

echo '</tbody>
</table>
</body>
</html>';
?>
