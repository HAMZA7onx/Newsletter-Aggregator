@extends('Shared.components.layout')

@section('content')
    <div class="flex items-center justify-center max-h-full max-w-full py-20">
        <canvas class="backdrop-blur-sm shadow-md h-[90%] w-[90%] rounded-md p-4 border-[1px] border-solid border-purple-700" id="itemsByCategoryChart" style="background-color: rgba(0, 0, 0, 0.403);"></canvas>
    </div>

    <script>
        fetch('/items-by-category')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                const categories = data.map(item => item.category);
                const counts = data.map(item => item.count);

                new Chart(document.getElementById('itemsByCategoryChart'), {
                    type: 'pie',
                    data: {
                        labels: categories,
                        datasets: [{
                            label: 'Items by Category',
                            data: counts,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.5)', // Red
                                'rgba(54, 162, 235, 0.5)', // Blue
                                'rgba(255, 206, 86, 0.5)', // Yellow
                                'rgba(75, 192, 192, 0.5)', // Green
                                'rgba(10, 192, 192, 0.5)', // Cyan
                                'rgba(75, 6, 192, 0.5)',   // Purple
                                'rgba(75, 192, 2, 0.5)',   // Lime
                                'rgba(90, 100, 192, 0.5)', // Lavender
                                'rgba(50, 192, 300, 0.5)', // Aqua
                                'rgba(44, 192, 30, 0.5)',  // Lime Green
                                'rgba(255, 0, 0, 0.5)',    // Red
                                'rgba(0, 255, 0, 0.5)',    // Green
                                'rgba(0, 0, 255, 0.5)',    // Blue
                                'rgba(255, 255, 0, 0.5)',  // Yellow
                                'rgba(255, 0, 255, 0.5)',  // Magenta
                                'rgba(0, 255, 255, 0.5)',  // Cyan
                                'rgba(128, 0, 128, 0.5)',  // Purple
                                'rgba(255, 165, 0, 0.5)',  // Orange
                                'rgba(0, 128, 0, 0.5)',    // Dark Green
                                'rgba(128, 128, 0, 0.5)'   // Olive
                            ],

                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                // Add more border colors if needed
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                position: 'right', // Position of the legend
                                labels: {
                                    font: {
                                        size: 14,
                                        color: 'white'
                                    }
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    </script>
@endsection
