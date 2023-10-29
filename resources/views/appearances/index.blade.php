<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Appearances') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                            <th>Duration(Hours)</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            @if($appearances && count($appearances) > 0)
                            
                                @foreach($appearances as $appearance)
                                <tr>
                                        <td>{{$appearance->date}}</td>
                                        <td>{{$appearance->time_in}}</td>
                                        <td>{{$appearance->time_out}}</td>
                                        <td>{{$appearance->duration}}</td>
                                        <td><button>Edit</button></td>
                                        <td><button>Delete</button></td>
                                </tr>
                                @endforeach
                            @endif
                            
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
</x-app-layout>
