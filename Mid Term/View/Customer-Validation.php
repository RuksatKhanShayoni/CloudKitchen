<?php
		if(isset($_POST["btnSave"]))
		{
			if ($location !="" && $Payment !="" && $food != "")
			{
                header('Location:Place_order.php');
            }
		}
    ?>