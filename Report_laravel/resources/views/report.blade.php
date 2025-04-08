<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>report</title>
</head>

<body>
    <form action="/showreport" method="Get">
        <label for="">starting Date</label>
        <input type="date" name="start_date">
        <label for="">Ending Date</label>
        <input type="date" name="end_date">
        <button type="submit">show Data report</button>
        <table>
    </form>
    @if (isset($customers) && $customers->count() > 0)
        <table>

            <thead>
                <th>customer full</th>
                <th>customer telephone</th>
                <th>prdoduct name</th>
                <th>product quantity</th>
                <th>product price</th>
            </thead>
            @foreach ($customers as $customer)
                @foreach ($customer->products as $product)
                    <tr>

                        <td>{{ $customer->customer_full_names }}</td>
                        <td>{{ $customer->phone_number }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_quantity	 }}</td>
                        <td>{{ $product->product_price }}</td>
                    </tr>
                @endforeach
            @endforeach
        @else
            <p>No records</p>
    @endif
</body>

</html>
