<?php if(!defined("inside")) exit;
class systemcar_damage
{
	var $tableName 	= "car_damage";

	function getsitecar_damage($addon = "")
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` GROUP BY `car_damage_car_id` ORDER BY `car_damage_car_id` DESC ".$addon);
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				return($GLOBALS['db']->fetchlist());
			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}
    
    function searchdamage($search)
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT d.* FROM `".$this->tableName."` d INNER JOIN `cars` c ON d.`car_damage_car_id` = c.`cars_sn` 
            WHERE 
            c.`cars_code` LIKE '%".$search."%' 
            OR c.`cars_plate_number` LIKE '%".$search."%' 
            OR c.`cars_chassis` LIKE '%".$search."%' 
            OR c.`cars_factory` LIKE '%".$search."%' 
            OR c.`cars_model` LIKE '%".$search."%' 
            OR c.`cars_year` LIKE '%".$search."%' 
            GROUP BY d.`car_damage_car_id` ORDER BY d.`car_damage_car_id` DESC ");
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				return($GLOBALS['db']->fetchlist());
			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}

	function getTotalcar_damage($addon = "")
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query 				= $GLOBALS['db']->query("SELECT COUNT(*) AS `total` FROM `car_check` GROUP BY `car_check_car_id` ");
			$queryTotal 		= $GLOBALS['db']->fetchrow();
			$total 				= $queryTotal['total'];
			return ($total);
		}else{$GLOBALS['login']->doDestroy();return false;}
	}

	function getcar_damageInformation($car_damage_sn)
	{
		if($GLOBALS['login']->doCheck() == true)
		{
            $query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` WHERE `car_damage_car_id` = '".$car_damage_sn."' ORDER BY `car_damage_date` DESC ");
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				return($GLOBALS['db']->fetchlist());
			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}
	
	
	function getdamageInformation($car_damage_sn)
	{
		
        $query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` WHERE `car_damage_sn` = '".$car_damage_sn."' LIMIT 1 ");
        $queryTotal = $GLOBALS['db']->resultcount();
        if($queryTotal > 0)
        {
            $sitedamage = $GLOBALS['db']->fetchitem($query);
            return array(
                "car_damage_sn"			            => 		$sitedamage['car_damage_sn'],
                "car_damage_car_id"			        => 		$sitedamage['car_damage_car_id'],
                "car_damage_by"			            => 		$sitedamage['car_damage_by'],
                "car_damage_date"			        => 		$sitedamage['car_damage_date'],
                "car_damage_tank"			        => 		$sitedamage['car_damage_tank'],
                "car_damage_kilos"			        => 		$sitedamage['car_damage_kilos'],
                "car_damage_photo"			        => 		$sitedamage['car_damage_photo'],
                "car_damage_name"			        => 		$sitedamage['car_damage_name'],
                "car_damage_text"			        => 		$sitedamage['car_damage_text'],
                "car_damage_status"			        => 		$sitedamage['car_damage_status'],
            );
        }else{return null;}
	}
	
	function setcar_damageInformation($car_damage)
	{
		if($car_damage['car_damage_photo'] != "")
		{
			$car_damage_photo = "`car_damage_photo`='".$car_damage['car_damage_photo']."',";
		}else
		{
			$car_damage_photo = "";
		}
		$GLOBALS['db']->query("UPDATE LOW_PRIORITY `".$this->tableName."` SET
          `car_damage_car_id`       =          '".$car_damage['car_damage_car_id']."',".$car_damage_photo."
          `car_damage_by`           =          '".$car_damage['car_damage_by']."',
          `car_damage_date`         =          '".$car_damage['car_damage_date']."',
          `car_damage_kilos`        =          '".$car_damage['car_damage_kilos']."',
          `car_damage_name`         =          '".$car_damage['car_damage_name']."',
          `car_damage_text`         =          '".$car_damage['car_damage_text']."'
          WHERE `car_damage_sn`    	= 	        '".$car_damage['car_damage_sn']."' LIMIT 1 ");
		return 1;
	}

	function addNewcar_damage($car_damage)
	{
		$GLOBALS['db']->query("INSERT LOW_PRIORITY INTO `".$this->tableName."`
		(`car_damage_sn`, `car_damage_car_id`, `car_damage_by`, `car_damage_date`, `car_damage_tank`, `car_damage_kilos`, `car_damage_photo`, `car_damage_name`, `car_damage_text`, `car_damage_status`)
		VALUES ( NULL ,  '".$car_damage['car_damage_car_id']."',  '".$car_damage['car_damage_by']."' ,  '".$car_damage['car_damage_date']."',  '".$car_damage['car_damage_tank']."' ,  '".$car_damage['car_damage_kilos']."',  '".$car_damage['car_damage_photo']."' ,  '".$car_damage['car_damage_name']."',  '".$car_damage['car_damage_text']."' , '0' )");
		return 1;
	}

}
?>
