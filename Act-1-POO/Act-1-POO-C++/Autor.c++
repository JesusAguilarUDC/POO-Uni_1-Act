#include <string>

class Actor {
private:
	int IdActor;
	std::string NombreActor;
	std::string EdadActor;
	std::string PremiosActor;

public:
	// Constructor
		Actor(int id, const std::string& nombre, const std::string& edad, const std::string& premios)
		: IdActor(id), NombreActor(nombre), EdadActor(edad), PremiosActor(premios) {}

	// Getters
		int getIdActor() const { return IdActor; }
		std::string getNombreActor() const { return NombreActor; }
		std::string getEdadActor() const { return EdadActor; }
		std::string getPremiosActor() const { return PremiosActor; }

	// Setters
		void setIdActor(int id) { IdActor = id; }
		void setNombreActor(const std::string& nombre) { NombreActor = nombre; }
		void setEdadActor(const std::string& edad) { EdadActor = edad; }
		void setPremiosActor(const std::string& premios) { PremiosActor = premios; }
};
