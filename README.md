# Ejercicio arquitectura

Eligiendo una de las estrategias descritas anteriormente (Clean, Capas, Hexagonal, DDD) elaborar el landing page
 de una pagina que debe mostrar reseñas de películas.

```
Requisitos:
- Equipos maximo de 3 personas.
- Deben hacer fork a este repositorio.
- Deben incluir en el md la descripción y justificación de las decisiones de arquitectura que tomaron junto a la lista de los integrantes.
- La fuente de datos debe ser derivada del dump adjunto en este repositorio.
- El front debe ser simple (No se va a tomar en cuenta el diseño mas allá de que sea legible).
- Tiempo límite: 3 horas.
- PHP, con libertad de elección del framework.
- Deben simplificar su diseño de tal forma que pueda ser realizado en el tiempo estipulado.
```

##Descripción y justificación
Se implementa una clean arquitecture separando las capas por medio de interfaces, el modulo de acceso a datos se realiza utilizando el patron repositorio, la logica de negocio se separa en casos de uso.

Se toma la descicion de utilizar clean arquitecture por que se quiere separar la logica de negocio y manejar los demas modulos como contextos.

##Integrantes

-Felipe Parra
-Viviana Arango