<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <div class="min-w-screen bg-gray-100  grid items-center justify-center">
            <div class="p-6 bg-white flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
              <div>
                  <h1 class="text-2xl font-bold">Factura {{$original->folio}}</h1>
                  <hr class="mt-2 mb-6">
              </div>

              {!! Form::model($original, ['route' => ['originals.update', $original], 'method' => 'put']) !!}
              <div class="grid grid-cols-4">
                <div class="flex">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          RFC Emisor
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="transmitter" name="transmitter" type="text" value="{{ $original->transmitter }}">
                        @error('transmitter')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>                      
                </div>                  
                <div class="flex">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          RFC Receptor
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="customer" type="text" value="{{ $original->customer }}">
                        @error('customer')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                </div>                
                  <div class="flex">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Folio
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="folio" type="text" value="{{ $original->folio }}">
                        @error('folio')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Sello
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="pac" type="text" value="{{ $original->fe }}">
                        @error('pac')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Total
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="total" type="text"  value="{{ $original->total }}">
                        @error('total')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                  </div>              
              </div>
              
              <div class="mb-3">
                {!! QrCode::size(200)->generate("https://verificacfdi.facturaelectronica.sat.gob.mx/default.aspx?&id=" . $original->folio . "&re=" . $original->transmitter ."&rr=" . $original->customer . "&tt=" . $original->total . "&fe=". $original->fe . "=="); !!}
              </div>              
              {!! Form::close() !!}
            </div>
          </div>
    </div>
</x-app-layout>