// SIDEBAR DROPDOWN
const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');
const sidebar = document.getElementById('sidebar');

allDropdown.forEach(item=> {
	const a = item.parentElement.querySelector('a:first-child');
	a.addEventListener('click', function (e) {
		e.preventDefault();

		if(!this.classList.contains('active')) {
			allDropdown.forEach(i=> {
				const aLink = i.parentElement.querySelector('a:first-child');

				aLink.classList.remove('active');
				i.classList.remove('show');
			})
		}

		this.classList.toggle('active');
		item.classList.toggle('show');
	})
})





// SIDEBAR COLLAPSE
const toggleSidebar = document.querySelector('nav .toggle-sidebar');
const allSideDivider = document.querySelectorAll('#sidebar .divider');

if(sidebar.classList.contains('hide')) {
	allSideDivider.forEach(item=> {
		item.textContent = '-'
	})
	allDropdown.forEach(item=> {
		const a = item.parentElement.querySelector('a:first-child');
		a.classList.remove('active');
		item.classList.remove('show');
	})
} else {
	allSideDivider.forEach(item=> {
		item.textContent = item.dataset.text;
	})
}

toggleSidebar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');

	if(sidebar.classList.contains('hide')) {
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})

		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
	} else {
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




sidebar.addEventListener('mouseleave', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})
	}
})



sidebar.addEventListener('mouseenter', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




// PROFILE DROPDOWN
const profile = document.querySelector('nav .profile');
const imgProfile = profile.querySelector('img');
const dropdownProfile = profile.querySelector('.profile-link');

imgProfile.addEventListener('click', function () {
	dropdownProfile.classList.toggle('show');
})




// MENU
const allMenu = document.querySelectorAll('main .content-data .head .menu');

allMenu.forEach(item=> {
	const icon = item.querySelector('.icon');
	const menuLink = item.querySelector('.menu-link');

	icon.addEventListener('click', function () {
		menuLink.classList.toggle('show');
	})
})



window.addEventListener('click', function (e) {
	if(e.target !== imgProfile) {
		if(e.target !== dropdownProfile) {
			if(dropdownProfile.classList.contains('show')) {
				dropdownProfile.classList.remove('show');
			}
		}
	}

	allMenu.forEach(item=> {
		const icon = item.querySelector('.icon');
		const menuLink = item.querySelector('.menu-link');

		if(e.target !== icon) {
			if(e.target !== menuLink) {
				if (menuLink.classList.contains('show')) {
					menuLink.classList.remove('show')
				}
			}
		}
	})
})





// PROGRESSBAR
const allProgress = document.querySelectorAll('main .card .progress');

allProgress.forEach(item=> {
	item.style.setProperty('--value', item.dataset.value)
})






// APEXCHART
var options = {
  series: [{
  name: 'series1',
  data: [31, 40, 28, 51, 42, 109, 100]
}, {
  name: 'series2',
  data: [11, 32, 45, 32, 34, 52, 41]
}],
  chart: {
  height: 350,
  type: 'area'
},
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'smooth'
},
xaxis: {
  type: 'datetime',
  categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
},
tooltip: {
  x: {
    format: 'dd/MM/yy HH:mm'
  },
},
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();


// ******chart***********
google.charts.load('current', {
	packages: ['corechart', 'bar']
  });
  google.charts.setOnLoadCallback(drawAxisTickColors);
  
  function drawAxisTickColors() {
	var data = new google.visualization.DataTable();
	data.addColumn('timeofday', 'Time of Day');
	data.addColumn('number', 'Motivation Level');
	data.addColumn('number', 'Energy Level');
  
	data.addRows([
	  [{
		v: [8, 0, 0],
		f: 'Jan'
	  }, 1, .25],
	  [{
		v: [9, 0, 0],
		f: 'Feb'
	  }, 2, .5],
	  [{
		v: [10, 0, 0],
		f: 'Mar'
	  }, 3, 1],
	  [{
		v: [11, 0, 0],
		f: 'Apr'
	  }, 4, 2.25],
	  [{
		v: [12, 0, 0],
		f: 'May'
	  }, 5, 2.25],
	  [{
		v: [13, 0, 0],
		f: 'June'
	  }, 6, 3],
	  [{
		v: [14, 0, 0],
		f: 'July'
	  }, 7, 4],
	  [{
		v: [15, 0, 0],
		f: 'Aug'
	  }, 8, 5.25],
	  [{
		v: [16, 0, 0],
		f: 'Sep'
	  }, 9, 7.5],
	  [{
		v: [17, 0, 0],
		f: 'Oct'
	  }, 10, 10],
	]);
  
	var options = {
	  title: '2014 Sales\nAll products including Taxes',
	  focusTarget: 'category',
	  hAxis: {
		title: '',
		format: 'm:',
		viewWindow: {
		  min: [7, 30, 0],
		  max: [17, 30, 0]
		},
		textStyle: {
		  fontSize: 14,
		  color: '#053061',
		  bold: true,
		  italic: false
		},
		titleTextStyle: {
		  fontSize: 18,
		  color: '#053061',
		  bold: true,
		  italic: false
		}
	  },
	//   vAxis: {
	// 	title: 'Rating (scale of 1-10)',
	// 	textStyle: {
	// 	  fontSize: 18,
	// 	  color: '#67001f',
	// 	  bold: false,
	// 	  italic: false
	// 	},
	// 	titleTextStyle: {
	// 	  fontSize: 18,
	// 	  color: '#67001f',
	// 	  bold: true,
	// 	  italic: false
	// 	}
	//   }
	};
  
	var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
	chart.draw(data, options);
  }
  
//   ********bar graph*********
