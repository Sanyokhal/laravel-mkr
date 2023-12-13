<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Student info</title>
</head>
<body>
<h2 class="text-3xl font-bold underline ml-4 my-2">Дані студента</h2>
<div class="group ml-3 my-4">
    <h4>{{$student->fullName}}</h4>
    <h4>Спеціальність: {{$student->speciality}} Курс: {{$student->course}}</h4>
</div>
<h2 class="text-2xl font-bold underline ml-4">Оцінки студента</h2>
<form></form>
<table class="ml-4 my-4">
    <tr>
        <td class="font-bold">Клас</td>
        <td class="px-20 text-center font-bold">Дата отримання</td>
        <td class="font-bold">Оцінка</td>
    </tr>
    @foreach($marks as $mark)
        <tr>
            <td>{{$mark->class}}</td>
            <td class="text-center">{{$mark->date_mark_received}}</td>
            <td class="font-mono">
                <form action="{{route('mark.delete', ['id' => $mark->id])}}" method="post">
                    <button class="underline" type="submit">Видалити</button> @csrf
                    @method('DELETE')</form>
            </td>
        </tr>
    @endforeach
</table>
<button class="border-2 py-2 px-2 ml-4 rounded-2xl"><a href="/student">На головну сторінку</a></button>
</body>
</html>
