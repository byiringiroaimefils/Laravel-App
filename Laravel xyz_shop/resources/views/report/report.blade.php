@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Reports</h1>
        <div>
            <button class="btn btn-success" id="exportExcel">Export to Excel</button>
            <button class="btn btn-danger" id="exportPDF">Export to PDF</button>
        </div>
    </div>

    <!-- Filters -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form id="reportFilters">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Date Range</label>
                            <input type="text" class="form-control" id="daterange" name="daterange">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category">
                                <option value="">All Categories</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Report Type</label>
                            <select class="form-control" name="report_type">
                                <option value="inventory">Inventory Status</option>
                                <option value="movement">Stock Movement</option>
                                <option value="value">Stock Value</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary mt-4">Generate Report</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Report Content -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div id="reportContent">
                <!-- Report data will be loaded here dynamically -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="reportTable">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Current Stock</th>
                                <th>Value</th>
                                <th>Last Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reportData as $item)
                            <tr>
                                <td>{{ $item->product_name }}</td>
                                <td>{{ $item->category_name }}</td>
                                <td>{{ $item->current_stock }}</td>
                                <td>${{ number_format($item->stock_value, 2) }}</td>
                                <td>{{ $item->updated_at->format('Y-m-d H:i') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        // Initialize date range picker
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        });

        // Handle report generation
        $('#reportFilters').on('submit', function(e) {
            e.preventDefault();
            // Ajax call to generate report
            $.ajax({
                url: '{{ route("reports.generate") }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#reportContent').html(response);
                }
            });
        });

        // Handle exports
        $('#exportExcel').click(function() {
            window.location.href = '{{ route("reports.export.excel") }}?' + $('#reportFilters').serialize();
        });

        $('#exportPDF').click(function() {
            window.location.href = '{{ route("reports.export.pdf") }}?' + $('#reportFilters').serialize();
        });
    });
</script>
@endpush
@endsection
