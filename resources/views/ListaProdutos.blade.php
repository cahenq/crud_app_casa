<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista dos Produtos</title>
</head>
<body>

    <div>
        <nav>
            <ul>
                <li>HOME</li>
                <li>LISTA PRODUTOS</li>
            </ul>
        </nav>

        <div>

            <h1>Lista de Produtos</h1>
            <hr>

            <ul>
                {{-- Aqui entra o blade PHP --}}
                @foreach ($productList as $productName)

                <li> {{ $productName }} </li>


                @endforeach

            </ul>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>VALOR</th>
                        <th>CATEGORIA</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)

                    <tr>
                        <td> {{ $product['id'] }} </td>
                        <td> {{ $product['name'] }} </td>
                        <td> {{ $product['valor'] }} </td>
                        <td> {{ $product['categoria'] }} </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

</body>
</html>
