<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Proyecto final Base de Datos</title>

        <!-- CSS And JavaScript -->
        {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
        
    </head>

    <body>
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{route('infracciones.index')}}">Infracciones UTP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marcas <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('marcas.create')}}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear</a></li>
                    <li><a href="{{route('marcas.index')}}"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Listar</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Propietarios <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('propietarios.create')}}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear</a></li>
                    <li><a href="{{route('propietarios.index')}}"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Listar</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Infracciones <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('infracciones.create')}}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear</a></li>
                    <li><a href="{{route('infracciones.index')}}"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Listar</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agentes <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('agentes.index')}}"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Listar</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Direcciones <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('direcciones.index')}}"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Listar</a></li>
                  </ul>
                </li>
              </ul>
              <!--
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              -->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> NameUser <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> My loans</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Settings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Log out</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    	<div class="container">
	        @yield('content')
	    </div>

	    <!-- jQuery -->
        {!! Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') !!}
        {!! Html::script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js') !!}
    </body>
</html>