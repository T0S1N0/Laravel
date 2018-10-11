<!doctype html>
<html>
  <head>
    <meta charset="uft-8"/>
    <title>Hola Mundo laravel</title>
  </head>
  <body>
    <h1>Hola Mundo</h1>
    Mi primera página en LARAVEL.
    <!-- Metodo implode permite mostrar una array de Strings como una unica String -->
    <h2>Users : <?php echo implode($users," ,")?></h2>
    <!-- Mostrando con echo la primera posicion del arrray -->
    <h2>Users : <?php echo ($users[0])	?></h2>

 <!-- Laravel nos ofrece un helper llamado "e" que nos permite escapar HTML que podría ser insertado por los usuarios de nuestra aplicación, de manera de prevenir posibles ataques XSS: -->
	<h2><?php echo e($users[2]) ?></h2>


    <!-- Con la sintaxis de la plantilla de laravel blade -->
    <h2>{{$users[1]}}</h2>

    @for ($i = 0; $i < 10; $i++)
    	El valor actual es {{ $i }}
	@endfor
    
	<br/><br/>

    @foreach ($users as $user)
    	<li>{{ $user }}</li>
	@endforeach

	<!-- 
	@if (! empty($users))
    	...
	@elseif ($users < 3)
    	<p>Hay menos de 3 usuarios registrados.</p>
	@else
    	<p>No hay usuarios registrados.</p>
	@endif 
	-->

	<!-- Blade también tiene la directiva unless, que funciona como un condicional inverso -->

	<!-- @unless (empty($users))
    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
	@else
    	<p>No hay usuarios registrados.</p>
	@endunless -->

<!-- directiva empty que es una forma más corta de escribir if (empty (...)) -->

<!-- 	@empty($users)
    	<p>No hay usuarios registrados.</p>
	@else
    	<ul>
        	@foreach ($users as $user)
            	<li>{{ $user }}</li>
        	@endforeach
    	</ul>
	@endempty -->

	<br/><br/>

<!-- Con la directiva forelse podemos asignar una opción por defecto a un ciclo foreach sin utilizar bloques anidados -->

	@forelse ($users as $user)
    	<li>{{ $user }}</li>
	@empty
    	<li>No hay usuarios registrados.</li>
	@endforelse



   
  </body>
</html>