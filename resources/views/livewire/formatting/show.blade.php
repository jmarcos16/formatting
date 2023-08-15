<div class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow">
       <div class="header px-4 py-3 border-b flex justify-between items-center">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Show Formatting') }}
              </h2>

           <div>
               <x-danger-button>Delete</x-danger-button>
                <x-primary-button>Start</x-primary-button>
           </div>

       </div>

        <div class="px-4 py-3 flex justify-between">
            <span>{{$formatting->name}}</span>
            <span>{{$formatting->description}}</span>
            <span>
                <x-badge-progress :status="$formatting->status" />
            </span>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow mt-4">
        <div class="header px-4 py-3 border-b flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Instructions') }}
            </h2>

        </div>

        <div class="px-8 py-3">
            <ul class="list-decimal">
                <li>Verificar se a licença do computador está ok</li>
                <li>Verificar se a licença do computador está ok</li>
                <li>Verificar se a licença do computador está ok</li>
                <li>Verificar se a licença do computador está ok</li>
                <li>Verificar se a licença do computador está ok</li>
                <li>Verificar se a licença do computador está ok</li>
                <li>Verificar se a licença do computador está ok</li>
                <li>Verificar se a licença do computador está ok</li>
                <li>Verificar se a licença do computador está ok</li>
            </ul>
        </div>
    </div>


</div>
