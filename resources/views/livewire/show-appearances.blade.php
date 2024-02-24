
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Start
                </th>
                <th scope="col" class="px-6 py-3">
                    End
                </th>
                <th scope="col" class="px-6 py-3">
                    Duration
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($appearances as $appearance)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$appearance->date}}
                </th>
                <td class="px-6 py-4">
                {{$appearance->time_in}}
                </td>
                <td class="px-6 py-4">
                {{$appearance->time_out}}
                </td>
                <td class="px-6 py-4">
                {{$appearance->duration}}
                </td>
                <td class="px-6 py-4">
                <a href="{{ route('appearances.edit', ['id' => $appearance->id]) }}">
                    <button class="border px-4 py-2 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white  border-blue-500 hover:border-transparent rounded">
                        Edit
                    </button></a>
                </td>
                <td class="px-6 py-4">
                <button
                        type="button"
                        wire:click="delete({{$appearance->id}})"
                        wire:confirm="Are you sure you want to delete this?"
                        class="border px-4 py-2 bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white  border-red-500 hover:border-transparent rounded"
                    >
                    Delete
                </button>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
