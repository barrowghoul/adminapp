<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <div class="min-w-screen bg-gray-100  grid items-center justify-center">
            <div class="p-6 bg-white flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
              <div>
                  <h1 class="text-2xl font-bold">Registrar CFDI</h1>
                  <hr class="mt-2 mb-6">
              </div>

              {!! Form::model($invoice, ['route' => ['invoices.update', $invoice], 'method' => 'put']) !!}
              <div class="grid grid-cols-4">
                <div class="flex">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          RFC Emisor
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="transmitter" name="transmitter" type="text" value="{{ $invoice->transmitter }}">
                        @error('transmitter')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Emisor
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="transmitter_name" name="transmitter_name" type="text" value="{{ $invoice->transmitter_name }}">
                        @error('transmitter_name')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                </div>                  
                <div class="flex">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          RFC Receptor
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="customer" type="text" value="{{ $invoice->customer }}">
                        @error('customer')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Receptor
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="customer_name" type="text" value="{{ $invoice->customer_name }}">
                        @error('customer_name')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                </div>                
                  <div class="flex">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Folio
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="folio" type="text" value="{{ $invoice->folio }}">
                        @error('folio')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          PAC
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="pac" type="text" value="{{ $invoice->pac }}">
                        @error('pac')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Total
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="total" type="text"  value="{{ $invoice->total }}">
                        @error('total')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                  </div>
                  <div class="flex">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Efecto
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="efecto" type="text" value="{{ $invoice->efecto }}">
                        @error('efecto')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          estado
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" name="estado" type="text" value="{{ $invoice->estado}}">
                        @error('estado')
                          <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror                  
                      </div>
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
              <div class="mb-3">
                {!! QrCode::size(200)->generate("http://verificacfdi.facturaelectronica.satcfdi.mx/default.php?&id=" . $invoice->folio . "&re=" . $invoice->transmitter ."&rr=" . $invoice->customer . "&tt=000000000000477543.580000&fe=gdnMYQ=="); !!}
              </div>              
              {!! Form::close() !!}
            </div>
          </div>
    </div>
</x-app-layout>
