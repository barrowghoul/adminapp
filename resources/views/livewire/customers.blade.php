<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
    <!-- component -->
    <div class="px-6 py-4 flex">
        <input wire:model="search" wire:keydown="limpiar_page" type="text" class="form-input flex-1 shadow-sm" placeholder="Buscar Cliente">
        <div class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            <a href="{{route('customers.create')}}">Registrar Cliente</a>
        </div>        
    </div>
    <div class="overflow-x-auto">
        <div class="min-w-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">            
            <table class="min-w-max w-full table-auto bg-white">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Cliente</th>
                        <th class="py-3 px-6 text-left">RFC</th>                                
                        <th class="py-3 px-6 text-center">Status</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($customers as $customer)                                            
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">                                        
                                    <span class="font-medium">{{$customer->name}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span>{{$customer->code}}</span>
                                </div>
                            </td>                                
                            <td class="py-3 px-6 text-center">
                                @if ($customer->status)
                                    <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Activo</span> 
                                @else
                                <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Suspendido</span>
                                @endif
                            </td>
                            <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">                                            
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <a href="{{route('customers.edit', $customer)}}" class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                                </a>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </div>
                                        </div>
                                </td>
                        </tr>          
                    @endforeach                  
                </tbody>
            </table>                    
        </div>
    </div>
    <div class="px-6 py-4">
        {{$customers->links()}}
    </div>  
</div>
