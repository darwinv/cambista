@extends('admin.layout')

@section('content')

<h1>Tus Transacciones</h1>
<div class="box-body">
<p></p>
<div class="callout callout-info">
	<h3>Transacción en Progreso</h3>

	<h4 >Tu cambio de Dolares a Soles esta en un 70%.</h4>

<div class="progress active">	
   <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
      <span class="sr-only">70% Complete (success)</span>
   </div>
 </div>
</div>


 <div class="callout callout-success">
    <h3>Transacción Exitosa</h3>
	<h4 >Tu cambio de Euros a Bolivares fue exitosa</h4>
	<div class="progress">
    	<div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
      		<span class="sr-only">100% Complete</span>
    	</div>
  	</div>
  </div>

	<div class="callout callout-warning">
                <h4>Cambiando</h4>

                <p>Tu cambio de Reales a Libras estara en instantes.</p>
		<div class="box box-warning">
                    
            <!-- /.box-body -->
            <!-- Loading (remove the following to stop the loading)-->
            <div class="overlay">
              <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- end loading -->
          </div>

     </div>
	 

 </div>



              

@endsection