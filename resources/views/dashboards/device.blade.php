<x-app-layout :assets="$assets ?? []">
    {{-- <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="card align-items-center" data-aos="fade-up" data-aos-delay="1000">
               @if (false)
               

               @else
               <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">No Connection</text></svg>
         
               @endif
               <div class="card-header d-flex justify-content-between flex-wrap">
                  <div class="header-title">
                     <h4 class="card-title">Tank 1</h4>
                  </div>
               </div>
               <div class="card-body align-items-center">
                    <div class="col">
                        <div class="row">
                            <div>
                                <p class="display-6">Temperature: </p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <p class="display-6">Water Level: </p>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary ">Feed Now</button>
                    <br>
                    <br>
                    <div class="mb-3">
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected="">Set Feeding Interval</option>
                            <option value="12">12</option>
                            <option value="24">24</option>
                        </select>
                    </div>
               </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
         <div class="card align-items-center" data-aos="fade-up" data-aos-delay="1000">
            @if (false)
            

            @else
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">No Connection</text></svg>
      
            @endif<div class="card-header d-flex justify-content-between flex-wrap">
              <div class="header-title">
                 <h4 class="card-title">Tank 1</h4>
              </div>
           </div>
           <div class="card-body align-items-center">
                <div class="col">
                    <div class="row">
                        <div>
                            <p class="display-6">Temperature: </p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <p class="display-6">Water Level: </p>
                    </div>
                </div>
                <br>
                <button class="btn btn-primary ">Feed Now</button>
                <br>
                <br>
                <div class="mb-3">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected="">Set Feeding Interval</option>
                        <option value="12">12</option>
                        <option value="24">24</option>
                    </select>
                </div>
           </div>
        </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="row">
               <div class="col-md-12">
                  <div class="card" data-aos="fade-up" data-aos-delay="800">
                     <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title">
                           <h4 class="card-title">200</h4>
                           <p class="mb-0">Feeding Frequency</p>
                        </div>
                        <div class="d-flex align-items-center align-self-center">
                           <div class="d-flex align-items-center text-primary">
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                                 <g id="Solid dot2">
                                    <circle id="Ellipse 65" cx="12" cy="12" r="8" fill="currentColor"></circle>
                                 </g>
                              </svg>
                              <div class="ms-2">
                                 <span class="text-gray">Tank 1</span>
                              </div>
                           </div>
                           <div class="d-flex align-items-center ms-3 text-info">
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                                 <g id="Solid dot3">
                                    <circle id="Ellipse 66" cx="12" cy="12" r="8" fill="currentColor"></circle>
                                 </g>
                              </svg>
                              <div class="ms-2">
                                 <span class="text-gray">Tank 2</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <div id="feeding-freq" class="d-main"></div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-6">
                  <div class="card" data-aos="fade-up" data-aos-delay="1000">
                     <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title">
                           <h4 class="card-title">Average Temp</h4>
                        </div>
                        {{-- <div class="dropdown">
                           <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           <a href="#" class="text-gray" id="dropdownMenuButton1" aria-expanded="false">
                              This Week
                           </a>
                           <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">This Week</a></li>
                              <li><a class="dropdown-item" href="#">This Month</a></li>
                              <li><a class="dropdown-item" href="#">This Year</a></li>
                           </ul>
                        </div> --}}
                     </div>
                     <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           {{-- <div id="myChart" class="col-md-8 col-lg-8 myChart"></div> --}}
                           <div id="averageTempChart" class="col-md-8 col-lg-8"></div>
                           <div class="d-grid gap col-md-4 col-lg-4">
                              <div class="d-flex align-items-start">
                                 <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#3a57e8">
                                    <g id="Solid dot">
                                       <circle id="Ellipse 67" cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                                    </g>
                                 </svg>
                                 <div class="ms-3">
                                    <span class="text-gray">Tank 1</span>
                                    <h6></h6>
                                 </div>
                              </div>
                              <div class="d-flex align-items-start">
                                 <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#4bc7d2">
                                    <g id="Solid dot1">
                                       <circle id="Ellipse 68" cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                                    </g>
                                 </svg>
                                 <div class="ms-3">
                                    <span class="text-gray">Tank 2</span>
                                    <h6></h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-6">
                  <div class="card" data-aos="fade-up" data-aos-delay="1200">
                     <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title">
                           <h4 class="card-title">Temperature record</h4>
                        </div>
                        <div class="dropdown">
                           <a href="#" class="text-gray" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                              This Week
                           </a>
                        </div>
                     </div>
                     <div class="card-body">
                        <div id="dailyChart" class=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-4">
            <div class="row">
               <div class="col-md-12 col-lg-12">
                  <div class="card" data-aos="fade-up" data-aos-delay="400">
                     <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title">
                           <h4 class="card-title mb-2">Activity overview</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        @foreach ($activities as $activity)
                           <div class=" d-flex profile-media align-items-top mb-2">
                              <div class="profile-dots-pills border-primary mt-1"></div>
                              <div class="ms-4">
                                 <h6 class=" mb-1">{{ $activity->ativity }} #{{ $activity->tank_no }}</h6>
                                 <span class="mb-0">{{ $activity->created_at }}</span>
                              </div>
                           </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
</x-app-layout>

<script>
var feedingOptions = {
    series: [],
    chart: {
        height: 300,
        type: 'line',
        toolbar: {
            show: false,
         }
    },
    dataLabels: {
        enabled: true,
    },
    stroke: {
        curve: 'smooth',
    },
    xaxis: {
        type: 'category', // Use category type for non-date categories
        categories: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm',
        },
    },
};

fetch("{{ route('device.feedingFrequency', ['device_no' => $device->id]) }}")
    .then(response => response.json())
    .then(data => {
        // Assuming data structure like: [{ 'name': 'tank 1', 'data': [2, 3, 1, 2, 1, 2, 1] }, ...]

        // Configure series data
        feedingOptions.series = data.map(entry => ({
            name: entry.name,
            data: entry.data,
        }));

        // Create and render the chart
        var feedingChart = new ApexCharts(document.querySelector("#feeding-freq"), feedingOptions);
        feedingChart.render();
    })
    .catch(error => console.error('Error fetching weekly feeding frequency data:', error));
   
   fetch('{{ route('device.temperatureData', ['device_no' => $device->id]) }}')
    .then(response => response.json())
    .then(data => {
        const maxTemperatureValue = 80; // Set the maximum temperature value

        // Extracting tank numbers, weekly data, and weekly averages
        const tankNumbers = data.map(tankData => tankData.tank_no);
        const weeklyAverages = data.map(tankData => tankData.weekly_average);

        const weeklyAverageOptions = {
            series: weeklyAverages.flat(), // Flatten the array of arrays
            chart: {
               type: 'radialBar',
               height: 250,
            },
            plotOptions: {
               radialBar: {
                     dataLabels: {
                        name: {
                           fontSize: '22px',
                        },
                        value: {
                           fontSize: '16px',
                        },
                        total: {
                           show: true,
                           label: 'Average',
                           formatter: function (w) {
                              var totalAverage = 0.0;
                              var totalCount = 0;

                              weeklyAverages.forEach(tankTemp => {
                                 if (Array.isArray(tankTemp)) {
                                       totalAverage += tankTemp.reduce((a, b) => a + b, 0);
                                       totalCount += tankTemp.length; // Increment total count by the number of elements in the array
                                 } else {
                                       totalAverage += tankTemp;
                                       totalCount++; // Increment total count by 1 for non-array values
                                 }
                              });

                              if (totalCount === 0) {
                                 return 0; // Handle division by zero
                              }

                              return (totalAverage / totalCount).toFixed(2);
                           }
                        }
                     },
                     min: 0, // Set the minimum value
                     max: maxTemperatureValue, // Set the maximum value
               }
            },
            labels: tankNumbers.map(tankNumber => 'Tank ' + tankNumber),
         };

        const weeklyDataOptions = {
            series: data.map(tankData => ({
               name: 'Tank ' + tankData.tank_no,
               data: tankData.weekly_data,
            })),
            chart: {
               type: 'bar',
               height: 250,
               toolbar: {
                     show: false
               },
               zoom: {
                     enabled: true
               }
            },
            responsive: [{
               breakpoint: 480,
               options: {
                     legend: {
                        position: 'bottom',
                        offsetX: -10,
                        offsetY: 0
                     }
               }
            }],
            plotOptions: {
               bar: {
                     horizontal: false,
                     borderRadius: 2,
                     columnWidth: '55%',
                     dataLabels: {
                        total: {
                           enabled: true,
                           style: {
                                 fontSize: '16px',
                                 fontWeight: 900
                           }
                        }
                     }
               }
            },
            xaxis: {
               type: 'datetime',
               categories: data.length > 0 ? data[0].weekly_data.map(date => new Date(date).toLocaleDateString()) : [],
            },
            legend: {
               position: 'right',
               offsetY: 40
            },
            fill: {
               opacity: 1
            }
         };

        var weeklyAverageChart = new ApexCharts(document.querySelector("#averageTempChart"), weeklyAverageOptions);
        var weeklyDataChart = new ApexCharts(document.querySelector("#dailyChart"), weeklyDataOptions);

        weeklyAverageChart.render();
        weeklyDataChart.render();
    })
    .catch(error => console.error('Error fetching weekly temperature data:', error));

</script>
