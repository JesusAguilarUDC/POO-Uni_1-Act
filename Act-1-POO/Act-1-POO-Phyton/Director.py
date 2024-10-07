class Director:
	def __init__(self, id_director, nombre_director, edad_director, premios_director, pelicula_dirigida):
		self.id_director = id_director
		self.nombre_director = nombre_director
		self.edad_director = edad_director
		self.premios_director = premios_director
		self.pelicula_dirigida = pelicula_dirigida

director = Director(
	id_director=3000000,
	nombre_director="Francis Ford Coppola",
	edad_director="85",
	premios_director="5 Oscar",
	pelicula_dirigida="El padrino"
)

print(director.nombre_director)
