<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <p>{{$date}}</p>
    <p>This is a mirror of all the appearances that you have done so far on this activity</p>
    <table class="border-collapse border border-slate-400">
        <thead>
            <tr>
                <th class="border border-slate-300">Date</th>
                <th class="border border-slate-300">Start</th>
                <th class="border border-slate-300">Finish</th>
                <th class="border border-slate-300">Duration</th>
            </tr>
        </thead>
        <tbody>
        @foreach($appearances as $appearance)
        <tr>
            <td class="border border-slate-300">{{$appearance->date}}</td>
            <td class="border border-slate-300">{{$appearance->time_in}}</td>
            <td class="border border-slate-300">{{$appearance->time_out}}</td>
            <td class="border border-slate-300">{{$appearance->duration}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
</body>
</html>