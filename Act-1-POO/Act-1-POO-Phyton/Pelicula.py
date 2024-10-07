class Pelicula:
	def __init__(self, id_pelicula, nombre_de_pelicula, director_de_pelicula, 
		fecha_de_estreno, duracion_pelicula, nombre_genero, 
		descripcion_genero):
		self.id_pelicula = id_pelicula
		self.nombre_de_pelicula = nombre_de_pelicula
		self.director_de_pelicula = director_de_pelicula
		self.fecha_de_estreno = fecha_de_estreno
		self.duracion_pelicula = duracion_pelicula
		self.nombre_genero = nombre_genero
		self.descripcion_genero = descripcion_genero

pelicula = Pelicula(
	id_pelicula=1,
	nombre_de_pelicula="El Padrino",
	director_de_pelicula="Francis Ford Coppola",
	fecha_de_estreno="1972-03-24",
	duracion_pelicula="2h 55m",
	nombre_genero="Crimen",
	descripcion_genero="Una saga sobre la familia Corleone."
)

print(pelicula.nombre_de_pelicula)
