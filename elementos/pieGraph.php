<canvas class="pie"></canvas>
<!-- Chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script>
    var ctx = document.getElementsByClassName('pie');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Comunicador", "Executor", "Planejador", "Análista"],
            datasets: [{
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
                data: [15,4,5,6]
            }]
        }
    });
</script>