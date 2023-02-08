<?php



$diaDaSemana = date('l');



if($diaDaSemana == 'Monday' ){
	echo 'Segunda ' . date('d/m/Y H:i:s') .'</br>' ;

} elseif($diaDaSemana == 'Tuesday') {
	echo date( 'Terça') . date('d/m/Y H:i:s') .'</br>' ;
	
} elseif($diaDaSemana == 'Wednesday') {
	echo 'Quarta ' . date('d/m/Y H:i:s') .'</br>' ;
} elseif($diaDaSemana == 'Thursday') {
	echo 'Quinta ' . date('d/m/Y H:i:s') .'</br>' ;
} elseif($diaDaSemana == 'Friday') {
	echo 'Sexta ' . date('d/m/Y H:i:s') .'</br>' ;
} elseif($diaDaSemana == 'Saturday') {
	echo 'Sábado '. date('d/m/Y H:i:s') .'</br>' ;
} elseif($diaDaSemana == 'Sunday') {
	echo 'Domingo ' . date('d/m/Y H:i:s') .'</br>' ;
};
