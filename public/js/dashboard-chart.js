//  -------user chart------------

const user = $( "#countUser" ).val();
const employee = $( "#countEmployee" ).val();
const admin = $( "#countAdmin" ).val();

 data = {
  labels: ['User', 'Employee', 'Admin'],
  datasets: [
    {
      label: 'Dataset 1',
      data: [user,employee,admin],
      backgroundColor: ['#1B98F5', '#E8BD0D','Red'],
    }
  ]
};

 config = {
  type: 'doughnut',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: false,
        text: 'Chart.js Doughnut Chart'
      }
    }
  },
};

 myChart = new Chart(
    document.getElementById('userChart'),
    config
  );

// ---------hotel chart------------

var listHotelName = [];
var listHotelValue = [];

$("input.hotel").each(function(){
    var name = $(this).data('name');
    listHotelName.push(name);
    var value = $(this).val();
    listHotelValue.push(value);
});

 console.log(listHotelValue);

 labels = listHotelName;
 data = {
  labels: labels,
  datasets: [
    {
      label: 'Order(s)',
      data: listHotelValue,
      borderColor: ['rgba(120, 163, 206, 1'],
      backgroundColor: ['rgba(120, 163, 206, 0.5)'],
    },
    
  ]
};
 config = {
  type: 'bar',
  data: data,
  options: {
    indexAxis: 'y',
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each horizontal bar to be 2px wide
    elements: {
      bar: {
        borderWidth: 2,
      }
    },
    responsive: true,
    plugins: {
      legend: {
        position: 'right',
      },
      title: {
        display: false,
        text: 'Chart.js Horizontal Bar Chart'
      }
    }
  },
};
  // === include 'setup' then 'config' above ===

myChart = new Chart(
    document.getElementById('hotelChart'),
    config
);


// ---------tour chart------------

var listTourName = [];
var listTourValue = [];

$("input.tour").each(function(){
    var name = $(this).data('name');
    listTourName.push(name);
    var value = $(this).val();
    listTourValue.push(value);
});

 console.log(listTourName);

 labels = listTourName;
 data = {
  labels: labels,
  datasets: [
    {
      label: 'Order(s)',
      data: listTourValue,
      borderColor: ['rgba(170, 220, 34, 1)'],
      backgroundColor: ['rgba(170, 220, 34, 0.5)'],
    },
    
  ]
};
 config = {
  type: 'bar',
  data: data,
  options: {
    indexAxis: 'y',
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each horizontal bar to be 2px wide
    elements: {
      bar: {
        borderWidth: 2,
      }
    },
    responsive: true,
    plugins: {
      legend: {
        position: 'right',
      },
      title: {
        display: false,
        text: 'Chart.js Horizontal Bar Chart'
      }
    }
  },
};
  // === include 'setup' then 'config' above ===

myChart = new Chart(
    document.getElementById('tourChart'),
    config
);

// ---------tour chart------------

var listArticleName = [];
var listArticleValue = [];

$("input.article").each(function(){
    var name = $(this).data('name');
    listArticleName.push(name);
    var value = $(this).val();
    listArticleValue.push(value);
});

 console.log(listArticleName);

 labels = listArticleName;
 data = {
  labels: labels,
  datasets: [
    {
      label: 'Comment(s)',
      data: listArticleValue,
      borderColor: ['rgba(206, 120, 120, 1)'],
      backgroundColor: ['rgba(206, 120, 120, 0.5)'],
    },
    
  ]
};
 config = {
  type: 'bar',
  data: data,
  options: {
    indexAxis: 'y',
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each horizontal bar to be 2px wide
    elements: {
      bar: {
        borderWidth: 2,
      }
    },
    responsive: true,
    plugins: {
      legend: {
        position: 'right',
      },
      title: {
        display: false,
        text: 'Chart.js Horizontal Bar Chart'
      }
    }
  },
};
  // === include 'setup' then 'config' above ===

myChart = new Chart(
    document.getElementById('articleChart'),
    config
);