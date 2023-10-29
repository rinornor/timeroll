<div>
    <h2>Appearances</h2>
    <table>
        <thead>
            <tr>Date</tr>
            <tr>Start</tr>
            <tr>End</tr>
            <tr>Duration</tr>
            <tr></tr>

        </thead>
        <tbody>
            @foreach($appearances as $appearance)
            <tr wire:key ="{{$appearance->id}}">
                <td>{{$appearance->date}}</td>
                <td>{{$appearance->time_in}}</td>
                <td>{{$appearance->time_out}}</td>
                <td>{{$appearance->duration}}</td>
                <td>
                    <button
                        type="button"
                        wire:click="delete({{$appearance->id}})"
                        wire:conffirm="Are you sure you want to delete this?"
                    >
                    Delete
                </button>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
