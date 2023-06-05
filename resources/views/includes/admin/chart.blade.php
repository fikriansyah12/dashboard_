
                        <script>
                            const chart = document.getElementById('myChart');

                            new Chart(chart, {
                                type: 'bar',
                                data: {
                                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                datasets: [{
                                    label: '2022',
                                    data: [86, 41, 84, 45, 19, 45, 35, 37, 41, 49, 37, 20],
                                    borderWidth: 1,
                                    backgroundColor: ['red', 'blue', 'green', 'yellow', 'red', 'blue', 'green', 'yellow', 'red', 'blue'],
                                    borderColor: 'rgb(255, 99, 132)'
                                },{
                                    label: '2023',
                                    data: [104, 90, 56, 55, 40],
                                    borderWidth: 1,
                                    backgroundColor: ['salmon', 'MediumSlateBlue', 'SpringGreen', 'Moccasin', 'salmon', 'MediumSlateBlue', 'SpringGreen', 'Moccasin', 'salmon', 'MediumSlateBlue'],
                                    borderColor: 'rgb(255, 99, 132)'
                                }
                                ]
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
