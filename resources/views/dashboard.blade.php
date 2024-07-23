@extends('layout.master')

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush

@section('content')
    <div class="container">
        <h1> Welcome, {{ Auth::user()->username }}</h1>
        <canvas id="myChart1"></canvas>
    </div>
@endsection

@push('scripts')
    <script>
        const chartDataElement = document.getElementById('myChart1');

        fetch('/api/quest-b7') // Replace with your actual endpoint URL
            .then(response => response.json())
            .then(data => {
                const labels = data.map(course => course.course); // Or course.mentor
                const participantData = data.map(course => course.jumlah_peserta);

                const chartData = {
                    labels: labels,
                    datasets: [{
                        label: 'Number of Participants',
                        data: participantData,
                        hoverOffset: 4,
                    }],
                };

                // Create or update the chart
                if (chartDataElement) {
                    const ctx = chartDataElement.getContext('2d');
                    let myChart = new Chart(ctx, {
                        type: 'bar',
                        data: chartData,
                    });
                }
            })
            .catch(error => console.error(error));
    </script>
@endpush
