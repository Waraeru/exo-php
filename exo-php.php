<html>
	<head>
		<style type="text/css">

	.border {
		border: 2px black solid;

	}

		</style>
	</head>
	<body>



		<?php

				$Androids = array(
					'name' => 'Do Androids Dream of Electric Sheep?',
					'price'=> 12,
					'rating' => 5,
					'prime' => false,

			);

				$Shutter = array(
					'name' => 'Shutter Island',
					'price'=> 18,
					'rating' => 4,
					'prime' => true, 

			);

				$Scanner = array(
					'name' => 'A Scanner Darkly',
					'price'=> 16,
					'rating' => 4,
					'prime' => false,

			);

				$a1984 = array(
					'name' => 1984,
					'price'=> 12,
					'rating' => 5,
					'prime' => true,

			);

				$Butcher = array(
					'name' => 'Butcher Bird',
					'price'=> 16,
					'rating' => 3,
					'prime' => true,

			);

				$Parfum = array(
					'name' => 'Le Parfum',
					'price'=> 20,
					'rating' => 2,
					'prime' => true,

			);


				$Library = array($Androids, $Shutter, $Scanner, $a1984, $Parfum, $Butcher);

				

				foreach ($Library as $Books) {
				if ($Books['prime']== true) {
				echo '<ul class="border"><li>'.$Books['name'].'</li><li>'.$Books['price'].'</li><li>'.$Books['rating'].'</li><li>Prime</li></ul></p><br />' ; 
			}	

				else { echo '<ul class="border"><li>'.$Books['name'].'</li><li>'.$Books['price'].'</li><li>'.$Books['rating'].'</li><li>Non Prime</li></ul></p><br />';	
				}

				}
				




		?>





	</body>

</html>

