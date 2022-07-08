const dataLabel = [];
const timeInMinutes = [];
var timer;
let ip = "";

const ctx = document.querySelector('#myChart').getContext('2d');

var timeFormat = 'HH:MM:SS';

const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: dataLabel,
        datasets: [{
            label: 'Tempo de Uso em Minutos',
            data: timeInMinutes,
            backgroundColor: [
                'rgba(0, 0, 255, 0.2)',
            ],
            borderColor: [
                'rgba(0, 0, 255, 1)',
            ],
            borderWidth: 2
        }]
    },
    options: {
        animation: {
            duration: 0
        },
        scales: {
            yAxes: [{
                type: 'time',
                time: {
                    format: timeFormat,
                    tooltipFormat: 'll'
                },
            }],
            x: {
                display: true,
                title: {
                    display: true,
                    text: 'Data da Verificação'
                },
                scales: {
                    type: 'timeseries'
                }
            },
            y: {
                display: true,
                title: {
                    display: true,
                    text: 'Tempo em Minutos'
                },
                scales: {
                    type: 'timeseries'
                }

                //beginAtZero: true,
                // type: 'time',
                // min: 100000,
                // max: 300000,
            }
        }
    }
});
document.querySelector("#btnIniciar").addEventListener('click', function () {
    $('#btnIniciar').attr('disabled','disabled');
    console.log("Iniciando o monitoramento!!");
    ip = document.querySelector("#ip").value;
    timer = setInterval(snmpGet, 1000);
});

document.querySelector("#btnParar").addEventListener('click', function () {
    console.log("Parando o monitoramento!!");
    $('#btnIniciar').removeAttr('disabled');
    clearInterval(timer);
});
function snmpGet() {
    $.ajax({
        url: "snmpTime.php",
        method: "POST",
        type: "POST",
        data: {
            ip: ip
        },
        success: function (response) {
            dataLabel.splice(0, dataLabel.length);
            timeInMinutes.splice(0, timeInMinutes.length);
            let arraygeral = response.split("\n");
            for (let i = 0; i < arraygeral.length; i++) {
                let strData = arraygeral[i].split(" ")[0];
                let strTime = arraygeral[i].split(" ")[1];
                dataLabel.push(strData)
                timeInMinutes.push(strTime)
            }
            myChart.update();
        }
    })
}
