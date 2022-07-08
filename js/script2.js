let valor1 = 0 , valor2 = 0, valor3 = 100;
var timer;
let ip = "";

const ctx = document.querySelector('#myChart').getContext('2d');

const DATA_COUNT = 5;
const NUMBER_CFG = {count: DATA_COUNT, min: 0, max: 100};
let data = {
  labels: ['Datagramas UDP Recebidos', 'Datagramas UDP Enviados'],
  datasets: [
    {
      label: 'Dataset 1',
      data:[valor1, valor2, valor3],
      backgroundColor: [
        'rgba(0, 0, 255, 1)',
        'rgba(144, 238, 144, 1)',
        'rgba(211, 211, 211, 1)',
      ]
    }
  ]
};
const myChart = new Chart(ctx,{
  type: 'pie',
  data: data,
  options: {
    responsive: true,
    plugins: {
      datalabels: {
        display: false
      },
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Chart.js Pie Chart'
      }
    }
  },
} );
//Adicionando eventos nos botões
document.querySelector("#btnIniciar").addEventListener('click',function (){
  $('#btnIniciar').attr('disabled','disabled');
  console.log("Iniciando o monitoramento!!");
  ip = document.querySelector("#ip").value;
  timer = setInterval(snmpGet,1000);
});

document.querySelector("#btnParar").addEventListener('click',function (){
  console.log("Parando o monitoramento!!");
  $('#btnIniciar').removeAttr('disabled');
  clearInterval(timer);
});

//Requisição SNMP
function snmpGet(){
  $.ajax({
      url: "snmpUDPRecieved_Delivered.php",
      method: "POST",
      type: "POST",
      data: {
          ip:ip
      },
      success: function (response){
          valor1 = response * 100;
          valor2 = 100 - valor1;
          myChart.data.datasets.forEach(dataset => {
            dataset.data = [valor1,valor2,0];
          });
          myChart.update();
      } 
  })
}