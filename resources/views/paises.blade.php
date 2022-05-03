<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-3/css/bootstrap.min.css" integrity="sha512-hugT+JEQi0vXZbvspjv4x2M7ONBvsLR9IFTEQAYoUsmk7s1rRc2u7I6b4xa14af/wZ+Nw7Aspf3CtAfUOGyflA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>
<body>
    <h1>Paises de la región</h1>
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col"> Pais </th>
                <th scope="col"> Capital </th>
                <th scope="col"> Moneda </th>
                <th scope="col"> Poblacion </th>
                <th scope="col"> Ciudades </th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais=>$infopais)
                <tr>
                    <td rowspan="{{count($infopais['ciudades'])}}">
                        {{ $pais }}
                    </td>
                    <td rowspan="{{count($infopais['ciudades'])}}">
                        {{ $infopais["capital"] }}
                    </td>
                    <td rowspan="{{count($infopais['ciudades'])}}">
                        {{ $infopais["moneda"] }}
                    </td>
                    <td rowspan="{{count($infopais['ciudades'])}}"> 
                        {{ $infopais["poblacion"] }}
                    </td>
                    @foreach($infopais["ciudades"] as $ciudad )
                        <th>
                            {{$ciudad}}
                        </th>
                    </tr>

                    @endforeach
               
            @endforeach
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</body>
</html>