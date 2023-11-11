
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-5">
<div class="w-screen md:w-1/2 flex items-center justify-center">
<div>
    <h2 class="flex items-center justify-center">Appearances</h2>
    <table class="table-auto border-collapse border-2 border-gray-500">
        <thead>
            <tr>
                <th class="border border-gray-400 px-4 py-2 text-gray-800">Date</th>
                <th class="border border-gray-400 px-4 py-2 text-gray-800">Start</th>
                <th class="border border-gray-400 px-4 py-2 text-gray-800">End</th>
                <th class="border border-gray-400 px-4 py-2 text-gray-800">Duration</th>
                <th class="border border-gray-400 px-4 py-2 text-gray-800"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($appearances as $appearance)
            <tr wire:key ="{{$appearance->id}}">
                <td class="border border-gray-400 px-4 py-2">{{$appearance->date}}</td>
                <td class="border border-gray-400 px-4 py-2">{{$appearance->time_in}}</td>
                <td class="border border-gray-400 px-4 py-2">{{$appearance->time_out}}</td>
                <td class="border border-gray-400 px-4 py-2">{{$appearance->duration}}</td>
                <td class="border border-gray-400 px-4 py-2">
                    <button
                        type="button"
                        wire:click="delete({{$appearance->id}})"
                        wire:confirm="Are you sure you want to delete this?"
                        class="border px-4 py-2 bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white  border-red-500 hover:border-transparent rounded"
                    >
                    Delete
                </button>
                </td>
               
                    <td class="border border-gray-400 px-4 py-2">
                    <a href="{{ route('appearances.edit', ['id' => $appearance->id]) }}">
                    <button class="border px-4 py-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white  border-blue-500 hover:border-transparent rounded">
                        Edit
                    </button></a>
                       
                    </td>

                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
