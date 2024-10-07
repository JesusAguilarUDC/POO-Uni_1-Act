#include <string>

class Pelicula {
private:
	int IdPelicula;
	std::string NombreDePelicula;
	std::string DirectorDePelicula;
	std::string FechaDeEstreno;
	std::string DuracionPelicula;
	std::string NombreGenero;
	std::string DescripcionGenero;

public:
	// Constructor
		Pelicula(int id, const std::string& nombre, const std::string& director, const std::string& fecha,
			const std::string& duracion, const std::string& genero, const std::string& descripcion)
		: IdPelicula(id), NombreDePelicula(nombre), DirectorDePelicula(director),
		FechaDeEstreno(fecha), DuracionPelicula(duracion), NombreGenero(genero), DescripcionGenero(descripcion) {}

	// Getters
		int getIdPelicula() const { return IdPelicula; }
		std::string getNombreDePelicula() const { return NombreDePelicula; }
		std::string getDirectorDePelicula() const { return DirectorDePelicula; }
		std::string getFechaDeEstreno() const { return FechaDeEstreno; }
		std::string getDuracionPelicula() const { return DuracionPelicula; }
		std::string getNombreGenero() const { return NombreGenero; }
		std::string getDescripcionGenero() const { return DescripcionGenero; }

	// Setters
		void setIdPelicula(int id) { IdPelicula = id; }
		void setNombreDePelicula(const std::string& nombre) { NombreDePelicula = nombre; }
		void setDirectorDePelicula(const std::string& director) { DirectorDePelicula = director; }
		void setFechaDeEstreno(const std::string& fecha) { FechaDeEstreno = fecha; }
		void setDuracionPelicula(const std::string& duracion) { DuracionPelicula = duracion; }
		void setNombreGenero(const std::string& genero) { NombreGenero = genero; }
		void setDescripcionGenero(const std::string& descripcion) { DescripcionGenero = descripcion; }
};
