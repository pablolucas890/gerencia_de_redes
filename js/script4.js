const dataLabel = [];
const snmpDataReceived = [];
const snmpDataDelivered = [];
var timer;
let ip = "";
var lastValueReceived = 0;
var lastValueDelivered = 0;
var aux = 0;

const ctx = document.querySelector('#myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: dataLabel,
        borderColor: 'rgba(0, 0, 255, 0.2)',
        backgroundColor: 'rgba(255, 0, 255, 1)',
        fill: true,
        datasets: [{
            label: 'Número de Segmentos TPC Recebidos',
            data: snmpDataReceived,
            backgroundColor: [
                'rgba(0, 0, 255, 0.2)',
            ],
            borderColor: [
                'rgba(0, 0, 255, 1)',
            ],
            borderWidth: 2
        },
        {
            label: 'Número de Segmentos TCP Enviados',
            data: snmpDataDelivered,
            backgroundColor: [
                'rgba(144, 238, 144, 0.2)',
            ],
            borderColor: [
                'rgba(144, 238, 144, 1)',
            ],
            borderWidth: 2
        }
        ]
    },
    options: {
        scales: {
            x: {
                display: true,
                title: {
                    display: true,
                    text: 'Data/Hora'
                }
            },
            y: {
                display: true,
                title: {
                    display: true,
                    text: 'Seguimentos TCP entregues e recebidos'
                },
                //beginAtZero: true,
                // type: 'logarithmic',
                // min: 100000,
                // max: 300000,
            }
        }
    }
});

//Adicionando eventos nos botões
document.querySelector("#btnIniciar").addEventListener('click', function () {
    $('#btnIniciar').attr('disabled','disabled');
    ip = document.querySelector("#ip").value;
    console.log("Iniciando o monitoramento!!");
    timer = setInterval(snmpGet, 1000);
});

document.querySelector("#btnParar").addEventListener('click', function () {
    console.log("Parando o monitoramento!!");
    $('#btnIniciar').removeAttr('disabled');
    clearInterval(timer);
});

//Requisição SNMP
function snmpGet() {
    $.ajax({
        url: "snmpTCPReceived_Delivered.php",
        method: "POST",
        type: "POST",
        data: {
            ip: ip
        },
        success: function (response) {
            let valor1 = response.split("-")[0];
            let valor2 = response.split("-")[1];
            var dateTime = new Date();
            dataLabel.push(dateTime.toLocaleTimeString());
            snmpDataReceived.push(aux < 2 ? 0 : valor1 - lastValueReceived);
            snmpDataDelivered.push(aux < 2 ? 0 : valor2 - lastValueDelivered);
            aux++;
            lastValueReceived = valor1;
            lastValueDelivered = valor2;
            myChart.update();
        }
    })
}
