<?php
	class Presupuesto{
		//declaración de variables.
		private $precio;
		private $paginas;
		private $hosting;
		private $soporte;

		//métodos.
		public function  price_method ($price){
			$this -> precio=$price;
		}
		public function  pages_method ($pages){
			$this -> paginas=$pages;
		}
		public function  host_method ($host){
			$this -> hosting=$host;
		}
		public function  support_method ($support){
			$this -> soporte=$support;
		}

		//métodos de salida o impresión
		public function  impPrice (){
			echo $this -> precio;
		}
		public function  impPages (){
			echo $this -> paginas;
		}
		public function  impHost (){
			echo $this -> hosting;
		}
		public function  impSupport (){
			echo $this -> soporte;
		}
	}
?>