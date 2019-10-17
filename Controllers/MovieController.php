<?php
	namespace Controllers;

	use \Daos\MovieFileDao as MovieFileDao;

	class MovieController
	{
		private $MovieFileDao;

		public function __construct()
		{
			$this->MovieFileDao = new MovieFileDao();
		}

		public function getList()
		{
			$api = $this->MovieFileDao->getNowApi();
			return $api;
		}
	}
?>
