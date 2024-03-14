@extends('Shared.components.layout')

@section('content')
    <div class="flex items-center justify-center h-full w-full">
        <canvas class="backdrop-blur-sm shadow-md h-[90%] w-[90%] mx-10 rounded-md p-4 border-[1px] border-solid border-purple-700" id="rssListChart" style="background-color: rgba(0, 0, 0, 0.403);"></canvas>
    </div>


    <script>
        // Fetch data from Laravel backend
        fetch('/rss-lists')
            .then(response => response.json())
            .then(data => {
                // Extract names and rss_items_count from the fetched data
                const labels = data.map(item => item.name);
                const counts = data.map(item => item.rss_items_count);

                // Create a Chart.js bar chart
                new Chart(document.getElementById('rssListChart'), {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'NUMBERS OF ITEMS PER RSS LINK',
                            data: counts,
                            backgroundColor: 'rgb(154,43,180,0.9)',
                            borderColor: 'rgb(200,43,180)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    color: 'white' // Color of the ticks on the y-axis
                                },
                                grid: {
                                    color: 'rgb(244,244,244, 0.2)'
                                }
                            },
                            x: {
                                ticks: {
                                    color: 'white'
                                },
                                grid: {
                                    color: 'rgb(244,244,244,0.2)'
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                labels: {
                                    color: 'white' // Color of the label 'NUMBERS OF ITEMS PER RSS LINK'
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
