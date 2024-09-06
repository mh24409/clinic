import './bootstrap';
import '../css/app.css';
import 'flowbite';
import Chart from 'chart.js/auto';
 (async function () {
    const patients_data = [
        { year: 2010, count: 10 },
        { year: 2011, count: 20 },
        { year: 2012, count: 15 },
        { year: 2013, count: 25 },
        { year: 2014, count: 22 },
        { year: 2015, count: 30 },
        { year: 2016, count: 28 },
    ];

    new Chart(
        document.getElementById('patients'),
        {
            type: 'bar',
            data: {
                labels: patients_data.map(row => row.year),
                datasets: [
                    {
                        label: 'Patients',
                        data: patients_data.map(row => row.count)
                    }
                ]
            }
        }
    );

    const appointments_data = [
        { year: 2010, count: 10, color: '#FF5733', backgroundColor: '#FFC3A0' },
        { year: 2011, count: 20, color: '#33FF57', backgroundColor: '#A0FFC3' },
        { year: 2012, count: 15, color: '#3357FF', backgroundColor: '#A0C3FF' },
        { year: 2013, count: 25, color: '#FF33A0', backgroundColor: '#F5A0C3' },
        { year: 2014, count: 22, color: '#FFD133', backgroundColor: '#FFEB99' },
        { year: 2015, count: 30, color: '#33FFF5', backgroundColor: '#A0FFF0' },
        { year: 2016, count: 28, color: '#C733FF', backgroundColor: '#ECA0FF' },
    ];

    new Chart(
        document.getElementById('appointments'),
        {
            type: 'line',
            data: {
                labels: appointments_data.map(row => row.year),
                datasets: [
                    {
                        label: 'Appointments',
                        data: appointments_data.map(row => row.count),
                        borderColor: appointments_data.map(row => row.color),
                        backgroundColor: appointments_data.map(row => row.backgroundColor),
                    }
                ]
            }
        }
    );

    const patients_type_data = {
        labels: [
            'Kids',
            'Men',
            'Women'
        ],
        datasets: [{
            label: 'Patient Types',
            data: [120, 180, 150],
            backgroundColor: [
                'rgb(255, 99, 132)',  // Kids
                'rgb(54, 162, 235)',  // Men
                'rgb(255, 205, 86)'   // Women
            ],
            hoverOffset: 4
        }]
    };

    new Chart(
        document.getElementById('patients_type'),
        {
            type: 'doughnut',
            data: patients_type_data,
        }
    );

    const income_labels = ['2017', '2018', '2019', '2020', '2021', '2022', '2023'];
    const income_data = {
        labels: income_labels,
        datasets: [{
            axis: 'y',
            label: 'Income',
            data: [65, 59, 80, 81, 56, 55, 40],
            fill: false,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgb(54, 162, 235)',
            borderWidth: 1
        }]
    };

    new Chart(
        document.getElementById('incomes'),
        {
            type: 'bar',
            data: income_data,
        }
    );

})();


