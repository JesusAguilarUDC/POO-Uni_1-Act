class Actor:
    def __init__(self, id_actor, nombre_actor, edad_actor, premios_actor):
        self.id_actor = id_actor
        self.nombre_actor = nombre_actor
        self.edad_actor = edad_actor
        self.premios_actor = premios_actor

# Ejemplo de cómo crear una instancia de la clase
actor = Actor(
    id_actor=1,
    nombre_actor="Robert De Niro",
    edad_actor="81",
    premios_actor="2 Oscar"
)

# Imprimir información del actor
print(actor.nombre_actor)
