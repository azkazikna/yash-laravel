

(function($) {
    /* "use strict" */
	
 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
	let draw = Chart.controllers.line.__super__.draw; //draw shadow
	
	
	
	var AllProject_rate = function(){
		var options = {
			series: [12, 30, 20],
         chart: {
			type: 'donut',
			width: 150,
		},
       plotOptions: {
			pie: {
			  donut: {
				size: '80%',
				labels: {
					show: true,
					name: {
						show: true,
						offsetY: 12,
					},
					value: {
						show: true,
						fontSize: '18px',
						fontFamily:'Arial',
						fontWeight:'500',
						offsetY: -17,
					},
					total: {
						show: true,
						fontSize: '11px',
						fontWeight:'500',
						fontFamily:'Arial',
						label: 'Compete',
					   
						formatter: function (w) {
						  return w.globals.seriesTotals.reduce((a, b) => {
							return a + b
						  }, 0)
						}
					}
				}
			  }
			}
		},
		 legend: {
                show: false,
            },
		 colors: ['#3AC977', 'var(--primary)', 'var(--secondary)'],
			labels: ["Compete", "Pending", "Not Start"],
			dataLabels: {
				enabled: false,
			},
        };
		var chartBar1 = new ApexCharts(document.querySelector("#AllProject_rate"), options);
		chartBar1.render();
	 
	}
	var peityLine2 = function(){
		$(".peity-line2").peity("line", {
			fill: ["rgba(58, 182, 152, 0)"], 
			stroke: '#3AB67A', 
			strokeWidth: '2', 
			width: "70",
			radius: 10,
			height: "30"
		});
	}
	var peityLine = function(){
		$(".peity-line").peity("line", {
			fill: ["rgba(253, 83, 83, 0)"], 
			stroke: '#FD5353', 
			strokeWidth: '2', 
			width: "70",
			radius: 6,
			height: "30"
		});
	}
	var peityLine3 = function(){
		$(".peity-line3").peity("line", {
			fill: ["rgba(253, 83, 83, 0)"], 
			stroke: 'var(--primary)', 
			strokeWidth: '2', 
			width: "70",
			radius: 6,
			height: "30"
		});
	}
	var overiewChart = function(){
		 var options = {
          series: [{
          name: 'Number of Projects',
          type: 'column',
          data: [75, 85, 72, 100, 50, 100, 80, 75, 95, 35, 75,100]
        }, {
          name: 'Revenue',
          type: 'area',
          data: [44, 65, 55, 75, 45, 55, 40, 60, 75, 45, 50,42]
        }, {
          name: 'Active Projects',
          type: 'line',
          data: [30, 25, 45, 30, 25, 35, 20, 45, 35, 20, 35,20]
        }],
          chart: {
          height: 340,
          type: 'line',
          stacked: false,
		  toolbar: {
				show: false,
			},
        },
        stroke: {
          width: [0, 1, 1],
          curve: 'straight',
		  dashArray: [0, 0, 5]
        },
		legend: {
			fontSize: '13px',
			fontFamily: 'poppins',
			 labels: {
				  colors:'#888888', 
			 }
		},
        plotOptions: {
          bar: {
            columnWidth: '18%',
			 borderRadius:6	,
          }
        },
        
        fill: {
          //opacity: [0.1, 0.1, 1],
		  type : 'gradient',
          gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            /* opacityFrom: 0.85,
            opacityTo: 0.55, */
			colorStops : [
				[
					{
					  offset: 0,
					  color: 'var(--primary)',
					  opacity: 1
					},
					{
					  offset: 100,
					  color: 'var(--primary)',
					  opacity: 1
					}
				],
				[
					{
					  offset: 0,
					  color: '#3AC977',
					  opacity: 1
					},
					{
					  offset: 0.4,
					  color: '#3AC977',
					  opacity: .15
					},
					{
					  offset: 100,
					  color: '#3AC977',
					  opacity: 0
					}
				],
				[
					{
					  offset: 0,
					  color: '#FF5E5E',
					  opacity: 1
					},
					{
					  offset: 100,
					  color: '#FF5E5E',
					  opacity: 1
					}
				],
			],
            stops: [0, 100, 100, 100]
          }
        },
		colors:["var(--primary)","#3AC977","#FF5E5E"],
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
          'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
        ],
        markers: {
          size: 0
        },
        xaxis: {
          type: 'month',
		  labels: {
			   style: {
				   fontSize: '13px',
				   colors:'#888888',
			   },
		  },
        },
        yaxis: {
          min: 0,
		  tickAmount: 4,
		  labels: {
			   style: {
				   fontSize: '13px',
				   colors:'#888888',
			   },
		  },
        },
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function (y) {
              if (typeof y !== "undefined") {
                return y.toFixed(0) + " points";
              }
              return y;
        
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#overiewChart"), options);
        chart.render();
		
		$(".mix-chart-tab .nav-link").on('click',function(){
			var seriesType = $(this).attr('data-series');
			var columnData = [];
			var areaData = [];
			var lineData = [];
			switch(seriesType) {
				case "week":
					columnData = [75, 85, 72, 100, 50, 100, 80, 75, 95, 35, 75,100];
					areaData = [44, 65, 55, 75, 45, 55, 40, 60, 75, 45, 50,42];
					lineData = [30, 25, 45, 30, 25, 35, 20, 45, 35, 20, 35,20];
					break;
				case "month":
					columnData = [20, 50, 80, 52, 10, 80, 50, 30, 95, 10, 60,85];
					areaData = [40, 25, 85, 45, 85, 25, 95, 65, 45, 45, 20,12];
					lineData = [65, 45, 25, 65, 45, 25, 75, 35, 65, 75, 15,65];
					break;
				case "year":
					columnData = [30, 20, 80, 52, 10, 90, 50, 30, 95, 20, 60,85];
					areaData = [40, 25, 40, 45, 85, 25, 50, 65, 45, 60, 20,12];
					lineData = [65, 45, 30, 65, 45, 25, 75, 40, 65, 50, 15,65];
					break;
				case "all":
					columnData = [20, 50, 80, 60, 10, 80, 50, 40, 95, 20, 60,85];
					areaData = [40, 25, 30, 45, 85, 25, 95, 65, 50, 45, 20,12];
					lineData = [65, 45, 25, 65, 45, 25, 30, 35, 65, 75, 15,65];
					break;
				default:
					columnData = [75, 80, 72, 100, 50, 100, 80, 30, 95, 35, 75,100];
					areaData = [44, 65, 55, 75, 45, 55, 40, 60, 75, 45, 50,42];
					lineData = [30, 25, 45, 30, 25, 35, 20, 45, 35, 30, 35,20];
			}
			chart.updateSeries([
				{
					name: "Number of Projects",
					type: 'column',
					data: columnData
				},{
					name: 'Revenue',
					type: 'area',
					data: areaData
				},{
					name: 'Active Projects',
					type: 'line',
					data: lineData
				}
			]);
		})
	 
	}
	var earningChart = function(){
		
		var chartWidth = $("#earningChart").width();
		/* console.log(chartWidth); */
		
		var options = {
		  series: [
			{
				name: 'Net Profit',
				data: [700,650, 680, 600, 700, 610,710,620],
				/* radius: 30,	 */
			}, 				
		],
			chart: {
			type: 'area',
			height: 300,
			width: chartWidth + 55,
			toolbar: {
				show: false,
			},
			offsetX:-45,
			zoom: {
				enabled: false
			},
			/* sparkline: {
				enabled: true
			} */
			
		},
		
		colors:['var(--primary)'],
		dataLabels: {
		  enabled: false,
		},

		legend: {
			show: false,
		},
		stroke: {
		  show: true,
		  width: 2,
		  curve:'straight',
		  colors:['var(--primary)'],
		},
		grid: {
			show:true,
			borderColor: '#eee',
			xaxis: {
				lines: {
					show: true
				}
			},   
			yaxis: {
				lines: {
					show: false
				}
			},  
		},
		yaxis: {
			 show: true,
			 tickAmount: 4,
			  min: 0,
				max: 800,
				labels:{
					offsetX:50,
				}
		},
		xaxis: {
			categories: ['','May ', 'June', 'July', 'Aug', 'Sep ', 'Oct'],
			overwriteCategories: undefined,
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false
			},
			labels: {
				show: true,
				offsetX:5,
				style: {
					fontSize: '12px',

				}
			},
		},
		fill: {
		  opacity: 0.5,
		  colors:'var(--primary)',
		  type: 'gradient', 
		  gradient: {
			colorStops:[ 
				
				{
				  offset: 0.6,
				  color: 'var(--primary)',
				  opacity: .2
				},
				{
				  offset: 0.6,
				  color: 'var(--primary)',
				  opacity: .15
				},
				{
				  offset: 100,
				  color: 'white',
				  opacity: 0
				}
			  ],
			  
			}
		},
		tooltip: {
			enabled:true,
			style: {
				fontSize: '12px',
			},
			y: {
				formatter: function(val) {
					return "$" + val + ""
				}
			}
		}
		};

		var chartBar1 = new ApexCharts(document.querySelector("#earningChart"), options);
		chartBar1.render();
		
		$(".earning-chart .nav-link").on('click',function(){
			var seriesType = $(this).attr('data-series');
			var columnData = [];
			switch(seriesType) {
				case "day":
					columnData = [700,650, 680, 650, 700, 610,710,620];
					break;
				case "week":
					columnData = [700,700, 680, 600, 700, 620,710,620];
					break;
				case "month":
					columnData = [700,650, 690, 640, 700, 670,710,620];
					break;
				case "year":
					columnData = [700,650, 590, 650, 700, 610,710,630];
					break;
				default:
					columnData = [700,650, 680, 650, 700, 610,710,620];
			}
			chartBar1.updateSeries([
				{
					name: "Net Profit",
					data: columnData
				}
			]);
		})
	 
	}
	
 
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				AllProject_rate();
				peityLine2();
				peityLine();
				peityLine3();
				overiewChart();
				earningChart();
				
				
			},
			
			resize:function(){
				
			}
		}
	
	}();

	
		
	jQuery(window).on('load',function(){
		setTimeout(function(){
			dzChartlist.load();
		}, 1000); 
		
	});

     

})(jQuery);
