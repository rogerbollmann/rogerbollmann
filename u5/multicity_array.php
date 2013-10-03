<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Multi-dimensional Array</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<?php
$multiCity = array(
    array('City', 'Country', 'Continent'),
    array('Tokyo', 'Japan', 'Asia'),
    array('Mexico City','Mexico', 'North America'),
    array('New York City', 'USA', 'North America'),
    array('Mumbai', 'India', 'Asia'),
    array('Seoul', 'Korea', 'Asia'),
    array('Shanghai', 'China', 'Asia'),
    array('Lagos', 'Nigeria', 'Africa'),
    array('Buenos Aires', 'Argentina', 'South America'),
    array('Cairo', 'Egypt', 'Africa'),
    array('London', 'UK','Europe')
);
?>
<body>
<div class="span9">
    <div class="tabbable"> <!-- Only required for left/right tabs -->
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab" data-toggle="tooltip" title="Aulistung Array">Aufgabe 1</a></li>
        <li><a href="#tab2" data-toggle="tab" data-toggle="tooltip" title="Auflistung der Staedte in Asien">Aufgabe 2</a></li>
		<li><a href="#tab3" data-toggle="tab" data-toggle="tooltip" title="Auflistung der Kontinente und Anzahl Laender">Aufgabe 3</a></li>
		<li><a href="#tab4" data-toggle="tab" data-toggle="tooltip" title="Auflistung nach Laender A-Z">Aufgabe 4</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
          <p><legend>Auflistung Array</legend>
	
				<table class="table table-striped">
					<thead>
						<!--Tabellenkopf-->
						<tr>
						<!--<th>-->

						<?php
							foreach ($multiCity[0] as $value){
								echo "<th>".$value."</th>";
							}
						?>
	
						</tr>
					</thead>
 
						<?php
							// durchiterieren und key/values ausgeben
							//array_slice ueberspringt die Anzahl Zeilen

							foreach (array_slice($multiCity,1) as $value){
								echo "<tr>";
								echo "<td>".$value[0]."</td>";
								echo "<td>".$value[1]."</td>";
								echo "<td>".$value[2]."</td>";	
								echo "</tr>";
							}

						?>
				</table>
			</p>
        </div>
        <div class="tab-pane" id="tab2">
          <p><legend>Auflistung der St&auml;dte in Asien</legend>
	
				<table class = "table table-striped">
					<thead>
						<tr>
							<?php
								foreach ($multiCity[0] as $value){
									echo "<th>".$value."</th>";
								}
							?>
						</tr>
					</thead>
		
							<?php
							// durchiterieren und key/values ausgeben
							//array_slice ueberspringt die Anzahl Zeilen

								foreach (array_slice($multiCity,1) as $value){
									if ($value[2] == "Asia"){
										echo "<tr>";
										echo "<td>".$value[0]."</td>";
										echo "<td>".$value[1]."</td>";
										echo "<td>".$value[2]."</td>";	
										echo "</tr>";
									}
								}
							?>
				</table>
			</p>
        </div>
		<div class="tab-pane" id="tab3">
          <p><legend>Auflistung der Kontinente, sowie die Zahl der L&auml;nder darin (im Array)</legend>
				<table class = "table table-striped">
					<thead>
						<tr>
							<th>Continent</th>
							<th>Anzahl</th>
						</tr>
					</thead>
				<?php

				/**
				$asia=0;
				$northamerica=0;
				$africa=0;
				$southamerica=0;
				$europe=0;

				foreach ($multiCity as $array){
					if ($array[2] == "Asia"){
						$asia=$asia+1;
					}
					if ($array[2] == "North America"){
						$northamerica=$northamerica+1;
					}
					if ($array[2] == "Africa"){
						$africa=$africa+1;
					}
					if ($array[2] == "South America"){
						$southamerica=$southamerica+1;
					}
					if ($array[2] == "Europe"){
						$europe=$europe+1;
					}
				}

				echo "Asia: ".$asia."<br />";
				echo "North America: ".$northamerica."<br />";
				echo "Africa: ".$africa."<br />";
				echo "South America: ".$southamerica."<br />";
				echo "Europe: ".$europe."<br />";
				**/

				function array_value_count($searchString, $array){
					$count = 0;
   
					foreach ($array as $value){
						if ($value[2] == $searchString){
							$count++;
						}
					}
					return $count;
				}
				
				

				$asia = array_value_count("Asia",$multiCity);
				echo "<tr><td>Asia:</td><td>".$asia."</td></tr>";
				//echo "<li>Asia: ".$asia."</li>";
				$northamerica = array_value_count("North America",$multiCity);
				echo "<tr><td>North America:</td><td>".$northamerica."</td></tr>";
				//echo "<li>North America: ".$northamerica."</li>";
				$africa = array_value_count("Africa",$multiCity);
				echo "<tr><td>Africa:</td><td>".$africa."</td></tr>";
				//echo "<li>Africa: ".$africa."</li>";
				$southamerica = array_value_count("South America",$multiCity);
				echo "<tr><td>South America:</td><td>".$southamerica."</td></tr>";
				//echo "<li>South America: ".$southamerica."</li>";
				$europe = array_value_count("Europe",$multiCity);
				echo "<tr><td>Europe:</td><td>".$europe."</td></tr>";
				//echo "<li>Europe: ".$europe."</li>";

				?>
				</table>
			</p>
        </div>
		<div class="tab-pane" id="tab4">
          <p><legend>Auflistung nach L&auml;nder A-Z</legend>

				<table class = "table table-striped">
					<thead>
						<tr>
							<th>Sorted country list (A-Z)</th>
						</tr>
					</thead>
				<?php

				$tmp = Array();
				/**
				foreach(array_slice($multiCity,1) as $value) {
					$tmp[] = &$value[1];
					array_multisort($tmp, $multiCity);
				}
				**/
				foreach(array_slice($multiCity,1) as $value){
					$tmp[] = &$value[1];
				}
				asort($tmp);
				foreach($tmp as $values){
					echo "<tr>";
					echo "<td>".$values."</td>";
					echo "</tr>";
				}
				?>
				</table>
			</p>
        </div>
      </div>
    </div>
</div> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>