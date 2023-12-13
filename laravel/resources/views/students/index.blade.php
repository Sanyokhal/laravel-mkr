<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Students list</title>
</head>
<body>
<h2 class="text-3xl font-bold underline">Варіант - 5</h2>
<form action="{{route('course.sort')}}" method="GET">
<label for="" class="ml-4 underline"> Введіть номер курсу
    <input class="my-8 ml-4" type="number" name="course" min="1" max="4" placeholder="Номер курсу">
</label>
    <button type="submit">Відсортувати</button>
</form>

<h2 class="underline ml-5 my-5 font-mono font-bold">Сортування за {{$course}} курсом</h2>

<table class="ml-4">
    <tr class="text-sm font-bold text-gray-900">
        <td>ПІБ</td>
        <td>Курс</td>
        <td>Спеціальність</td>
        <td class="pl-4"></td>
    </tr>
    @foreach($students as $student)
        <tr class="bg-midnight text-tahiti">
            <td>{{$student->fullName}}</td>
            <td>{{$student->course}}</td>
            <td>{{$student->speciality}}</td>
            <td class="pl-4"><a href="/student/{{$student->id}}">Показати</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>
