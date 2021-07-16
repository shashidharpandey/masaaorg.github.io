var countries, selectedCountry, countryTotalConfirmed, countryTotalDeaths, countryTotalRecovered, contryNewConfirmed, countryNewDeaths, countryNewRecovered;

document.querySelector(".date").innerHTML = new Date;

fetchFunc=()=>fetch("https://api.covid19api.com/summary")
  .then((apiData)=>{return apiData.json(); })
  .then((actualData)=>{
  var actualData=actualData;
});
fetch("https://api.covid19api.com/summary")
  .then((apiData)=>{
  return apiData.json()
})
  .then((actualData)=>{
  console.log(actualData);
  var Global=actualData.Global;
  document.getElementById("Global").addEventListener("click",function(){
    document.getElementById("covidData").style.display="block";
    document.getElementById("covidData").innerHTML=
      `<div class="data"><strong>World wide cases : </strong><br>
					TotalConfirmed: <span>${Global.TotalConfirmed}</span><br>
					TotalDeaths: <span>${Global.TotalDeaths}</span><br>
					TotalRecovered: <span>${Global.TotalRecovered}</span><br>
					NewConfirmed: <span>${Global.NewConfirmed}</span><br>
					NewDeaths: <span>${Global.NewDeaths}</span><br>
					NewRecovered: <span>${Global.NewRecovered}</span><br></div>`;
  });

  var fullData=actualData,
      countries=actualData.Countries;
  countries.forEach(myFunc);
  function myFunc(index,item){
    //console.log(item+1, index);
    var countryName=countries[item].Country;
    document.getElementById("selectCountry").innerHTML += 
      `<option value="${countryName}"> ${countryName}</option> `;
  }
}).catch((error)=>{
  document.querySelector("#covidData").style.display="block";
  document.querySelector("#covidData").innerHTML=
    `<h2>Error occured, Please try after some time.</h2>
    OR<br>
    <p>Refresh page & Try again</p>`;
});

fetchFunc();
document.getElementById("selectCountry").addEventListener("change", function(){
  var selectedCountry=this.value,
      countryTotalConfirmed,
      countryTotalDeaths,
      countryTotalRecovered,
      contryNewConfirmed,
      countryNewDeaths,
      countryNewRecovered;

  fetch("https://api.covid19api.com/summary")
    .then((apiData)=>{
    return apiData.json()
  })
    .then((actualData)=>{
    var fullData=actualData,
        countries=actualData.Countries;
    countries.forEach(myFunction);
    function myFunction(index,item){
      if (fullData.Countries[item].Country==selectedCountry){
        var countryTotalConfirmed=countries[item].TotalConfirmed,
            countryTotalDeaths=countries[item].TotalDeaths,
            countryTotalRecovered=countries[item].TotalRecovered, 
            contryNewConfirmed=countries[item].NewConfirmed, 
            countryNewDeaths=countries[item].NewDeaths, 
            countryNewRecovered=countries[item].NewRecovered;
        document.getElementById("covidData").innerHTML=
          `<div class="data">Selected country is: <span>${selectedCountry}</span><br>
					TotalConfirmed: <span>${countryTotalConfirmed}</span><br>
					TotalDeaths: <span>${countryTotalDeaths}</span><br>
					TotalRecovered: <span>${countryTotalRecovered}</span><br>
					NewConfirmed: <span>${contryNewConfirmed}</span><br>
					NewDeaths: <span>${countryNewDeaths}</span><br>
					NewRecovered: <span>${countryNewRecovered}</span><br></div>`;

        function bgClr(){
          var x=Math.floor(Math.random()*256),
              y=Math.floor(Math.random()*256),
              z=Math.floor(Math.random()*256),
              bgColor=`rgb(${x}, ${y}, ${z})`,
              bgColorspan=`rgb(${x-30}, ${y-30}, ${z-30})`,
              bgWWColor=`rgb(${y}, ${x}, ${z})`,
              bgColorWWspan=`rgb(${y-30}, ${x-30}, ${z-30})`;
          document.getElementById("covidData").style.display="block";
          document.getElementById("Global").addEventListener("click", function(){
            document.getElementById("covidData").style.backgroundColor=bgWWColor;
            var spanElement = Array.from(document.getElementsByTagName("span"));
            spanElement.forEach((i)=>{
              i.style.backgroundColor=bgColorWWspan
            });
          }); 
          document.getElementById("covidData").style.backgroundColor=bgColor;          
          var spanElement = Array.from(document.getElementsByTagName("span"));
          spanElement.forEach((i)=>{i.style.backgroundColor=bgColorspan});
          /*for(i=0; i<spanElement.length; i++){
                        spanElement[i].style.backgroundColor=bgColorspan;
                        spanElement[i].style.color="White";
                    };*/
        };
        bgClr();
      };
    };  
  });
});