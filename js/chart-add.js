const canvas_container = document.querySelector(".chart-container")
const properties = canvas_container.getBoundingClientRect()

const chartLivre = document.getElementById("chart")
chartLivre.width = properties.width
chartLivre.height =  properties.height
const barChart = new Chart(chartLivre,{
    type:"bar",
    data:{
        labels :["Janvier","Fevrir", "Mars", "MArs", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"],
        datasets : [{
            data : [60,10,14,14,20,14,74,54,61,5,79,10,20],
            backgroundColor : ["#00646F"],
        }]
    },
    options : {
        scales : {
            y:{
                suggestedMax : 100,
            }
        }
    }
})