<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <div class="min-w-screen bg-gray-100  grid items-center justify-center">
            <div class="p-6 bg-white flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
              <div>
                  <h1 class="text-2xl font-bold">Registrar Cliente</h1>
                  <hr class="mt-2 mb-6">
              </div>

              {!! Form::open(['route' => 'customers.store']) !!}
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nombre
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="name" type="text">
                  @error('name')
                    <p class="text-red-500 text-xs italic">{{$message}}</p>
                  @enderror                  
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    R.F.C.
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="code" name="code" type="text">
                  @error('name')
                    <p class="text-red-500 text-xs italic">{{$message}}</p>
                  @enderror 
                </div>
              </div>
              
              <div class="flex flex-wrap -mx-3 mb-2">                
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Status
                  </label>
                  <div class="relative">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="status" name="status">
                      <option value="1">Activo</option>
                      <option value="0">Inactivo</option>
                    </select>
                    
                  </div>
                </div>                
              </div>
              <div>
                  {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
              </div>
              {!! Form::close() !!}
            </div>
          </div>
    </div>
</x-app-layout>