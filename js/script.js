const dataLabel = [];
const timeProcessInSO = [];
var timer;
let ip = "";

const ctx = document.querySelector('#myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: dataLabel,
        datasets: [{
            label: 'Número de Processos em Execução no Sistema',
            data: timeProcessInSO,
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
                    text: 'Número de Processos'
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
        url: "snmpProcess.php",
        method: "POST",
        type: "POST",
        data: {
            ip: ip
        },
        success: function (response) {
            console.log(response);
            var dateTime = new Date();
            dataLabel.push(dateTime.toLocaleTimeString());
            timeProcessInSO.push(parseInt(response));
            myChart.update();
        }
    })
}
