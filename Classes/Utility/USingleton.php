<?php

/**
 * Se una classe viene richiesta per la prima volta, allora ne fa il New, 
 * altrimenti, se unìistanza della classe è già stata creata, restituisce
 * tale istanza
 */
class USingleton {

        /**
         * Istanze delle classi create
         * 
         * @var array
         */
	private static $instances = array();

        /**
         * Effettua il controllo su $istances per capire se creare una nuova istanza o 
         * restituirne una già esistente
         * 
         * @param object $class
         * @return object
         */
	public static function getInstance($class){

		if(!isset(self::$instances[$class])){
			self::$instances[$class]=new $class;
		}

		return self::$instances[$class];
		

	}
}