


<div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c !important;">
                <!--    TITULO  -->
                <h4 class="modal-title" style="color: #fff; text-align: center;">
                    Detalles de la Boleta 
                </h4>
            </div>

            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                <!--    BOLETA DE AUTORIZACION DE SALIDA -->
            
                <!--    REGISTRO  -->
            
                <h4 class="text-center">DATOS:</h4>
                <form action="{{ route('boletas.show', $boleta)}}" method="GET">
                    @csrf
                    
                    <div class="mb-5">
                        <!--    NOMBRES  -->
                        <div class="flex gap-3 items-center">
                            <i class="fas fa-user input-group-text"></i>
                            <label for="nombre" class="block uppercase font-bold">Nombres y Apellidos</label>  
                        </div>
                            
                        <input 
                            id="nombre"
                            type="text"
                            placeholder="Tu Nombre"
                            name="nombre"
                            class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror"
                            value="{{ $boleta->nombre}}"
                        />
                    </div>
            
                    
                        
                    <!--    CALENDARIO  -->
                    <div class="mb-5">
                        <div class="flex gap-3 items-center">
                            <i class="fas fa-calendar input-group-text"></i>
                            <label for="fecha" class="block uppercase font-bold">Nueva - Fecha</label>
                        </div>
                        
                        <input 
                            type="text" 
                            name="fecha" 
                            class="form-control" 
                            value="{{ $boleta->fecha}}"
                        />
                    </div>
            
                    <!--    OFICINA  -->
                    <div class="mb-5">
                        <div class="flex gap-3 items-center">
                            <i class="fas fa-solid fa-building input-group-text"></i>
                            <label for="oficina" class="block uppercase font-bold">Oficina</label>  
                        </div>
            
                        <input 
                            type="text" 
                            class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" 
                            name="oficina" 
                            placeholder="Tu Oficina" 
                            value="{{ $boleta->oficina}}"
                        />
                        
                    </div>
                
                    <!--    MOTIVO      -->
            
                    <h4 class="text-center"> MOTIVO: </h4>
            
                    <div class="mb-5">
                        <div class="flex gap-3 items-center">
                            <i class="fas fa-solid fa-building input-group-text"></i>
                            <label for="oficina" class="block uppercase font-bold">Opcion</label>  
                        </div>
            
                        <input 
                            type="text" 
                            class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" 
                            name="oficina" 
                            placeholder="Tu Oficina" 
                            value="{{ $boleta->motivo}}"
                        />
                    </div>
                    
            
                    <!--    MENSAJE  -->
            
                    <div class="mb-5">
                        <div class="flex gap-3 items-center">
                            <i class="fas fa-pencil-alt input-group-text"></i>
                            <label for="mensaje" class="block uppercase font-bold">Mensaje</label>  
                        </div>
                        <textarea name="mensaje" cols="20" rows="5" placeholder="Tu Mensaje"
                            class="form-control">
                            {{ $boleta->mensaje}}
                        </textarea>
                    </div>
                        
                    <!--    BOTON REGRESAR      -->
                    <div class="text-center p-4">
                        <button 
                            type="submit"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer 
                            uppercase w-full font-bold p-4 text-white rounded-lg"
                            >
                            Enviar Boleta
            
                        </button>
                    </div>
                        
                    
                
                </form>
            </div>
        </div>

    </div>


</div>

