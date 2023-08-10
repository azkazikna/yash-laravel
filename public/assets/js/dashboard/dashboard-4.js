

(function($) {
    /* "use strict" */
	
 var dzChartlist = function(){
	
	var screenWidth = $(window).width();
	let draw = Chart.controllers.line.__super__.draw; //draw shadow
	
	var VisitorsChart = function(){
		var options = {
		  series: [
			{
				name: 'Net Profit',
				data: [21, 9, 36, 12, 44, 25, 59, 41, 66, 25],
			}, 				
		],
			chart: {
			type: 'line',
			height: 50,
			toolbar: {
				show: false,
			},
			zoom: {
				enabled: false
			},
			sparkline: {
				enabled: true
			},
			
			
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
		  width: 1,
		  curve:'smooth',
		  colors:['var(--primary)'],
		},
		
		grid: {
			show:false,
			borderColor: '#eee',
			padding: {
				top: 0,
				right: 0,
				bottom: 0,
				left: 0

			}
		},
		states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
		x: {
			categories: ['Jan', 'feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct'],
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false
			},
			labels: {
				show: false,
				style: {
					fontSize: '12px',
				}
			},
			crosshairs: {
				show: false,
				position: 'front',
				stroke: {
					width: 1,
					dashArray: 3
				}
			},
			tooltip: {
				enabled: true,
				formatter: undefined,
				offsetY: 0,
				style: {
					fontSize: '12px',
				}
			}
		},
		y: {
			show: false,
		},
		tooltip: {
			enabled:true,
			style: {
				fontSize: '12px',
			},
			y: {
				formatter: function(val) {
					return "$" + val + " thousands"
				}
			}
		}
		};

		var chartBar1 = new ApexCharts(document.querySelector("#VisitorsChart"), options);
		chartBar1.render();
	 
	}
	var sessionsChart = function(){
		var options = {
		  series: [
			{
				name: 'Net Profit',
				data: [19, 9, 36, 12, 44, 25, 59, 41, 66, 25],
			}, 				
		],
		chart: {
			type: 'line',
			height: 50,
			toolbar: {
				show: false,
			},
			zoom: {
				enabled: false
			},
			sparkline: {
				enabled: true
			},
		},
		
		colors:['var(--secondary)'],
		dataLabels: {
		  enabled: false,
		},

		legend: {
			show: false,
		},
		stroke: {
		  show: true,
		  width: 1,
		  curve:'smooth',
		  colors:['var(--secondary)'],
		},
		
		grid: {
			show:false,
			borderColor: '#eee',
			padding: {
				top: 0,
				right: 0,
				bottom: 0,
				left: 0

			}
		},
		states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
		x: {
			categories: ['Jan', 'feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct'],
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false
			},
			labels: {
				show: false,
				style: {
					fontSize: '12px',
				}
			},
			crosshairs: {
				show: false,
				position: 'front',
				stroke: {
					width: 1,
					dashArray: 3
				}
			},
			tooltip: {
				enabled: true,
				formatter: undefined,
				offsetY: 0,
				style: {
					fontSize: '12px',
				}
			}
		},
		y: {
			show: false,
		},
		tooltip: {
			enabled:true,
			style: {
				fontSize: '12px',
			},
			y: {
				formatter: function(val) {
					return "$" + val + " thousands"
				}
			}
		}
		};

		var chartBar1 = new ApexCharts(document.querySelector("#sessionsChart "), options);
		chartBar1.render();
	 
	}
	var LiveChart = function(){
		var options = {
		  series: [
			{
				name: 'Net Profit',
				data: [20, 18, 30, 12, 44, 25, 59, 41, 66, 25],
			}, 				
		],
			chart: {
			type: 'line',
			height: 50,
			toolbar: {
				show: false,
			},
			zoom: {
				enabled: false
			},
			sparkline: {
				enabled: true
			},
		},
		
		colors:['#58bad7'],
		dataLabels: {
		  enabled: false,
		},

		legend: {
			show: false,
		},
		stroke: {
		  show: true,
		  width: 1,
		  curve:'smooth',
		  colors:['#58bad7'],
		},
		
		grid: {
			show:false,
			borderColor: '#eee',
			padding: {
				top: 0,
				right: 0,
				bottom: 0,
				left: 0

			}
		},
		states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
		x: {
			categories: ['Jan', 'feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct'],
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false
			},
			labels: {
				show: false,
				style: {
					fontSize: '12px',
				}
			},
			crosshairs: {
				show: false,
				position: 'front',
				stroke: {
					width: 1,
					dashArray: 3
				}
			},
			tooltip: {
				enabled: true,
				formatter: undefined,
				offsetY: 0,
				style: {
					fontSize: '12px',
				}
			}
		},
		y: {
			show: false,
		},
		tooltip: {
			enabled:true,
			style: {
				fontSize: '12px',
			},
			y: {
				formatter: function(val) {
					return "$" + val + " thousands"
				}
			}
		}
		};

		var chartBar1 = new ApexCharts(document.querySelector("#LiveChart"), options);
		chartBar1.render();
	 
	}
	
	var chartBarRunning = function(){
		var options  = {
			series: [
				{
					name: 'Income',
					 data: [31, 40, 28,31, 40, 28,31, 40, 28,31, 40, 28]
				}, 
				{
				  name: 'Expense',
				   data: [11, 32, 45,38, 25, 20,36, 45, 15,11, 32, 45]
				}, 
				
			],
			chart: {
			type: 'bar',
			height: 300,
			
			
			toolbar: {
				show: false,
			},
			
		},
		plotOptions: {
		  bar: {
			horizontal: false,
			endingShape:'rounded',
			columnWidth: '45%',
			borderRadius: 5,
			
		  },
		},
		colors:['#', '#77248B'],
		dataLabels: {
		  enabled: false,
		},
		markers: {
			shape: "circle",
		},
		legend: {
			show: false,
			fontSize: '12px',
			labels: {
				colors: '#000000',
				
				},
			markers: {
			width: 30,
			height: 30,
			strokeWidth: 0,
			strokeColor: '#fff',
			fillColors: undefined,
			radius: 35,	
			}
		},
		stroke: {
		  show: true,
		  width: 6,
		  colors: ['transparent']
		},
		grid: {
			borderColor: 'rgba(252, 252, 252,0.2)',
		},
		xaxis: {
		  categories: ['Jan', 'Feb', 'Mar','Apr','May','Jun','Jul','Agu', 'Sep', 'Oct','Nev','Dec'],
		  labels: {
			style: {
				colors: '#000',
				fontSize: '13px',
				fontFamily: 'poppins',
				fontWeight: 100,
				cssClass: 'apexcharts-xaxis-label',
				},		
		  },
		  axisBorder: {
			show: false,
	  	 },
		  axisTicks: {
			show: false,
			borderType: 'solid',
			color: '#78909C',
			height: 6,
			offsetX: 0,
			offsetY: 0
		},
		  crosshairs: {
		  show: false,
		  }
		},
		yaxis: {
			labels: {
				offsetX:-16,
			   style: {
				  colors: '#000',
				  fontSize: '13px',
				   fontFamily: 'poppins',
				  fontWeight: 100,
				  cssClass: 'apexcharts-xaxis-label',
			  },
		  },
		},
		fill: {
		  opacity: 1,
		  colors:['var(--primary)', '#FFD125'],
		},
		tooltip: {
		  y: {
			formatter: function (val) {
			  return "$ " + val + " thousands"
			}
		  }
		},
		 responsive: [{
			breakpoint: 575,
			options: {
				plotOptions: {
				  bar: {
					columnWidth: '1%',
					borderRadius: -1,
				  },
				},
				chart:{
					height:250,
				},
				series: [
					{
						name: 'Projects',
						 data: [31, 40, 28,31, 40, 28,31, 40]
					}, 
					{
					  name: 'Projects',
					   data: [11, 32, 45,31, 40, 28,31, 40]
					}, 
					
				],
			}
		 }]
		};

		if(jQuery("#chartBarRunning").length > 0){

			var chart = new ApexCharts(document.querySelector("#chartBarRunning"), options);
			chart.render();
            
            jQuery('#dzIncomeSeries').on('change',function(){
                jQuery(this).toggleClass('disabled');
                chart.toggleSeries('Income');
            });
            
            jQuery('#dzExpenseSeries').on('change',function(){
                jQuery(this).toggleClass('disabled');
                chart.toggleSeries('Expense');
            });
            
		}
			
	}
	
	var Statistics = function(){
		
		function generateDayWiseTimeSeries(baseval, count, yrange) {
			var i = 0;
			var series = [];
			while (i < count) {
				var x = baseval;
				var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
				series.push([x, y]);
				baseval += 86400000;
				i++;
			}
			return series;
		}

		 var options = {
          series: [
          {
            name: 'Order',
            data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
              min: 10,
              max: 5287
            })
          },
          {
            name: 'Profit',
            data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
              min: 10,
              max: 5658
            })
          },
          {
            name: 'Last Month',
            data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
              min: 10,
              max: 8554
            })
          }
        ],
        chart: {
          type: 'area',
          height: 300,
          stacked: true,
          events: {
            selection: function (chart, e) {
              console.log(new Date(e.xaxis.min))
            }
          },
		   toolbar: {
			    show: false,
		   },
        },
        colors: ['#3f7197', '#58bad7', '#ffd125'],
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        fill: {
          type: 'gradient',
          gradient: {
            opacityFrom: 0.6,
            opacityTo: 0.8,
          }
        },
        legend: {
          position: 'top',
          horizontalAlign: 'left'
        },
        xaxis: {
          type: 'datetime'
        },
        };

        var chartBar1 = new ApexCharts(document.querySelector("#Statistics"), options);
        chartBar1.render();
	}
	
	var activeUser = function(){
		if(jQuery('#activeUser').length > 0 ){
			var data = {
				labels: ["0", "1", "2", "3", "4", "5", "6", "0", "1", "2", "3", "4", "5", "6"],
				datasets: [{
					label: "My First dataset",
					backgroundColor: "rgba(88,186,215,1)",
					strokeColor: "rgba(69,43,144,1)",
					pointColor: "rgba(0,0,0,0)",
					pointStrokeColor: "rgba(58,223,174,1)",
					pointHighlightFill: "rgba(58,223,174,1)",
					pointHighlightStroke: "rgba(58,223,174,1)",
					data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56, 55, 40]
				}]
			};

			var ctx = document.getElementById("activeUser").getContext("2d");
			var chart = new Chart(ctx, {
				type: "bar",
				data: data,
				options: {
					responsive: !0,
					//maintainAspectRatio: false,
					legend: {
						display: !1
					},
					tooltips: {
						enabled: false
					},
					scales: {
						xAxes: [{
							display: !1,
							gridLines: {
								display: !1
							},
							barPercentage: 1,
							categoryPercentage: 0.5
						}],
						yAxes: [{
							display: !1,
							ticks: {
								padding: 10,
								stepSize: 20,
								max: 100,
								min: 0
							},
							gridLines: {
								display: !0,
								drawBorder: !1,
								lineWidth: 1,
								zeroLineColor: "#48f3c0"
							}
						}]
					}
				}
			});
			
			setInterval(function() {
				chart.config.data.datasets[0].data.push(
					Math.floor(10 + Math.random() * 80)
				);
				chart.config.data.datasets[0].data.shift();
				chart.update();
			}, 2000);
			
		}
	}
	var activeUser1 = function(){
		if(jQuery('#activeUser1').length > 0 ){
			var data = {
				labels: ["0", "1", "2", "3", "4", "5", "6", "0", "1", "2", "3", "4", "5", "6"],
				datasets: [{
					label: "My First dataset",
					backgroundColor: "rgba(248,185,64,1)",
					strokeColor: "rgba(248,185,64,1)",
					pointColor: "rgba(0,0,0,0)",
					pointStrokeColor: "rgba(58,223,174,1)",
					pointHighlightFill: "rgba(58,223,174,1)",
					pointHighlightStroke: "rgba(58,223,174,1)",
					data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56, 55, 40]
				}]
			};

			var ctx = document.getElementById("activeUser1").getContext("2d");
			var chart = new Chart(ctx, {
				type: "bar",
				data: data,
				options: {
					responsive: !0,
					//maintainAspectRatio: false,
					legend: {
						display: !1
					},
					tooltips: {
						enabled: false
					},
					scales: {
						xAxes: [{
							display: !1,
							gridLines: {
								display: !1
							},
							barPercentage: 1,
							categoryPercentage: 0.5
						}],
						yAxes: [{
							display: !1,
							ticks: {
								padding: 10,
								stepSize: 20,
								max: 100,
								min: 0
							},
							gridLines: {
								display: !0,
								drawBorder: !1,
								lineWidth: 1,
								zeroLineColor: "#48f3c0"
							}
						}]
					}
				}
			});
			
			setInterval(function() {
				chart.config.data.datasets[0].data.push(
					Math.floor(10 + Math.random() * 80)
				);
				chart.config.data.datasets[0].data.shift();
				chart.update();
			}, 2000);
			
		}
	}
	
	var salesFigures = function(){
		function generateData(count, yrange, includeZ) {
            var i = 0;
            var series = [];
            if (!includeZ)
                includeZ = false;
            while (i < count) {
                var x = Math.floor(Math.random() * (750 - 1 + 1)) + 1;
                var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
                var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;
                if (includeZ) {
                    series.push([x, y, z]);
                } else {
                    series.push([x, y]);
                }
                i++;
            }
            return series;
        }
		
		var options = {
        series: [
		{
          name: 'Dribble',
          data: generateData(18, {
            min: 0,
            max: 90
          })
        },
        {
          name: 'Facebook',
          data: generateData(18, {
            min: 0,
            max: 90
          })
        },
        {
          name: 'Meta',
          data: generateData(18, {
            min: 0,
            max: 90
          })
        },
        {
          name: 'Google',
          data: generateData(18, {
            min: 0,
            max: 90
          })
        },
        
        ],
          chart: {
          height: 250,
          // width: 250,
          type: 'heatmap',
		  toolbar: {
			   show: false,
		  }
        },
		plotOptions: {
			bar: {
			  columnWidth: "70%"
			  // columnWidth: "70%"
			}
		  },

		stroke: {
			show: true,
			curve: 'smooth',
			lineCap: 'butt',
			colors: ['#fff'],
			width: 8,
			dashArray: 0,      
		},
        dataLabels: {
          enabled: false
        },
        colors: ['#452b90','#ffd125'],
        title: {
          text: ''
        },
        };

        var chartBar1 = new ApexCharts(document.querySelector("#salesFigures"), options);
        chartBar1.render();
		
	}
	
	var totalSale = function(){
		var options = {
		  series: [
			{
				name: 'Net Profit',
				data: [21, 9, 36, 12, 44, 25, 59, 41, 66, 25],
			}, 				
		],
			chart: {
			type: 'line',
			height: 50,
			toolbar: {
				show: false,
			},
			zoom: {
				enabled: false
			},
			sparkline: {
				enabled: true
			},
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
		  width: 1,
		  curve:'smooth',
		  colors:['var(--primary)'],
		},
		
		grid: {
			show:false,
			borderColor: '#eee',
			padding: {
				top: 0,
				right: 0,
				bottom: 0,
				left: 0

			}
		},
		 markers: {
          size: [3],
		  strokeWidth: [2],
		  strokeColors: ['#fff'],
		  border:3,
		  radius: 4,
		  colors:['var(--primary)'],
          hover: {
            size: 10,
          }
        },
		states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
		x: {
			categories: ['Jan', 'feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct'],
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false
			},
			labels: {
				show: false,
				style: {
					fontSize: '12px',
				}
			},
			crosshairs: {
				show: false,
				position: 'front',
				stroke: {
					width: 1,
					dashArray: 3
				}
			},
			tooltip: {
				enabled: true,
				formatter: undefined,
				offsetY: 0,
				style: {
					fontSize: '12px',
				}
			}
		},
		y: {
			show: false,
		},
		tooltip: {
			enabled:true,
			style: {
				fontSize: '12px',
			},
			y: {
				formatter: function(val) {
					return "$" + val + " thousands"
				}
			}
		}
		};

		var chartBar1 = new ApexCharts(document.querySelector("#totalSale"), options);
		chartBar1.render();
	 
	}
	
	var totalPurchase = function(){
		var options = {
		  series: [
			{
				name: 'Net Profit',
				data: [17, 13, 34, 13, 45, 24, 60, 40, 65, 25],
			}, 				
		],
		chart: {
			type: 'line',
			height: 50,
			toolbar: {
				show: false,
			},
			zoom: {
				enabled: false
			},
			sparkline: {
				enabled: true
			},
			
		},
		
		colors:['var(--secondary)'],
		dataLabels: {
		  enabled: false,
		},

		legend: {
			show: false,
		},
		stroke: {
		  show: true,
		  width: 1,
		  curve:'smooth',
		  colors:['var(--secondary)'],
		},
		
		grid: {
			show:false,
			borderColor: '#eee',
			padding: {
				top: 0,
				right: 0,
				bottom: 0,
				left: 0

			}
		},
		 markers: {
          size: [3],
		  strokeWidth: [2],
		  strokeColors: ['#fff'],
		  border:3,
		  radius: 4,
		  colors:['var(--secondary)'],
          hover: {
            size: 10,
          }
        },
		states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
		x: {
			categories: ['Jan', 'feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct'],
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false
			},
			labels: {
				show: false,
				style: {
					fontSize: '12px',
				}
			},
			crosshairs: {
				show: false,
				position: 'front',
				stroke: {
					width: 1,
					dashArray: 3
				}
			},
			tooltip: {
				enabled: true,
				formatter: undefined,
				offsetY: 0,
				style: {
					fontSize: '12px',
				}
			}
		},
		y: {
			show: false,
		},
		tooltip: {
			enabled:true,
			style: {
				fontSize: '12px',
			},
			y: {
				formatter: function(val) {
					return "$" + val + " thousands"
				}
			}
		}
		};

		var chartBar1 = new ApexCharts(document.querySelector("#totalPurchase"), options);
		chartBar1.render();
	 
	}
	
	var activeCustomers = function(){
		var options = {
		  series: [
			{
				name: 'Net Profit',
				data: [19, 12, 33, 12, 45, 24, 60, 40, 70, 30],
			}, 				
		],
			chart: {
			type: 'line',
			height: 50,
			toolbar: {
				show: false,
			},
			zoom: {
				enabled: false
			},
			sparkline: {
				enabled: true
			},
		},
		
		colors:['#58bad7'],
		dataLabels: {
		  enabled: false,
		},

		legend: {
			show: false,
		},
		stroke: {
		  show: true,
		  width: 1,
		  curve:'smooth',
		  colors:['#58bad7'],
		},
		
		grid: {
			show:false,
			borderColor: '#eee',
			padding: {
				top: 0,
				right: 0,
				bottom: 0,
				left: 0

			}
		},
		 markers: {
          size: [3],
		  strokeWidth: [2],
		  strokeColors: ['#fff'],
		  border:3,
		  radius: 4,
		  colors:['#58bad7'],
          hover: {
            size: 10,
          }
        },
		states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
		x: {
			categories: ['Jan', 'feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct'],
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false
			},
			labels: {
				show: false,
				style: {
					fontSize: '12px',
				}
			},
			crosshairs: {
				show: false,
				position: 'front',
				stroke: {
					width: 1,
					dashArray: 3
				}
			},
			tooltip: {
				enabled: true,
				formatter: undefined,
				offsetY: 0,
				style: {
					fontSize: '12px',
				}
			}
		},
		y: {
			show: false,
		},
		tooltip: {
			enabled:true,
			style: {
				fontSize: '12px',
			},
			y: {
				formatter: function(val) {
					return "$" + val + " thousands"
				}
			}
		}
		};

		var chartBar1 = new ApexCharts(document.querySelector("#activeCustomers"), options);
		chartBar1.render();
	 
	}
	
	


 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
 
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				VisitorsChart();
				sessionsChart();
				LiveChart();
				chartBarRunning();
				Statistics();
				activeUser();
				activeUser1();
				salesFigures();
				totalSale();
				totalPurchase();
				activeCustomers();
				
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
