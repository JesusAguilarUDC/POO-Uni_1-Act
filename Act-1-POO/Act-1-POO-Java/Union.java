package Act-1-POO;

public class Union {
	public static void main(String[] args) {

		System.out.println("CODIGO: 7502410034");
		System.out.println("Jesús Aguilar");
		System.out.println("******************************");
		
		System.out.println();		
		
		Pelicula pelicula1 = new Pelicula ();
		pelicula1.setIdPelicula("20130808");
		pelicula1.setNombreDePelicula("Cuestion De Tiempo");
		pelicula1.setDirectorPelicula("Richard Curtis");
		pelicula1.setFechaDeEstreno("08-08-2013");
		pelicula1.setDuracionPelicula("123min");
		peliculo1.setNombreGenero("Romance");
		pelicula1.setDescripcionGenero("- Argumentos construigos de eventos y 
		personajes relacionados con la experiencia del amor y romance");
		
		System.out.println("PELICULA: "+pelicula1);
		System.out.println();

		Director director1 = new Director ();
		director1.setIdDirector("30293029");
		director1.setNombreDirector("Richard Whalley Anthony Curtis");
		director1.setEdadDirector("67 años");
		director1.setPremiosDirector("Festival Internacional de Cine de San 
		Sebastian ( Mejor pelicula europea - Cuestion de tiempo - 2013 )");
		director1.setPeliculaDirigida("Genie, We Are Still Here, The Loud House: la pelicula, Yesterday, Cuestion de Tiempo, Mr. Bean, Las vacaciones de Mr. Bean" );
		
		System.out.println("DIRECTOR: "+director1);
		System.out.println();

		Actor actor1 = new Actor ();
		actor1.setIdActor("20133030");
		actor1.setNombreActor("Domhnall Gleeson");
		actor1.setEdadActor("41");
		actor1.setPremiosActor("IFTA-TV-Mejor Actor en un Rol Principal ( When Harve y Met Bob - 2011 ), IFTA Mejor Actor de Reparto ( Anna Karenina - 2013 )");
				
		System.out.println("ACTOR: "+actor1);
		System.out.println();
		
	}	
		


	public String toString() {	
		System.out.println("PELICULA: "+pelicula1);
		System.out.println("DIRECTOR: "+director1);
		System.out.println("ACTOR: "+actor1);
				
	}
} 





