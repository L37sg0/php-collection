<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

@section('page_js')
    @parent
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',// bubble, bar, pie, radar, doughnut, line, polarArea, scatter
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
