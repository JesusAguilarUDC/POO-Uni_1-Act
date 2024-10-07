#include <string>

class Director {
private:
	int IdDirector;
	std::string NombreDirector;
	std::string EdadDirector;
	std::string PremiosDirector;
	std::string PeliculaDirigida;

public:
	// Constructor
		Director(int id, const std::string& nombre, const std::string& edad, const std::string& premios, const std::string& pelicula)
		: IdDirector(id), NombreDirector(nombre), EdadDirector(edad), PremiosDirector(premios), PeliculaDirigida(pelicula) {}

	// Getters
		int getIdDirector() const { return IdDirector; }
		std::string getNombreDirector() const { return NombreDirector; }
		std::string getEdadDirector() const { return EdadDirector; }
		std::string getPremiosDirector() const { return PremiosDirector; }
		std::string getPeliculaDirigida() const { return PeliculaDirigida; }

	// Setters
		void setIdDirector(int id) { IdDirector = id; }
		void setNombreDirector(const std::string& nombre) { NombreDirector = nombre; }
		void setEdadDirector(const std::string& edad) { EdadDirector = edad; }
		void setPremiosDirector(const std::string& premios) { PremiosDirector = premios; }
		void setPeliculaDirigida(const std::string& pelicula) { PeliculaDirigida = pelicula; }
};
