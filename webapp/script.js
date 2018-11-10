var years = [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050];
// For drawing the lines
var africa = [86,114,106,106,107,111,133,221,783,2478];
var asia = [282,350,411,502,635,809,947,1402,3700,5267];
var europe = [168,170,178,190,203,276,408,547,675,734];
var latinAmerica = [40,20,10,16,24,38,74,167,508,784];
var northAmerica = [6,3,2,2,7,26,82,172,312,433];

data = {
    datasets: [{
        data: [10, 20, 30]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'Red',
        'Yellow',
        'Blue'
    ]
};


window.onload = function(){


    var ctx = document.getElementById("myChart");
    var mixedChart = new Chart(ctx, {
      type: 'line',
      data: {
        datasets: [{
              label: 'Entrance Dataset',
              data: [10, 20, 30, 40]
            }, {
              label: 'Exit Dataset',
              data: [30, 50, 10, 40],

              // Changes this dataset to become a line
              type: 'line'
            }],
        labels: ['7.00 AM', '8.00 AM', '9.00 AM', '10.00 AM']
      }
    });

    var ctx3 = document.getElementById("myChart3");
    var myPieChart = new Chart(ctx3,{
    type: 'pie',
    data: data,

    });
}
